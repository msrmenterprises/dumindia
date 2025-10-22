DUM Beta Template

Location: `Clients/Dumindia/beta/`

Purpose:
- A sandboxed copy of a minimal DUM homepage. All files here are copies and will not modify the live site files.

Files:
- `partials/header.php` — copied lightweight header for beta pages.
- `partials/footer.php` — copied lightweight footer.
- `css/beta.css` — small CSS variables and helpers.
- `index.php` — beta homepage that includes the partials and shows a preview of Confirmed Utilities.

How to view locally:
- Point your webserver's document root to `Clients/Dumindia/` and open `/beta/index.php` in a browser.
- No build steps required. Uses Bootstrap 5 CDN.

Notes:
- All references to images use relative paths to the existing `images/` folder so assets are reused when present.
- No changes were made to original `include/header.php` or `include/footer.php`.
