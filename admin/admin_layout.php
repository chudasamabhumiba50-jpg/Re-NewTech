<?php

$current_admin_page = basename($_SERVER['PHP_SELF']);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        <?php
        echo isset($page_title)
            ? htmlspecialchars($page_title)
            : 'Admin Panel - Re-NewTech';
        ?>
    </title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <!-- Main Site CSS (color tokens) -->
    <link
        rel="stylesheet"
        href="../assets/css/style.css"
    >

    <!-- Admin Panel CSS -->
    <link
        rel="stylesheet"
        href="../assets/css/admin-style.css"
    >

    <!-- jQuery (required for validate.js) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Shared Validation JS -->
    <script src="../js/validate.js"></script>

</head>

<body class="admin-body">

<!-- CSS-ONLY MOBILE MENU TOGGLE (no JavaScript) -->
<input type="checkbox" id="adminMenuToggle" class="admin-menu-checkbox">

<div class="admin-shell">

    <!-- SIDEBAR -->

    <aside class="admin-sidebar">

        <a href="dashboard.php" class="admin-brand">
            <span class="admin-brand-symbol">
                <i class="bi bi-recycle"></i>
            </span>
            <span>Re-NewTech <small>Admin</small></span>
        </a>

        <nav class="admin-nav">

            <a href="dashboard.php" class="admin-nav-link <?php echo ($current_admin_page == 'dashboard.php') ? 'active' : ''; ?>">
                <i class="bi bi-grid-1x2-fill"></i> Dashboard
            </a>

            <a href="manage_products.php" class="admin-nav-link <?php echo ($current_admin_page == 'manage_products.php') ? 'active' : ''; ?>">
                <i class="bi bi-box-seam-fill"></i> Products
            </a>

            <a href="manage_orders.php" class="admin-nav-link <?php echo ($current_admin_page == 'manage_orders.php') ? 'active' : ''; ?>">
                <i class="bi bi-bag-check-fill"></i> Orders
            </a>

            <a href="manage_users.php" class="admin-nav-link <?php echo ($current_admin_page == 'manage_users.php') ? 'active' : ''; ?>">
                <i class="bi bi-people-fill"></i> Users
            </a>

            <a href="manage_reviews.php" class="admin-nav-link <?php echo ($current_admin_page == 'manage_reviews.php') ? 'active' : ''; ?>">
                <i class="bi bi-star-fill"></i> Reviews
            </a>

            <a href="manage_messages.php" class="admin-nav-link <?php echo ($current_admin_page == 'manage_messages.php') ? 'active' : ''; ?>">
                <i class="bi bi-chat-dots-fill"></i> Messages
            </a>

            <div class="admin-nav-divider"></div>

            <a href="../index.php" class="admin-nav-link">
                <i class="bi bi-box-arrow-left"></i> Back to Site
            </a>

            <a href="../logout.php" class="admin-nav-link text-danger-link">
                <i class="bi bi-power"></i> Logout
            </a>

        </nav>

    </aside>


    <!-- MAIN AREA -->

    <div class="admin-main">

        <header class="admin-topbar">

            <label for="adminMenuToggle" class="admin-menu-label">
                <i class="bi bi-list"></i>
            </label>

            <h5 class="admin-topbar-title">
                <?php echo isset($page_heading) ? $page_heading : 'Dashboard'; ?>
            </h5>

            <div class="admin-topbar-actions">
                <div class="admin-admin-chip">
                    <span class="admin-avatar">A</span>
                    <span>Admin</span>
                </div>
            </div>

        </header>

        <main class="admin-content">

            <?php

            if (isset($page_content))
            {
                echo $page_content;
            }

            ?>

        </main>

    </div>

</div>

<!-- Bootstrap JS -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
></script>

</body>

</html>