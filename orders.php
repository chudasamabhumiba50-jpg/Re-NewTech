<?php
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

        <span class="ord-count-chip">4 Orders</span>
    </div>

    <div class="ord-list">

        <!-- ORDER 1 -->
        <div class="ord-card">

            <div class="ord-card-top">

                <div class="ord-id-block">
                    <span>Order Placed</span>
                    <strong>18 Sep 2026</strong>
                </div>

                <div class="ord-id-block">
                    <span>Order ID</span>
                    <strong>#RNT10245</strong>
                </div>

                <div class="ord-id-block">
                    <span>Payment</span>
                    <strong>UPI</strong>
                </div>

                <div class="ord-id-block ord-id-block-right">
                    <span>Total</span>
                    <strong>₹22,500</strong>
                </div>

            </div>

            <div class="ord-card-body">

                <div class="ord-item-row">

                    <div class="ord-item-icon">
                        <i class="bi bi-box-seam"></i>
                    </div>

                    <div class="ord-item-info">
                        <strong>Refurbished ThinkPad T480 (16GB RAM)</strong>
                        <span>Qty: 1</span>
                    </div>

                    <div class="ord-item-price">
                        ₹22,500
                    </div>

                </div>

            </div>

            <div class="ord-card-foot">

                <div class="ord-status-track status-delivered">

                    <div class="ord-status-step is-done">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Placed</span>
                    </div>

                    <div class="ord-status-line is-done"></div>

                    <div class="ord-status-step is-done">
                        <i class="bi bi-truck"></i>
                        <span>Shipped</span>
                    </div>

                    <div class="ord-status-line is-done"></div>

                    <div class="ord-status-step is-done">
                        <i class="bi bi-house-check-fill"></i>
                        <span>Delivered</span>
                    </div>

                </div>

                <div class="ord-card-actions">

                    <a href="product_details.php" class="ord-action-btn">
                        <i class="bi bi-eye"></i> View Details
                    </a>

                    <a href="product_details.php" class="ord-action-btn ord-action-primary">
                        <i class="bi bi-star"></i> Write Review
                    </a>

                </div>

            </div>

        </div>


        <!-- ORDER 2 -->
        <div class="ord-card">

            <div class="ord-card-top">

                <div class="ord-id-block">
                    <span>Order Placed</span>
                    <strong>02 Sep 2026</strong>
                </div>

                <div class="ord-id-block">
                    <span>Order ID</span>
                    <strong>#RNT10198</strong>
                </div>

                <div class="ord-id-block">
                    <span>Payment</span>
                    <strong>Card</strong>
                </div>

                <div class="ord-id-block ord-id-block-right">
                    <span>Total</span>
                    <strong>₹14,999</strong>
                </div>

            </div>

            <div class="ord-card-body">

                <div class="ord-item-row">

                    <div class="ord-item-icon">
                        <i class="bi bi-box-seam"></i>
                    </div>

                    <div class="ord-item-info">
                        <strong>iPhone 11 (Good Condition, 64GB)</strong>
                        <span>Qty: 1</span>
                    </div>

                    <div class="ord-item-price">
                        ₹14,999
                    </div>

                </div>

            </div>

            <div class="ord-card-foot">

                <div class="ord-status-track status-shipped">

                    <div class="ord-status-step is-done">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Placed</span>
                    </div>

                    <div class="ord-status-line is-done"></div>

                    <div class="ord-status-step is-current">
                        <i class="bi bi-truck"></i>
                        <span>Shipped</span>
                    </div>

                    <div class="ord-status-line"></div>

                    <div class="ord-status-step">
                        <i class="bi bi-house-check-fill"></i>
                        <span>Delivered</span>
                    </div>

                </div>

                <div class="ord-card-actions">

                    <a href="product_details.php" class="ord-action-btn">
                        <i class="bi bi-eye"></i> View Details
                    </a>

                </div>

            </div>

        </div>


        <!-- ORDER 3 -->
        <div class="ord-card">

            <div class="ord-card-top">

                <div class="ord-id-block">
                    <span>Order Placed</span>
                    <strong>21 Aug 2026</strong>
                </div>

                <div class="ord-id-block">
                    <span>Order ID</span>
                    <strong>#RNT10122</strong>
                </div>

                <div class="ord-id-block">
                    <span>Payment</span>
                    <strong>COD</strong>
                </div>

                <div class="ord-id-block ord-id-block-right">
                    <span>Total</span>
                    <strong>₹900</strong>
                </div>

            </div>

            <div class="ord-card-body">

                <div class="ord-item-row">

                    <div class="ord-item-icon">
                        <i class="bi bi-box-seam"></i>
                    </div>

                    <div class="ord-item-info">
                        <strong>Dell Wireless Mouse (Like New)</strong>
                        <span>Qty: 2</span>
                    </div>

                    <div class="ord-item-price">
                        ₹900
                    </div>

                </div>

            </div>

            <div class="ord-card-foot">

                <div class="ord-status-track status-cancelled">

                    <div class="ord-status-step is-cancelled">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Placed</span>
                    </div>

                    <div class="ord-status-line"></div>

                    <div class="ord-status-step is-cancelled">
                        <i class="bi bi-truck"></i>
                        <span>Shipped</span>
                    </div>

                    <div class="ord-status-line"></div>

                    <div class="ord-status-step is-cancelled">
                        <i class="bi bi-house-check-fill"></i>
                        <span>Delivered</span>
                    </div>

                </div>

                <span class="ord-cancelled-tag">
                    <i class="bi bi-x-circle-fill"></i> Order Cancelled
                </span>

                <div class="ord-card-actions">

                    <a href="product_details.php" class="ord-action-btn">
                        <i class="bi bi-eye"></i> View Details
                    </a>

                    <a href="products.php" class="ord-action-btn ord-action-primary">
                        <i class="bi bi-arrow-repeat"></i> Buy Again
                    </a>

                </div>

            </div>

        </div>


        <!-- ORDER 4 -->
        <div class="ord-card">

            <div class="ord-card-top">

                <div class="ord-id-block">
                    <span>Order Placed</span>
                    <strong>05 Aug 2026</strong>
                </div>

                <div class="ord-id-block">
                    <span>Order ID</span>
                    <strong>#RNT10087</strong>
                </div>

                <div class="ord-id-block">
                    <span>Payment</span>
                    <strong>Net Banking</strong>
                </div>

                <div class="ord-id-block ord-id-block-right">
                    <span>Total</span>
                    <strong>₹6,200</strong>
                </div>

            </div>

            <div class="ord-card-body">

                <div class="ord-item-row">

                    <div class="ord-item-icon">
                        <i class="bi bi-box-seam"></i>
                    </div>

                    <div class="ord-item-info">
                        <strong>Samsung 24" Monitor (Refurbished)</strong>
                        <span>Qty: 1</span>
                    </div>

                    <div class="ord-item-price">
                        ₹6,200
                    </div>

                </div>

            </div>

            <div class="ord-card-foot">

                <div class="ord-status-track status-delivered">

                    <div class="ord-status-step is-done">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Placed</span>
                    </div>

                    <div class="ord-status-line is-done"></div>

                    <div class="ord-status-step is-done">
                        <i class="bi bi-truck"></i>
                        <span>Shipped</span>
                    </div>

                    <div class="ord-status-line is-done"></div>

                    <div class="ord-status-step is-done">
                        <i class="bi bi-house-check-fill"></i>
                        <span>Delivered</span>
                    </div>

                </div>

                <div class="ord-card-actions">

                    <a href="product_details.php" class="ord-action-btn">
                        <i class="bi bi-eye"></i> View Details
                    </a>

                    <a href="product_details.php" class="ord-action-btn ord-action-primary">
                        <i class="bi bi-star"></i> Write Review
                    </a>

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