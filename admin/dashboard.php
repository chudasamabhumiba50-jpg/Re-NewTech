<?php
$page_title = "Dashboard - Re-NewTech Admin";
$page_heading = "Dashboard";

$stats = [
    ['label' => 'Total Revenue', 'value' => '₹4,82,500', 'icon' => 'bi-currency-rupee', 'color' => 'icon-teal'],
    ['label' => 'Total Orders', 'value' => '128', 'icon' => 'bi-bag-check-fill', 'color' => 'icon-violet'],
    ['label' => 'Active Products', 'value' => '46', 'icon' => 'bi-box-seam-fill', 'color' => 'icon-amber'],
    ['label' => 'Registered Users', 'value' => '312', 'icon' => 'bi-people-fill', 'color' => 'icon-navy']
];

$recent_orders = [
    ['id' => 'RNT10245', 'customer' => 'Ravi Patel', 'total' => 22500, 'status' => 'delivered'],
    ['id' => 'RNT10198', 'customer' => 'Sneha Mehta', 'total' => 14999, 'status' => 'shipped'],
    ['id' => 'RNT10122', 'customer' => 'Amit Shah', 'total' => 900, 'status' => 'cancelled'],
    ['id' => 'RNT10087', 'customer' => 'Neha Joshi', 'total' => 6200, 'status' => 'pending']
];

$monthly_sales = [
    'Apr' => 45, 'May' => 62, 'Jun' => 51, 'Jul' => 78, 'Aug' => 90, 'Sep' => 68
];

ob_start();
?>

<!-- STAT CARDS -->
<div class="row g-3 mb-4">
    <?php foreach ($stats as $s): ?>
        <div class="col-sm-6 col-xl-3">
            <div class="admin-stat-card">
                <div class="admin-stat-icon <?php echo $s['color']; ?>">
                    <i class="bi <?php echo $s['icon']; ?>"></i>
                </div>
                <div>
                    <strong><?php echo $s['value']; ?></strong>
                    <span><?php echo $s['label']; ?></span>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div class="row g-3">

    <!-- SALES CHART -->
    <div class="col-lg-5">
        <div class="admin-card h-100">
            <h6 class="fw-bold text-dark mb-1">Monthly Sales</h6>
            <p class="text-muted small mb-3">Orders per month (demo data)</p>

            <div class="dash-chart">
                <?php foreach ($monthly_sales as $month => $value): ?>
                    <div class="dash-bar-col">
                        <div class="dash-bar" style="height: <?php echo $value; ?>%;" title="<?php echo $value; ?> orders"></div>
                        <span><?php echo $month; ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- RECENT ORDERS -->
    <div class="col-lg-7">
        <div class="admin-card h-100">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6 class="fw-bold text-dark mb-0">Recent Orders</h6>
                <a href="manage_orders.php" class="admin-btn">View All</a>
            </div>

            <div class="table-responsive">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Total</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($recent_orders as $o): ?>
                            <tr>
                                <td><strong>#<?php echo $o['id']; ?></strong></td>
                                <td><?php echo $o['customer']; ?></td>
                                <td>₹<?php echo number_format($o['total']); ?></td>
                                <td>
                                    <span class="admin-pill pill-<?php echo $o['status']; ?>">
                                        <?php echo ucfirst($o['status']); ?>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>

<?php
$page_content = ob_get_clean();
require_once 'admin_layout.php';
?>