<style>
    .presentation-table-wrapper {
        margin: 12px 0 24px;
        overflow-x: auto;
    }

    .presentation-table {
        width: 100%;
        min-width: 760px;
        border-collapse: collapse;
    }

    .presentation-table th,
    .presentation-table td {
        padding: 8px;
        text-align: left;
        vertical-align: top;
        border: 1px solid #ddd;
    }

    .presentation-table th {
        background-color: #f2f2f2;
    }

    .presentation-table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .presentation-day {
        margin-top: 20px;
    }

    .presentation-session {
        margin-top: 16px;
    }

    .presentation-event-photo {
        text-align: center;
        margin: 12px 0 24px;
    }
</style>

<?php
include("include/header.php");

$submittedPassword = $_POST['pass'] ?? null;
$hasValidPassword = is_string($submittedPassword)
    && hash_equals('DUM20262728@#', $submittedPassword);
?>

<div class="row k_inbanner">
    <img src="images/baner1.jpg" alt="">
</div>
<div class="row dum_container key_div">
    <div class="k_cheading">
        <h1>DUM 2026 PRESENTATIONS</h1>
        <img src="images/kborder_bottom.png" alt="">
    </div>

    <?php if ($hasValidPassword) { ?>
        <div class="header">
            DISTRIBUTION UTILITY MEET (DUM 2026) | 27-28 OCT 2026 | JAIPUR, RAJASTHAN
        </div>
        <?php
        $presentationPdfPaths = glob(__DIR__ . '/images/presentation26/*.pdf');
        if ($presentationPdfPaths === false) {
            throw new RuntimeException('Unable to read the DUM 2026 presentation files.');
        }

        $presentationPdfsByNumber = [];
        foreach ($presentationPdfPaths as $presentationPdfPath) {
            $presentationPdfFilename = basename($presentationPdfPath);
            if (preg_match('/^(\d+)\./', $presentationPdfFilename, $matches) === 1) {
                $presentationPdfsByNumber[(int) $matches[1]] = $presentationPdfFilename;
            }
        }

        $presentationGroups = [
            [
                'day' => 'DAY - 1: 27 OCTOBER 2026 (TUESDAY)',
                'title' => 'Inauguration of DUM 2026 Conference and Exhibition',
                'photo' => 'https://flic.kr/s/aHBqjD9JJC',
                'speakers' => [
                    [1, 'Reji Kumar Pillai', 'President', 'India Smart Grid Forum', 'Welcome Address', 'Speech'],
                    [2, 'Arti Dogra', 'Secretary – Energy and CMD', 'Govt. of Rajasthan and JVVNL', 'Welcome Address', 'Speech'],
                    [3, 'Prem Kumar', 'MD and CEO', 'Noida Power Company Limited', 'Special Address', 'Speech'],
                    [4, 'Vivekanand Tripathi', 'Founder and CEO', 'PeLocal Fintech', 'Special Address', 'Speech'],
                    [5, 'Ravindra Kumar Tyagi', 'Director General', 'Power Foundation of India', 'Special Address', 'Speech'],
                    [6, 'Shalini Agarwal', 'Managing Director', 'Gujarat Uurja Vikas Nigam Limited', 'Special Address', 'Speech'],
                    [7, 'Alok Kumar', 'Director General', 'All India Discoms Association', 'Special Address', 'Speech'],
                    [8, 'Rajesh Sharma', 'Chairman', 'Rajasthan Electricity Regulatory Commission', 'Special Address', 'Speech'],
                    [9, 'Siva Gunda', 'Commissioner - Vice Chair', 'California Energy Commission', 'Special Address', 'Speech'],
                    [10, 'Ghanshyam Prasad', 'Chairperson', 'Central Electricity Authority, GoI', 'Special Address', 'Speech'],
                    [11, 'Shri V Srinivas', 'Chief Secretary', 'Government of Rajasthan', 'Inaugural Address by Chief Guests', 'Speech'],
                    [12, 'Shri Heeralal Nagar', "Hon'ble Minister of State for Energy", 'Government of Rajasthan', 'Inaugural Address by Chief Guests', 'Speech'],
                    [13, 'Reena Suri', 'Chief Executive Officer', 'India Smart Grid Forum', 'Vote of Thanks', 'Speech'],
                ],
            ],
            [
                'day' => 'DAY - 1: 27 OCTOBER 2026 (TUESDAY)',
                'title' => 'Session 1: DISCOMs Financial Transformation and Capital Market Readiness | Session Partner: Power Foundation of India (PFI)',
                'photo' => 'https://flic.kr/s/aHBqjDajbM',
                'speakers' => [
                    [14, 'Alok Kumar', 'Director General', 'All India Discoms Association', 'Chair', 'Speech'],
                    [15, 'Himanshu Chawla', 'Head - Regulatory and Research', 'Power Foundation of India', 'Moderator and Presentation', 'View/Download'],
                    [16, 'Dinesh Agarwal', 'Executive Director - Power Purchase', 'Maharashtra State Electricity Distribution Company Limited', 'Theme Presentation', 'View/Download'],
                    [17, 'SK Soonee', 'Former CMD', 'Grid India', 'Speaker', 'Speech'],
                    [18, 'Hemant Verma', 'Chairman', 'Tripura Electricity Regulatory Commission', 'Speaker', 'Speech'],
                    [19, 'Ravindra Kumar Tyagi', 'Director General', 'Power Foundation of India', 'Speaker', 'Speech'],
                    [20, 'Manoj Kumar', 'Member', 'Bihar Electricity Regulatory Commission', 'Speaker', 'Speech'],
                    [21, 'Santosh Kumar', 'Chief Operating Officer', 'BSES Yamuna Power Limited', 'Speaker', 'Speech'],
                ],
            ],
            [
                'day' => 'DAY - 1: 27 OCTOBER 2026 (TUESDAY)',
                'title' => 'Session 2: Scaling Digital Intelligence and Advanced Smart Meter Data Analytics | Session Partner: Oracle',
                'photo' => 'https://flic.kr/s/aHBqjD9JKV',
                'speakers' => [
                    [22, 'Reji Kumar Pillai', 'President', 'India Smart Grid Forum', 'Welcome Address', 'Speech'],
                    [23, 'Ajoy Rajani', 'Chair - IoT, AI and Analytics Working Group', 'India Smart Grid Forum', 'Moderator', 'Speech'],
                    [24, 'Santhosh Nair', 'Director', 'Oracle Energy and Water', 'Theme Presentation', 'View/Download'],
                    [25, 'Gautam Kumar', 'CTO & CSO', 'IntelliSmart', 'Theme Presentation', 'View/Download'],
                    [26, 'Anil Daulani', 'Senior partner', 'PeLocal Fintech', 'Speaker', 'View/Download'],
                    [27, 'RS Selvam', 'Vice President (R&D)', 'Stelmec Limited', 'Speaker', 'View/Download'],
                    [28, 'Jaideep Singh', 'Advisor', 'Radius Synergies', 'Speaker', 'View/Download'],
                    [29, 'Aayush Agrawal', 'Co-Founder and CTO', 'WorkOnGrid', 'Speaker', 'View/Download'],
                    [30, 'Animesh', 'Head - CEO Cell', 'Chandigarh Power Distribution Limited', 'Speaker', 'Speech'],
                    [31, 'Amit Tomar', 'Head – Engineering', 'BSES Yamuna Power Limited', 'Speaker', 'Speech'],
                ],
            ],
            [
                'day' => 'DAY - 1: 27 OCTOBER 2026 (TUESDAY)',
                'title' => 'Session 3: Role of RE in Managing New and Emerging Loads and Ensuring Supply Reliability and Power Quality | Session Partners: Enspar and Rajasthan Renewable Energy Corporation Limited (RRECL)',
                'photo' => 'https://flic.kr/s/aHBqjDaADZ',
                'speakers' => [
                    [32, 'Ghanshyam Prasad', 'Chairperson', 'Central Electricity Authority, GoI', 'Chair', 'Speech'],
                    [33, 'Reena Suri', 'Chief Executive Officer', 'India Smart Grid Forum', 'Moderator', 'Speech'],
                    [34, 'Siva Gunda', 'Commissioner - Vice Chair', 'California Energy Commission', 'Presentation', 'View/Download'],
                    [35, 'Anil Kumar P', 'Director', 'Enspar', 'Presentation', 'View/Download'],
                    [36, 'Rohit Gupta', 'Chairman and Managing Director', 'Rajasthan Renewable Energy Corporation Limited', 'Presentation', 'View/Download'],
                    [37, 'Puneet Chitkara', 'SVP - Strategy', 'Indian Energy Exchange', 'Speaker', 'Speech'],
                    [38, 'Sudhir Jain', 'Chief Engineer', 'Rajasthan SLDC', 'Speaker', 'Speech'],
                    [39, 'Chetan Singh Adhikari', 'Director', 'REConnect Energy Solutions Ltd.', 'Speaker', 'Speech'],
                    [40, 'Pramod Kumar Mishra', 'Vice President and Chief Transformation Officer', 'Chandigarh Power Distribution Limited', 'Speaker', 'Speech'],
                    [41, 'Kashmir Singh', 'Head Business Retail', 'BSES Rajdhani Power Limited', 'Speaker', 'Speech'],
                    [42, 'Payal Saha', 'General Manager – Data Centre and Partnership', 'ReNew', 'Speaker', 'Speech'],
                ],
            ],
            [
                'day' => 'DAY - 1: 27 OCTOBER 2026 (TUESDAY)',
                'title' => 'DUM 2026 Welcome Reception, Gala Dinner and Cultural Program followed by Live Band',
                'photo' => 'https://flic.kr/s/aHBqjDaudA',
                'speakers' => [],
            ],
            [
                'day' => 'DAY - 2: 28 OCTOBER 2026 (WEDNESDAY)',
                'title' => 'Session 4: Flexibility Solutions for Distribution Networks and CEA Standards for Solar PV and BESS | Session Partner: All India DISCOMs Association (AIDA)',
                'photo' => 'https://flic.kr/s/aHBqjDaE8i',
                'speakers' => [
                    [44, 'Alok Kumar', 'Director General', 'All India Discoms Association', 'Chair', 'Speech'],
                    [45, 'Vikas Gaba', 'Partner', 'KPMG', 'Moderator', 'Speech'],
                    [46, 'Disha Khosla', 'AGM - Technical Services', 'India Smart Grid Forum', 'Theme Presentation', 'View/Download'],
                    [47, 'Hemant Verma', 'Chairman', 'Tripura Electricity Regulatory Commission', 'Speaker', 'Speech'],
                    [48, 'Naoki Sakai', 'Chief Executive Officer', 'D-Sharing', 'Speaker', 'Speech'],
                    [49, 'Deepti Mathur', 'Superintending Engineer', 'Jaipur Vidyut Vitran Nigam Limited', 'Speaker', 'Speech'],
                    [50, 'Sudhir Kumar R', 'Additional Director', 'Central Power Research Institute', 'Speaker', 'Speech'],
                ],
            ],
            [
                'day' => 'DAY - 2: 28 OCTOBER 2026 (WEDNESDAY)',
                'title' => 'Session 5: Climate Resilience and Securing the Physical Assets of DISCOMs',
                'photo' => 'https://flic.kr/s/aHBqjDajdv',
                'speakers' => [
                    [51, 'Ravi Seethapathy', 'Executive Chairman and Advisor', 'Biosirus Inc. and India Smart Grid Forum', 'Chair and Moderator', 'Speech'],
                    [52, 'Kiran Sabbineni', 'Lead Specialist – Energy', 'Coalition for Disaster Resilient Infrastructure', 'Theme Presentation', 'View/Download'],
                    [53, 'Gajanan Kale', 'Chief Executive Officer', 'TP Central Odisha Distribution Limited', 'Theme Presentation', 'View/Download'],
                    [54, 'Aneesh Thomas', 'Associate Director', 'EATON', 'Speaker', 'View/Download'],
                    [55, 'Song Youngsub', 'Principal Engineer - R&D', 'Reformtech Co. Ltd.', 'Speaker', 'View/Download'],
                    [56, 'Kiran Gupta', 'Chief-Customer Experience, Commercial & Govt. Affairs', 'Tata Power Delhi Distribution Limited', 'Speaker', 'Speech'],
                    [57, 'Vishnu Shankar Srivastava', 'Head Strategic Projects', 'BSES Rajdhani Power Limited', 'Speaker', 'View/Download'],
                    [58, 'Anil Narayan Raghav', 'Professor - Department of Physics', 'University of Mumbai', 'Speaker', 'View/Download'],
                ],
            ],
            [
                'day' => 'DAY - 2: 28 OCTOBER 2026 (WEDNESDAY)',
                'title' => 'Session 6: India Energy Stack (IES), Data Exchange Framework, Cyber Security and Data Privacy for the Digital Grids | Session Partner: Power Foundation of India (PFI)',
                'photo' => 'https://flic.kr/s/aHBqjDajec',
                'speakers' => [
                    [59, 'Prince Dhawan', 'Executive Director and Task Force', 'REC Limited and India Energy Stack', 'Chair', 'View/Download'],
                    [60, 'Himanshu Chawla', 'Head - Regulatory and Research', 'Power Foundation of India', 'Moderator', 'Speech'],
                    [61, 'Vibhay Kumar', 'Expert - Transmission', 'Power Foundation of India', 'Theme Presentation', 'View/Download'],
                    [62, 'Teppo Hemia', 'Chief Executive Officer', 'Wirepas', 'Speaker', 'View/Download'],
                    [63, 'Rahul Tongia', 'Senior Fellow', 'CSEP', 'Speaker', 'Speech'],
                    [64, 'Anish Kalucha', 'CIO and Head-IT & Automation', 'Noida Power Company Limited', 'Speaker', 'Speech'],
                    [65, 'Tarun Batra', 'Head-Digital & Information Technology', 'Tata Power Delhi Distribution Limited', 'Speaker', 'Speech'],
                    [66, 'C Nallasivan', 'Head – IT Department', 'Tamil Nadu Power Distribution Corporation Limited', 'Speaker', 'View/Download'],
                    [67, 'Kishor Narang', 'Founder', 'Narnix Technolabs', 'Speaker', 'Speech'],
                ],
            ],
            [
                'day' => 'DAY - 2: 28 OCTOBER 2026 (WEDNESDAY)',
                'title' => 'Session 7: BESS Applications in Power Distribution - Select Case Studies | Session Partner: The Energy and Resources Institute (TERI)',
                'photo' => 'https://flic.kr/s/aHBqjDaAFY',
                'speakers' => [
                    [68, 'A K Saxena', 'Senior Director', 'The Energy and Resources Institute', 'Chair and Moderator', 'Speech'],
                    [69, 'Bhagyasree Nair', 'Energy Advisor', 'GIZ', 'Presentation', 'View/Download'],
                    [70, 'Alekhya Datta', 'Director – Electricity and RE Division (ERD)', 'The Energy and Resources Institute', 'Presentation', 'View/Download'],
                    [71, 'Avinash Kumar', 'Additional Vice President', 'BSES Rajdhani Power Limited', 'Presentation', 'View/Download'],
                    [72, 'Jitendra Nalwaya', 'Director (Technical)', 'Purvanchal Vidyut Vitaran Nigam Limited', 'Speaker', 'Speech'],
                    [73, 'Ratan Singh', 'General Manager', 'Solar Energy Corporation of India Limited (SECI)', 'Speaker', 'Speech'],
                    [74, 'Chetan Pathak', 'Director - Strategy & Growth', 'India Energy Storage Alliance', 'Speaker', 'Speech'],
                    [75, 'Nirmal Shaju', 'Director – Grids of the Future', 'The Global Energy Alliance for People and Planet', 'Speaker', 'Speech'],
                    [76, 'C Nallasivan', 'Head – IT Department', 'Tamil Nadu Power Distribution Corporation Limited', 'Speaker', 'Speech'],
                ],
            ],
            [
                'day' => 'DAY - 2: 28 OCTOBER 2026 (WEDNESDAY)',
                'title' => 'Valedictory Session',
                'photo' => 'https://flic.kr/s/aHBqjD9Uu9',
                'speakers' => [
                    [77, 'Reji Kumar Pillai', 'President', 'India Smart Grid Forum', 'Vote of Thanks', 'Speech'],
                    [78, 'Reena Suri', 'Chief Executive Officer', 'India Smart Grid Forum', 'Vote of Thanks', 'Speech'],
                ],
            ],
        ];

        $currentPresentationDay = null;
        foreach ($presentationGroups as $presentationGroup) {
            if ($currentPresentationDay !== $presentationGroup['day']) {
                $currentPresentationDay = $presentationGroup['day'];
                ?>
                <div class="header presentation-day">
                    <?= htmlspecialchars($currentPresentationDay, ENT_QUOTES, 'UTF-8') ?>
                </div>
                <?php
            }
            ?>
            <div class="header presentation-session">
                <?= htmlspecialchars($presentationGroup['title'], ENT_QUOTES, 'UTF-8') ?>
            </div>

            <?php if ($presentationGroup['speakers'] === []) { ?>
                <p class="presentation-event-photo">
                    <a href="<?= htmlspecialchars($presentationGroup['photo'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">Photo</a>
                </p>
            <?php } else { ?>
                <div class="presentation-table-wrapper">
                    <table class="presentation-table">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Organisation</th>
                                <th>Category</th>
                                <th>Presentation/Speech</th>
                                <th>Video Link</th>
                                <th>Photo Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($presentationGroup['speakers'] as $speaker) { ?>
                                <?php
                                $presentationPdfFilename = $presentationPdfsByNumber[$speaker[0]] ?? null;
                                $presentationPdfHref = $presentationPdfFilename === null
                                    ? null
                                    : 'images/presentation26/' . rawurlencode($presentationPdfFilename);
                                ?>
                                <tr>
                                    <td><?= htmlspecialchars((string) $speaker[0], ENT_QUOTES, 'UTF-8') ?></td>
                                    <td><?= htmlspecialchars($speaker[1], ENT_QUOTES, 'UTF-8') ?></td>
                                    <td><?= htmlspecialchars($speaker[2], ENT_QUOTES, 'UTF-8') ?></td>
                                    <td><?= htmlspecialchars($speaker[3], ENT_QUOTES, 'UTF-8') ?></td>
                                    <td><?= htmlspecialchars($speaker[4], ENT_QUOTES, 'UTF-8') ?></td>
                                    <td>
                                        <?php if ($presentationPdfHref !== null) { ?>
                                            <a href="<?= htmlspecialchars($presentationPdfHref, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer"><?= htmlspecialchars($speaker[5], ENT_QUOTES, 'UTF-8') ?></a>
                                        <?php } else { ?>
                                            <?= htmlspecialchars($speaker[5], ENT_QUOTES, 'UTF-8') ?>
                                        <?php } ?>
                                    </td>
                                    <td>Video</td>
                                    <td>
                                        <a href="<?= htmlspecialchars($presentationGroup['photo'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">Photo</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            <?php } ?>
        <?php } ?>
    <?php } else { ?>
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') { ?>
            <p role="alert" style="text-align:center;">
                Incorrect password. Please try again.
            </p>
        <?php } ?>
        <form method="POST" action="https://dumindia.in/presentations2026.php" class="k_form" style="text-align:center;">
            Enter Password To Open Presentation
            <br>
            <input type="password" name="pass" aria-label="DUM 2026 password" required>
            <br><br>
            <input type="submit" name="submit" value="Open DUM 2026 Presentations">
        </form>
    <?php } ?>

    <hr style="max-width:600px;margin:20px auto;">

    <div style="text-align:center; max-width:640px; margin:0 auto;">
        <p style="margin-bottom:6px;">Previous year:</p>
        <p style="margin-bottom:12px;">
            <a href="presentations2025.php" target="_blank" rel="noopener noreferrer">DUM 2025 Presentations</a>
        </p>
    </div>
</div>

<?php include "include/footer.php"; ?>
