
<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

require_once "db_config.php";

$user_id = $_SESSION['user_id'];

/* Get User Orders */
$query = "SELECT * FROM orders WHERE user_id = ? ORDER BY created_at DESC";

$stmt = mysqli_prepare($con, $query);
mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

$order_count = mysqli_num_rows($result);

ob_start();
?>

<div class="ord-page">
<div class="container py-4">

    <div class="ord-heading-row">
        <div>
            <h1 class="ord-heading">
                <i class="bi bi-bag-check-fill"></i> My Orders
            </h1>
            <p class="ord-subtext">
                Track and manage all your Re-NewTech orders.
            </p>
        </div>

        <span class="ord-count-chip">
            <?php echo $order_count; ?> Orders
        </span>
    </div>

    <div class="ord-list">

        <?php if ($order_count > 0) { ?>

            <?php while ($order = mysqli_fetch_assoc($result)) {

                $order_id = $order['id'];
                $status = strtolower($order['order_status']);

                /* Get Products of Current Order */
                $detail_query = "SELECT * FROM order_details WHERE order_id = ?";
                $detail_stmt = mysqli_prepare($con, $detail_query);

                mysqli_stmt_bind_param($detail_stmt, "i", $order_id);
                mysqli_stmt_execute($detail_stmt);

                $detail_result = mysqli_stmt_get_result($detail_stmt);

                $status_class = "status-shipped";

                if ($status == "delivered") {
                    $status_class = "status-delivered";
                } elseif ($status == "cancelled") {
                    $status_class = "status-cancelled";
                }
            ?>

                <div class="ord-card">

                    <div class="ord-card-top">

                        <div class="ord-id-block">
                            <span>Order Placed</span>
                            <strong>
                                <?php echo date("d M Y", strtotime($order['created_at'])); ?>
                            </strong>
                        </div>

                        <div class="ord-id-block">
                            <span>Order ID</span>
                            <strong>
                                #RNT<?php echo str_pad($order_id, 5, "0", STR_PAD_LEFT); ?>
                            </strong>
                        </div>

                        <div class="ord-id-block">
                            <span>Payment</span>
                            <strong>
                                <?php echo htmlspecialchars($order['payment_method']); ?>
                            </strong>
                        </div>

                        <div class="ord-id-block ord-id-block-right">
                            <span>Total</span>
                            <strong>
                                ₹<?php echo number_format($order['total_amount'], 2); ?>
                            </strong>
                        </div>

                    </div>

                    <div class="ord-card-body">

                        <?php while ($item = mysqli_fetch_assoc($detail_result)) { ?>

                            <div class="ord-item-row">

                                <div class="ord-item-icon">
                                    <i class="bi bi-box-seam"></i>
                                </div>

                                <div class="ord-item-info">
                                    <strong>
                                        <?php echo htmlspecialchars($item['product_name']); ?>
                                    </strong>

                                    <span>
                                        Qty: <?php echo $item['quantity']; ?>
                                    </span>
                                </div>

                                <div class="ord-item-price">
                                    ₹<?php echo number_format($item['subtotal'], 2); ?>
                                </div>

                            </div>

                        <?php } ?>

                    </div>

                    <div class="ord-card-foot">

                        <div class="ord-status-track <?php echo $status_class; ?>">

                            <div class="ord-status-step is-done">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Placed</span>
                            </div>

                            <div class="ord-status-line <?php echo ($status == 'shipped' || $status == 'delivered') ? 'is-done' : ''; ?>"></div>

                            <div class="ord-status-step <?php echo ($status == 'shipped' || $status == 'delivered') ? 'is-done' : ''; ?>">
                                <i class="bi bi-truck"></i>
                                <span>Shipped</span>
                            </div>

                            <div class="ord-status-line <?php echo ($status == 'delivered') ? 'is-done' : ''; ?>"></div>

                            <div class="ord-status-step <?php echo ($status == 'delivered') ? 'is-done' : ''; ?>">
                                <i class="bi bi-house-check-fill"></i>
                                <span>Delivered</span>
                            </div>

                        </div>

                        <?php if ($status == "cancelled") { ?>

                            <span class="ord-cancelled-tag">
                                <i class="bi bi-x-circle-fill"></i> Order Cancelled
                            </span>

                        <?php } ?>

                        <div class="ord-card-actions">

                            <a href="order_details.php?order_id=<?php echo $order_id; ?>" class="ord-action-btn">
                                <i class="bi bi-eye"></i> View Details
                            </a>

                        </div>

                    </div>

                </div>

            <?php
                mysqli_stmt_close($detail_stmt);
            } ?>

        <?php } else { ?>

            <div class="text-center py-5">
                <i class="bi bi-bag-x" style="font-size: 50px;"></i>

                <h3 class="mt-3">No Orders Found</h3>

                <p>You have not placed any orders yet.</p>

                <a href="products.php" class="ord-action-btn ord-action-primary">
                    Start Shopping
                </a>
            </div>

        <?php } ?>

    </div>

</div>
</div>

<?php
mysqli_stmt_close($stmt);

$page_content = ob_get_clean();
require_once 'layout.php';
?>
