
<?php
$page_title = "Contact Us - Re-NewTech";

require_once "db_config.php";

$success_message = "";
$error_message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $fullname = trim($_POST["fullname"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if ($fullname === "" || $email === "" || $message === "") {
        $error_message = "Please fill in all fields.";
    } elseif (strlen($fullname) < 3 || strlen($fullname) > 50) {
        $error_message = "Name must be between 3 and 50 characters.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Please enter a valid email address.";
    } elseif (strlen($message) < 10 || strlen($message) > 500) {
        $error_message = "Message must be between 10 and 500 characters.";
    } else {
        $query = "INSERT INTO contact_messages (fullname, email, message)
                  VALUES (?, ?, ?)";

        $stmt = mysqli_prepare($con, $query);

        if ($stmt) {
            mysqli_stmt_bind_param(
                $stmt,
                "sss",
                $fullname,
                $email,
                $message
            );

            if (mysqli_stmt_execute($stmt)) {
                $success_message = "Your message has been sent successfully!";
            } else {
                $error_message = "Unable to send your message. Please try again.";
            }

            mysqli_stmt_close($stmt);
        } else {
            $error_message = "Something went wrong. Please try again.";
        }
    }
}

ob_start();
?>

<div class="contact-page">
<div class="container py-5">

    <div class="row align-items-center g-5 mb-5">

        <div class="col-lg-6">
            <span class="contact-eyebrow">Contact Re-NewTech</span>
            <h1 class="contact-heading">Need help with an order or a product?</h1>
            <p class="contact-subtext">Whether it's a warranty question, a delivery update, or you're just unsure which renewed device fits your needs — our team typically responds within 24 hours.</p>
        </div>

        <div class="col-lg-6">
            <div class="contact-hero-visual">

                <div class="contact-hero-stat">
                    <i class="bi bi-lightning-charge-fill"></i>
                    <div>
                        <strong>Under 24 Hrs</strong>
                        <span>Average Response Time</span>
                    </div>
                </div>

                <div class="contact-hero-stat">
                    <i class="bi bi-headset"></i>
                    <div>
                        <strong>Mon – Sat</strong>
                        <span>Live Support Available</span>
                    </div>
                </div>

                <div class="contact-hero-stat">
                    <i class="bi bi-emoji-smile-fill"></i>
                    <div>
                        <strong>98%</strong>
                        <span>Customer Satisfaction</span>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="row g-4">

        <!-- LEFT: CONTACT INFO -->
        <div class="col-lg-5">

            <div class="contact-info-card">
                <div class="contact-info-icon"><i class="bi bi-envelope-fill"></i></div>
                <div>
                    <span>Email Us</span>
                    <strong>support@renewtech.com</strong>
                </div>
            </div>

            <div class="contact-info-card">
                <div class="contact-info-icon"><i class="bi bi-telephone-fill"></i></div>
                <div>
                    <span>Call Us</span>
                    <strong>+91 98765 43210</strong>
                </div>
            </div>

            <div class="contact-info-card">
                <div class="contact-info-icon"><i class="bi bi-geo-alt-fill"></i></div>
                <div>
                    <span>Our Location</span>
                    <strong>Gujarat, India</strong>
                </div>
            </div>

            <div class="contact-hours-card">
                <i class="bi bi-clock-fill"></i>
                <div>
                    <strong>Support Hours</strong>
                    <span>Mon – Sat, 10:00 AM – 7:00 PM IST</span>
                </div>
            </div>

        </div>

        <!-- RIGHT: FORM -->
        <div class="col-lg-7">
            <div class="contact-form-card">

                <h5 class="contact-form-title">Send Us a Message</h5>
                <p class="contact-form-subtitle">Fill the form below and we'll get back to you shortly.</p>

                <?php if ($success_message !== "") { ?>
                    <p class="text-success">
                        <?php echo htmlspecialchars($success_message); ?>
                    </p>
                <?php } ?>

                <?php if ($error_message !== "") { ?>
                    <p class="text-danger">
                        <?php echo htmlspecialchars($error_message); ?>
                    </p>
                <?php } ?>

                <form action="contact.php" method="POST">

                    <div class="contact-field">
                        <label for="fullname">Your Name</label>
                        <input
                            type="text"
                            id="fullname"
                            name="fullname"
                            placeholder="Enter your full name"
                            value="<?php echo htmlspecialchars($_POST['fullname'] ?? ''); ?>"
                            data-validation="required alpha min max"
                            data-min="3"
                            data-max="50"
                        >
                        <span id="fullnameError" class="contact-error"></span>
                    </div>

                    <div class="contact-field">
                        <label for="email">Email Address</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="you@example.com"
                            value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>"
                            data-validation="required email"
                        >
                        <span id="emailError" class="contact-error"></span>
                    </div>

                    <div class="contact-field">
                        <label for="message">Message</label>
                        <textarea
                            id="message"
                            name="message"
                            rows="4"
                            placeholder="How can we help you?"
                            data-validation="required min max"
                            data-min="10"
                            data-max="500"
                        ><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                        <span id="messageError" class="contact-error"></span>
                    </div>

                    <button type="submit" class="contact-submit-btn">
                        Send Message <i class="bi bi-send-fill"></i>
                    </button>

                </form>

            </div>
        </div>

    </div>

</div>
</div>

<?php
$page_content = ob_get_clean();
require_once 'layout.php';
?>
