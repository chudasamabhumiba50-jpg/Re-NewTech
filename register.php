
<?php

ob_start();

$message = "";
$message_type = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once "db_config.php";

    $fullname = trim($_POST['fullname'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirmPassword'] ?? '';

    if (
        $fullname == '' ||
        $email == '' ||
        $password == '' ||
        $confirmPassword == ''
    ) {
        $message = "Please fill all required fields.";
        $message_type = "error";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $message = "Please enter a valid email address.";
        $message_type = "error";

    } elseif (strlen($fullname) < 3 || strlen($fullname) > 50) {

        $message = "Full name must be between 3 and 50 characters.";
        $message_type = "error";

    } elseif (
        strlen($password) < 8 ||
        strlen($password) > 25
    ) {

        $message = "Password must be between 8 and 25 characters.";
        $message_type = "error";

    } elseif ($password !== $confirmPassword) {

        $message = "Password and Confirm Password do not match.";
        $message_type = "error";

    } elseif (!isset($_POST['terms'])) {

        $message = "Please accept the Terms & Privacy Policy.";
        $message_type = "error";

    } else {

        $hashed_password = password_hash(
            $password,
            PASSWORD_DEFAULT
        );

        try {

            $query = "INSERT INTO registration
                      (fullname, email, password)
                      VALUES (?, ?, ?)";

            $stmt = mysqli_prepare($con, $query);

            mysqli_stmt_bind_param(
                $stmt,
                "sss",
                $fullname,
                $email,
                $hashed_password
            );

            if (mysqli_stmt_execute($stmt)) {

                $message = "Registration successful! You can now login.";
                $message_type = "success";

            }

            mysqli_stmt_close($stmt);

        } catch (mysqli_sql_exception $e) {

            if ($e->getCode() == 1062) {
                $message = "This email is already registered.";
            } else {
                $message = "Registration failed. Please try again.";
            }

            $message_type = "error";
        }
    }
}

?>

<section class="auth-split">

    <!-- LEFT: BRAND PANEL -->
    <div class="auth-brand-panel">

        <a href="index.php" class="auth-brand-logo">
            <span class="auth-brand-symbol">
                <i class="bi bi-recycle"></i>
            </span>
            Re-NewTech
        </a>

        <div class="auth-brand-content">

            <h2>Join the reuse revolution.</h2>

            <p>
                Create an account to track orders, save your wishlist,
                and shop certified renewed electronics at prices that make sense.
            </p>

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

            <span class="auth-eyebrow">Get Started</span>

            <h1 class="auth-title">
                Create your account
            </h1>

            <p class="auth-subtitle">
                Join Re-NewTech for eco-friendly electronics.
            </p>
            
<?php if ($message != "") { ?>

    <p class="<?php echo $message_type == 'success'
        ? 'text-success'
        : 'text-danger'; ?>">
        <?php echo htmlspecialchars($message); ?>
    </p>

<?php } ?>


            <form action="register.php" method="POST">

                <!-- FULL NAME -->
                <div class="auth-field">

                    <label for="fullname">
                        Full Name
                    </label>

                    <div class="auth-input-group">

                        <i class="bi bi-person"></i>

                        <input
                            type="text"
                            id="fullname"
                            name="fullname"
                            class="form-control"
                            placeholder="John Doe"
                            data-validation="required alpha min max"
                            data-min="3"
                            data-max="50"
                        >

                    </div>

                    <span id="fullnameError" class="auth-error"></span>

                </div>


                <!-- EMAIL -->
                <div class="auth-field">

                    <label for="email">
                        Email Address
                    </label>

                    <div class="auth-input-group">

                        <i class="bi bi-envelope"></i>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="form-control"
                            placeholder="Enter email"
                            data-validation="required email"
                        >

                    </div>

                    <span id="emailError" class="auth-error"></span>

                </div>


                <!-- PASSWORD -->
                <div class="auth-field">

                    <label for="password">
                        Password
                    </label>

                    <div class="auth-input-group">

                        <i class="bi bi-lock"></i>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="form-control"
                            placeholder="Create strong password"
                            data-validation="required strongPassword min max"
                            data-min="8"
                            data-max="25"
                        >

                    </div>

                    <span id="passwordError" class="auth-error"></span>

                </div>


                <!-- CONFIRM PASSWORD -->
                <div class="auth-field">

                    <label for="confirmPassword">
                        Confirm Password
                    </label>

                    <div class="auth-input-group">

                        <i class="bi bi-lock-fill"></i>

                        <input
                            type="password"
                            id="confirmPassword"
                            name="confirmPassword"
                            class="form-control"
                            placeholder="Confirm your password"
                            data-validation="required confirmPassword"
                            data-password-id="password"
                        >

                    </div>

                    <span id="confirmPasswordError" class="auth-error"></span>

                </div>


                <!-- TERMS -->
                <div class="auth-options">

                    <div class="form-check">

                        <input
                            class="form-check-input"
                            type="checkbox"
                            id="terms"
                            name="terms"
                            data-validation="required terms"
                        >

                        <label class="form-check-label" for="terms">
                            I accept the
                            <a href="#">Terms &amp; Privacy Policy</a>
                        </label>

                    </div>

                    <span id="termsError" class="auth-error"></span>

                </div>


                <!-- REGISTER BUTTON -->
                <button type="submit" class="auth-submit">
                    Register
                    <i class="bi bi-arrow-right"></i>
                </button>


                <!-- LOGIN LINK -->
                <div class="auth-bottom-text">

                    Already have an account?

                    <a href="login.php">
                        Login Here
                    </a>

                </div>

            </form>

        </div>

    </div>

</section>


<?php

$page_content = ob_get_clean();
require_once 'layout.php';

?>