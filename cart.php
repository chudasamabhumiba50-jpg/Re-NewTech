<?php
$page_title = "Shopping Cart - Re-NewTech";
 
ob_start();
?>
 
<div class="cart-page">
<div class="container py-4">
 
    <!-- BREADCRUMB -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-4 small">
            <li class="breadcrumb-item"><a href="products.php" class="text-decoration-none text-success fw-semibold">Re-NewTech Catalog</a></li>
            <li class="breadcrumb-item active text-muted" aria-current="page">Shopping Cart</li>
        </ol>
    </nav>
 
    <div class="cart-heading-row">
        <h1 class="cart-heading"><i class="bi bi-cart3"></i> Your Cart</h1>
        <span class="cart-count-chip">1 item</span>
    </div>
 
    <div class="row g-4">
 
        <!-- LEFT: CART ITEMS -->
        <div class="col-lg-8">
 
            <div class="cart-items-wrap">
 
                <div class="cart-item-card">
 
                    <div class="cart-item-img">
                        <img src="https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=800&q=80" alt="Refurbished ThinkPad T480 (Core i5, 16GB RAM)">
                    </div>
 
                    <div class="cart-item-info">
                        <span class="cart-condition-tag">Certified Renewed (Grade A)</span>
                        <h3 class="cart-item-name">Refurbished ThinkPad T480 (Core i5, 16GB RAM)</h3>
                        <p class="cart-item-category">Laptops</p>
                    </div>
 
                    <div class="cart-item-qty">
                        <label>Qty</label>
                        <select class="cart-qty-select">
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
 
                    <div class="cart-item-price">
                        <strong>₹22,500</strong>
                        <span>₹65,000</span>
                        <a href="#" class="cart-remove-link"><i class="bi bi-trash3"></i> Remove</a>
                    </div>
 
                </div>
 
                <a href="products.php" class="cart-continue-link">
                    <i class="bi bi-arrow-left"></i> Continue Shopping
                </a>
 
            </div>
 
           <!-- ECO IMPACT BANNER -->
<div class="cart-eco-banner">
    <div class="cart-eco-icon"><i class="bi bi-globe-americas"></i></div>
    <div class="cart-eco-text">
        <strong>Renewed Device Impact</strong>
        <span>This purchase offsets approximately 140kg of CO2 compared to buying new.</span>
    </div>
    <div class="cart-eco-stat">
        <strong>140 kg</strong>
        <span>CO2 Offset</span>
    </div>
</div>
                </div>
        <!-- RIGHT: ORDER SUMMARY -->
        <div class="col-lg-4">
            <div class="cart-summary-card">
 
                <h5 class="cart-summary-title">Order Summary</h5>
 
                <div class="cart-summary-row">
                    <span>Subtotal</span>
                    <strong>₹22,500</strong>
                </div>
 
                <div class="cart-summary-row">
                    <span>Shipping</span>
                    <strong class="cart-free-tag">FREE</strong>
                </div>
 
                <div class="cart-summary-row">
                    <span>Quality Check</span>
                    <strong class="cart-free-tag">Included</strong>
                </div>
 
                <div class="cart-summary-divider"></div>
 
                <div class="cart-summary-total">
                    <span>Grand Total</span>
                    <strong>₹22,500</strong>
                </div>
 
                <a href="checkout.php?id=1" class="cart-checkout-btn">
                    Proceed to Checkout <i class="bi bi-arrow-right"></i>
                </a>
 
                <div class="cart-trust-row">
                    <span><i class="bi bi-shield-check"></i> Safe & Secure</span>
                    <span><i class="bi bi-truck"></i> Fast Delivery</span>
                </div>
 
            </div>
        </div>
 
    </div>
 
</div>
</div>
 
<?php
$page_content = ob_get_clean();
require_once 'layout.php';
?>