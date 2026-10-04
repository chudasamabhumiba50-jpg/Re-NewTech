<?php

$page_title = "My Profile - Re-NewTech";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = "Your profile changes have been saved (demo only, not stored in database).";
}

ob_start();

?>

<div class="profile-page">
<div class="container py-4">

    <!-- HEADER -->
    <div class="profile-header">
        <div class="profile-avatar">AB</div>
        <div>
            <span class="profile-header-label">Manage Account</span>
            <h1 class="profile-header-name">abc</h1>
            <span class="profile-header-email"><i class="bi bi-envelope"></i> abc123@gmail.com</span>
        </div>
    </div>

    <?php if ($message): ?>
        <div class="profile-alert">
            <i class="bi bi-check-circle-fill"></i>
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <div class="row g-4">

        <!-- LEFT: SIDE NAV -->
        <div class="col-lg-3">
            <div class="profile-side-card">
                <a href="#" class="profile-side-link active">
                    <i class="bi bi-person"></i> Personal Info
                </a>
                <a href="#" class="profile-side-link">
                    <i class="bi bi-geo-alt"></i> Saved Address
                </a>
                <a href="#" class="profile-side-link">
                    <i class="bi bi-shield-lock"></i> Change Password
                </a>
                <a href="account.php" class="profile-side-link">
                    <i class="bi bi-arrow-left"></i> Back to Account
                </a>
            </div>
        </div>

        <!-- RIGHT: FORMS -->
        <div class="col-lg-9">

            <!-- PERSONAL INFO -->
            <div class="profile-card mb-4">

                <h5 class="profile-card-title"><i class="bi bi-person-fill"></i> Personal Information</h5>
                <p class="profile-card-subtitle">Update your name, email and phone number.</p>

                <form method="POST">

                    <div class="row g-3">

                        <div class="col-md-6">
                            <div class="profile-field">
                                <label>Full Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="fullname"
                                    value="abc"
                                    data-validation="required alpha min max"
                                    data-min="2"
                                    data-max="50"
                                >
                                <span id="fullnameError" class="profile-error"></span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="profile-field">
                                <label>Email Address</label>
                                <input
                                    type="email"
                                    class="form-control"
                                    name="email"
                                    value="abc123@gmail.com"
                                    data-validation="required email"
                                >
                                <span id="emailError" class="profile-error"></span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="profile-field">
                                <label>Phone Number</label>
                                <input
                                    type="tel"
                                    class="form-control"
                                    name="phone"
                                    placeholder="98765 43210"
                                    data-validation="required numeric min max"
                                    data-min="10"
                                    data-max="10"
                                >
                                <span id="phoneError" class="profile-error"></span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="profile-field">
                                <label>City</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="city"
                                    placeholder="Ahmedabad"
                                    data-validation="required alpha min max"
                                    data-min="2"
                                    data-max="40"
                                >
                                <span id="cityError" class="profile-error"></span>
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="profile-save-btn">
                        Save Changes <i class="bi bi-check-lg"></i>
                    </button>

                </form>

            </div>

            <!-- SAVED ADDRESS -->
            <div class="profile-card mb-4">

                <h5 class="profile-card-title"><i class="bi bi-geo-alt-fill"></i> Saved Address</h5>
                <p class="profile-card-subtitle">This address is used by default at checkout.</p>

                <form method="POST">

                    <div class="profile-field mb-3">
                        <label>Address</label>
                        <input
                            type="text"
                            class="form-control"
                            name="address"
                            placeholder="House / Street / Area"
                            data-validation="required min max"
                            data-min="5"
                            data-max="120"
                        >
                        <span id="addressError" class="profile-error"></span>
                    </div>

                    <div class="row g-3">

                        <div class="col-md-6">
                            <div class="profile-field">
                                <label>City</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="address_city"
                                    placeholder="Ahmedabad"
                                    data-validation="required alpha min max"
                                    data-min="2"
                                    data-max="40"
                                >
                                <span id="address_cityError" class="profile-error"></span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="profile-field">
                                <label>Pincode</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="pincode"
                                    placeholder="380001"
                                    maxlength="6"
                                    data-validation="required numeric min max"
                                    data-min="6"
                                    data-max="6"
                                >
                                <span id="pincodeError" class="profile-error"></span>
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="profile-save-btn">
                        Save Address <i class="bi bi-check-lg"></i>
                    </button>

                </form>

            </div>

            <!-- CHANGE PASSWORD -->
            <div class="profile-card">

                <h5 class="profile-card-title"><i class="bi bi-shield-lock-fill"></i> Change Password</h5>
                <p class="profile-card-subtitle">Use at least 8 characters, with a mix of letters, numbers and symbols.</p>

                <form method="POST">

                    <div class="row g-3">

                        <div class="col-md-6">
                            <div class="profile-field">
                                <label>New Password</label>
                                <input
                                    type="password"
                                    class="form-control"
                                    id="newPassword"
                                    name="new_password"
                                    placeholder="Enter new password"
                                    data-validation="required strongPassword"
                                >
                                <span id="new_passwordError" class="profile-error"></span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="profile-field">
                                <label>Confirm Password</label>
                                <input
                                    type="password"
                                    class="form-control"
                                    name="confirm_password"
                                    placeholder="Re-enter new password"
                                    data-validation="required confirmPassword"
                                    data-password-id="newPassword"
                                >
                                <span id="confirm_passwordError" class="profile-error"></span>
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="profile-save-btn">
                        Update Password <i class="bi bi-shield-check"></i>
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