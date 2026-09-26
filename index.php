<?php

$page_title = "Home | Re-NewTech";

$main_class = "home-page";

ob_start();

?>


<!-- =====================================================
     HERO SECTION
===================================================== -->

<section class="hero-section">

    <div class="hero-glow hero-glow-one"></div>
    <div class="hero-glow hero-glow-two"></div>

    <div class="container position-relative">

        <div class="row align-items-center g-5">


            <!-- LEFT CONTENT -->

            <div class="col-lg-6">

                <span class="hero-kicker">

                    <span class="kicker-dot"></span>

                    SMARTER TECH. BETTER REUSE.

                </span>


                <h1 class="hero-title">

                    Old Tech.
                    <span>New Purpose.</span>

                </h1>


                <p class="hero-description">

                    Discover pre-owned electronics with
                    transparent information about their
                    usage, condition and functionality —
                    so you can choose with confidence.

                </p>


                <div class="hero-actions">

                    <a
                        href="products.php"
                        class="btn-main"
                    >

                        Explore Re-NewTech

                        <i class="bi bi-arrow-up-right"></i>

                    </a>


                    <a
                        href="register.php"
                        class="btn-outline-main"
                    >

                        List Your Item

                    </a>

                </div>


                <div class="hero-quote">

                    <i class="bi bi-quote"></i>

                    <span>
                        Better information leads to better reuse.
                    </span>

                </div>

            </div>


            <!-- HERO IMAGE -->

            <div class="col-lg-6">

                <div class="hero-visual">


                    <!-- REAL IMAGE -->

                    <img
                        src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=1200&q=85"
                        alt="Laptop used for technology reuse"
                        class="hero-image"
                    >


                    <!-- CONDITION CARD -->

                    <div class="hero-floating-card condition-card">

                        <div class="floating-icon">
                            <i class="bi bi-check2-circle"></i>
                        </div>

                        <div>

                            <small>
                                Condition
                            </small>

                            <strong>
                                Clearly Explained
                            </strong>

                        </div>

                    </div>


                    <!-- USAGE CARD -->

                    <div class="hero-floating-card usage-card">

                        <small>
                            USAGE HISTORY
                        </small>

                        <strong>
                            Available
                        </strong>

                        <span>
                            Purchase & usage details
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     SEARCH
===================================================== -->

<section class="search-section">

    <div class="container">

        <div class="search-card">

            <div class="search-heading">

                <span>
                    FIND YOUR NEXT DEVICE
                </span>

                <h2>
                    What are you looking for?
                </h2>

            </div>


            <form
                action="products.php"
                method="GET"
                class="search-form"
            >

                <div class="search-input-wrap">

                    <i class="bi bi-search"></i>

                    <input
                        type="text"
                        name="search"
                        placeholder="Search laptops, mobiles, monitors..."
                    >

                </div>


                <button type="submit">

                    Search

                    <i class="bi bi-arrow-right"></i>

                </button>

            </form>

        </div>

    </div>

</section>


<!-- =====================================================
     CATEGORIES
===================================================== -->

<section class="section-space categories-section">

    <div class="container">


        <div class="section-heading-row">

            <div>

                <span class="section-eyebrow">
                    EXPLORE
                </span>

                <h2>
                    Find What You Need
                </h2>

                <p>
                    Browse electronics by category.
                </p>

            </div>


            <a
                href="products.php"
                class="section-link"
            >

                View all

                <i class="bi bi-arrow-up-right"></i>

            </a>

        </div>


        <div class="row g-3">


            <!-- LAPTOP -->

            <div class="col-6 col-md-4 col-lg-2">

                <a
                    href="products.php?category=Laptops"
                    class="category-card"
                >

                    <img
                        src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?auto=format&fit=crop&w=700&q=85"
                        alt="Laptops"
                    >

                    <div class="category-overlay"></div>

                    <div class="category-content">

                        <h3>
                            Laptops
                        </h3>

                        <span>
                            Explore
                        </span>

                    </div>

                </a>

            </div>


            <!-- MOBILE -->

            <div class="col-6 col-md-4 col-lg-2">

                <a
                    href="products.php?category=Mobiles"
                    class="category-card"
                >

                    <img
                        src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?auto=format&fit=crop&w=700&q=85"
                        alt="Mobile phones"
                    >

                    <div class="category-overlay"></div>

                    <div class="category-content">

                        <h3>
                            Mobiles
                        </h3>

                        <span>
                            Explore
                        </span>

                    </div>

                </a>

            </div>


            <!-- COMPUTERS -->

            <div class="col-6 col-md-4 col-lg-2">

                <a
                    href="products.php?category=Computers"
                    class="category-card"
                >

                    <img
                        src="https://images.unsplash.com/photo-1593640408182-31c70c8268f5?auto=format&fit=crop&w=700&q=85"
                        alt="Desktop computers"
                    >

                    <div class="category-overlay"></div>

                    <div class="category-content">

                        <h3>
                            Computers
                        </h3>

                        <span>
                            Explore
                        </span>

                    </div>

                </a>

            </div>


            <!-- MONITORS -->

            <div class="col-6 col-md-4 col-lg-2">

                <a
                    href="products.php?category=Monitors"
                    class="category-card"
                >

                    <img
                        src="https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?auto=format&fit=crop&w=700&q=85"
                        alt="Computer monitors"
                    >

                    <div class="category-overlay"></div>

                    <div class="category-content">

                        <h3>
                            Monitors
                        </h3>

                        <span>
                            Explore
                        </span>

                    </div>

                </a>

            </div>


            <!-- PRINTER -->

            <div class="col-6 col-md-4 col-lg-2">

                <a
                    href="products.php?category=Printers"
                    class="category-card"
                >

                    <img
                        src="https://images.unsplash.com/photo-1612815154858-60aa4c59eaa6?auto=format&fit=crop&w=700&q=85"
                        alt="Printers"
                    >

                    <div class="category-overlay"></div>

                    <div class="category-content">

                        <h3>
                            Printers
                        </h3>

                        <span>
                            Explore
                        </span>

                    </div>

                </a>

            </div>


            <!-- OTHER -->

            <div class="col-6 col-md-4 col-lg-2">

                <a
                    href="products.php?category=Other"
                    class="category-card"
                >

                    <img
                        src="https://images.unsplash.com/photo-1550009158-9ebf69173e03?auto=format&fit=crop&w=700&q=85"
                        alt="Other electronic devices"
                    >

                    <div class="category-overlay"></div>

                    <div class="category-content">

                        <h3>
                            Other Tech
                        </h3>

                        <span>
                            Explore
                        </span>

                    </div>

                </a>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     FEATURED PRODUCTS
===================================================== -->

<section class="section-space featured-section">

    <div class="container">


        <div class="section-heading-row">

            <div>

                <span class="section-eyebrow">
                    FEATURED ITEMS
                </span>

                <h2>
                    Devices Ready for a New Home
                </h2>

                <p>
                    See the condition. Know the history.
                    Choose with confidence.
                </p>

            </div>


            <a
                href="products.php"
                class="section-link"
            >

                Browse catalog

                <i class="bi bi-arrow-up-right"></i>

            </a>

        </div>


        <div class="row g-4">


            <!-- PRODUCT 1 -->

            <div class="col-md-6 col-lg-3">

                <div class="product-card">


                    <div class="product-image">

                        <img
                            src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?auto=format&fit=crop&w=900&q=85"
                            alt="Used laptop"
                        >


                        <a
                            href="wishlist.php"
                            class="wishlist-button"
                            title="Add to wishlist"
                        >

                            <i class="bi bi-heart"></i>

                        </a>

                    </div>


                    <div class="product-content">

                        <span class="condition good">
                            Good Condition
                        </span>


                        <h3>
                            Dell Latitude 7490
                        </h3>


                        <p class="product-spec">
                            Core i7 • 16GB RAM • 512GB SSD
                        </p>


                        <div class="product-info">

                            <span>
                                <i class="bi bi-clock"></i>
                                Used 2.5 years
                            </span>

                            <span>
                                <i class="bi bi-check-circle"></i>
                                Working
                            </span>

                        </div>


                        <div class="product-footer">

                            <strong>
                                ₹14,999
                            </strong>


                            <a
                                href="cart.php"
                                class="cart-button"
                                title="Add to cart"
                            >

                                <i class="bi bi-bag-plus"></i>

                            </a>

                        </div>

                    </div>

                </div>

            </div>


            <!-- PRODUCT 2 -->

            <div class="col-md-6 col-lg-3">

                <div class="product-card">


                    <div class="product-image">

                        <img
                            src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?auto=format&fit=crop&w=900&q=85"
                            alt="Used smartphone"
                        >


                        <a
                            href="wishlist.php"
                            class="wishlist-button"
                        >

                            <i class="bi bi-heart"></i>

                        </a>

                    </div>


                    <div class="product-content">

                        <span class="condition excellent">
                            Excellent
                        </span>


                        <h3>
                            Samsung Galaxy S22
                        </h3>


                        <p class="product-spec">
                            128GB • Unlocked
                        </p>


                        <div class="product-info">

                            <span>
                                <i class="bi bi-clock"></i>
                                Used 1.5 years
                            </span>

                            <span>
                                <i class="bi bi-check-circle"></i>
                                Working
                            </span>

                        </div>


                        <div class="product-footer">

                            <strong>
                                ₹19,500
                            </strong>


                            <a
                                href="cart.php"
                                class="cart-button"
                            >

                                <i class="bi bi-bag-plus"></i>

                            </a>

                        </div>

                    </div>

                </div>

            </div>


            <!-- PRODUCT 3 -->

            <div class="col-md-6 col-lg-3">

                <div class="product-card">


                    <div class="product-image">

                        <img
                            src="https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?auto=format&fit=crop&w=900&q=85"
                            alt="Used monitor"
                        >


                        <a
                            href="wishlist.php"
                            class="wishlist-button"
                        >

                            <i class="bi bi-heart"></i>

                        </a>

                    </div>


                    <div class="product-content">

                        <span class="condition good">
                            Good Condition
                        </span>


                        <h3>
                            Dell 24" Monitor
                        </h3>


                        <p class="product-spec">
                            Full HD • IPS Display
                        </p>


                        <div class="product-info">

                            <span>
                                <i class="bi bi-clock"></i>
                                Used 2 years
                            </span>

                            <span>
                                <i class="bi bi-check-circle"></i>
                                Working
                            </span>

                        </div>


                        <div class="product-footer">

                            <strong>
                                ₹6,800
                            </strong>


                            <a
                                href="cart.php"
                                class="cart-button"
                            >

                                <i class="bi bi-bag-plus"></i>

                            </a>

                        </div>

                    </div>

                </div>

            </div>


            <!-- PRODUCT 4 -->

            <div class="col-md-6 col-lg-3">

                <div class="product-card">


                    <div class="product-image">

                        <img
                            src="https://images.unsplash.com/photo-1612815154858-60aa4c59eaa6?auto=format&fit=crop&w=900&q=85"
                            alt="Used printer"
                        >


                        <a
                            href="wishlist.php"
                            class="wishlist-button"
                        >

                            <i class="bi bi-heart"></i>

                        </a>

                    </div>


                    <div class="product-content">

                        <span class="condition fair">
                            Fair Condition
                        </span>


                        <h3>
                            HP Laser Printer
                        </h3>


                        <p class="product-spec">
                            Wireless • Black & White
                        </p>


                        <div class="product-info">

                            <span>
                                <i class="bi bi-clock"></i>
                                Used 3 years
                            </span>

                            <span>
                                <i class="bi bi-wrench"></i>
                                Minor Issue
                            </span>

                        </div>


                        <div class="product-footer">

                            <strong>
                                ₹4,200
                            </strong>


                            <a
                                href="cart.php"
                                class="cart-button"
                            >

                                <i class="bi bi-bag-plus"></i>

                            </a>

                        </div>

                    </div>

                </div>

            </div>


        </div>

    </div>

</section>


<!-- =====================================================
     QUOTE
===================================================== -->

<section class="quote-section">

    <div class="container">

        <div class="quote-card">

            <div class="quote-mark">
                “
            </div>

            <h2>
                The next useful device
                might already exist.
            </h2>

            <p>
                Reuse what still works.
                Understand what you buy.
                Keep technology useful for longer.
            </p>

        </div>

    </div>

</section>


<!-- =====================================================
     WHY CHOOSE US
===================================================== -->

<section class="section-space why-section">

    <div class="container">


        <div class="section-center">

            <span class="section-eyebrow">
                WHY USE Re-NewTech?
            </span>

            <h2>
                More Than Just a Price Tag
            </h2>

            <p>
                A pre-owned electronic deserves clear
                information before it changes hands.
            </p>

        </div>


        <div class="row g-4 mt-4">


            <div class="col-md-6 col-lg-3">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-calendar3"></i>
                    </div>

                    <h3>
                        Usage History
                    </h3>

                    <p>
                        Understand when the device was
                        purchased and how long it was used.
                    </p>

                </div>

            </div>


            <div class="col-md-6 col-lg-3">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-clipboard2-check"></i>
                    </div>

                    <h3>
                        Condition Details
                    </h3>

                    <p>
                        See physical condition, working
                        status and known issues.
                    </p>

                </div>

            </div>


            <div class="col-md-6 col-lg-3">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-heart"></i>
                    </div>

                    <h3>
                        Wishlist
                    </h3>

                    <p>
                        Save interesting electronics
                        and come back to them later.
                    </p>

                </div>

            </div>


            <div class="col-md-6 col-lg-3">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-star"></i>
                    </div>

                    <h3>
                        Reviews
                    </h3>

                    <p>
                        Learn from ratings and experiences
                        shared by other users.
                    </p>

                </div>

            </div>


        </div>

    </div>

</section>


<!-- =====================================================
     HOW IT WORKS
===================================================== -->

<section class="process-section">

    <div class="container">

        <div class="row align-items-center g-5">


            <div class="col-lg-5">

                <span class="section-eyebrow light-eyebrow">
                    SIMPLE JOURNEY
                </span>

                <h2>
                    From old device
                    to new opportunity.
                </h2>

                <p>
                    Browse, understand, choose and give
                    useful technology another life.
                </p>

            </div>


            <div class="col-lg-7">

                <div class="process-card">


                    <div class="process-item">

                        <span>
                            01
                        </span>

                        <div>

                            <h3>
                                Search
                            </h3>

                            <p>
                                Find electronics by product,
                                category or brand.
                            </p>

                        </div>

                    </div>


                    <div class="process-item">

                        <span>
                            02
                        </span>

                        <div>

                            <h3>
                                Understand
                            </h3>

                            <p>
                                Check usage history and
                                current condition.
                            </p>

                        </div>

                    </div>


                    <div class="process-item">

                        <span>
                            03
                        </span>

                        <div>

                            <h3>
                                Choose
                            </h3>

                            <p>
                                Save it to wishlist or
                                add it to your cart.
                            </p>

                        </div>

                    </div>


                    <div class="process-item">

                        <span>
                            04
                        </span>

                        <div>

                            <h3>
                                Reuse
                            </h3>

                            <p>
                                Complete the purchase and
                                give the device another purpose.
                            </p>

                        </div>

                    </div>


                </div>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     FINAL CTA
===================================================== -->

<section class="final-cta">

    <div class="container">

        <div class="final-cta-content">

            <span class="section-eyebrow">
                YOUR NEXT DEVICE IS OUT THERE
            </span>

            <h2>
                Don't just buy technology.
                Give it another chapter.
            </h2>

            <p>
                Explore pre-owned electronics with
                clear and honest condition information.
            </p>


            <a
                href="products.php"
                class="btn-cta"
            >

                Explore Re-NewTech

                <i class="bi bi-arrow-up-right"></i>

            </a>

        </div>

    </div>

</section>


<?php

$page_content = ob_get_clean();

require_once 'layout.php';

?>