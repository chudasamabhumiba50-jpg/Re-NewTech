<?php
$page_title = "Dashboard - Re-NewTech Admin";
$page_heading = "Dashboard";

$stats = [
    ['label' => 'Total Revenue', 'value' => '₹4,82,500', 'icon' => 'bi-currency-rupee', 'color' => 'icon-teal', 'trend' => '+12.4%', 'trend_dir' => 'up'],
    ['label' => 'Total Orders', 'value' => '128', 'icon' => 'bi-bag-check-fill', 'color' => 'icon-violet', 'trend' => '+8.1%', 'trend_dir' => 'up'],
    ['label' => 'Active Products', 'value' => '46', 'icon' => 'bi-box-seam-fill', 'color' => 'icon-amber', 'trend' => '+3 new', 'trend_dir' => 'up'],
    ['label' => 'Registered Users', 'value' => '312', 'icon' => 'bi-people-fill', 'color' => 'icon-navy', 'trend' => '-1.2%', 'trend_dir' => 'down']
];

$monthly_sales = [
    'Apr' => 45, 'May' => 62, 'Jun' => 51, 'Jul' => 78, 'Aug' => 90, 'Sep' => 68
];

$recent_orders = [
    ['id' => 'RNT10245', 'customer' => 'Ravi Patel', 'total' => 22500, 'status' => 'delivered'],
    ['id' => 'RNT10198', 'customer' => 'Sneha Mehta', 'total' => 14999, 'status' => 'shipped'],
    ['id' => 'RNT10122', 'customer' => 'Amit Shah', 'total' => 900, 'status' => 'cancelled'],
    ['id' => 'RNT10087', 'customer' => 'Neha Joshi', 'total' => 6200, 'status' => 'pending']
];

$top_products = [
    ['name' => 'Refurbished ThinkPad T480', 'category' => 'Laptops', 'sold' => 34, 'stock' => 4],
    ['name' => 'iPhone 11 - 128GB', 'category' => 'Smartphones', 'sold' => 28, 'stock' => 8],
    ['name' => 'Samsung 500GB Evo SSD', 'category' => 'Storage', 'sold' => 21, 'stock' => 12],
    ['name' => 'NVIDIA GTX 1060 6GB GPU', 'category' => 'Components', 'sold' => 15, 'stock' => 2]
];

$recent_activity = [
    ['text' => 'New order #RNT10245 placed by Ravi Patel', 'time' => '12 minutes ago', 'icon' => 'bi-bag-plus-fill', 'color' => 'icon-teal'],
    ['text' => 'New review submitted for iPhone 11', 'time' => '48 minutes ago', 'icon' => 'bi-star-fill', 'color' => 'icon-amber'],
    ['text' => 'Neha Joshi registered a new account', 'time' => '2 hours ago', 'icon' => 'bi-person-plus-fill', 'color' => 'icon-violet'],
    ['text' => 'Order #RNT10122 was cancelled', 'time' => '5 hours ago', 'icon' => 'bi-x-circle-fill', 'color' => 'icon-navy']
];

ob_start();
?>

<!-- WELCOME BANNER -->
<div class="dash-welcome-banner">
    <div>
        <span class="dash-welcome-label">Welcome back, Admin</span>
        <h2>Here's what's happening with Re-NewTech today.</h2>
    </div>
    <a href="manage_products.php" class="dash-welcome-btn">
        <i class="bi bi-plus-lg"></i> Add New Product
    </a>
</div>

<!-- STAT CARDS -->
<div class="row g-3 mb-4">
    <?php foreach ($stats as $s): ?>
        <div class="col-sm-6 col-xl-3">
            <div class="admin-stat-card dash-stat-card">
                <div class="admin-stat-icon <?php echo $s['color']; ?>">
                    <i class="bi <?php echo $s['icon']; ?>"></i>
                </div>
                <div class="dash-stat-text">
                    <strong><?php echo $s['value']; ?></strong>
                    <span><?php echo $s['label']; ?></span>
                </div>
                <span class="dash-trend dash-trend-<?php echo $s['trend_dir']; ?>">
                    <i class="bi bi-arrow-<?php echo $s['trend_dir'] === 'up' ? 'up-right' : 'down-right'; ?>"></i>
                    <?php echo $s['trend']; ?>
                </span>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div class="row g-3 mb-3">

    <!-- SALES CHART -->
    <div class="col-lg-7">
        <div class="admin-card h-100">

            <div class="d-flex justify-content-between align-items-start mb-3">
                <div>
                    <h6 class="fw-bold text-dark mb-1">Monthly Sales</h6>
                    <p class="text-muted small mb-0">Orders placed per month (demo data)</p>
                </div>
                <span class="dash-chart-total">486 orders / 6 mo</span>
            </div>

            <div class="dash-chart">
                <?php foreach ($monthly_sales as $month => $value): ?>
                    <div class="dash-bar-col">
                        <span class="dash-bar-value"><?php echo $value; ?></span>
                        <div class="dash-bar" style="height: <?php echo $value; ?>%;"></div>
                        <span class="dash-bar-label"><?php echo $month; ?></span>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>

    <!-- TOP PRODUCTS -->
    <div class="col-lg-5">
        <div class="admin-card h-100">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6 class="fw-bold text-dark mb-0">Top Selling Products</h6>
                <a href="manage_products.php" class="admin-btn">View All</a>
            </div>

            <div class="dash-top-list">
                <?php foreach ($top_products as $i => $p): ?>
                    <div class="dash-top-row">
                        <span class="dash-top-rank">#<?php echo $i + 1; ?></span>
                        <div class="dash-top-info">
                            <strong><?php echo $p['name']; ?></strong>
                            <span><?php echo $p['category']; ?> &middot; <?php echo $p['sold']; ?> sold</span>
                        </div>
                        <span class="dash-stock-pill <?php echo $p['stock'] <= 3 ? 'pill-pending' : 'pill-delivered'; ?>">
                            <?php echo $p['stock']; ?> left
                        </span>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>

</div>

<div class="row g-3">

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

    <!-- RECENT ACTIVITY -->
    <div class="col-lg-5">
        <div class="admin-card h-100">

            <h6 class="fw-bold text-dark mb-3">Recent Activity</h6>

            <div class="dash-activity-list">
                <?php foreach ($recent_activity as $a): ?>
                    <div class="dash-activity-row">
                        <div class="dash-activity-icon <?php echo $a['color']; ?>">
                            <i class="bi <?php echo $a['icon']; ?>"></i>
                        </div>
                        <div class="dash-activity-text">
                            <span><?php echo $a['text']; ?></span>
                            <small><?php echo $a['time']; ?></small>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>

</div>

<?php
$page_content = ob_get_clean();
require_once 'admin_layout.php';
?>