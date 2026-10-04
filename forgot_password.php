<?php

$page_title = "Forgot Password - Re-NewTech";

$message = "";
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];

    if (!empty($email)) {

        $success = true;
        $message = "If an account exists for " . htmlspecialchars($email) . ", a reset link has been sent.";

    } else {

        $message = "Please enter your email address.";

    }
}

ob_start();

?>

<section class="auth-split">

    <!-- LEFT: BRAND PANEL -->
    <div class="auth-brand-panel">

        <a href="index.php" class="auth-brand-logo">
            <span class="auth-brand-symbol"><i class="bi bi-recycle"></i></span>
            Re-NewTech
        </a>

        <div class="auth-brand-content">
            <h2>Forgot your password? No problem.</h2>
            <p>Enter the email linked to your account and we'll send you a link to reset your password and get back in.</p>

            <div class="auth-brand-stats">
                <div class="auth-brand-stat">
                    <strong>5,000+</strong>
                    <span>Devices Renewed</span>
                </div>
                <div class="auth-brand-stat">
                    <strong>120+ Tons</strong>
                    <span>CO2 Saved</span>
                </div>
                <div class="auth-brand-stat">
                    <strong>6 Months</strong>
                    <span>Warranty Included</span>
                </div>
            </div>
        </div>

        <div class="auth-brand-glow"></div>

    </div>

    <!-- RIGHT: FORM PANEL -->
    <div class="auth-form-panel">

        <div class="auth-form-wrap">

            <span class="auth-eyebrow">Reset Password</span>
            <h1 class="auth-title">Forgot your password?</h1>
            <p class="auth-subtitle">Enter your email and we'll send you a link to reset it.</p>

            <?php if ($message): ?>

                <div class="auth-alert <?php echo $success ? 'auth-alert-success' : ''; ?>">
                    <i class="bi <?php echo $success ? 'bi-check-circle' : 'bi-exclamation-circle'; ?>"></i>
                    <?php echo $message; ?>
                </div>

            <?php endif; ?>

            <form action="forgot_password.php" method="POST">

                <div class="auth-field">
                    <label for="email">Email Address</label>
                    <div class="auth-input-group">
                        <i class="bi bi-envelope"></i>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="form-control"
                            placeholder="you@example.com"
                            data-validation="required email"
                        >
                    </div>
                    <span id="emailError" class="auth-error"></span>
                </div>

                <button type="submit" class="auth-submit">
                    Send Reset Link <i class="bi bi-arrow-right"></i>
                </button>

                <div class="auth-bottom-text">
                    Remembered your password?
                    <a href="login.php">Back to Login</a>
                </div>

            </form>

        </div>

    </div>

</section>

<?php

$page_content = ob_get_clean();

require_once 'layout.php';

?>