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

<div class="ord-page">
<div class="container py-4">

    <div class="ord-heading-row">
        <div>
            <h1 class="ord-heading"><i class="bi bi-bag-check-fill"></i> My Orders</h1>
            <p class="ord-subtext">Track and manage all your Re-NewTech orders.</p>
        </div>
        <span class="ord-count-chip"><?php echo count($orders); ?> Orders</span>
    </div>

    <div class="ord-list">

        <?php foreach ($orders as $order): ?>

            <div class="ord-card">

                <div class="ord-card-top">

                    <div class="ord-id-block">
                        <span>Order Placed</span>
                        <strong><?php echo $order['date']; ?></strong>
                    </div>

                    <div class="ord-id-block">
                        <span>Order ID</span>
                        <strong>#<?php echo $order['id']; ?></strong>
                    </div>

                    <div class="ord-id-block">
                        <span>Payment</span>
                        <strong><?php echo $order['payment']; ?></strong>
                    </div>

                    <div class="ord-id-block ord-id-block-right">
                        <span>Total</span>
                        <strong>₹<?php echo number_format($order['total']); ?></strong>
                    </div>

                </div>

                <div class="ord-card-body">

                    <?php foreach ($order['items'] as $item): ?>
                        <div class="ord-item-row">
                            <div class="ord-item-icon"><i class="bi bi-box-seam"></i></div>
                            <div class="ord-item-info">
                                <strong><?php echo $item['name']; ?></strong>
                                <span>Qty: <?php echo $item['qty']; ?></span>
                            </div>
                            <div class="ord-item-price">₹<?php echo number_format($item['price'] * $item['qty']); ?></div>
                        </div>
                    <?php endforeach; ?>

                </div>

                <div class="ord-card-foot">

                    <div class="ord-status-track status-<?php echo $order['status']; ?>">

                        <div class="ord-status-step <?php echo in_array($order['status'], ['shipped', 'delivered']) ? 'is-done' : ($order['status'] === 'cancelled' ? 'is-cancelled' : 'is-current'); ?>">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Placed</span>
                        </div>

                        <div class="ord-status-line <?php echo in_array($order['status'], ['shipped', 'delivered']) ? 'is-done' : ''; ?>"></div>

                        <div class="ord-status-step <?php echo $order['status'] === 'delivered' ? 'is-done' : ($order['status'] === 'shipped' ? 'is-current' : ($order['status'] === 'cancelled' ? 'is-cancelled' : '')); ?>">
                            <i class="bi bi-truck"></i>
                            <span>Shipped</span>
                        </div>

                        <div class="ord-status-line <?php echo $order['status'] === 'delivered' ? 'is-done' : ''; ?>"></div>

                        <div class="ord-status-step <?php echo $order['status'] === 'delivered' ? 'is-done' : ($order['status'] === 'cancelled' ? 'is-cancelled' : ''); ?>">
                            <i class="bi bi-house-check-fill"></i>
                            <span>Delivered</span>
                        </div>

                    </div>

                    <?php if ($order['status'] === 'cancelled'): ?>
                        <span class="ord-cancelled-tag"><i class="bi bi-x-circle-fill"></i> Order Cancelled</span>
                    <?php endif; ?>

                    <div class="ord-card-actions">

                        <a href="product_details.php" class="ord-action-btn">
                            <i class="bi bi-eye"></i> View Details
                        </a>

                        <?php if ($order['status'] === 'delivered'): ?>
                            <a href="product_details.php" class="ord-action-btn ord-action-primary">
                                <i class="bi bi-star"></i> Write Review
                            </a>
                        <?php elseif ($order['status'] === 'cancelled'): ?>
                            <a href="products.php" class="ord-action-btn ord-action-primary">
                                <i class="bi bi-arrow-repeat"></i> Buy Again
                            </a>
                        <?php endif; ?>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

</div>
</div>

<?php
$page_content = ob_get_clean();
require_once 'layout.php';
?>