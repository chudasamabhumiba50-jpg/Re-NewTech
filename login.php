<?php

$page_title = "Login - Re-NewTech";


/* Static Admin Login */
$admin_email = "admin12@gmail.com";
$admin_password = "admin";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {

        /* Check Admin Login First */
        if ($email === $admin_email && $password === $admin_password) {

           header("Location: admin/dashboard.php");
            exit();

        }

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
            <h2>Give technology another life.</h2>
            <p>Log in to track your orders, manage your wishlist, and keep browsing certified renewed electronics.</p>

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

            <span class="auth-eyebrow">Welcome Back</span>
            <h1 class="auth-title">Login to your account</h1>
            <p class="auth-subtitle">Access your orders, wishlist and saved addresses.</p>

            <form action="login.php" method="POST">

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

                <div class="auth-field">
                    <div class="auth-label-row">
                        <label for="password">Password</label>
                        <a href="forgot_password.php">Forgot Password?</a>
                    </div>
                    <div class="auth-input-group">
                       
                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="form-control"
                            placeholder="Enter your password"
                            data-validation="required strongPassword"
                        >
                       
                    </div>
                    <span id="passwordError" class="auth-error"></span>
                </div>

                <div class="auth-options">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                </div>

                <button type="submit" class="auth-submit">
                    Login <i class="bi bi-arrow-right"></i>
                </button>

                <div class="auth-bottom-text">
                    Don't have an account?
                    <a href="register.php">Create an account</a>
                </div>

            </form>

        </div>

    </div>

</section>

<?php

$page_content = ob_get_clean();

require_once 'layout.php';

?>