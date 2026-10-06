<?php
ob_start();
?>

<div class="pc-page">
<div class="container">

    <!-- HEADER -->
    <div class="pc-header">

        <div>
            <h1>Re-NewTech Catalog</h1>
            <p>
                Tested, certified second-life electronics — every listing inspected before it reaches you.
            </p>
        </div>

        <div class="pc-stat-group">

            <div class="pc-stat">
                <strong id="itemCountBadge">6</strong>
                <span>Listings</span>
            </div>

            <div class="pc-stat">
                <strong>320kg</strong>
                <span>CO2 Saved</span>
            </div>

        </div>

    </div>


    <!-- SEARCH + SORT -->
    <div class="pc-toolbar">

        <div class="pc-search">
            <i class="bi bi-search"></i>

            <input 
                type="text" 
                id="productSearchInput" 
                placeholder="Search by name, category or specs..."
            >

        </div>

        <select class="pc-sort" id="sortSelect">

            <option value="featured">Sort: Featured</option>
            <option value="low">Price: Low to High</option>
            <option value="high">Price: High to Low</option>

        </select>

        <span class="pc-result-text">
            Showing <strong id="visibleCountText">6</strong> items
        </span>

    </div>


    <!-- FILTER CHIPS -->
    <div class="pc-filter-row">

        <div class="pc-filter-group" id="categoryChipGroup">

            <button type="button" class="pc-chip is-active" data-value="All Categories">
                All Categories
            </button>

            <button type="button" class="pc-chip" data-value="Laptops">
                Laptops
            </button>

            <button type="button" class="pc-chip" data-value="Smartphones">
                Smartphones
            </button>

            <button type="button" class="pc-chip" data-value="Components">
                Components
            </button>

            <button type="button" class="pc-chip" data-value="Audio">
                Audio
            </button>

            <button type="button" class="pc-chip" data-value="Storage">
                Storage
            </button>

        </div>


        <div class="pc-filter-group" id="conditionChipGroup">

            <button type="button" class="pc-chip is-active" data-value="All Conditions">
                All Conditions
            </button>

            <button type="button" class="pc-chip" data-value="Like New">
                Like New
            </button>

            <button type="button" class="pc-chip" data-value="Good Condition">
                Good Condition
            </button>

            <button type="button" class="pc-chip" data-value="Refurbished">
                Refurbished
            </button>

            <button type="button" class="pc-chip" data-value="For Parts">
                For Parts
            </button>

        </div>


        <div class="pc-budget">

            <span>Max</span>

            <input 
                type="range" 
                id="priceRangeInput" 
                min="500" 
                max="65000" 
                value="65000"
            >

            <strong id="priceRangeLabel">₹65,000</strong>

        </div>


        <button type="button" class="pc-reset" id="resetFiltersBtn">
            Reset
        </button>

    </div>


    <!-- PRODUCT GRID -->
    <div class="pc-grid" id="productGrid">


        <!-- PRODUCT 1 -->
        <div class="pc-card product-item"
             data-name="refurbished thinkpad t480 core i5 16gb ram"
             data-category="Laptops"
             data-condition="Like New"
             data-specs="intel i5 8th gen 16gb ram 256gb ssd"
             data-price="22500">

            <div class="pc-card-img">

                <img 
                    src="https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=600&q=80"
                    alt="Refurbished ThinkPad T480"
                >

                <a href="#" class="pc-wish-btn" title="Add to Wishlist">
                    <i class="bi bi-heart"></i>
                </a>

                <span class="pc-eco-tag">
                    🌱 140kg CO2
                </span>

            </div>


            <div class="pc-card-body">

                <div class="pc-card-cat">
                    LAPTOPS
                </div>

                <h3 class="pc-card-name">
                    <a href="product_details.php?id=1">
                        Refurbished ThinkPad T480 (Core i5, 16GB RAM)
                    </a>
                </h3>

                <div class="pc-card-specs" title="Intel i5 8th Gen | 16GB RAM | 256GB SSD">
                    Intel i5 8th Gen | 16GB RAM | 256GB SSD
                </div>

                <div class="pc-card-rating">
                    <i class="bi bi-star-fill"></i>
                    <strong>4.8</strong>
                    <span>
                        (34) · Like New
                    </span>
                </div>

                <div class="pc-card-foot">

                    <div class="pc-price-wrap">
                        <strong>₹22,500</strong>
                        <span>₹65,000</span>
                    </div>

                    <a href="#" class="pc-cart-btn">
                        <i class="bi bi-bag-plus"></i> Add
                    </a>

                </div>

            </div>

        </div>


        <!-- PRODUCT 2 -->
        <div class="pc-card product-item"
             data-name="iphone 11 128gb battery health 88%"
             data-category="Smartphones"
             data-condition="Good Condition"
             data-specs="128gb storage black fully functional"
             data-price="18900">

            <div class="pc-card-img">

                <img 
                    src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=600&q=80"
                    alt="iPhone 11"
                >

                <a href="#" class="pc-wish-btn" title="Add to Wishlist">
                    <i class="bi bi-heart"></i>
                </a>

                <span class="pc-eco-tag">
                    🌱 70kg CO2
                </span>

            </div>


            <div class="pc-card-body">

                <div class="pc-card-cat">
                    SMARTPHONES
                </div>

                <h3 class="pc-card-name">
                    <a href="product_details.php?id=2">
                        iPhone 11 - 128GB (Battery Health 88%)
                    </a>
                </h3>

                <div class="pc-card-specs" title="128GB Storage | Black | Fully Functional">
                    128GB Storage | Black | Fully Functional
                </div>

                <div class="pc-card-rating">
                    <i class="bi bi-star-fill"></i>
                    <strong>4.5</strong>
                    <span>
                        (89) · Good Condition
                    </span>
                </div>

                <div class="pc-card-foot">

                    <div class="pc-price-wrap">
                        <strong>₹18,900</strong>
                        <span>₹49,900</span>
                    </div>

                    <a href="#" class="pc-cart-btn">
                        <i class="bi bi-bag-plus"></i> Add
                    </a>

                </div>

            </div>

        </div>


        <!-- PRODUCT 3 -->
        <div class="pc-card product-item"
             data-name="nvidia gtx 1060 6gb gpu tested"
             data-category="Components"
             data-condition="Refurbished"
             data-specs="6gb gddr5 dual fan perfect for gaming"
             data-price="7499">

            <div class="pc-card-img">

                <img 
                    src="https://images.unsplash.com/photo-1591488320449-011701bb6704?w=600&q=80"
                    alt="NVIDIA GTX 1060 GPU"
                >

                <a href="#" class="pc-wish-btn" title="Add to Wishlist">
                    <i class="bi bi-heart"></i>
                </a>

                <span class="pc-eco-tag">
                    🌱 25kg CO2
                </span>

            </div>


            <div class="pc-card-body">

                <div class="pc-card-cat">
                    COMPONENTS
                </div>

                <h3 class="pc-card-name">
                    <a href="product_details.php?id=3">
                        NVIDIA GTX 1060 6GB GPU (Tested)
                    </a>
                </h3>

                <div class="pc-card-specs" title="6GB GDDR5 | Dual Fan | Perfect for Gaming">
                    6GB GDDR5 | Dual Fan | Perfect for Gaming
                </div>

                <div class="pc-card-rating">
                    <i class="bi bi-star-fill"></i>
                    <strong>4.2</strong>
                    <span>
                        (12) · Refurbished
                    </span>
                </div>

                <div class="pc-card-foot">

                    <div class="pc-price-wrap">
                        <strong>₹7,499</strong>
                        <span>₹24,000</span>
                    </div>

                    <a href="#" class="pc-cart-btn">
                        <i class="bi bi-bag-plus"></i> Add
                    </a>

                </div>

            </div>

        </div>


        <!-- PRODUCT 4 -->
        <div class="pc-card product-item"
             data-name="sony wh 1000xm3 parts repair"
             data-category="Audio"
             data-condition="For Parts"
             data-specs="anc headphones right side silent includes case"
             data-price="2999">

            <div class="pc-card-img">

                <img 
                    src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=600&q=80"
                    alt="Sony WH-1000XM3"
                >

                <a href="#" class="pc-wish-btn" title="Add to Wishlist">
                    <i class="bi bi-heart"></i>
                </a>

                <span class="pc-eco-tag">
                    🌱 8kg CO2
                </span>

            </div>


            <div class="pc-card-body">

                <div class="pc-card-cat">
                    AUDIO
                </div>

                <h3 class="pc-card-name">
                    <a href="product_details.php?id=4">
                        Sony WH-1000XM3 (Parts / Repair)
                    </a>
                </h3>

                <div class="pc-card-specs" title="ANC Headphones | Right Side Silent | Includes Case">
                    ANC Headphones | Right Side Silent | Includes Case
                </div>

                <div class="pc-card-rating">
                    <i class="bi bi-star-fill"></i>
                    <strong>3.9</strong>
                    <span>
                        (5) · For Parts
                    </span>
                </div>

                <div class="pc-card-foot">

                    <div class="pc-price-wrap">
                        <strong>₹2,999</strong>
                        <span>₹29,990</span>
                    </div>

                    <a href="#" class="pc-cart-btn">
                        <i class="bi bi-bag-plus"></i> Add
                    </a>

                </div>

            </div>

        </div>


        <!-- PRODUCT 5 -->
        <div class="pc-card product-item"
             data-name="samsung 500gb evo sata ssd"
             data-category="Storage"
             data-condition="Like New"
             data-specs="500gb capacity 100% health score"
             data-price="2400">

            <div class="pc-card-img">

                <img 
                    src="https://images.unsplash.com/photo-1544652478-6653e09f18a2?w=600&q=80"
                    alt="Samsung 500GB SSD"
                >

                <a href="#" class="pc-wish-btn" title="Add to Wishlist">
                    <i class="bi bi-heart"></i>
                </a>

                <span class="pc-eco-tag">
                    🌱 12kg CO2
                </span>

            </div>


            <div class="pc-card-body">

                <div class="pc-card-cat">
                    STORAGE
                </div>

                <h3 class="pc-card-name">
                    <a href="product_details.php?id=5">
                        Samsung 500GB Evo SATA SSD
                    </a>
                </h3>

                <div class="pc-card-specs" title="500GB Capacity | 100% Health Score">
                    500GB Capacity | 100% Health Score
                </div>

                <div class="pc-card-rating">
                    <i class="bi bi-star-fill"></i>
                    <strong>4.9</strong>
                    <span>
                        (45) · Like New
                    </span>
                </div>

                <div class="pc-card-foot">

                    <div class="pc-price-wrap">
                        <strong>₹2,400</strong>
                        <span>₹6,000</span>
                    </div>

                    <a href="#" class="pc-cart-btn">
                        <i class="bi bi-bag-plus"></i> Add
                    </a>

                </div>

            </div>

        </div>


        <!-- PRODUCT 6 -->
        <div class="pc-card product-item"
             data-name="dell ultrasharp 24 ips monitor"
             data-category="Components"
             data-condition="Good Condition"
             data-specs="full hd 1080p hdmi displayport"
             data-price="5800">

            <div class="pc-card-img">

                <img 
                    src="https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=600&q=80"
                    alt="Dell UltraSharp Monitor"
                >

                <a href="#" class="pc-wish-btn" title="Add to Wishlist">
                    <i class="bi bi-heart"></i>
                </a>

                <span class="pc-eco-tag">
                    🌱 45kg CO2
                </span>

            </div>


            <div class="pc-card-body">

                <div class="pc-card-cat">
                    COMPONENTS
                </div>

                <h3 class="pc-card-name">
                    <a href="product_details.php?id=6">
                        Dell UltraSharp 24" IPS Monitor
                    </a>
                </h3>

                <div class="pc-card-specs" title="Full HD 1080p | HDMI & DisplayPort">
                    Full HD 1080p | HDMI & DisplayPort
                </div>

                <div class="pc-card-rating">
                    <i class="bi bi-star-fill"></i>
                    <strong>4.6</strong>
                    <span>
                        (21) · Good Condition
                    </span>
                </div>

                <div class="pc-card-foot">

                    <div class="pc-price-wrap">
                        <strong>₹5,800</strong>
                        <span>₹16,000</span>
                    </div>

                    <a href="#" class="pc-cart-btn">
                        <i class="bi bi-bag-plus"></i> Add
                    </a>

                </div>

            </div>

        </div>

    </div>


    <!-- NO RESULTS -->
    <div class="pc-empty" id="noResultsBox">

        <i class="bi bi-search fs-1 text-muted mb-3 d-block"></i>

        <h5 class="fw-bold text-dark">
            No products found
        </h5>

        <p class="text-muted small mb-0">
            Try adjusting your search or filters.
        </p>

    </div>

</div>
</div>


<?php
$page_content = ob_get_clean();
require_once 'layout.php';
?>