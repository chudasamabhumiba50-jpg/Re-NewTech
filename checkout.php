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

<style>
    :root {
        --primary-color: #0f5132;
        --bg-light: #f4f7f6;
        --card-shadow: 0 10px 25px rgba(0,0,0,0.05);
        --border-radius: 16px;
    }
    body { background-color: var(--bg-light); }
    .checkout-card {
        background: #ffffff;
        border-radius: var(--border-radius);
        padding: 28px;
        border: 1px solid rgba(0,0,0,0.06);
        box-shadow: var(--card-shadow);
    }
    .payment-option-card {
        border: 1px solid #cbd5e1;
        border-radius: 12px;
        padding: 16px;
        cursor: pointer;
    }
    .btn-place-order {
        background-color: var(--primary-color);
        color: #ffffff;
        border-radius: 12px;
        padding: 14px 20px;
        font-weight: 600;
        border: none;
    }
</style>

<div class="container py-4">
    <h3 class="fw-bold text-dark mb-4"><i class="bi bi-shield-lock-fill me-2 text-success"></i> Checkout</h3>

    <form action="order_success.php" method="GET">
        <div class="row g-4">
            <div class="col-lg-7">
                <div class="checkout-card mb-4">
                    <h5 class="fw-bold text-dark mb-3">1. Shipping Address</h5>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label small fw-semibold">Full Name</label>
                            <input type="text" class="form-control" placeholder="Rahul Sharma" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-semibold">Phone Number</label>
                            <input type="tel" class="form-control" placeholder="+91 98765 43210" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label small fw-semibold">Address</label>
                            <input type="text" class="form-control" placeholder="123, Green Park, Main Road" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-semibold">City</label>
                            <input type="text" class="form-control" placeholder="Ahmedabad" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-semibold">Pincode</label>
                            <input type="text" class="form-control" placeholder="380001" required>
                        </div>
                    </div>
                </div>

                <div class="checkout-card">
                    <h5 class="fw-bold text-dark mb-3">2. Payment Method</h5>
                    <div class="d-flex flex-column gap-3">
                        <label class="payment-option-card d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <input type="radio" name="payment_method" value="upi" checked>
                                <div>
                                    <strong class="d-block text-dark">UPI / Google Pay / PhonePe</strong>
                                </div>
                            </div>
                            <i class="bi bi-qr-code-scan fs-4 text-success"></i>
                        </label>
                        <label class="payment-option-card d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <input type="radio" name="payment_method" value="cod">
                                <div>
                                    <strong class="d-block text-dark">Cash on Delivery (COD)</strong>
                                </div>
                            </div>
                            <i class="bi bi-cash-stack fs-4 text-warning"></i>
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="checkout-card">
                    <h5 class="fw-bold text-dark mb-3">Order Summary</h5>
                    <?php foreach($order_items as $item): ?>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="fw-semibold text-dark small"><?php echo $item['name']; ?></span>
                            <span class="fw-bold text-dark small">₹<?php echo number_format($item['price']); ?></span>
                        </div>
                    <?php endforeach; ?>
                    <hr>
                    <div class="d-flex justify-content-between mb-4">
                        <span class="fs-5 fw-bold text-dark">Total</span>
                        <span class="fs-4 fw-bold text-success">₹<?php echo number_format($grand_total); ?></span>
                    </div>
                    <button type="submit" class="btn btn-place-order w-100">Place Order Now</button>
                </div>
            </div>
        </div>
    </form>
</div>

<?php
$page_content = ob_get_clean();
require_once 'layout.php';
?>