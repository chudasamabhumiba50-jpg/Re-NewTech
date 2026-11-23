
<?php
session_start();
require_once 'db_config.php';

// Check user login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$page_title = "Checkout - Re-NewTech";

// Get cart products
$cart_items = [];
$subtotal = 0;

if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {

    $cart_ids = array_keys($_SESSION['cart']);

    for ($i = 0; $i < count($cart_ids); $i++) {

        $id = (int)$cart_ids[$i];
        $qty = (int)$_SESSION['cart'][$id];

        $stmt = mysqli_prepare($con, "SELECT * FROM products WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        $product = mysqli_fetch_assoc($result);

        mysqli_stmt_close($stmt);

        if ($product && $qty > 0 && $qty <= (int)$product['stock']) {

            $product['quantity'] = $qty;
            $cart_items[] = $product;

            $subtotal += $product['price'] * $qty;
        }
    }
}

// If cart is empty, return to cart page
if (count($cart_items) == 0) {
    header("Location: cart.php");
    exit;
}

// Place order
$error = "";

if (isset($_POST['place_order'])) {

    $full_name = trim($_POST['full_name']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);
    $city = trim($_POST['city']);
    $state = trim($_POST['state']);
    $pincode = trim($_POST['pincode']);

    // Basic validation
    if ($full_name == "" || $phone == "" || $address == "" ||
        $city == "" || $state == "" || $pincode == "") {

        $error = "Please fill all the fields.";

    } elseif (!preg_match("/^[0-9]{10}$/", $phone)) {

        $error = "Please enter a valid 10 digit mobile number.";

    } elseif (!preg_match("/^[0-9]{6}$/", $pincode)) {

        $error = "Please enter a valid 6 digit pincode.";

    } else {

        $user_id = $_SESSION['user_id'];
        $email = $_SESSION['email'];

        // Insert order into orders table
        $stmt = mysqli_prepare($con, "INSERT INTO orders
            (user_id, fullname, email, mobile, address, city, state,
            pincode, total_amount, order_status, payment_method, payment_status)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, 'Pending', 'Not Required', 'Not Applicable')");

        mysqli_stmt_bind_param(
            $stmt,
             "isssssssd",    
            $user_id,
            $full_name,
            $email,
            $phone,
            $address,
            $city,
            $state,
            $pincode,
            $subtotal
        );

        // Correct parameter type string
        mysqli_stmt_execute($stmt);

        $order_id = mysqli_insert_id($con);

        mysqli_stmt_close($stmt);

        // Insert products into order_details
        for ($i = 0; $i < count($cart_items); $i++) {

            $product_id = $cart_items[$i]['id'];
            $product_name = $cart_items[$i]['name'];
            $price = $cart_items[$i]['price'];
            $quantity = $cart_items[$i]['quantity'];
            $item_total = $price * $quantity;

            $stmt = mysqli_prepare($con, "INSERT INTO order_details
                (order_id, product_id, product_name, price, quantity, subtotal)
                VALUES (?, ?, ?, ?, ?, ?)");

            mysqli_stmt_bind_param(
                $stmt,
                "iisdid",
                $order_id,
                $product_id,
                $product_name,
                $price,
                $quantity,
                $item_total
            );

            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            // Reduce product stock
            $stmt = mysqli_prepare($con, "UPDATE products
                SET stock = stock - ? WHERE id = ?");

            mysqli_stmt_bind_param($stmt, "ii", $quantity, $product_id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }

        // Clear cart after placing order
        unset($_SESSION['cart']);

        header("Location: order_success.php?order_id=" . $order_id);
        exit;
    }
}

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

    <?php if ($error != "") { ?>
        <div class="alert alert-danger">
            <?php echo htmlspecialchars($error); ?>
        </div>
    <?php } ?>

    <form id="checkoutForm" action="checkout.php" method="post">
        <div class="row g-4">

            <!-- Left Side -->
            <div class="col-lg-7">

                <!-- Shipping Address -->
                <div class="checkout-card">
                    <h5 class="fw-bold text-dark mb-3">Shipping Address</h5>

                    <div class="row g-3">

                        <div class="col-md-6">
                            <label class="form-label small fw-semibold">Full Name</label>
                            <input type="text" class="form-control"
                                name="full_name"
                                placeholder="Enter your full name"
                                value="<?php echo htmlspecialchars($_POST['full_name'] ?? $_SESSION['fullname']); ?>"
                                required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label small fw-semibold">Phone Number</label>
                            <input type="tel" class="form-control"
                                name="phone"
                                placeholder="98765 43210"
                                maxlength="10"
                                value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>"
                                required>
                        </div>

                        <div class="col-12">
                            <label class="form-label small fw-semibold">Address</label>
                            <input type="text" class="form-control"
                                name="address"
                                placeholder="House / Street / Area"
                                value="<?php echo htmlspecialchars($_POST['address'] ?? ''); ?>"
                                required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label small fw-semibold">City</label>
                            <input type="text" class="form-control"
                                name="city"
                                placeholder="Enter your city"
                                value="<?php echo htmlspecialchars($_POST['city'] ?? ''); ?>"
                                required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label small fw-semibold">State</label>
                            <input type="text" class="form-control"
                                name="state"
                                placeholder="Enter your state"
                                value="<?php echo htmlspecialchars($_POST['state'] ?? ''); ?>"
                                required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label small fw-semibold">Pincode</label>
                            <input type="text" class="form-control"
                                name="pincode"
                                placeholder="380001"
                                maxlength="6"
                                value="<?php echo htmlspecialchars($_POST['pincode'] ?? ''); ?>"
                                required>
                        </div>

                    </div>

                    <p class="demo-note mt-3 mb-0">
                        <i class="bi bi-info-circle me-1"></i>
                        No online payment is required. Your order will be placed directly.
                    </p>
                </div>
            </div>

            <!-- Right Side: Order Summary -->
            <div class="col-lg-5">
                <div class="checkout-card">
                    <h5 class="fw-bold text-dark mb-3">Order Summary</h5>

                    <?php for ($i = 0; $i < count($cart_items); $i++) { ?>

                        <div class="d-flex justify-content-between align-items-center mb-2">

                            <span class="fw-semibold text-dark small">
                                <?php echo htmlspecialchars($cart_items[$i]['name']); ?>
                                <span class="text-muted">
                                    × <?php echo $cart_items[$i]['quantity']; ?>
                                </span>
                            </span>

                            <span class="fw-bold text-dark small">
                                ₹<?php echo number_format(
                                    $cart_items[$i]['price'] * $cart_items[$i]['quantity']
                                ); ?>
                            </span>

                        </div>

                    <?php } ?>

                    <hr>

                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted">Subtotal</span>
                        <span>₹<?php echo number_format($subtotal); ?></span>
                    </div>

                    <div class="d-flex justify-content-between mb-3">
                        <span class="text-muted">Shipping</span>
                        <span class="text-success">Free</span>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-between mb-4">
                        <span class="fs-5 fw-bold text-dark">Total</span>
                        <span class="fs-4 fw-bold text-success">
                            ₹<?php echo number_format($subtotal); ?>
                        </span>
                    </div>

                    <button type="submit" name="place_order"
                        class="btn btn-place-order w-100">
                        Place Order
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
