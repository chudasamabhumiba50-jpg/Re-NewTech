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

<style>
    .orders-wrapper {
        max-width: 900px;
        margin: 0 auto;
    }

    .orders-filter-bar {
        display: flex;
        gap: 8px;
        margin-bottom: 22px;
        overflow-x: auto;
        padding-bottom: 4px;
    }

    .order-filter-btn {
        padding: 8px 15px;
        white-space: nowrap;
        background: var(--white);
        color: var(--muted);
        border: 1px solid var(--line);
        border-radius: 20px;
        font-size: 0.76rem;
        font-weight: 700;
        cursor: pointer;
        transition: 0.2s ease;
    }

    .order-filter-btn:hover {
        border-color: var(--teal);
        color: var(--teal-dark);
    }

    .order-filter-btn.active {
        background: var(--navy);
        color: var(--white);
        border-color: var(--navy);
    }

    .order-card {
        background: var(--white);
        border: 1px solid var(--line);
        border-radius: 16px;
        margin-bottom: 16px;
        overflow: hidden;
        box-shadow: 0 7px 25px rgba(11, 18, 32, 0.045);
    }

    .order-card-head {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        padding: 16px 20px;
        background: var(--cream);
        border-bottom: 1px solid var(--line);
        flex-wrap: wrap;
    }

    .order-id-block small {
        display: block;
        color: var(--muted);
        font-size: 0.66rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .order-id-block strong {
        color: var(--text);
        font-size: 0.92rem;
    }

    .order-status-pill {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 0.68rem;
        font-weight: 800;
        text-transform: capitalize;
    }

    .status-delivered {
        background: var(--teal-soft);
        color: var(--teal-dark);
    }

    .status-shipped {
        background: var(--violet-soft);
        color: var(--violet);
    }

    .status-cancelled {
        background: #fbe9e9;
        color: #c0504d;
    }

    .order-card-body {
        padding: 18px 20px;
    }

    .order-item-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
        padding: 8px 0;
        font-size: 0.82rem;
    }

    .order-item-row span:first-child {
        color: var(--text);
        font-weight: 600;
    }

    .order-item-row .qty-tag {
        color: var(--muted);
        font-weight: 400;
        margin-left: 4px;
    }

    .order-card-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        padding: 14px 20px;
        border-top: 1px solid var(--line);
        flex-wrap: wrap;
    }

    .order-footer-meta {
        display: flex;
        gap: 18px;
        color: var(--muted);
        font-size: 0.74rem;
    }

    .order-footer-meta strong {
        color: var(--text);
    }

    .order-footer-actions {
        display: flex;
        gap: 8px;
    }

    .order-action-btn {
        padding: 8px 14px;
        border-radius: 8px;
        font-size: 0.72rem;
        font-weight: 700;
        text-decoration: none;
        border: 1px solid var(--line);
        color: var(--text);
        background: var(--white);
        transition: 0.2s ease;
    }

    .order-action-btn:hover {
        border-color: var(--navy);
        color: var(--navy);
    }

    .order-action-btn.primary {
        background: var(--navy);
        color: var(--white);
        border-color: var(--navy);
    }

    .order-action-btn.primary:hover {
        background: var(--navy-light);
        color: var(--white);
    }

    .no-orders-box {
        display: none;
        padding: 60px 25px;
        text-align: center;
        background: var(--white);
        border: 1px solid var(--line);
        border-radius: 16px;
    }
</style>

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

<script>
    const filterBtns = document.querySelectorAll('.order-filter-btn');
    const orderCards = document.querySelectorAll('.order-card');
    const noOrdersBox = document.getElementById('noOrdersBox');

    filterBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {

            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const status = this.dataset.status;
            let visibleCount = 0;

            orderCards.forEach(function (card) {
                if (status === 'all' || card.dataset.status === status) {
                    card.style.display = 'block';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });

            noOrdersBox.style.display = visibleCount === 0 ? 'block' : 'none';
        });
    });
</script>

<?php
$page_content = ob_get_clean();
require_once 'layout.php';
?>