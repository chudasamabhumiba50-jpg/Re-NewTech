<?php
$page_title = "Payment - Re-NewTech";

$order_total = 22500;

ob_start();
?>

<style>
    .payment-wrapper {
        max-width: 760px;
        margin: 0 auto;
    }

    .payment-summary-strip {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
        padding: 18px 22px;
        margin-bottom: 22px;
        background: var(--navy);
        border-radius: 14px;
        color: white;
    }

    .payment-summary-strip small {
        display: block;
        margin-bottom: 3px;
        color: rgba(255, 255, 255, 0.6);
        font-size: 0.68rem;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    .payment-summary-strip strong {
        font-size: 1.4rem;
        color: var(--teal);
    }

    .payment-card {
        background: var(--white);
        border: 1px solid var(--line);
        border-radius: 16px;
        padding: 26px;
        box-shadow: 0 10px 25px rgba(11, 18, 32, 0.05);
    }

    .pay-tabs {
        display: flex;
        gap: 8px;
        margin-bottom: 24px;
        border-bottom: 1px solid var(--line);
        overflow-x: auto;
    }

    .pay-tab-btn {
        display: flex;
        align-items: center;
        gap: 7px;
        padding: 11px 16px;
        border: none;
        background: none;
        color: var(--muted);
        font-size: 0.8rem;
        font-weight: 700;
        white-space: nowrap;
        border-bottom: 2px solid transparent;
        cursor: pointer;
        transition: 0.2s ease;
    }

    .pay-tab-btn.active {
        color: var(--navy);
        border-bottom-color: var(--teal);
    }

    .pay-tab-btn:hover {
        color: var(--navy);
    }

    .pay-panel {
        display: none;
    }

    .pay-panel.active {
        display: block;
    }

    .pay-form-label {
        font-size: 0.78rem;
        font-weight: 700;
        color: var(--text);
        margin-bottom: 6px;
        display: block;
    }

    .upi-app-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
        margin-bottom: 18px;
    }

    .upi-app-option {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 8px;
        padding: 16px 10px;
        border: 1px solid var(--line);
        border-radius: 12px;
        cursor: pointer;
        transition: 0.2s ease;
    }

    .upi-app-option i {
        font-size: 1.4rem;
        color: var(--violet);
    }

    .upi-app-option span {
        font-size: 0.68rem;
        font-weight: 700;
        color: var(--text);
    }

    .upi-app-option:hover,
    .upi-app-option.selected {
        border-color: var(--teal);
        background: var(--teal-soft);
    }

    .cod-note-box {
        display: flex;
        gap: 14px;
        padding: 18px;
        background: var(--cream);
        border: 1px solid var(--line);
        border-radius: 12px;
    }

    .cod-note-box i {
        font-size: 1.4rem;
        color: #d49b32;
    }

    .cod-note-box p {
        margin: 0;
        color: var(--muted);
        font-size: 0.8rem;
        line-height: 1.7;
    }

    .secure-note {
        display: flex;
        align-items: center;
        gap: 7px;
        margin-top: 18px;
        color: var(--muted);
        font-size: 0.72rem;
    }

    .secure-note i {
        color: var(--teal-dark);
    }

    /* Processing Overlay */
    .processing-overlay {
        position: fixed;
        inset: 0;
        z-index: 999;
        display: none;
        align-items: center;
        justify-content: center;
        background: rgba(11, 18, 32, 0.88);
    }

    .processing-overlay.show {
        display: flex;
    }

    .processing-box {
        text-align: center;
        color: white;
    }

    .processing-spinner {
        width: 54px;
        height: 54px;
        margin: 0 auto 18px;
        border: 4px solid rgba(255, 255, 255, 0.15);
        border-top-color: var(--teal);
        border-radius: 50%;
        animation: spin 0.8s linear infinite;
    }

    @keyframes spin {
        to {
            transform: rotate(360deg);
        }
    }

    .processing-box h5 {
        margin-bottom: 6px;
        font-weight: 700;
    }

    .processing-box p {
        margin: 0;
        color: rgba(255, 255, 255, 0.6);
        font-size: 0.8rem;
    }
</style>

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

<script>
    const tabButtons = document.querySelectorAll('.pay-tab-btn');
    const panels = document.querySelectorAll('.pay-panel');

    tabButtons.forEach(function (btn) {
        btn.addEventListener('click', function () {

            tabButtons.forEach(b => b.classList.remove('active'));
            panels.forEach(p => p.classList.remove('active'));

            this.classList.add('active');
            document.getElementById('panel-' + this.dataset.tab).classList.add('active');
        });
    });

    const upiOptions = document.querySelectorAll('.upi-app-option');
    upiOptions.forEach(function (opt) {
        opt.addEventListener('click', function () {
            upiOptions.forEach(o => o.classList.remove('selected'));
            this.classList.add('selected');
        });
    });

    document.getElementById('payNowBtn').addEventListener('click', function () {

        const overlay = document.getElementById('processingOverlay');
        overlay.classList.add('show');

        setTimeout(function () {
            window.location.href = 'order_success.php';
        }, 2200);
    });
</script>

<?php
$page_content = ob_get_clean();
require_once 'layout.php';
?>