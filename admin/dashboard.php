
<?php
$page_title = "Dashboard - Re-NewTech Admin";
$page_heading = "Dashboard";

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

    <div class="col-sm-6 col-xl-3">
        <div class="admin-stat-card dash-stat-card">
            <div class="admin-stat-icon icon-teal">
                <i class="bi bi-currency-rupee"></i>
            </div>
            <div class="dash-stat-text">
                <strong>₹4,82,500</strong>
                <span>Total Revenue</span>
            </div>
            <span class="dash-trend dash-trend-up">
                <i class="bi bi-arrow-up-right"></i>
                +12.4%
            </span>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="admin-stat-card dash-stat-card">
            <div class="admin-stat-icon icon-violet">
                <i class="bi bi-bag-check-fill"></i>
            </div>
            <div class="dash-stat-text">
                <strong>128</strong>
                <span>Total Orders</span>
            </div>
            <span class="dash-trend dash-trend-up">
                <i class="bi bi-arrow-up-right"></i>
                +8.1%
            </span>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="admin-stat-card dash-stat-card">
            <div class="admin-stat-icon icon-amber">
                <i class="bi bi-box-seam-fill"></i>
            </div>
            <div class="dash-stat-text">
                <strong>46</strong>
                <span>Active Products</span>
            </div>
            <span class="dash-trend dash-trend-up">
                <i class="bi bi-arrow-up-right"></i>
                +3 new
            </span>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="admin-stat-card dash-stat-card">
            <div class="admin-stat-icon icon-navy">
                <i class="bi bi-people-fill"></i>
            </div>
            <div class="dash-stat-text">
                <strong>312</strong>
                <span>Registered Users</span>
            </div>
            <span class="dash-trend dash-trend-down">
                <i class="bi bi-arrow-down-right"></i>
                -1.2%
            </span>
        </div>
    </div>

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

                <div class="dash-bar-col">
                    <span class="dash-bar-value">45</span>
                    <div class="dash-bar" style="height: 45%;"></div>
                    <span class="dash-bar-label">Apr</span>
                </div>

                <div class="dash-bar-col">
                    <span class="dash-bar-value">62</span>
                    <div class="dash-bar" style="height: 62%;"></div>
                    <span class="dash-bar-label">May</span>
                </div>

                <div class="dash-bar-col">
                    <span class="dash-bar-value">51</span>
                    <div class="dash-bar" style="height: 51%;"></div>
                    <span class="dash-bar-label">Jun</span>
                </div>

                <div class="dash-bar-col">
                    <span class="dash-bar-value">78</span>
                    <div class="dash-bar" style="height: 78%;"></div>
                    <span class="dash-bar-label">Jul</span>
                </div>

                <div class="dash-bar-col">
                    <span class="dash-bar-value">90</span>
                    <div class="dash-bar" style="height: 90%;"></div>
                    <span class="dash-bar-label">Aug</span>
                </div>

                <div class="dash-bar-col">
                    <span class="dash-bar-value">68</span>
                    <div class="dash-bar" style="height: 68%;"></div>
                    <span class="dash-bar-label">Sep</span>
                </div>

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

                <div class="dash-top-row">
                    <span class="dash-top-rank">#1</span>
                    <div class="dash-top-info">
                        <strong>Refurbished ThinkPad T480</strong>
                        <span>Laptops &middot; 34 sold</span>
                    </div>
                    <span class="dash-stock-pill pill-pending">
                        4 left
                    </span>
                </div>

                <div class="dash-top-row">
                    <span class="dash-top-rank">#2</span>
                    <div class="dash-top-info">
                        <strong>iPhone 11 - 128GB</strong>
                        <span>Smartphones &middot; 28 sold</span>
                    </div>
                    <span class="dash-stock-pill pill-delivered">
                        8 left
                    </span>
                </div>

                <div class="dash-top-row">
                    <span class="dash-top-rank">#3</span>
                    <div class="dash-top-info">
                        <strong>Samsung 500GB Evo SSD</strong>
                        <span>Storage &middot; 21 sold</span>
                    </div>
                    <span class="dash-stock-pill pill-delivered">
                        12 left
                    </span>
                </div>

                <div class="dash-top-row">
                    <span class="dash-top-rank">#4</span>
                    <div class="dash-top-info">
                        <strong>NVIDIA GTX 1060 6GB GPU</strong>
                        <span>Components &middot; 15 sold</span>
                    </div>
                    <span class="dash-stock-pill pill-pending">
                        2 left
                    </span>
                </div>

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

                        <tr>
                            <td><strong>#RNT10245</strong></td>
                            <td>Ravi Patel</td>
                            <td>₹22,500</td>
                            <td>
                                <span class="admin-pill pill-delivered">
                                    Delivered
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td><strong>#RNT10198</strong></td>
                            <td>Sneha Mehta</td>
                            <td>₹14,999</td>
                            <td>
                                <span class="admin-pill pill-shipped">
                                    Shipped
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td><strong>#RNT10122</strong></td>
                            <td>Amit Shah</td>
                            <td>₹900</td>
                            <td>
                                <span class="admin-pill pill-cancelled">
                                    Cancelled
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td><strong>#RNT10087</strong></td>
                            <td>Neha Joshi</td>
                            <td>₹6,200</td>
                            <td>
                                <span class="admin-pill pill-pending">
                                    Pending
                                </span>
                            </td>
                        </tr>

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

                <div class="dash-activity-row">
                    <div class="dash-activity-icon icon-teal">
                        <i class="bi bi-bag-plus-fill"></i>
                    </div>
                    <div class="dash-activity-text">
                        <span>New order #RNT10245 placed by Ravi Patel</span>
                        <small>12 minutes ago</small>
                    </div>
                </div>

                <div class="dash-activity-row">
                    <div class="dash-activity-icon icon-amber">
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="dash-activity-text">
                        <span>New review submitted for iPhone 11</span>
                        <small>48 minutes ago</small>
                    </div>
                </div>

                <div class="dash-activity-row">
                    <div class="dash-activity-icon icon-violet">
                        <i class="bi bi-person-plus-fill"></i>
                    </div>
                    <div class="dash-activity-text">
                        <span>Neha Joshi registered a new account</span>
                        <small>2 hours ago</small>
                    </div>
                </div>

                <div class="dash-activity-row">
                    <div class="dash-activity-icon icon-navy">
                        <i class="bi bi-x-circle-fill"></i>
                    </div>
                    <div class="dash-activity-text">
                        <span>Order #RNT10122 was cancelled</span>
                        <small>5 hours ago</small>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>

<?php
$page_content = ob_get_clean();
require_once 'admin_layout.php';
?>

