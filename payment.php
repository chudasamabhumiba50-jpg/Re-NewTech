<?php
$page_title = "Payment - Re-NewTech";

$order_total = 22500;

ob_start();
?>



<div class="container py-4 payment-wrapper">

    <h3 class="fw-bold text-dark mb-4">
        <i class="bi bi-credit-card-2-front-fill me-2 text-success"></i>
        Payment
    </h3>

    <div class="payment-summary-strip">
        <div>
            <small>Amount Payable</small>
            <strong>₹<?php echo number_format($order_total); ?></strong>
        </div>
        <i class="bi bi-shield-lock-fill fs-4" style="color: var(--teal);"></i>
    </div>

    <div class="payment-card">

        <div class="pay-tabs">
            <button type="button" class="pay-tab-btn active" data-tab="upi">
                <i class="bi bi-phone"></i> UPI
            </button>
            <button type="button" class="pay-tab-btn" data-tab="card">
                <i class="bi bi-credit-card"></i> Card
            </button>
            <button type="button" class="pay-tab-btn" data-tab="netbanking">
                <i class="bi bi-bank"></i> Net Banking
            </button>
            <button type="button" class="pay-tab-btn" data-tab="cod">
                <i class="bi bi-cash-stack"></i> COD
            </button>
        </div>

        <!-- UPI -->
        <div class="pay-panel active" id="panel-upi">

            <label class="pay-form-label">Choose UPI App</label>

            <div class="upi-app-grid">
                <div class="upi-app-option selected">
                    <i class="bi bi-google"></i>
                    <span>Google Pay</span>
                </div>
                <div class="upi-app-option">
                    <i class="bi bi-phone-vibrate"></i>
                    <span>PhonePe</span>
                </div>
                <div class="upi-app-option">
                    <i class="bi bi-wallet2"></i>
                    <span>Paytm</span>
                </div>
            </div>

            <label class="pay-form-label">UPI ID</label>
            <input type="text" class="form-control" placeholder="yourname@upi">
        </div>

        <!-- CARD -->
        <div class="pay-panel" id="panel-card">

            <label class="pay-form-label">Cardholder Name</label>
            <input type="text" class="form-control mb-3" placeholder="Demo name">

            <label class="pay-form-label">Card Number</label>
            <input type="text" class="form-control mb-3" placeholder="Demo card number" maxlength="19">

            <div class="row">
                <div class="col-6">
                    <label class="pay-form-label">Expiry</label>
                    <input type="text" class="form-control mb-3" placeholder="MM/YY">
                </div>
                <div class="col-6">
                    <label class="pay-form-label">CVV</label>
                    <input type="password" class="form-control mb-3" placeholder="***" maxlength="4">
                </div>
            </div>
        </div>

        <!-- NET BANKING -->
        <div class="pay-panel" id="panel-netbanking">

            <label class="pay-form-label">Select Bank</label>

            <select class="form-select">
                <option value="">Choose your bank</option>
                <option>State Bank of India</option>
                <option>HDFC Bank</option>
                <option>ICICI Bank</option>
                <option>Axis Bank</option>
                <option>Bank of Baroda</option>
            </select>
        </div>

        <!-- COD -->
        <div class="pay-panel" id="panel-cod">

            <div class="cod-note-box">
                <i class="bi bi-info-circle-fill"></i>
                <p>
                    Pay in cash when your order is delivered.
                    No advance payment required for Cash on Delivery.
                </p>
            </div>
        </div>

        <button type="button" class="btn btn-place-order w-100 mt-4" id="payNowBtn">
            Pay ₹<?php echo number_format($order_total); ?>
        </button>

        <div class="secure-note">
            <i class="bi bi-shield-check"></i>
            100% secure demo payment — no real transaction is processed.
        </div>

    </div>
</div>

<!-- Processing Overlay -->
<div class="processing-overlay" id="processingOverlay">
    <div class="processing-box">
        <div class="processing-spinner"></div>
        <h5>Processing Payment...</h5>
        <p>Please do not refresh or close this page.</p>
    </div>
</div>

<?php
$page_content = ob_get_clean();
require_once 'layout.php';
?>