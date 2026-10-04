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
        <span class="cart-count-chip"><?php echo count($cart_items); ?> item<?php echo count($cart_items) !== 1 ? 's' : ''; ?></span>
    </div>

    <div class="row g-4">

        <!-- LEFT: CART ITEMS -->
        <div class="col-lg-8">

            <div class="cart-items-wrap">

                <?php foreach ($cart_items as $item): ?>
                    <div class="cart-item-card">

                        <div class="cart-item-img">
                            <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>">
                        </div>

                        <div class="cart-item-info">
                            <span class="cart-condition-tag"><?php echo $item['condition']; ?></span>
                            <h3 class="cart-item-name"><?php echo $item['name']; ?></h3>
                            <p class="cart-item-category"><?php echo $item['category']; ?></p>
                        </div>

                        <div class="cart-item-qty">
                            <label>Qty</label>
                            <select class="cart-qty-select">
                                <option value="1" <?php echo $item['qty'] == 1 ? 'selected' : ''; ?>>1</option>
                                <option value="2" <?php echo $item['qty'] == 2 ? 'selected' : ''; ?>>2</option>
                                <option value="3" <?php echo $item['qty'] == 3 ? 'selected' : ''; ?>>3</option>
                            </select>
                        </div>

                        <div class="cart-item-price">
                            <strong>₹<?php echo number_format($item['price'] * $item['qty']); ?></strong>
                            <span>₹<?php echo number_format($item['original_price'] * $item['qty']); ?></span>
                            <a href="#" class="cart-remove-link"><i class="bi bi-trash3"></i> Remove</a>
                        </div>

                    </div>
                <?php endforeach; ?>

                <a href="products.php" class="cart-continue-link">
                    <i class="bi bi-arrow-left"></i> Continue Shopping
                </a>

            </div>

           <!-- ECO IMPACT BANNER -->
<div class="cart-eco-banner">
    <div class="cart-eco-icon"><i class="bi bi-globe-americas"></i></div>
    <div class="cart-eco-text">
        <strong>Renewed Device Impact</strong>
        <span>This purchase offsets approximately <?php echo $total_co2; ?>kg of CO2 compared to buying new.</span>
    </div>
    <div class="cart-eco-stat">
        <strong><?php echo $total_co2; ?> kg</strong>
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
                    <strong>₹<?php echo number_format($subtotal); ?></strong>
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
                    <strong>₹<?php echo number_format($grand_total); ?></strong>
                </div>

                <a href="checkout.php?id=<?php echo $product_id; ?>" class="cart-checkout-btn">
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