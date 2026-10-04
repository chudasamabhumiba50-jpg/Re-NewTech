<?php
$page_title = "Explore Re-NewTech  Catalog - Re-NewTech  Management";

// Dummy data array for frontend testing (No database connection needed)
$products = [
    [
        'id' => 1,
        'name' => 'Refurbished ThinkPad T480 (Core i5, 16GB RAM)',
        'category' => 'Laptops',
        'condition_badge' => 'badge-like-new',
        'condition_text' => 'Like New',
        'specs' => 'Intel i5 8th Gen | 16GB RAM | 256GB SSD',
        'price' => 22500,
        'original_price' => 65000,
        'rating' => 4.8,
        'reviews_count' => 34,
        'co2_saved' => '140kg CO2',
        'image_url' => 'https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=600&q=80'
    ],
    [
        'id' => 2,
        'name' => 'iPhone 11 - 128GB (Battery Health 88%)',
        'category' => 'Smartphones',
        'condition_badge' => 'badge-good',
        'condition_text' => 'Good Condition',
        'specs' => '128GB Storage | Black | Fully Functional',
        'price' => 18900,
        'original_price' => 49900,
        'rating' => 4.5,
        'reviews_count' => 89,
        'co2_saved' => '70kg CO2',
        'image_url' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=600&q=80'
    ],
    [
        'id' => 3,
        'name' => 'NVIDIA GTX 1060 6GB GPU (Tested)',
        'category' => 'Components',
        'condition_badge' => 'badge-refurbished',
        'condition_text' => 'Refurbished',
        'specs' => '6GB GDDR5 | Dual Fan | Perfect for Gaming',
        'price' => 7499,
        'original_price' => 24000,
        'rating' => 4.2,
        'reviews_count' => 12,
        'co2_saved' => '25kg CO2',
        'image_url' => 'https://images.unsplash.com/photo-1591488320449-011701bb6704?w=600&q=80'
    ],
    [
        'id' => 4,
        'name' => 'Sony WH-1000XM3 (Parts / Repair)',
        'category' => 'Audio',
        'condition_badge' => 'badge-parts',
        'condition_text' => 'For Parts',
        'specs' => 'ANC Headphones | Right Side Silent | Includes Case',
        'price' => 2999,
        'original_price' => 29990,
        'rating' => 3.9,
        'reviews_count' => 5,
        'co2_saved' => '8kg CO2',
        'image_url' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=600&q=80'
    ],
    [
        'id' => 5,
        'name' => 'Samsung 500GB Evo SATA SSD',
        'category' => 'Storage',
        'condition_badge' => 'badge-like-new',
        'condition_text' => 'Like New',
        'specs' => '500GB Capacity | 100% Health Score',
        'price' => 2400,
        'original_price' => 6000,
        'rating' => 4.9,
        'reviews_count' => 45,
        'co2_saved' => '12kg CO2',
        'image_url' => 'https://images.unsplash.com/photo-1544652478-6653e09f18a2?w=600&q=80'
    ],
    [
        'id' => 6,
        'name' => 'Dell UltraSharp 24" IPS Monitor',
        'category' => 'Components',
        'condition_badge' => 'badge-good',
        'condition_text' => 'Good Condition',
        'specs' => 'Full HD 1080p | HDMI & DisplayPort',
        'price' => 5800,
        'original_price' => 16000,
        'rating' => 4.6,
        'reviews_count' => 21,
        'co2_saved' => '45kg CO2',
        'image_url' => 'https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=600&q=80'
    ]
];

ob_start();
?>



<div class="pc-page">
<div class="container">

    <!-- HEADER -->
    <div class="pc-header">
        <div>
            <h1>Re-NewTech Catalog</h1>
            <p>Tested, certified second-life electronics — every listing inspected before it reaches you.</p>
        </div>

        <div class="pc-stat-group">
            <div class="pc-stat">
                <strong id="itemCountBadge"><?php echo count($products); ?></strong>
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
            <input type="text" id="productSearchInput" placeholder="Search by name, category or specs...">
        </div>

        <select class="pc-sort" id="sortSelect">
            <option value="featured">Sort: Featured</option>
            <option value="low">Price: Low to High</option>
            <option value="high">Price: High to Low</option>
        </select>

        <span class="pc-result-text">Showing <strong id="visibleCountText"><?php echo count($products); ?></strong> items</span>
    </div>

    <!-- FILTER CHIPS -->
    <div class="pc-filter-row">

        <div class="pc-filter-group" id="categoryChipGroup">
            <?php
            $categories = ['All Categories', 'Laptops', 'Smartphones', 'Components', 'Audio', 'Storage'];
            foreach ($categories as $index => $cat):
            ?>
                <button type="button" class="pc-chip <?php echo $index === 0 ? 'is-active' : ''; ?>" data-value="<?php echo $cat; ?>"><?php echo $cat; ?></button>
            <?php endforeach; ?>
        </div>

        <div class="pc-filter-group" id="conditionChipGroup">
            <?php
            $conditions = ['All Conditions', 'Like New', 'Good Condition', 'Refurbished', 'For Parts'];
            foreach ($conditions as $index => $cond):
            ?>
                <button type="button" class="pc-chip <?php echo $index === 0 ? 'is-active' : ''; ?>" data-value="<?php echo $cond; ?>"><?php echo $cond; ?></button>
            <?php endforeach; ?>
        </div>

        <div class="pc-budget">
            <span>Max</span>
            <input type="range" id="priceRangeInput" min="500" max="65000" value="65000">
            <strong id="priceRangeLabel">₹65,000</strong>
        </div>

        <button type="button" class="pc-reset" id="resetFiltersBtn">Reset</button>

    </div>

    <!-- PRODUCT GRID -->
    <div class="pc-grid" id="productGrid">

        <?php foreach ($products as $p): ?>
            <div class="pc-card product-item"
                 data-name="<?php echo strtolower($p['name']); ?>"
                 data-category="<?php echo $p['category']; ?>"
                 data-condition="<?php echo $p['condition_text']; ?>"
                 data-specs="<?php echo strtolower($p['specs']); ?>"
                 data-price="<?php echo $p['price']; ?>">

                <div class="pc-card-img">
                    <img src="<?php echo $p['image_url']; ?>" alt="<?php echo $p['name']; ?>">
                    <a href="#" class="pc-wish-btn" title="Add to Wishlist"><i class="bi bi-heart"></i></a>
                    <span class="pc-eco-tag">🌱 <?php echo $p['co2_saved']; ?></span>
                </div>

                <div class="pc-card-body">

                    <div class="pc-card-cat"><?php echo strtoupper($p['category']); ?></div>

                    <h3 class="pc-card-name">
                        <a href="product_details.php?id=<?php echo $p['id']; ?>"><?php echo $p['name']; ?></a>
                    </h3>

                    <div class="pc-card-specs" title="<?php echo $p['specs']; ?>"><?php echo $p['specs']; ?></div>

                    <div class="pc-card-rating">
                        <i class="bi bi-star-fill"></i>
                        <strong><?php echo $p['rating']; ?></strong>
                        <span>(<?php echo $p['reviews_count']; ?>) · <?php echo $p['condition_text']; ?></span>
                    </div>

                    <div class="pc-card-foot">
                        <div class="pc-price-wrap">
                            <strong>₹<?php echo number_format($p['price']); ?></strong>
                            <span>₹<?php echo number_format($p['original_price']); ?></span>
                        </div>

                        <a href="#" class="pc-cart-btn"><i class="bi bi-bag-plus"></i> Add</a>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>

    </div>

    <!-- NO RESULTS -->
    <div class="pc-empty" id="noResultsBox">
        <i class="bi bi-search fs-1 text-muted mb-3 d-block"></i>
        <h5 class="fw-bold text-dark">No products found</h5>
        <p class="text-muted small mb-0">Try adjusting your search or filters.</p>
    </div>

</div>
</div>


<?php
$page_content = ob_get_clean();
require_once 'layout.php';
?>