<?php
$page_title = "Contact Us - Re-NewTech";
ob_start();
?>

<div class="container py-5">
    <div class="row g-4">
        <div class="col-md-5">
            <h3 class="fw-bold text-dark mb-3">Get in Touch</h3>
            <p class="text-muted">Have questions about our certified products? Reach out to us anytime!</p>
            <p class="mb-2"><strong>Email:</strong> support@renewtech.com</p>
            <p class="mb-2"><strong>Phone:</strong> +91 98765 43210</p>
            <p class="mb-2"><strong>Location:</strong> Gujarat, India</p>
        </div>
        <div class="col-md-7">
            <div class="card p-4 border-0 shadow-sm rounded-4">
                <h5 class="fw-bold text-dark mb-3">Send Us a Message</h5>
                <form>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Your Name</label>
                        <input type="text" class="form-control"  name="fullname"   data-validation="required alpha">
                    </div>
                     <span class="error text-danger" id="nameError"></span>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Email Address</label>
                        <input type="email" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Message</label>
                        <textarea class="form-control" rows="4" ></textarea>
                    </div>
                    <button type="submit" class="btn btn-success px-4 rounded-3">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
$page_content = ob_get_clean();
require_once 'layout.php';
?>