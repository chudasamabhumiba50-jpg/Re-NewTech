<?php
$page_title = "Logout - Re-NewTech";

$main_class = "logout-main";

ob_start();
?>



<div class="container" align="center">

    <div class="logout-card">

        <div class="logout-icon-circle">
            <i class="bi bi-check-lg"></i>
        </div>

        <h3>You've Been Logged Out</h3>

        <p>
            You have successfully logged out of your
            Re-NewTech account. Thank you for shopping
            with us — see you again soon!
        </p>

        <div class="logout-actions">

            <a href="login.php" class="btn-logout-login">
                <i class="bi bi-box-arrow-in-right me-1"></i>
                Login Again
            </a>

            <a href="index.php" class="btn-logout-home">
                <i class="bi bi-house me-1"></i>
                Back to Home
            </a>

        </div>

    </div>

</div>

<?php
$page_content = ob_get_clean();
require_once 'layout.php';
?>