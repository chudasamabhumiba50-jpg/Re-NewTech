<?php
$page_title = "How It Works - Re-NewTech";
ob_start();
?>

<div class="hiw-page">
<div class="container py-4">

    <!-- HERO -->
    <div class="hiw-hero text-center mb-5">
        <span class="hiw-hero-badge"><i class="bi bi-signpost-2-fill"></i> Simple Process</span>
        <h1 class="hiw-hero-title">From Browsing to Your Doorstep</h1>
        <p class="hiw-hero-text">
            Buying certified renewed electronics with Re-NewTech takes just 5 easy steps — here's exactly what to expect.
        </p>
    </div>

    <!-- STEPS -->
    <div class="hiw-steps">

        <div class="hiw-step">
            <div class="hiw-step-marker">
                <span>1</span>
            </div>
            <div class="hiw-step-card">
                <div class="hiw-step-icon"><i class="bi bi-person-plus-fill"></i></div>
                <h5>Register or Login</h5>
                <p>Create a new account or log in to your existing Re-NewTech account to get started.</p>
            </div>
        </div>

        <div class="hiw-step">
            <div class="hiw-step-marker">
                <span>2</span>
            </div>
            <div class="hiw-step-card">
                <div class="hiw-step-icon"><i class="bi bi-search"></i></div>
                <h5>Browse Products</h5>
                <p>Explore certified laptops, smartphones and components, filtered by condition and budget.</p>
            </div>
        </div>

        <div class="hiw-step">
            <div class="hiw-step-marker">
                <span>3</span>
            </div>
            <div class="hiw-step-card">
                <div class="hiw-step-icon"><i class="bi bi-cart-plus-fill"></i></div>
                <h5>Add to Cart</h5>
                <p>Add selected items to your cart or wishlist to review before checking out.</p>
            </div>
        </div>

        <div class="hiw-step">
            <div class="hiw-step-marker">
                <span>4</span>
            </div>
            <div class="hiw-step-card">
                <div class="hiw-step-icon"><i class="bi bi-credit-card-fill"></i></div>
                <h5>Enter Address & Pay</h5>
                <p>Fill in your shipping address and choose UPI, Card, Net Banking or Cash on Delivery.</p>
            </div>
        </div>

        <div class="hiw-step">
            <div class="hiw-step-marker">
                <span>5</span>
            </div>
            <div class="hiw-step-card">
                <div class="hiw-step-icon"><i class="bi bi-truck"></i></div>
                <h5>Receive Your Device</h5>
                <p>Get your order delivered safely, backed by a 6-month warranty and 7-day replacement.</p>
            </div>
        </div>

    </div>

    <!-- WHAT'S INCLUDED -->
    <div class="hiw-included">

        <div class="hiw-included-head">
            <span class="hiw-eyebrow">With Every Order</span>
            <h2>What's included, no matter what you buy</h2>
        </div>

        <div class="row g-4">

            <div class="col-md-3 col-6">
                <div class="hiw-included-card">
                    <i class="bi bi-shield-check"></i>
                    <strong>50-Point Check</strong>
                    <span>Before it's listed</span>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="hiw-included-card">
                    <i class="bi bi-arrow-counterclockwise"></i>
                    <strong>6 Month Warranty</strong>
                    <span>On every device</span>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="hiw-included-card">
                    <i class="bi bi-box-seam"></i>
                    <strong>7-Day Replacement</strong>
                    <span>No questions asked</span>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="hiw-included-card">
                    <i class="bi bi-headset"></i>
                    <strong>Live Support</strong>
                    <span>Mon – Sat, 10–7</span>
                </div>
            </div>

        </div>

    </div>

    <!-- CTA -->
    <div class="hiw-cta">
        <h4>Ready to start shopping?</h4>
        <p>Explore certified renewed laptops, phones and more — at prices that make sense.</p>
        <a href="products.php" class="hiw-cta-btn">
            Browse Products <i class="bi bi-arrow-right"></i>
        </a>
    </div>

</div>
</div>

<?php
$page_content = ob_get_clean();
require_once 'layout.php';
?>