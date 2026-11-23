<?php
// connect to the database
require_once 'db_config.php';

// get all products from the products table
$result = mysqli_query($con, "SELECT * FROM products");

// count how many products we got
$total_products = mysqli_num_rows($result);

// add up the CO2 saved of all products
$co2_result = mysqli_query($con, "SELECT SUM(co2_saved) AS total FROM products");
$co2_row = mysqli_fetch_assoc($co2_result);
$total_co2 = $co2_row['total'];

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
                <strong id="itemCountBadge"><?php echo $total_products; ?></strong>
                <span>Listings</span>
            </div>

            <div class="pc-stat">
                <strong><?php echo $total_co2; ?>kg</strong>
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
            Showing <strong id="visibleCountText"><?php echo $total_products; ?></strong> items
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

        <?php
        // loop runs once for every product, $row holds one product at a time
        while ($row = mysqli_fetch_assoc($result)) {
        ?>

        <!-- PRODUCT CARD (this one card repeats for every product in the table) -->
        <div class="pc-card product-item"
             data-name="<?php echo strtolower($row['name']); ?>"
             data-category="<?php echo $row['category']; ?>"
             data-condition="<?php echo $row['item_condition']; ?>"
             data-specs="<?php echo strtolower($row['specs']); ?>"
             data-price="<?php echo $row['price']; ?>">

            <div class="pc-card-img">

                <img 
                    src="<?php echo $row['image']; ?>"
                    alt="<?php echo $row['name']; ?>"
                >

                <a href="#" class="pc-wish-btn" title="Add to Wishlist">
                    <i class="bi bi-heart"></i>
                </a>

                <span class="pc-eco-tag">
                    🌱 <?php echo $row['co2_saved']; ?>kg CO2
                </span>

            </div>


            <div class="pc-card-body">

                <div class="pc-card-cat" style="text-transform: uppercase;">
                    <?php echo $row['category']; ?>
                </div>

                <h3 class="pc-card-name">
                    <a href="product_details.php?id=<?php echo $row['id']; ?>">
                        <?php echo $row['name']; ?>
                    </a>
                </h3>

                <div class="pc-card-specs" title="<?php echo $row['specs']; ?>">
                    <?php echo $row['specs']; ?>
                </div>

                <div class="pc-card-rating">
                    <i class="bi bi-star-fill"></i>
                    <strong><?php echo $row['rating']; ?></strong>
                    <span>
                        (<?php echo $row['rating_count']; ?>) · <?php echo $row['item_condition']; ?>
                    </span>
                </div>

                <div class="pc-card-foot">

                    <div class="pc-price-wrap">
                        <strong>₹<?php echo $row['price']; ?></strong>
                        <span>₹<?php echo $row['old_price']; ?></span>
                    </div>

                    <a href="#" class="pc-cart-btn">
                        <i class="bi bi-bag-plus"></i> Add
                    </a>

                </div>

            </div>

        </div>

        <?php
        } // end of loop
        ?>

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