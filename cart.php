
<?php
session_start();

require_once 'db_config.php';

$page_title = "Shopping Cart - Re-NewTech";

// Create cart session if not available
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// ADD PRODUCT TO CART
if (isset($_GET['add'])) {

    $product_id = (int)$_GET['add'];

    if ($product_id > 0) {

        $stmt = mysqli_prepare($con, "SELECT id, stock FROM products WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "i", $product_id);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        $product = mysqli_fetch_assoc($result);

        if ($product && $product['stock'] > 0) {

            $current_qty = $_SESSION['cart'][$product_id] ?? 0;

            if ($current_qty < $product['stock']) {
                $_SESSION['cart'][$product_id] = $current_qty + 1;
            }
        }

        mysqli_stmt_close($stmt);
    }

    header("Location: cart.php");
    exit;
}

// UPDATE QUANTITY
if (isset($_POST['update_cart'])) {

    foreach ($_POST['quantity'] as $id => $qty) {

        $id = (int)$id;
        $qty = (int)$qty;

        $stmt = mysqli_prepare($con, "SELECT stock FROM products WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        $product = mysqli_fetch_assoc($result);

        if ($product) {

            if ($qty <= 0) {
                unset($_SESSION['cart'][$id]);
            } else {
                $_SESSION['cart'][$id] = min($qty, (int)$product['stock']);
            }
        }

        mysqli_stmt_close($stmt);
    }

    header("Location: cart.php");
    exit;
}

// REMOVE PRODUCT FROM CART
if (isset($_GET['remove'])) {

    $remove_id = (int)$_GET['remove'];

    unset($_SESSION['cart'][$remove_id]);

    header("Location: cart.php");
    exit;
}

// FETCH CART PRODUCTS
$cart_items = [];
$subtotal = 0;
$total_items = 0;
$total_co2 = 0;

foreach ($_SESSION['cart'] as $id => $qty) {

    $id = (int)$id;
    $qty = (int)$qty;

    $stmt = mysqli_prepare($con, "SELECT * FROM products WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $product = mysqli_fetch_assoc($result);

    mysqli_stmt_close($stmt);

    if ($product) {

        if ($qty > (int)$product['stock']) {
            $qty = (int)$product['stock'];
            $_SESSION['cart'][$id] = $qty;
        }

        if ($qty <= 0) {
            unset($_SESSION['cart'][$id]);
            continue;
        }

        $product['quantity'] = $qty;

        $cart_items[] = $product;

        $subtotal += $product['price'] * $qty;
        $total_items += $qty;
        $total_co2 += $product['co2_saved'] * $qty;
    }
}

ob_start();
?>

<div class="cart-page">
<div class="container py-4">

    <!-- BREADCRUMB -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-4 small">
            <li class="breadcrumb-item">
                <a href="products.php" class="text-decoration-none text-success fw-semibold">
                    Re-NewTech Catalog
                </a>
            </li>
            <li class="breadcrumb-item active text-muted" aria-current="page">
                Shopping Cart
            </li>
        </ol>
    </nav>

    <div class="cart-heading-row">
        <h1 class="cart-heading">
            <i class="bi bi-cart3"></i> Your Cart
        </h1>

        <span class="cart-count-chip">
            <?php echo $total_items; ?>
            <?php echo ($total_items == 1) ? 'item' : 'items'; ?>
        </span>
    </div>

    <div class="row g-4">

        <!-- LEFT: CART ITEMS -->
        <div class="col-lg-8">

            <div class="cart-items-wrap">

                <?php if (count($cart_items) > 0) { ?>

                    <form method="POST" action="cart.php">

                        <?php foreach ($cart_items as $item) { ?>

                            <div class="cart-item-card">

                                <div class="cart-item-img">
                                    <img
                                        src="<?php echo htmlspecialchars($item['image']); ?>"
                                        alt="<?php echo htmlspecialchars($item['name']); ?>">
                                </div>

                                <div class="cart-item-info">

                                    <span class="cart-condition-tag">
                                        <?php echo htmlspecialchars($item['item_condition']); ?>
                                    </span>

                                    <h3 class="cart-item-name">
                                        <?php echo htmlspecialchars($item['name']); ?>
                                    </h3>

                                    <p class="cart-item-category">
                                        <?php echo htmlspecialchars($item['category']); ?>
                                    </p>

                                </div>

                                <div class="cart-item-qty">

                                    <label>Qty</label>

                                    <select
                                        class="cart-qty-select"
                                        name="quantity[<?php echo $item['id']; ?>]"
                                        onchange="this.form.submit()">

                                        <?php for ($i = 1; $i <= $item['stock']; $i++) { ?>

                                            <option
                                                value="<?php echo $i; ?>"
                                                <?php echo ($item['quantity'] == $i) ? 'selected' : ''; ?>>

                                                <?php echo $i; ?>

                                            </option>

                                        <?php } ?>

                                    </select>

                                </div>

                                <div class="cart-item-price">

                                    <strong>
                                        ₹<?php echo number_format($item['price'] * $item['quantity']); ?>
                                    </strong>

                                    <span>
                                        ₹<?php echo number_format($item['old_price'] * $item['quantity']); ?>
                                    </span>

                                    <a
                                        href="cart.php?remove=<?php echo $item['id']; ?>"
                                        class="cart-remove-link">

                                        <i class="bi bi-trash3"></i> Remove

                                    </a>

                                </div>

                            </div>

                        <?php } ?>

                        <input type="hidden" name="update_cart" value="1">

                        <button type="submit" class="btn btn-outline-success btn-sm mt-2">
                            Update Cart
                        </button>

                    </form>

                <?php } else { ?>

                    <div class="text-center py-5">

                        <i class="bi bi-cart-x" style="font-size: 55px; color: #999;"></i>

                        <h4 class="mt-3">Your Cart is Empty</h4>

                        <p class="text-muted">
                            You haven't added any products to your cart yet.
                        </p>

                        <a href="products.php" class="btn btn-success mt-2">
                            Start Shopping
                        </a>

                    </div>

                <?php } ?>

                <a href="products.php" class="cart-continue-link">
                    <i class="bi bi-arrow-left"></i> Continue Shopping
                </a>

            </div>

            <?php if (count($cart_items) > 0) { ?>

                <!-- ECO IMPACT BANNER -->
                <div class="cart-eco-banner">

                    <div class="cart-eco-icon">
                        <i class="bi bi-globe-americas"></i>
                    </div>

                    <div class="cart-eco-text">
                        <strong>Renewed Device Impact</strong>

                        <span>
                            Your purchase offsets approximately
                            <?php echo $total_co2; ?>kg of CO2 compared to buying new.
                        </span>
                    </div>

                    <div class="cart-eco-stat">
                        <strong><?php echo $total_co2; ?> kg</strong>
                        <span>CO2 Offset</span>
                    </div>

                </div>

            <?php } ?>

        </div>

        <!-- RIGHT: ORDER SUMMARY -->
        <div class="col-lg-4">

            <div class="cart-summary-card">

                <h5 class="cart-summary-title">Order Summary</h5>

                <div class="cart-summary-row">
                    <span>Subtotal</span>

                    <strong>
                        ₹<?php echo number_format($subtotal); ?>
                    </strong>
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

                    <strong>
                        ₹<?php echo number_format($subtotal); ?>
                    </strong>
                </div>

                <?php if (count($cart_items) > 0) { ?>

                    <a href="checkout.php" class="cart-checkout-btn">
                        Proceed to Checkout
                        <i class="bi bi-arrow-right"></i>
                    </a>

                <?php } else { ?>

                    <a href="products.php" class="cart-checkout-btn">
                        Continue Shopping
                        <i class="bi bi-arrow-right"></i>
                    </a>

                <?php } ?>

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
