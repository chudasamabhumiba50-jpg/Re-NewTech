<?php
$page_title = "Shopping Cart - Re-NewTech";


$product_id = isset($_GET['id']) ? (int)$_GET['id'] : 1;


$all_products = [
    1 => [
        'id' => 1,
        'name' => 'Refurbished ThinkPad T480 (Core i5, 16GB RAM)',
        'category' => 'Laptops',
        'condition' => 'Certified Renewed (Grade A)',
        'price' => 22500,
        'original_price' => 65000,
        'qty' => 1,
        'image' => 'https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=800&q=80',
        'co2_saved' => 140
    ],
    2 => [
        'id' => 2,
        'name' => 'Apple iPhone 11 - 128GB (Renewed)',
        'category' => 'Smartphones',
        'condition' => 'Certified Renewed (Grade A)',
        'price' => 19999,
        'original_price' => 49900,
        'qty' => 1,
        'image' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=800&q=80',
        'co2_saved' => 75
    ]
];


$cart_items = [
    $all_products[$product_id] ?? $all_products[1]
];

$subtotal = 0;
$total_co2 = 0;
foreach ($cart_items as $item) {
    $subtotal += ($item['price'] * $item['qty']);
    $total_co2 += ($item['co2_saved'] * $item['qty']);
}
$shipping = 0; 
$grand_total = $subtotal + $shipping;

ob_start();
?>

<!-- Custom CSS for Re-NewTech Cart -->
<style>
    :root {
        --primary-color: #0f5132;
        --primary-hover: #0b3d26;
        --bg-light: #f4f7f6;
        --card-shadow: 0 10px 25px rgba(0,0,0,0.05);
        --border-radius: 16px;
    }

    body {
        background-color: var(--bg-light);
    }

    .cart-card {
        background: #ffffff;
        border-radius: var(--border-radius);
        padding: 24px;
        border: 1px solid rgba(0,0,0,0.06);
        box-shadow: var(--card-shadow);
    }

    .product-img-thumb {
        width: 85px;
        height: 85px;
        object-fit: contain;
        background: #f8f9fa;
        border-radius: 12px;
        padding: 6px;
    }

    .eco-banner {
        background: linear-gradient(135deg, #e6f4ea 0%, #d1e7dd 100%);
        border: 1px solid #a3cfbb;
        border-radius: 12px;
        padding: 16px;
    }

    .btn-checkout {
        background-color: var(--primary-color);
        color: #ffffff;
        border-radius: 12px;
        padding: 14px 20px;
        font-weight: 600;
        border: none;
        transition: all 0.2s ease;
    }
    .btn-checkout:hover {
        background-color: var(--primary-hover);
        color: #ffffff;
        transform: translateY(-2px);
    }

    .qty-select {
        max-width: 80px;
        border-radius: 8px;
    }
</style>

<div class="container py-4">

    <!-- BREADCRUMB -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-4 small">
            <li class="breadcrumb-item"><a href="products.php" class="text-decoration-none text-success fw-semibold">Re-NewTech Catalog</a></li>
            <li class="breadcrumb-item active text-muted" aria-current="page">Shopping Cart</li>
        </ol>
    </nav>

    <h3 class="fw-bold text-dark mb-4"><i class="bi bi-cart3 me-2 text-success"></i> Your Shopping Cart</h3>

    <div class="row g-4">

        <!-- LEFT COLUMN: CART ITEMS LIST -->
        <div class="col-lg-8">
            <div class="cart-card mb-4">
                <div class="d-flex justify-content-between align-items-center pb-3 mb-3 border-bottom">
                    <span class="fw-bold text-dark">Cart Items (<?php echo count($cart_items); ?>)</span>
                    <a href="products.php" class="text-success text-decoration-none small fw-semibold">
                        <i class="bi bi-arrow-left me-1"></i> Continue Shopping
                    </a>
                </div>

                <!-- CART ITEM ROW -->
                <?php foreach ($cart_items as $index => $item): ?>
                    <div class="row align-items-center py-3 <?php echo $index !== count($cart_items) - 1 ? 'border-bottom' : ''; ?>">
                        <div class="col-3 col-md-2 text-center">
                            <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>" class="product-img-thumb border">
                        </div>
                        <div class="col-9 col-md-5">
                            <span class="badge bg-success-subtle text-success border border-success mb-1" style="font-size: 0.7rem;">
                                <?php echo $item['condition']; ?>
                            </span>
                            <h6 class="fw-bold text-dark mb-1"><?php echo $item['name']; ?></h6>
                            <p class="text-muted mb-0 small">Category: <?php echo $item['category']; ?></p>
                            <p class="text-success mb-0 small"><i class="bi bi-tree-fill me-1"></i> Saves ~<?php echo $item['co2_saved']; ?>kg CO2</p>
                        </div>
                        <div class="col-6 col-md-2 mt-3 mt-md-0">
                            <label class="text-muted small d-block mb-1">Qty</label>
                            <select class="form-select form-select-sm qty-select">
                                <option value="1" <?php echo $item['qty'] == 1 ? 'selected' : ''; ?>>1</option>
                                <option value="2" <?php echo $item['qty'] == 2 ? 'selected' : ''; ?>>2</option>
                                <option value="3" <?php echo $item['qty'] == 3 ? 'selected' : ''; ?>>3</option>
                            </select>
                        </div>
                        <div class="col-6 col-md-3 text-end mt-3 mt-md-0">
                            <span class="fs-6 fw-bold text-dark d-block">₹<?php echo number_format($item['price'] * $item['qty']); ?></span>
                            <span class="text-muted text-decoration-line-through small">₹<?php echo number_format($item['original_price'] * $item['qty']); ?></span>
                            <a href="#" class="text-danger d-block mt-2 text-decoration-none small" title="Remove item">
                                <i class="bi bi-trash me-1"></i> Remove
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

            <!-- GREEN IMPACT SUMMARY -->
            <div class="eco-banner d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="fw-bold text-success mb-1"><i class="bi bi-globe-americas me-2"></i> Your Positive Eco Impact</h6>
                    <p class="mb-0 text-dark small">By choosing renewed devices, you prevent e-waste and reduce carbon emissions!</p>
                </div>
                <div class="text-end">
                    <span class="fs-4 fw-bold text-success"><?php echo $total_co2; ?> kg</span>
                    <span class="d-block small text-dark fw-semibold">CO2 Prevented</span>
                </div>
            </div>
        </div>

        <!-- RIGHT COLUMN: ORDER SUMMARY -->
        <div class="col-lg-4">
            <div class="cart-card">
                <h5 class="fw-bold text-dark mb-3">Order Summary</h5>

                <div class="d-flex justify-content-between mb-2 text-secondary">
                    <span>Subtotal</span>
                    <strong class="text-dark">₹<?php echo number_format($subtotal); ?></strong>
                </div>

                <div class="d-flex justify-content-between mb-2 text-secondary">
                    <span>Shipping Charges</span>
                    <strong class="text-success">FREE</strong>
                </div>

                <div class="d-flex justify-content-between mb-3 text-secondary">
                    <span>Certified Quality Check</span>
                    <strong class="text-success">Included</strong>
                </div>

                <hr>

                <div class="d-flex justify-content-between mb-4">
                    <span class="fs-5 fw-bold text-dark">Grand Total</span>
                    <span class="fs-4 fw-bold text-success">₹<?php echo number_format($grand_total); ?></span>
                </div>

                <!-- CHECKOUT BUTTON -->
                <a href="checkout.php?id=<?php echo $product_id; ?>" class="btn btn-checkout w-100 text-center d-flex align-items-center justify-content-center gap-2 text-decoration-none">
                    Proceed to Checkout <i class="bi bi-arrow-right"></i>
                </a>

                <!-- TRUST BADGES -->
                <div class="mt-4 pt-3 border-top text-center text-muted small">
                    <div class="row g-2">
                        <div class="col-6"><i class="bi bi-shield-check text-success me-1"></i> Safe & Secure</div>
                        <div class="col-6"><i class="bi bi-truck text-primary me-1"></i> Fast Delivery</div>
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