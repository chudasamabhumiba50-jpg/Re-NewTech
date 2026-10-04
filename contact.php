<?php
$page_title = "Contact Us - Re-NewTech";
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

                <form>

                    <div class="contact-field">
                        <label>Your Name</label>
                        <input
                            type="text"
                            name="fullname"
                            placeholder="Enter your full name"
                            data-validation="required alpha min max"
                            data-min="3"
                            data-max="50"
                        >
                        <span id="fullnameError" class="contact-error"></span>
                    </div>

                    <div class="contact-field">
                        <label>Email Address</label>
                        <input
                            type="email"
                            name="email"
                            placeholder="you@example.com"
                            data-validation="required email"
                        >
                        <span id="emailError" class="contact-error"></span>
                    </div>

                    <div class="contact-field">
                        <label>Message</label>
                        <textarea
                            name="message"
                            rows="4"
                            placeholder="How can we help you?"
                            data-validation="required min max"
                            data-min="10"
                            data-max="500"
                        ></textarea>
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