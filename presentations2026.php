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
            DISTRIBUTION UTILITY MEET - DUM 2026
        </div>
        <p style="text-align:center; margin:24px 0;">
            The DUM 2026 presentation materials will be posted here.
        </p>
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
            <a href="presentations2025.php">DUM 2025 Presentations</a>
        </p>
    </div>
</div>

<?php include "include/footer.php"; ?>
