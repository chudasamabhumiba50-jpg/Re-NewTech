<?php

$current_page = basename($_SERVER['PHP_SELF']);

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
            : 'Re-NewTech | Give Technology Another Life';
        ?>
    </title>
        <!--javascript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
       <script src ='js/validate.js'></script>
      
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

    <!-- Custom CSS -->
    <link
        rel="stylesheet"
        href="assets/css/style.css"
    >

</head>

<body>


<!-- =====================================================
     NAVBAR
===================================================== -->

<nav class="navbar navbar-expand-lg sticky-top main-navbar">

    <div class="container">

        <!-- BRAND -->

        <a
            href="index.php"
            class="navbar-brand brand-logo"
        >

            <span class="brand-symbol">
                <i class="bi bi-recycle"></i>
            </span>

            <span>Re-NewTech</span>

        </a>


        <!-- MOBILE MENU BUTTON -->

        <button
            class="navbar-toggler border-0 shadow-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mainNavbar"
            aria-controls="mainNavbar"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >

            <i class="bi bi-list fs-2"></i>

        </button>


        <!-- NAVIGATION -->

        <div
            class="collapse navbar-collapse"
            id="mainNavbar"
        >

            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                <li class="nav-item">

                    <a
                        href="index.php"
                        class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>"
                    >
                        Home
                    </a>

                </li>


                <li class="nav-item">

                    <a
                        href="products.php"
                        class="nav-link <?php echo ($current_page == 'products.php' || $current_page == 'product_details.php') ? 'active' : ''; ?>"
                    >
                        Re-NewTech
                    </a>

                </li>
                <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>

                <li class="nav-item">

                    <a
                        href="how_it_works.php"
                        class="nav-link <?php echo ($current_page == 'how_it_works.php') ? 'active' : ''; ?>"
                    >
                        How It Works
                    </a>

                </li>
            </ul>


            <!-- RIGHT ACTIONS -->

           <div class="navbar-actions">

    <a href="products.php" class="nav-icon-button" title="Search">
        <i class="bi bi-search"></i>
    </a>

    <a href="wishlist.php" class="nav-icon-button <?php echo ($current_page == 'wishlist.php') ? 'active-icon' : ''; ?>" title="Wishlist">
        <i class="bi bi-heart"></i>
    </a>

    <a href="cart.php" class="nav-icon-button <?php echo ($current_page == 'cart.php' || $current_page == 'checkout.php') ? 'active-icon' : ''; ?>" title="Cart">
        <i class="bi bi-bag"></i>
    </a>

    <div class="dropdown">

        <button type="button" id="accountDropdown" class="nav-icon-button account-toggle-btn <?php echo ($current_page == 'orders.php') ? 'active-icon' : ''; ?>" data-bs-toggle="dropdown" aria-expanded="false" title="Account">
            <i class="bi bi-person"></i>
        </button>

        <ul class="dropdown-menu dropdown-menu-end account-dropdown-menu" aria-labelledby="accountDropdown">

            <li>
                <a class="dropdown-item" href="orders.php">
                    <i class="bi bi-bag-check me-2"></i> My Orders
                </a>
            </li>

            <li>
                <a class="dropdown-item" href="wishlist.php">
                    <i class="bi bi-heart me-2"></i> My Wishlist
                </a>
            </li>

            <li>
                <hr class="dropdown-divider">
            </li>

            <li>
                <a class="dropdown-item" href="login.php">
                    <i class="bi bi-box-arrow-in-right me-2"></i> Login
                </a>
            </li>

            <li>
                <a class="dropdown-item" href="register.php">
                    <i class="bi bi-person-plus me-2"></i> Register
                </a>
            </li>
             <li>
        <a class="dropdown-item" href="logout.php">
            <i class="bi bi-box-arrow-right me-2"></i> Logout
        </a>
    </li>

        </ul>

    </div>

    <a href="login.php" class="btn btn-nav-login">
        Login
    </a>

    <a href="register.php" class="btn btn-nav-register">
        Register
    </a>

</div>

        </div>

    </div>

</nav>


<!-- =====================================================
     DYNAMIC CONTENT
===================================================== -->

<main class="<?php echo isset($main_class) ? $main_class : ''; ?>">

    <?php

    if (isset($page_content))
    {
        echo $page_content;
    }

    ?>

</main>


<!-- =====================================================
     FOOTER
===================================================== -->

<footer class="main-footer">

    <div class="container">

        <div class="row gy-5">


            <!-- BRAND -->

            <div class="col-lg-4">

                <a
                    href="index.php"
                    class="footer-brand"
                >

                    <span class="footer-brand-symbol">
                        <i class="bi bi-recycle"></i>
                    </span>

                    Re-NewTech

                </a>


                <p class="footer-description">

                    A modern platform for discovering,
                    understanding and reusing pre-owned
                    electronics with transparent product
                    information.

                </p>


                <div class="footer-socials">

                    <a href="#" aria-label="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>

                    <a href="#" aria-label="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>

                    <a href="#" aria-label="LinkedIn">
                        <i class="bi bi-linkedin"></i>
                    </a>

                </div>

            </div>


            <!-- EXPLORE -->

            <div class="col-6 col-md-4 col-lg-2">

                <h6 class="footer-title">
                    Explore
                </h6>

                <ul class="footer-links">

                    <li>
                        <a href="index.php">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="products.php">
                           Re-NewTech
                        </a>
                    </li>

                    <li>
                        <a href="wishlist.php">
                            Wishlist
                        </a>
                    </li>

                    <li>
                        <a href="cart.php">
                            Cart
                        </a>
                    </li>
                    

                </ul>

            </div>


            <!-- INFORMATION -->

            <div class="col-6 col-md-4 col-lg-3">

                <h6 class="footer-title">
                    Information
                </h6>

                <ul class="footer-links">

                    <li>
                        <a href="about.php">
                            About Us
                        </a>
                    </li>

                    <li>
                        <a href="how_it_works.php">
                            How It Works
                        </a>
                    </li>

                    <li>
                        <a href="orders.php">
                            My Orders
                        </a>
                    </li>

                    <li>
                        <a href="contact.php">
                            Contact Us
                        </a>
                    </li>

                </ul>

            </div>


            <!-- NOTIFICATIONS -->

            <div class="col-lg-3">

                <h6 class="footer-title">
                    Stay Updated
                </h6>

                <p class="footer-small-text">

                    Receive updates about new listings,
                    order notifications and useful
                    platform information.

                </p>


                <form class="footer-newsletter">

                    <input
                        type="email"
                        placeholder="Enter your email"
                        required
                    >

                    <button type="submit">

                        <i class="bi bi-arrow-right"></i>

                    </button>

                </form>

            </div>

        </div>


        <div class="footer-bottom">

            <p>
                © <?php echo date('Y'); ?> Re-NewTech.
                All rights reserved.
            </p>


            <div class="footer-bottom-links">

                <a href="#">
                    Privacy
                </a>

                <a href="#">
                    Terms
                </a>

            </div>

        </div>

    </div>

</footer>


<!-- Bootstrap JS -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
></script>

</body>

</html>