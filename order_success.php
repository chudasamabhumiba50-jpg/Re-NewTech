<?php
$page_title = "Order Placed Successfully - Re-NewTech";

// Dynamic/Dummy Order Data
$order_id = "RNT-" . rand(100000, 999999);
$order_date = date("d M Y");
$payment_method = isset($_GET['payment_method']) ? strtoupper($_GET['payment_method']) : 'UPI / Online';

// Dummy Purchased Product
$ordered_item = [
    'name' => 'Refurbished ThinkPad T480 (Core i5, 16GB RAM)',
    'category' => 'Laptops',
    'price' => 22500,
    'co2_saved' => 140,
    'image' => 'https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=800&q=80'
];

ob_start();
?>

<div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-lg-8">
            
            <div class="success-card text-center mb-4">
                <!-- SUCCESS ICON -->
                <div class="success-icon">
                    <i class="bi bi-check-circle-fill"></i>
                </div>

                <h2 class="fw-bold text-dark mb-2">Thank You For Your Order!</h2>
                <p class="text-muted mb-4">Your order has been placed successfully and is being processed by Re-NewTech certified technicians.</p>

                <div class="d-flex justify-content-center gap-4 text-start bg-light p-3 rounded-3 mb-4">
                    <div>
                        <span class="text-muted small d-block">Order ID</span>
                        <strong class="text-dark"><?php echo $order_id; ?></strong>
                    </div>
                    <div class="border-end"></div>
                    <div>
                        <span class="text-muted small d-block">Order Date</span>
                        <strong class="text-dark"><?php echo $order_date; ?></strong>
                    </div>
                    <div class="border-end"></div>
                    <div>
                        <span class="text-muted small d-block">Payment Mode</span>
                        <strong class="text-success"><?php echo $payment_method; ?></strong>
                    </div>
                </div>

                <!-- GREEN IMPACT CERTIFICATE -->
                <div class="eco-certificate-box text-start mb-4">
                    <div class="d-flex align-items-center gap-3">
                        <i class="bi bi-tree-fill text-success fs-1"></i>
                        <div>
                            <h6 class="fw-bold text-success mb-1">🌱 Green Champion Certificate</h6>
                            <p class="mb-0 text-dark small">
                                Congratulations! By choosing a certified renewed device instead of buying new, you saved approximately 
                                <strong><?php echo $ordered_item['co2_saved']; ?> kg of CO2 emissions</strong> and prevented tech waste.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- ORDER SUMMARY DETAILS -->
                <h5 class="fw-bold text-dark text-start mb-3">Order Details</h5>
                <div class="border rounded-3 p-3 text-start mb-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-3">
                            <img src="<?php echo $ordered_item['image']; ?>" alt="Product" class="product-thumb border">
                            <div>
                                <h6 class="fw-bold text-dark mb-1"><?php echo $ordered_item['name']; ?></h6>
                                <span class="badge bg-success-subtle text-success border border-success">Certified Renewed</span>
                            </div>
                        </div>
                        <div class="text-end">
                            <span class="fs-6 fw-bold text-dark d-block">₹<?php echo number_format($ordered_item['price']); ?></span>
                            <span class="text-success small"><i class="bi bi-truck me-1"></i> Free Express Delivery</span>
                        </div>
                    </div>
                </div>

                <!-- BUTTONS -->
                <div class="d-flex justify-content-center gap-3">
                    <a href="products.php" class="btn btn-home text-decoration-none d-inline-flex align-items-center gap-2">
                        <i class="bi bi-bag-fill"></i> Continue Shopping
                    </a>
                    <button onclick="window.print()" class="btn btn-outline-secondary rounded-3 px-4">
                        <i class="bi bi-printer me-1"></i> Print Receipt
                    </button>
                </div>

            </div>

        </div>
    </div>

</div>

<?php
$page_content = ob_get_clean();
require_once 'layout.php';
?>