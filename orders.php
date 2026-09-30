<?php
$page_title = "My Orders - Re-NewTech";

$orders = [
    [
        'id' => 'RNT10245',
        'date' => '18 Sep 2026',
        'status' => 'delivered',
        'items' => [
            ['name' => 'Refurbished ThinkPad T480 (16GB RAM)', 'qty' => 1, 'price' => 22500]
        ],
        'total' => 22500,
        'payment' => 'UPI'
    ],
    [
        'id' => 'RNT10198',
        'date' => '02 Sep 2026',
        'status' => 'shipped',
        'items' => [
            ['name' => 'iPhone 11 (Good Condition, 64GB)', 'qty' => 1, 'price' => 14999]
        ],
        'total' => 14999,
        'payment' => 'Card'
    ],
    [
        'id' => 'RNT10122',
        'date' => '21 Aug 2026',
        'status' => 'cancelled',
        'items' => [
            ['name' => 'Dell Wireless Mouse (Like New)', 'qty' => 2, 'price' => 450]
        ],
        'total' => 900,
        'payment' => 'COD'
    ],
    [
        'id' => 'RNT10087',
        'date' => '05 Aug 2026',
        'status' => 'delivered',
        'items' => [
            ['name' => 'Samsung 24" Monitor (Refurbished)', 'qty' => 1, 'price' => 6200]
        ],
        'total' => 6200,
        'payment' => 'Net Banking'
    ]
];

ob_start();
?>


<div class="container py-4 orders-wrapper">

    <h3 class="fw-bold text-dark mb-1">
        <i class="bi bi-bag-check-fill me-2 text-success"></i>
        My Orders
    </h3>

    <p class="text-muted small mb-4">
        Track and manage all your Re-NewTech orders.
    </p>

    <div class="orders-filter-bar" id="orderFilterBar">
        <button type="button" class="order-filter-btn active" data-status="all">All Orders</button>
        <button type="button" class="order-filter-btn" data-status="delivered">Delivered</button>
        <button type="button" class="order-filter-btn" data-status="shipped">Shipped</button>
        <button type="button" class="order-filter-btn" data-status="cancelled">Cancelled</button>
    </div>

    <div id="ordersList">

        <?php foreach ($orders as $order): ?>

            <div class="order-card" data-status="<?php echo $order['status']; ?>">

                <div class="order-card-head">

                    <div class="order-id-block">
                        <small>Order ID</small>
                        <strong>#<?php echo $order['id']; ?></strong>
                    </div>

                    <span class="order-status-pill status-<?php echo $order['status']; ?>">
                        <?php if ($order['status'] === 'delivered'): ?>
                            <i class="bi bi-check-circle-fill"></i>
                        <?php elseif ($order['status'] === 'shipped'): ?>
                            <i class="bi bi-truck"></i>
                        <?php else: ?>
                            <i class="bi bi-x-circle-fill"></i>
                        <?php endif; ?>
                        <?php echo $order['status']; ?>
                    </span>

                </div>

                <div class="order-card-body">

                    <?php foreach ($order['items'] as $item): ?>
                        <div class="order-item-row">
                            <span>
                                <?php echo $item['name']; ?>
                                <span class="qty-tag">× <?php echo $item['qty']; ?></span>
                            </span>
                            <span class="fw-bold">
                                ₹<?php echo number_format($item['price'] * $item['qty']); ?>
                            </span>
                        </div>
                    <?php endforeach; ?>

                </div>

                <div class="order-card-footer">

                    <div class="order-footer-meta">
                        <span>Placed on <strong><?php echo $order['date']; ?></strong></span>
                        <span>Total <strong>₹<?php echo number_format($order['total']); ?></strong></span>
                    </div>

                    <div class="order-footer-actions">

                        <a href="product_details.php" class="order-action-btn">
                            <i class="bi bi-eye me-1"></i> View
                        </a>

                        <?php if ($order['status'] === 'delivered'): ?>
                            <a href="product_details.php" class="order-action-btn primary">
                                <i class="bi bi-star me-1"></i> Write Review
                            </a>
                        <?php elseif ($order['status'] === 'cancelled'): ?>
                            <a href="products.php" class="order-action-btn primary">
                                <i class="bi bi-arrow-repeat me-1"></i> Buy Again
                            </a>
                        <?php else: ?>
                            <a href="#" class="order-action-btn primary">
                                <i class="bi bi-geo-alt me-1"></i> Track Order
                            </a>
                        <?php endif; ?>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

    <div class="no-orders-box" id="noOrdersBox">
        <i class="bi bi-inbox fs-1 text-muted mb-3 d-block"></i>
        <h5 class="fw-bold text-dark">No orders found</h5>
        <p class="text-muted small mb-0">There are no orders in this category.</p>
    </div>

</div>



<?php
$page_content = ob_get_clean();
require_once 'layout.php';
?>