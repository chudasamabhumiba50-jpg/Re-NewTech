<?php
$page_title = "Checkout - Re-NewTech";

$order_items = [
    [
        'name' => 'Refurbished ThinkPad T480 (16GB RAM)',
        'qty' => 1,
        'price' => 22500
    ]
];

$subtotal = 22500;
$shipping = 0;
$grand_total = $subtotal + $shipping;

ob_start();
?>

<div class="container py-4">

    <div class="checkout-step-badge">
    <i class="bi bi-shield-check"></i> Secure Checkout
</div>

    <h3 class="fw-bold text-dark mb-4">
        <i class="bi bi-shield-lock-fill me-2 text-success"></i>
        Checkout
    </h3>

       <form id="checkoutForm" action="order_success.php" method="get">
        <div class="row g-4">

            <!-- Left Side -->
            <div class="col-lg-7">

                <!-- Shipping Address -->
                <div class="checkout-card">
                    <h5 class="fw-bold text-dark mb-3">Shipping Address</h5>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label small fw-semibold">Full Name</label>
                            <input
                                type="text"
                                class="form-control"
                                name="full_name"
                                placeholder="Enter your full name"
                                data-validation="required alpha min max"
                                data-min="3"
                                data-max="50"
                            >
                            <span id="full_nameError" class="text-danger small"></span>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label small fw-semibold">Phone Number</label>
                            <input
                                type="tel"
                                class="form-control"
                                name="phone"
                                placeholder="98765 43210"
                                data-validation="required numeric min max"
                                data-min="10"
                                data-max="10"
                            >
                            <span id="phoneError" class="text-danger small"></span>
                        </div>

                        <div class="col-12">
                            <label class="form-label small fw-semibold">Address</label>
                            <input
                                type="text"
                                class="form-control"
                                name="address"
                                placeholder="House / Street / Area"
                                data-validation="required min max"
                                data-min="5"
                                data-max="120"
                            >
                            <span id="addressError" class="text-danger small"></span>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label small fw-semibold">City</label>
                            <input
                                type="text"
                                class="form-control"
                                name="city"
                                placeholder="Ahmedabad"
                                data-validation="required alpha min max"
                                data-min="2"
                                data-max="40"
                            >
                            <span id="cityError" class="text-danger small"></span>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label small fw-semibold">Pincode</label>
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
                            <span id="pincodeError" class="text-danger small"></span>
                        </div>
                    </div>

                    <p class="demo-note mt-3 mb-0">
    <i class="bi bi-info-circle me-1"></i>
    In a live application, you would be redirected to a secure payment gateway here.
</p>
                </div>
            </div>

            <!-- Right Side: Order Summary -->
            <div class="col-lg-5">
                <div class="checkout-card">
                    <h5 class="fw-bold text-dark mb-3">Order Summary</h5>

                    <?php foreach($order_items as $item): ?>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="fw-semibold text-dark small">
                                <?php echo $item['name']; ?>
                                <span class="text-muted">× <?php echo $item['qty']; ?></span>
                            </span>

                            <span class="fw-bold text-dark small">
                                ₹<?php echo number_format($item['price'] * $item['qty']); ?>
                            </span>
                        </div>
                    <?php endforeach; ?>

                    <hr>

                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted">Subtotal</span>
                        <span>₹<?php echo number_format($subtotal); ?></span>
                    </div>

                    <div class="d-flex justify-content-between mb-3">
                        <span class="text-muted">Shipping</span>
                        <span class="text-success">
                            <?php echo $shipping == 0 ? 'Free' : '₹' . number_format($shipping); ?>
                        </span>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-between mb-4">
                        <span class="fs-5 fw-bold text-dark">Total</span>
                        <span class="fs-4 fw-bold text-success">
                            ₹<?php echo number_format($grand_total); ?>
                        </span>
                    </div>

                    <button type="submit" class="btn btn-place-order w-100">
    Continue to Payment
    <i class="bi bi-arrow-right ms-1"></i>
</button>
                    <p class="text-muted small text-center mt-3 mb-0">
                        <i class="bi bi-shield-check me-1"></i>
                        Secure checkout demo
                    </p>
                </div>
            </div>

        </div>
    </form>
</div>

<?php
$page_content = ob_get_clean();
require_once 'layout.php';
?>