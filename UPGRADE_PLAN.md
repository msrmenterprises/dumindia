# Dumindia Website Upgrade Plan

**Status:** Proposal and execution guide. No application code or production configuration has been changed.
**Updated:** 20 October 2026
**Owner / maintainer:** one person (the owner-administrator)
**Stack:** Laravel + Filament (admin) + Spatie Media Library, Bootstrap 5.3 public site, GoDaddy cPanel hosting

How to use this document: Part A explains *what* we are building and why. Part B is the *step-by-step order of work*; follow it top to bottom and do not start a phase until the previous phase's "Check" items pass. Part C covers operations, risks and reference material.

Effort figures are rough estimates for one person working part-time and will change after Phase 0.

---

# PART A. WHAT WE ARE BUILDING

## 1. Goals

1. **Manage each year from the admin panel.** A new year is an *edition* record, not a copy of the site's code or folders.
2. **One central library for logos, speaker photos and media.** Upload once, reuse on any page or year.
3. **Logo changes apply everywhere.** Replace a company's logo once in the central library and the current year and all previous years show the new one.
4. **Year content stays year-specific.** Speakers, speaker photos, page text and schedule stay exactly as entered for each year. Only logos follow the latest version.
5. **Keep the current look and feel**, upgraded to Bootstrap 5.3.
6. **Easy for one person to run:** standard, well-maintained tools; no custom infrastructure.
7. **Keep the live site running** while the new one is built. Switch page by page, and no old URL breaks.

## 2. What the codebase shows today

Findings from a local review of `/Users/manish/Development/Clients/Dumindia` (not a production or traffic audit):

| Observation | Impact |
|---|---|
| Root site (68 PHP files) plus year folders `dumindia2018`, `2019`, `2020`, `2024`, `2025`, `2025old` | Whole-site copies for each year |
| Per-year page copies: `speaker2020.php` to `speaker2025.php`, `speakers2018.php`, `speakers2019.php`, `presentations2020.php` to `presentations2025.php` | Same page maintained many times |
| `speaker.php` is about 3,350 lines. Each speaker is a hand-written HTML block: a comment with the name, a photo at `images/2026/speakers/<Name>.jpg`, a heading with name, designation and organization separated by `<br/>`, and one or more bio paragraphs | Content lives in code, but the block is regular enough to parse automatically |
| `partners.php` groups logos under `<h5>` category headings; each logo is `ul.k_confirmed_als > li > a > img` with an external link and a caption. Logo files are scattered: `/images/`, `images/2024/`, `/images/Exhibitors/2019/` | Same company can have several logo files; one change means many edits |
| 4,863 image files across `images/` and the year folders, but only 1,143 unique files (about 76% are exact copies). Names include spaces and `-old` variants | Large storage; near-duplicates need human review |
| Repository is about 3.6 GB and is **not a Git repository** | No history; slow deploy and backup |
| Years 2018 to 2025 share almost the same header and stylesheet (`style.css` differs by 15 to 32 lines from the root) | Shared templates are feasible |
| Bootstrap looks like 3.x (Glyphicons font present). Confirm exact version in Phase 0 | 3 to 5.3 is a migration, not a version bump |
| `init/conn.php` contains the database host, user, password and database name in plain text, and several pages reference it or the database directly (`mailtrack.php`, `submit-best-practice.php`, `contact_us_18.php`, exhibitor registration pages) | **Security risk.** Never copy this file into a repository that leaves your machine. Rotate the database password when the old code is retired |
| `.cpanel.yml` deploys with `/bin/cp *` | Does not copy subfolders; no build step; unsuitable for Laravel |
| Registration, payment and email pages exist (`exhibitor-registration.php`, `exhibitorRegistration.php`, `mailtrack.php`, `refund.php`, `receivemail.php`) | Must not break; migrate last |
| No Composer manifest or automated tests found | Start fresh |

## 3. Target architecture

| Layer | Choice | Why |
|---|---|---|
| Backend | **Laravel**, the current stable release that the host's PHP supports | Authentication, validation, migrations, CSRF protection and tests are built in |
| Admin | **Filament** panel | Generates working admin screens (lists, forms, uploads, search, bulk actions) from short code |
| Media | **Spatie Laravel Media Library** behind an `Asset` model (see 4.3) | Stores files once, makes resized variants, supports file conversions |
| Audit | **spatie/laravel-activitylog** | Who changed what and when; needed for logo replacement history |
| Database | MySQL / MariaDB on GoDaddy | Same type as today |
| Public site | Laravel Blade views, Bootstrap 5.3, Vite + Sass | One shared layout replaces copied headers |
| Hosting | GoDaddy cPanel (PHP selector, SSH, Composer in home directory) | See section 11 |

Single administrator only. No editor roles or approval flows.

Check exact install commands and version compatibility on the official docs of Laravel, Filament and Spatie on the day you install; do not rely on memory of version numbers.

## 4. Content model

### 4.1 Tables

All tables are created through Laravel migrations (never by hand in phpMyAdmin) so they can be reproduced on staging and production.

**Editions and pages**

| Table | Main fields | Notes |
|---|---|---|
| `editions` | `year` (unique), `name`, `slug`, `starts_on`, `ends_on`, `venue`, `city`, `status` (draft / published / closed), `is_current`, `registration_open`, `theme` (JSON: colours, banner asset), `closed_at` | Exactly one edition has `is_current = true` |
| `edition_pages` | `edition_id`, `page_key` (home, about, key-themes, target-audience, contact, ...), `title`, `body` (rich text), `meta_title`, `meta_description`, `is_published`, `sort_order` | One row per page per year. This is how "page content follows the year" works |
| `schedule_sessions` (later) | `edition_id`, `day`, `starts_at`, `title`, `room`, link to speakers | Added only when the agenda page is migrated |

**People**

| Table | Main fields | Notes |
|---|---|---|
| `people` | `full_name`, `slug`, `notes` | Identity only: one row per real person |
| `edition_speakers` | `edition_id`, `person_id`, `designation`, `organization_name`, `bio` (rich text), `photo_asset_id`, `sort_order`, `is_visible` | **Year-specific.** A person's title, employer, bio and photo are stored per year, so changing 2026 never alters 2025 |

**Logos and organizations**

| Table | Main fields | Notes |
|---|---|---|
| `organizations` | `name`, `slug`, `website`, `description`, `logo_asset_id`, `logo_dark_asset_id` (optional), `aliases`, `is_active` | One row per company. Rebrands update the organization's logo, not each page |
| `placement_sections` | `edition_id`, `page_key`, `title` (e.g. "Knowledge Partners"), `sort_order`, `items_per_row` | Replaces the old `<h5>` headings in `partners.php` |
| `placements` | `section_id`, `organization_id`, `sort_order`, `link_url` (override), `caption`, `pinned_version_id` (usually empty), `is_visible` | Where a logo appears: which year, page and section |

**Media**

| Table | Main fields | Notes |
|---|---|---|
| `assets` | `title`, `kind` (logo / photo / banner / document), `alt_text`, `source_note`, `current_version_id` | One library item. Everything else points at an asset, never at a file path |
| `asset_versions` | `asset_id`, `sha256`, `width`, `height`, `mime`, `note`, `created_at`, plus the file via Spatie Media Library | Each replacement adds a version; the old version is kept |

**System**

| Table | Notes |
|---|---|
| `legacy_urls` | `old_path`, `new_path`, `status_code` (301 or 200), `hits`, `last_seen_at`. Drives redirects and the "no 404" rule |
| `activity_log` | From Spatie ActivityLog |
| `import_map` | `source_file`, `source_selector`, `target_table`, `target_id`. Lets the import be re-run safely without duplicates |

### 4.2 How reuse works

- Organization -> asset -> current version. A placement points at an organization, never at a file.
- Any number of editions, pages and sections can use the same organization.
- Speaker photos follow the same rule, but are chosen per `edition_speakers` row.
- **Duplicate edition** action: copies `edition_pages`, `placement_sections`, `placements` and `edition_speakers` rows as new rows that reference the same organizations and assets. No files are copied.

### 4.3 Logo changes: always latest

- A placement renders the organization's *current* logo version. Replacing the logo changes every year at once.
- Optional exception: a placement can set `pinned_version_id` to keep an older logo. Not used by default, and not needed for closed years (closed years also show the latest logos).
- Replacing a logo creates a new `asset_versions` row and moves `current_version_id`. The old version is kept and can be restored.
- Before saving a replacement, the admin screen shows "Used in N placements across M editions" with a preview.
- Public file URLs are stable (for example `/media/logo/<asset-id>/<size>.webp`) so caches and bookmarks keep working after a replacement; cache is cleared when a logo changes.
- Variants: an organization can have a normal and a dark-background logo; the template picks the one it needs. Sizes are generated from the original; never upload separate sizes.

### 4.4 Duplicate handling

- On upload, compute SHA-256. If a version with the same hash exists, show it and offer to reuse that asset.
- Files that merely look similar are not merged automatically; the admin decides.
- Allowed types: JPG, PNG, WebP, SVG (sanitized), PDF for documents. Size limits per kind (for example logos 5 MB, photos 10 MB). Validate the real file content, not just the extension.

## 5. Admin panel (Filament)

| Menu | What you can do |
|---|---|
| **Editions** | Create a year, duplicate the previous one, set current, publish, close, preview, toggle registration |
| **Pages** | Edit page text per edition (rich text editor) |
| **Speakers** | Per edition: add or edit speaker, designation, organization, bio, photo; drag to reorder; hide. Picking an existing person fills name and prior details |
| **Organizations** | Add companies, upload or replace logo (with usage view), dark variant, website |
| **Partner sections** | Per edition and page: create sections and drag organizations into them |
| **Media library** | Search, filter, preview, "used in", replace, duplicate warnings |
| **Redirects** | See legacy URLs, hit counts, add or edit redirects |
| **Settings** | Site name, contact details, social links, footer text, menu items |
| **Activity log** | Read-only history |

Closing an edition: sets `status = closed`, sets `registration_open = false`, makes its content read-only in the admin (an "Unlock" action exists so you can still correct something, and the unlock is logged).

Login: strong unique password, throttled login attempts, two-factor if Filament offers it in the installed version.

## 6. Public site

### 6.1 URL structure

- Canonical URLs: `/{year}/speakers`, `/{year}/partners`, `/{year}/about`, and so on; the bare path (for example `/speakers`) shows the current edition.
- Legacy URLs keep working. `/speaker.php` (current year) serves the current edition at the same address. Old year URLs such as `/dumindia2025/speakers.php` return a 301 redirect to `/2025/speakers`.
- Every redirect is stored in `legacy_urls` so it can be audited.

### 6.2 Layout and templates

- One Blade layout (header, menu, footer, banner) with year-specific colours and banner from `editions.theme`.
- Components, one per repeated block: `speaker-card`, `logo-grid`, `page-banner`.
- Year differences (colours, banner, wording) live in the database, not in copied files. If one year has a truly unique page, it can have its own Blade view for that edition only.

### 6.3 Bootstrap 3 to 5.3 cheat sheet

| Bootstrap 3 | Bootstrap 5.3 |
|---|---|
| `col-xs-*` | `col-*` |
| `col-sm-offset-2` | `offset-sm-2` |
| `pull-left` / `pull-right` | `float-start` / `float-end` |
| `text-left` / `text-right` | `text-start` / `text-end` |
| `hidden-xs`, `visible-md` | `d-none d-sm-block`, `d-md-block` and similar |
| `panel`, `well`, `thumbnail` | `card` |
| `glyphicon glyphicon-*` | Bootstrap Icons or Font Awesome (already bundled) |
| `data-toggle`, `data-target` | `data-bs-toggle`, `data-bs-target` |
| `navbar-default`, `navbar-toggle` | `navbar navbar-expand-lg`, `navbar-toggler` |
| `btn-default` | `btn-secondary` or `btn-outline-secondary` |
| `img-responsive` | `img-fluid` |
| `form-group`, `input-group-addon` | spacing utilities (`mb-3`), `input-group-text` |
| `label label-*` | `badge bg-*` |
| `.row` gutters | gutter utilities (`g-3`) |
| jQuery required | Not required by Bootstrap; remove jQuery where nothing else uses it |

Inline styles in old pages (for example `style="flex: 0 0 23%"` in speaker blocks) move into a stylesheet class during migration.

"Traditional UI" means the current look and brand retained and cleaned up, not a redesign.

---

# PART B. STEP-BY-STEP EXECUTION ORDER

Conventions: work on your computer first, then staging, then production. Never test destructive changes on production. "Check" lists are the gate to the next phase.

## Phase 0. Discovery and safety net (about 2 to 4 days)

**0.1 Back up everything first**
1. In cPanel, create a full account backup, and separately export the database (phpMyAdmin Export or `mysqldump`).
2. Download both to your computer and to a second location (external drive or cloud storage).
3. Restore the database into a throwaway local database to prove the backup works.
4. Record the date and file names in a one-page `RUNBOOK.md` (new file in the project).

**0.2 Confirm hosting (GoDaddy)**
1. cPanel > PHP selector: note available versions; choose one required by the current Laravel and Filament releases. Enable `intl`, `mbstring`, `gd` or `imagick`, `zip`, `fileinfo`, `pdo_mysql`, `exif`, `opcache`.
2. SSH: enable and log in (`ssh user@host`). If your plan has no SSH, upgrade the plan.
3. Run `php -v` over SSH and confirm it matches the selector. If it does not, use the full path to the right PHP binary.
4. Composer is usually missing. Install it in your home directory and run it with the correct PHP; run `composer diagnose`.
5. Note PHP `memory_limit`, `max_execution_time`, `upload_max_filesize`, `post_max_size` (set large enough for photo uploads), disk quota and free space.
6. Note MySQL version and whether you can create a second database for staging.
7. Confirm cron jobs are available.
8. Create the staging subdomain (for example `staging.dumindia.in`) with its own empty database and password protection (cPanel Directory Privacy) so search engines and visitors cannot reach it.

**0.3 Make the codebase safe to work with**
1. Create a new, clean working folder for the new application (for example `/Users/manish/Development/Clients/Dumindia-app`). Leave the old folder untouched as a read-only reference.
2. Rotate the old database password in cPanel only when you are ready to update `init/conn.php` (the live site reads it); until then, do not copy that file anywhere.
3. Do not initialize a hosted Git remote for the old folder. If you want history, `git init` locally with a `.gitignore` that excludes `init/`, `images/`, `*.pdf`, `*.pptx`, `*.rar`, `*.zip` and other large binaries.

**0.4 Inventory (write results in a spreadsheet or `docs/inventory.csv`)**
1. **Pages:** list every `.php` and `.html` file in the root and in each year folder with: purpose, edition year, dynamic or static, whether it touches the database (search for `mysqli`, `include "init`).
2. **Bootstrap:** open `include/header.php` and `css/` and write down the exact Bootstrap and jQuery versions.
3. **Speakers:** for each year, note the file that lists speakers and the count of speaker blocks (search for `class="row speaker_row"`; older years use other markup).
4. **Partners and logos:** for each year, note the file(s) and the count of `<img>` inside partner lists.
5. **Images:** run a script that lists every image with size, dimensions and SHA-256 hash; group by hash to see exact duplicates; list files whose names contain `-old`, `copy`, `(1)` for review.
6. **Forms and email:** list every form, where it posts, what it does (DB insert, email, payment redirect), and any third-party service (payment gateway, SMTP).
7. **Links from the outside:** list every URL printed in brochures, emails and social posts that you remember.

**0.5 Build the "must-keep URL" list**
1. In cPanel > Raw Access, download 12 months of access logs.
2. Extract unique requested paths with counts (a small script, or an online log analyser run locally). Keep only HTTP 200 and 301 responses.
3. Add top pages from Google Search Console and Analytics if you have them.
4. Merge with the page inventory. Rank by visits.
5. Mark each URL as: keep as is, redirect to a new URL, or drop. Never drop a URL that has traffic, external links, or is part of registration or payment.
6. Save as `docs/url-map.csv`; this later becomes the `legacy_urls` table.

**0.6 Baseline measurements**
For 5 key pages (home, speakers, partners, agenda, registration) record page weight, load time and Lighthouse scores on mobile, so the new site can be compared.

**Check (gate to Phase 1):**
- [ ] Backup restored successfully in a test database
- [ ] PHP, SSH, Composer and cron confirmed; staging subdomain and database exist
- [ ] Bootstrap and jQuery versions known
- [ ] Inventory of pages, speakers, partners, images, forms done
- [ ] `url-map.csv` reviewed and approved by you

## Phase 1. Foundation (about 2 to 3 days)

**1.1 Create the Laravel project locally**
1. Install a local PHP version matching production, Composer, Node.js, and MySQL (Laravel Herd, Laravel Sail or XAMPP all work). Use the same major PHP version as GoDaddy.
2. `composer create-project laravel/laravel dumindia-app` (inside the new working folder).
3. Initialize Git: `git init`. Make `.env`, `vendor/`, `node_modules/`, `storage/app/public/*` and anything with credentials ignored. Commit the empty project.
4. Create a local database and set it in `.env`. Run `php artisan migrate`.
5. Run `php artisan serve` and confirm the welcome page loads.

**1.2 Install the admin and media packages**
1. `composer require filament/filament` then `php artisan filament:install --panels` (admin path `/admin`).
2. `php artisan make:filament-user` to create your admin account.
3. `composer require spatie/laravel-medialibrary` and its Filament plugin, publish and run migrations. `composer require spatie/laravel-activitylog` and publish migrations.
4. `php artisan storage:link`.
5. Spike (half a day, optional): try the Filament Curator plugin as the media picker. If it already provides reusable references, hash-based duplicate warnings and usage tracking for your installed Filament version, use it instead of a custom `Asset` model; otherwise continue with the `Asset` design in 4.1.

**1.3 Basic hardening**
1. Set `APP_ENV=local` locally, `production` on the server, `APP_DEBUG=false` in production.
2. Restrict `/admin` login throttling, enforce HTTPS, and set session cookies `secure` and `http_only`.
3. Set `.env` values for database, mail (GoDaddy SMTP), `APP_URL`.

**1.4 Deployment to staging**
1. In cPanel, put the app outside the web root, for example `~/dumindia-app/`. Only the contents of Laravel's `public/` go into the staging subdomain's document root (or the document root is set to `public/` for the staging subdomain, which is usually possible).
2. Copy the project via Git (`git clone` over SSH from a private repository) or a deploy archive. Never copy `.env` through Git.
3. Over SSH: `composer install --no-dev --optimize-autoloader`, create `.env`, `php artisan key:generate`, `php artisan migrate --force`, `php artisan storage:link`, `php artisan config:cache route:cache view:cache`.
4. If `composer install` is killed by memory limits, run it locally and upload `vendor/`.
5. Write `deploy.sh` that does the above in order; replace `.cpanel.yml`'s `cp *` approach for the new app.
6. Set up a cron entry for `php artisan schedule:run` every minute.

**1.5 Frontend build**
1. Install Bootstrap 5.3 and Sass through npm; set up Vite. Build with `npm run build` locally and upload the built `public/build/` (so the server does not need Node).
2. Create the shared layout with a header and footer placeholder. Reuse variables from the existing `sass/` folder for colours and fonts so the look matches.

**1.6 Automated checks**
1. Install Pest or PHPUnit (Laravel includes it); write one smoke test that the home page returns 200.
2. Add a simple CI script (GitHub Actions or a local `composer test` script): run tests, `composer audit`.

**Check:**
- [ ] `https://staging.<domain>/admin` loads and you can log in
- [ ] `deploy.sh` redeploys staging end to end without manual steps
- [ ] Test suite and `composer audit` pass
- [ ] `.env` and credentials are not in Git

## Phase 2. Content model, admin screens and import (about 5 to 8 days)

**2.1 Migrations and models**
1. Create the migrations in 4.1 in this order: `editions`, `assets`, `asset_versions`, `organizations`, `people`, `edition_speakers`, `edition_pages`, `placement_sections`, `placements`, `legacy_urls`, `import_map`.
2. Add foreign keys and unique indexes (for example unique `year`, unique `sha256` per asset kind).
3. Add Eloquent relationships and the rule that only one edition is current.

**2.2 Media rules (write the tests first)**
1. Test: uploading a file with an existing hash offers the existing asset and creates no new file.
2. Test: replacing a logo creates a new version and moves `current_version_id`; the old version stays.
3. Test: an organization used in 3 editions shows the new logo in all 3 after replacement.
4. Test: a placement with `pinned_version_id` keeps its old logo.
5. Implement the code to pass the tests. Use Spatie conversions to generate `thumb`, `medium` and `large` WebP sizes.

**2.3 Filament screens (build in this order, test each before the next)**
1. Editions (create, set current, duplicate, close, unlock).
2. Media library / Assets (upload, search, usage, replace, duplicate warning).
3. Organizations (with logo picker and usage panel).
4. People and edition speakers (photo picker, bio editor, drag to sort).
5. Partner sections and placements (drag organizations between sections).
6. Edition pages (rich text).
7. Settings and Redirects.

**2.4 The import (this turns old pages into data)**
The import is a repeatable Artisan command: `php artisan import:legacy {year} {type} --dry-run`. It never edits the old files.

1. **Stage 1: scan.** Parse the old page with a DOM parser (Symfony DomCrawler or PHP `DOMDocument`) and write a staging file (CSV or JSON) for human review.
   - *Speakers (2026 `speaker.php`):* for each `div.speaker_row`, read the photo from `img.speaker-photo`, the heading from `h1.key_head` split on `<br>` into name / designation / organization, and the bio from the following `<p>` tags (keep as HTML). The `<!-- Name -->` comment is a useful cross-check.
   - *Partners (`partners.php`):* each `<h5>` is a section title; under it, each `ul.k_confirmed_als li a` gives `href` (link), `img src` (logo file) and the anchor text (organization name).
   - *Older years:* each year's markup differs; write a small parser variant per year, or enter very odd pages manually.
2. **Stage 2: review.** Open the staging file in a spreadsheet. Fix names, merge the same organization written in different ways (for example "L&T Digital Energy Solutions" variants), and mark which logo file is the preferred one when several exist. Also match speakers who appear in several years to one person.
3. **Stage 3: hash and deduplicate media.** Compute SHA-256 for every referenced file; create one asset per unique hash; record the old path -> new asset mapping in `import_map`.
4. **Stage 4: import.** Create organizations, assets, people, edition speakers, sections and placements. Use `import_map` so re-running never creates duplicates.
5. **Dry run first:** the command prints counts (speakers found, organizations created, files deduplicated, files missing) and writes a report. Fix problems and re-run until the report is clean.
6. Start with edition 2026, then 2025. Do older years in Phase 5.

**Check:**
- [ ] Tests for reuse, replacement, pinning and duplicate detection pass
- [ ] You can add a speaker, an organization and a placement from the admin only
- [ ] Replacing one logo changes it in two different editions
- [ ] Import dry run for 2026 and 2025 reports matching counts with the old pages (for example, number of speaker blocks = number of imported speakers)
- [ ] Missing or broken images are listed and resolved

## Phase 3. First public slice: Speakers (about 4 to 6 days)

**3.1 Build the layout**
1. Port the old `include/header.php` look into the Blade layout with Bootstrap 5.3: navbar, banner, footer, fonts. Use the cheat sheet in 6.3.
2. Make colours and banner come from `editions.theme`.
3. Test at phone, tablet and desktop widths.

**3.2 Build the Speakers page**
1. Route `/{year}/speakers` and the current-year alias `/speakers`.
2. `speaker-card` component: photo (`speaker-photo` class replaced by a stylesheet rule), name, designation, organization, bio.
3. Responsive: photo above text on phones, side by side on larger screens (replaces inline `display:flex`).
4. Add `alt` text from the speaker name; lazy-load photos below the fold.
5. Cache the rendered page data per edition; clear the cache when any speaker or asset in that edition changes.

**3.3 Compare against the old page**
1. Open old `speaker.php` and the new page side by side on staging.
2. Check: same speakers, same order, same bios, photo present, nothing cut off.
3. Run the same check for the 2025 edition against `dumindia2025/speakers.php` or `speaker2025.php`.
4. Check that one template renders both 2026 and 2025 with correct year colours.

**3.4 Make the old URL work**
1. Add `legacy_urls` rows: `/speaker.php` -> serves current edition; `/speaker2025.php` and `/dumindia2025/speakers.php` -> 301 to `/2025/speakers`.
2. Do not switch production yet; only staging.

**Check:**
- [ ] You approve the look and content of the Speakers page for 2026 and 2025
- [ ] Every speaker and photo from the old page is present
- [ ] Lighthouse and page weight are equal to or better than the baseline
- [ ] Keyboard navigation and contrast pass a manual check
- [ ] Redirect tests pass

## Phase 4. Partners and the rest of the current year (about 5 to 8 days)

1. **Partners page.** Build `/{year}/partners` with `logo-grid` driven by sections and placements. Import 2026 partners (Phase 2.4), compare to the old page, and approve.
2. **Logo test in the real page.** Replace one logo in the admin; confirm the new logo appears on the page and in a second year. Roll the change back using version restore.
3. **Other current-year pages,** one at a time, each with its own comparison: home, about, key objectives, key themes, target audience, agenda, organiser, contact, hotels, transportation, gallery, presentations, brochure.
   - Static text pages become `edition_pages` rows with a rich text body.
   - Pages that list people or logos use the components built in Phases 3 and 4.
4. Build the menu from settings so a new year needs no template change.
5. Add the sitemap (`/sitemap.xml`) and a `robots.txt` for the new site.
6. Reuse the existing metadata (titles, descriptions) so search ranking is not lost.

**Check:**
- [ ] The whole current year is served from the admin on staging
- [ ] Each page has a before/after comparison signed off by you
- [ ] `legacy_urls` entries exist for every old current-year URL in `url-map.csv`

## Phase 5. Previous years (about 1 to 2 days per year)

For each year 2018, 2019, 2020, 2024, 2025 (and 2025old only if it holds unique content), in this order:

1. Run the scan parsers for speakers, partners and presentations; review and fix the staging files.
2. Import into a new edition with `status = draft`.
3. Set the edition's colours, banner and menu in its theme.
4. Compare each page with the old one on staging.
5. Set `status = closed` and publish.
6. Add `legacy_urls` rows for every old URL of that year.
7. Keep the old year folder on the server, unchanged, until you approve the year.

Logos on these years come from the central library (latest). Speaker content and photos stay as that year published them.

**Check (per year):** counts reconcile; URLs map; you approve; closed and read-only in admin.

## Phase 6. Registration, payment and email pages (about 3 to 6 days, only after reviewing each flow)

1. For each form, write down in one page: fields, validation, database table, emails sent, third-party service and redirect URLs.
2. Do **not** change payment return/callback URLs until the new flow is tested with the gateway's test mode.
3. Rebuild one form at a time in Laravel with CSRF protection, server-side validation and prepared statements through Eloquent. Move credentials to `.env`.
4. Run both flows side by side on staging with test data; compare database rows and emails.
5. Only switch a form to production after a full test payment or email.
6. Until a form is migrated, leave its legacy page and database connection exactly as is.

**Check:** each flow passes an end-to-end test; your payment provider confirms callbacks still arrive.

## Phase 7. Production release, one page at a time (about 2 to 3 days plus monitoring)

**7.1 Prepare production**
1. Install the Laravel app outside the web root on the production account (same layout as staging).
2. Point the production `.env` at a **new** production database for the new app (do not reuse the legacy database user). Keep the legacy database untouched.
3. Run migrations, then run the import commands for all editions on production, or restore a tested staging database dump.
4. Take a fresh full backup the same day.

**7.2 Switch method (reversible)**
1. Place Laravel's `public/` files in `public_html/` alongside the legacy files. Laravel's `.htaccess` serves existing files directly, so legacy pages keep working.
2. For each migrated page, add one `RewriteRule` before the "file exists" rule that sends that URL to Laravel (for example `RewriteRule ^speaker\.php$ index.php [L]`).
3. Rolling back a page means removing that rule. No file is deleted.
4. Order of switching: Speakers -> Partners -> other current-year pages -> previous years -> forms (last).
5. After each switch, check the page, the browser console, the error log and Search Console coverage.

**7.3 Monitor**
1. For the first week after each switch, check `storage/logs/laravel.log`, cPanel error logs and 404s in access logs daily.
2. Add any 404 found to `legacy_urls`.

**7.4 Retire legacy code (only after at least a month of stable operation)**
1. Confirm every `url-map.csv` entry returns 200 or 301.
2. Take a final full backup and store it off the server.
3. Move legacy folders into an archive folder outside `public_html`, then delete after you approve.
4. Rotate the old database password and remove `init/conn.php` from the server.
5. Update `RUNBOOK.md`.

**Check:** production sign-off; every legacy URL resolves; backups and rollback tested.

## Starting a new year (the routine once everything is live; about 1 hour)

1. Admin > Editions > **Duplicate** the previous year; set the new year, dates, venue, banner and colours.
2. Set it as current (the bare URLs now show the new year).
3. Update the Pages text for the new year.
4. Add speakers (choose existing people or add new) and their photos.
5. Add or reorder partner sections; pick organizations from the library; upload logos for new companies.
6. Preview, then publish.
7. At the end of the event year: **Close** the edition. Content is frozen; logos still follow the latest.

---

# PART C. OPERATIONS, RISKS AND REFERENCE

## 7. Testing and quality (lean)

- **Automated tests for the rules that matter:** logo reuse across editions, replacement and restore, pinning, duplicate detection, edition duplicate, closed-edition read-only, import idempotency, redirect map.
- **Smoke test per migrated public page:** returns 200, contains expected headings.
- **Coverage:** about 80% on first-party code that holds your rules (models, services, import). Do not chase coverage on generated or framework code.
- **Manual per page:** side-by-side comparison with the old page; phone, tablet, desktop; keyboard tab order; colour contrast; image alt text.
- **Regression:** before each switch run a script that requests every URL in `url-map.csv` and checks status code and expected redirect.

## 8. Security basics

- HTTPS everywhere; redirect HTTP to HTTPS.
- Secrets only in `.env`; `.env`, `vendor/`, `storage/` not in the web root.
- Laravel CSRF and validation on all forms; escape all output (Blade `{{ }}`); sanitize rich text and SVG uploads.
- Restrict uploads by type, size and real content; no executable files; store outside the web root and serve via the storage link.
- Strong admin password; login throttling; two-factor if available.
- Least-privilege database user for the new app.
- Update Laravel, Filament and packages monthly; run `composer audit`.
- Rotate the legacy database password when the old code is retired.

## 9. Backups and rollback

- **Backups:** daily database dump (cron) and weekly media backup, stored off the server. Test a restore before go-live and once per quarter.
- **Before each release:** a fresh database and files backup.
- **Rollback of a page:** remove its `RewriteRule`.
- **Rollback of a release:** redeploy the previous Git tag and restore the pre-release database dump if a migration changed data.
- **Tags:** tag every production release in Git (`v1.0.0`, ...).

## 10. Maintenance routine

| When | Task |
|---|---|
| Weekly | Skim `laravel.log` and 404s; confirm backups ran |
| Monthly | `composer update` on staging, run tests, deploy; `composer audit` |
| Quarterly | Restore test; review unused assets and redirects |
| Yearly | New year routine; close the previous edition; review PHP version support |

## 11. Hosting notes (GoDaddy cPanel)

- cPanel serves the main domain from `public_html/`, which normally cannot be repointed. Keep the app outside it and expose only Laravel's `public/` contents (see 1.4 and 7.2).
- SSH is not included on every GoDaddy plan; confirm in Phase 0.2.
- Composer is typically not installed; install it in your home directory and run it with the right PHP binary.
- If `composer install` is killed by memory limits, build `vendor/` locally and upload.
- Keep PHP selector version, local PHP version and CI PHP version aligned.
- If the plan proves too limited (no SSH, very low memory, no cron), upgrade the GoDaddy plan or deploy a locally built package before considering a new host.

## 12. Risks and mitigations

| Risk | Mitigation |
|---|---|
| Old pages are inconsistent, so imports miss content | Stage, review, dry run; compare counts with old pages; keep old files until approved |
| Near-duplicate logos (`-old`, different crops) | Human review in the staging spreadsheet; merge only by decision |
| A URL breaks | `url-map.csv` from real logs; automated URL check before each switch; `legacy_urls` for 404s found later |
| Payment or email stops working | Migrate last; test mode first; leave legacy flow untouched until proven |
| Production data loss | Backup before every phase; separate database for the new app |
| Package upgrades break admin | Upgrade on staging first; tests; keep `composer.lock` |
| Credentials leaked from old code | Do not commit `init/`; rotate password at retirement |
| One-person bus factor | Keep `RUNBOOK.md` current; automate deploy and backup |
| Estimates too low | Re-estimate after Phase 0 and after the first slice |

## 13. Deferred (not needed now)

Revisit only if a real need appears:

- Multiple admin users, roles and approval workflows
- Public REST API (`/api/v1`)
- Redis, object storage and CDN
- Scheduled publishing
- Static export packages and encrypted per-year archives (closed years are served live and covered by backups)
- Automatic detection of visually similar images
- Rights and expiry tracking for assets
- React or a separate JavaScript front end

## 14. Decisions

**Decided**
- Logos always follow the latest version, including on closed years.
- Closed years keep their own speakers, photos and page content.
- Shared templates with year-specific content for all years.
- Speakers first, then Partners.
- Hosting: GoDaddy cPanel (to be confirmed in Phase 0.2).
- Laravel + Filament + Spatie Media Library; Bootstrap 5.3.

**Still open**
1. The final must-keep URL list (produced in Phase 0.5).
2. Whether `dumindia2025old` contains anything not already in `dumindia2025` (decide during the inventory).
3. Whether Filament Curator replaces the custom `Asset` model (decide at the Phase 1.2 spike).

## 15. Definition of done

- You can add a year, speaker, logo or partner placement from the admin without editing files or the database.
- A logo uploaded once is reused on any page and year; replacing it updates every placement that does not pin a version.
- Each year is an edition in one codebase; closed years are read-only and keep their URLs.
- Speakers, photos and page text for each year match what was published for that year.
- The public site uses the current layout on Bootstrap 5.3 and is responsive and keyboard-accessible.
- All must-keep URLs return 200 or a 301; registration, payment and email flows are verified.
- Deployment, backup, restore and rollback are documented in `RUNBOOK.md` and tested.
- Legacy code is archived and the old database password is rotated.
