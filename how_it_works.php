<?php
$page_title = "How It Works - Re-NewTech";
ob_start();
?>



<div class="container py-4">

    <!-- HERO SECTION -->
    <div class="hero-box text-center mb-5">
        <h2 class="fw-bold mb-2">How It Works</h2>
        <p class="lead mx-auto opacity-90" style="max-width: 650px;">
            Follow these simple steps to order certified renewed electronics from Re-NewTech.
        </p>
    </div>

    <!-- 5 STEPS ORDERING PROCESS -->
    <div class="row g-4 mb-5 justify-content-center">
        
        <!-- STEP 1: REGISTER / LOGIN -->
        <div class="col-md-6 col-lg-4">
            <div class="step-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="step-number">1</div>
                    <div class="icon-box"><i class="bi bi-person-plus"></i></div>
                </div>
                <h5 class="fw-bold text-dark mb-2">Register or Login</h5>
                <p class="text-secondary small mb-0">
                    Create a new account or log in to your existing Re-NewTech account to get started.
                </p>
            </div>
        </div>

        <!-- STEP 2: BROWSE & CHOOSE -->
        <div class="col-md-6 col-lg-4">
            <div class="step-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="step-number">2</div>
                    <div class="icon-box"><i class="bi bi-search"></i></div>
                </div>
                <h5 class="fw-bold text-dark mb-2">Browse Products</h5>
                <p class="text-secondary small mb-0">
                    Explore our range of certified laptops and smartphones and choose the best product for you.
                </p>
            </div>
        </div>

        <!-- STEP 3: ADD TO CART -->
        <div class="col-md-6 col-lg-4">
            <div class="step-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="step-number">3</div>
                    <div class="icon-box"><i class="bi bi-cart-plus"></i></div>
                </div>
                <h5 class="fw-bold text-dark mb-2">Add to Cart</h5>
                <p class="text-secondary small mb-0">
                    Add selected items to your shopping cart or wishlist to review before checkout.
                </p>
            </div>
        </div>

        <!-- STEP 4: CHECKOUT & PAYMENT -->
        <div class="col-md-6 col-lg-4">
            <div class="step-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="step-number">4</div>
                    <div class="icon-box"><i class="bi bi-credit-card"></i></div>
                </div>
                <h5 class="fw-bold text-dark mb-2">Enter Address & Pay</h5>
                <p class="text-secondary small mb-0">
                    Fill in your shipping address and choose your payment method (UPI, Card, or Cash on Delivery).
                </p>
            </div>
        </div>

        <!-- STEP 5: DOORSTEP DELIVERY -->
        <div class="col-md-6 col-lg-4">
            <div class="step-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="step-number">5</div>
                    <div class="icon-box"><i class="bi bi-truck"></i></div>
                </div>
                <h5 class="fw-bold text-dark mb-2">Receive Your Device</h5>
                <p class="text-secondary small mb-0">
                    Get your order delivered safely to your door with 6 Months Warranty and 7 Days Replacement.
                </p>
            </div>
        </div>

    </div>

    <!-- CALL TO ACTION BANNER -->
    <div class="bg-white p-4 rounded-4 border text-center shadow-sm mb-4">
        <h4 class="fw-bold text-dark mb-2">Ready to Start Shopping?</h4>
        <p class="text-muted small mb-3">Explore top certified refurbished products today.</p>
        <a href="products.php" class="btn btn-success px-4 py-2 rounded-3 fw-semibold">
            Browse Products <i class="bi bi-arrow-right ms-1"></i>
        </a>
    </div>

</div>

<?php
$page_content = ob_get_clean();
require_once 'layout.php';
?>