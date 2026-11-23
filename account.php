
<?php
session_start();

$page_title = "My Account - Re-NewTech";

// Check login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Database connection
require_once "db_config.php";

// Get logged-in user ID
$user_id = $_SESSION['user_id'];

// Fetch user details from registration table
$query = "SELECT fullname, email, created_at
          FROM registration
          WHERE id = ?
          LIMIT 1";

$stmt = mysqli_prepare($con, $query);

mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

mysqli_stmt_close($stmt);

if (!$user) {
    session_unset();
    session_destroy();

    header("Location: login.php");
    exit();
}

// Store user details
$fullname = $user['fullname'];
$email = $user['email'];
$initials = strtoupper(substr(trim($fullname), 0, 1));
$member_since = date("M Y", strtotime($user['created_at']));

ob_start();
?>

<div class="acc-page">

    <!-- PROFILE BANNER -->
    <div class="acc-banner">
        <div class="container">
            <div class="acc-banner-row">

                <div class="acc-banner-left">
                    <div class="acc-avatar"><?php echo htmlspecialchars($initials); ?></div>
                    <div>
                        <span class="acc-banner-label">Welcome back</span>
                        <h1 class="acc-banner-name"><?php echo htmlspecialchars($fullname); ?></h1>
                        <span class="acc-banner-email"><i class="bi bi-envelope"></i> <?php echo htmlspecialchars($email); ?></span>
                    </div>
                </div>

                <div class="acc-banner-right">
                    <div class="acc-banner-chip">
                        <i class="bi bi-patch-check-fill"></i>
                        <div>
                            <strong>Member Since</strong>
                            <span><?php echo htmlspecialchars($member_since); ?></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container acc-body">

        <!-- STAT CARDS -->
        <div class="row g-3 mb-4">

            <div class="col-6 col-md-3">
                <div class="acc-stat-card">
                    <div class="acc-stat-icon icon-teal"><i class="bi bi-bag-check-fill"></i></div>
                    <strong>4</strong>
                    <span>Total Orders</span>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="acc-stat-card">
                    <div class="acc-stat-icon icon-violet"><i class="bi bi-truck"></i></div>
                    <strong>1</strong>
                    <span>In Transit</span>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="acc-stat-card">
                    <div class="acc-stat-icon icon-amber"><i class="bi bi-heart-fill"></i></div>
                    <strong>3</strong>
                    <span>Wishlist Items</span>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="acc-stat-card">
                    <div class="acc-stat-icon icon-navy"><i class="bi bi-tree-fill"></i></div>
                    <strong>140kg</strong>
                    <span>CO2 Offset</span>
                </div>
            </div>

        </div>

        <div class="row g-4">

            <!-- LEFT: RECENT ORDERS + ECO CARD -->
            <div class="col-lg-8">

                <div class="acc-card mb-4">

                    <div class="acc-card-head">
                        <h5><i class="bi bi-bag-check me-2"></i>Recent Orders</h5>
                        <a href="orders.php">View All <i class="bi bi-arrow-right"></i></a>
                    </div>

                    <div class="acc-order-row">
                        <div class="acc-order-thumb"><i class="bi bi-laptop"></i></div>
                        <div class="acc-order-info">
                            <strong>Refurbished ThinkPad T480</strong>
                            <span>#RNT10245 &middot; 18 Sep 2026</span>
                        </div>
                        <span class="acc-pill pill-delivered">Delivered</span>
                    </div>

                    <div class="acc-order-row">
                        <div class="acc-order-thumb"><i class="bi bi-phone"></i></div>
                        <div class="acc-order-info">
                            <strong>iPhone 11 (Good Condition)</strong>
                            <span>#RNT10198 &middot; 02 Sep 2026</span>
                        </div>
                        <span class="acc-pill pill-shipped">Shipped</span>
                    </div>

                    <div class="acc-order-row">
                        <div class="acc-order-thumb"><i class="bi bi-mouse2"></i></div>
                        <div class="acc-order-info">
                            <strong>Dell Wireless Mouse</strong>
                            <span>#RNT10122 &middot; 21 Aug 2026</span>
                        </div>
                        <span class="acc-pill pill-cancelled">Cancelled</span>
                    </div>

                </div>

                <!-- ECO IMPACT CARD -->
                <div class="acc-eco-card">
                    <div class="acc-eco-left">
                        <i class="bi bi-globe-americas"></i>
                        <div>
                            <strong>Your Eco Impact</strong>
                            <span>Every renewed purchase helps keep working devices in use longer.</span>
                        </div>
                    </div>
                    <div class="acc-eco-bar-wrap">
                        <div class="acc-eco-bar-track">
                            <div class="acc-eco-bar-fill" style="width: 70%;"></div>
                        </div>
                        <span>140kg / 200kg yearly goal</span>
                    </div>
                </div>

            </div>

            <!-- RIGHT: QUICK LINKS + WISHLIST PREVIEW -->
            <div class="col-lg-4">

                <div class="acc-card mb-4">

                    <h5 class="acc-quick-title">Quick Links</h5>

                    <a href="orders.php" class="acc-quick-link">
                        <i class="bi bi-bag-check"></i>
                        <span>My Orders</span>
                        <i class="bi bi-chevron-right acc-quick-arrow"></i>
                    </a>

                    <a href="wishlist.php" class="acc-quick-link">
                        <i class="bi bi-heart"></i>
                        <span>My Wishlist</span>
                        <i class="bi bi-chevron-right acc-quick-arrow"></i>
                    </a>

                    <a href="cart.php" class="acc-quick-link">
                        <i class="bi bi-cart3"></i>
                        <span>My Cart</span>
                        <i class="bi bi-chevron-right acc-quick-arrow"></i>
                    </a>

                    <a href="products.php" class="acc-quick-link">
                        <i class="bi bi-grid"></i>
                        <span>Browse Products</span>
                        <i class="bi bi-chevron-right acc-quick-arrow"></i>
                    </a>

                    <a href="logout.php" class="acc-quick-link acc-quick-link-danger">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Logout</span>
                        <i class="bi bi-chevron-right acc-quick-arrow"></i>
                    </a>

                </div>

                <div class="acc-support-card">
                    <i class="bi bi-headset"></i>
                    <strong>Need Help?</strong>
                    <span>Our support team is here Mon–Sat, 10 AM–7 PM.</span>
                    <a href="contact.php">Contact Support <i class="bi bi-arrow-right"></i></a>
                </div>

            </div>

        </div>

    </div>

</div>

<?php
$page_content = ob_get_clean();
require_once 'layout.php';
?>
