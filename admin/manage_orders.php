<?php
$page_title = "Manage Orders - Re-NewTech Admin";
$page_heading = "Orders";

$orders = [
    ['id' => 'RNT10245', 'customer' => 'Ravi Patel', 'date' => '18 Sep 2026', 'payment' => 'UPI', 'total' => 22500, 'status' => 'delivered'],
    ['id' => 'RNT10198', 'customer' => 'Sneha Mehta', 'date' => '02 Sep 2026', 'payment' => 'Card', 'total' => 14999, 'status' => 'shipped'],
    ['id' => 'RNT10122', 'customer' => 'Amit Shah', 'date' => '21 Aug 2026', 'payment' => 'COD', 'total' => 900, 'status' => 'cancelled'],
    ['id' => 'RNT10087', 'customer' => 'Neha Joshi', 'date' => '05 Aug 2026', 'payment' => 'Net Banking', 'total' => 6200, 'status' => 'pending'],
    ['id' => 'RNT10061', 'customer' => 'Karan Desai', 'date' => '29 Jul 2026', 'payment' => 'COD', 'total' => 2400, 'status' => 'pending']
];

// Filter orders by status using a plain URL parameter (no JavaScript)
$active_status = isset($_GET['status']) ? $_GET['status'] : 'all';

$filtered_orders = [];
foreach ($orders as $o) {
    if ($active_status === 'all' || $o['status'] === $active_status) {
        $filtered_orders[] = $o;
    }
}

// Counts for each tab
$counts = ['all' => count($orders), 'pending' => 0, 'shipped' => 0, 'delivered' => 0, 'cancelled' => 0];
foreach ($orders as $o) {
    $counts[$o['status']]++;
}

ob_start();
?>

<!-- SUMMARY STRIP -->
<div class="row g-3 mb-4">

    <div class="col-6 col-md-3">
        <div class="ord-admin-stat">
            <strong><?php echo $counts['pending']; ?></strong>
            <span>Pending</span>
        </div>
    </div>

    <div class="col-6 col-md-3">
        <div class="ord-admin-stat">
            <strong><?php echo $counts['shipped']; ?></strong>
            <span>Shipped</span>
        </div>
    </div>

    <div class="col-6 col-md-3">
        <div class="ord-admin-stat">
            <strong><?php echo $counts['delivered']; ?></strong>
            <span>Delivered</span>
        </div>
    </div>

    <div class="col-6 col-md-3">
        <div class="ord-admin-stat">
            <strong><?php echo $counts['cancelled']; ?></strong>
            <span>Cancelled</span>
        </div>
    </div>

</div>

<div class="admin-card">

    <!-- FILTER TABS (plain links, no JS) -->
    <div class="ord-admin-tabs">
        <a href="manage_orders.php" class="ord-admin-tab <?php echo $active_status === 'all' ? 'is-active' : ''; ?>">
            All <span><?php echo $counts['all']; ?></span>
        </a>
        <a href="manage_orders.php?status=pending" class="ord-admin-tab <?php echo $active_status === 'pending' ? 'is-active' : ''; ?>">
            Pending <span><?php echo $counts['pending']; ?></span>
        </a>
        <a href="manage_orders.php?status=shipped" class="ord-admin-tab <?php echo $active_status === 'shipped' ? 'is-active' : ''; ?>">
            Shipped <span><?php echo $counts['shipped']; ?></span>
        </a>
        <a href="manage_orders.php?status=delivered" class="ord-admin-tab <?php echo $active_status === 'delivered' ? 'is-active' : ''; ?>">
            Delivered <span><?php echo $counts['delivered']; ?></span>
        </a>
        <a href="manage_orders.php?status=cancelled" class="ord-admin-tab <?php echo $active_status === 'cancelled' ? 'is-active' : ''; ?>">
            Cancelled <span><?php echo $counts['cancelled']; ?></span>
        </a>
    </div>

    <div class="table-responsive">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Date</th>
                    <th>Payment</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Update Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($filtered_orders) === 0): ?>
                    <tr>
                        <td colspan="7" class="ord-admin-empty">No orders found in this category.</td>
                    </tr>
                <?php endif; ?>

                <?php foreach ($filtered_orders as $o): ?>
                    <tr>
                        <td><strong>#<?php echo $o['id']; ?></strong></td>
                        <td><?php echo $o['customer']; ?></td>
                        <td><?php echo $o['date']; ?></td>
                        <td><?php echo $o['payment']; ?></td>
                        <td>₹<?php echo number_format($o['total']); ?></td>
                        <td>
                            <span class="admin-pill pill-<?php echo $o['status']; ?>">
                                <?php echo ucfirst($o['status']); ?>
                            </span>
                        </td>
                        <td>
                            <form method="POST" action="manage_orders.php" class="ord-status-form">
                                <input type="hidden" name="order_id" value="<?php echo $o['id']; ?>">
                                <select name="new_status" class="ord-status-select">
                                    <?php foreach (['pending', 'shipped', 'delivered', 'cancelled'] as $st): ?>
                                        <option value="<?php echo $st; ?>" <?php echo $st === $o['status'] ? 'selected' : ''; ?>>
                                            <?php echo ucfirst($st); ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <button type="submit" class="admin-icon-btn" title="Save">
                                    <i class="bi bi-check-lg"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

<?php
$page_content = ob_get_clean();
require_once 'admin_layout.php';
?>