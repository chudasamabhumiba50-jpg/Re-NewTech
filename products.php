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

<style>
    .pc-page {
        background: var(--cream);
        padding: 34px 0 70px;
    }

    /* ===== HEADER STRIP ===== */
    .pc-header {
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        gap: 24px;
        flex-wrap: wrap;
        padding-bottom: 22px;
        margin-bottom: 26px;
        border-bottom: 1px solid var(--line);
    }

    .pc-header h1 {
        margin: 0 0 6px;
        color: var(--navy);
        font-size: 2rem;
        font-weight: 800;
        letter-spacing: -0.8px;
    }

    .pc-header p {
        margin: 0;
        color: var(--muted);
        font-size: 0.86rem;
        max-width: 480px;
    }

    .pc-stat-group {
        display: flex;
        gap: 26px;
    }

    .pc-stat {
        text-align: right;
    }

    .pc-stat strong {
        display: block;
        color: var(--navy);
        font-size: 1.5rem;
        font-weight: 800;
        line-height: 1;
    }

    .pc-stat span {
        color: var(--muted);
        font-size: 0.68rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* ===== TOOLBAR ===== */
    .pc-toolbar {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 14px;
        margin-bottom: 22px;
    }

    .pc-search {
        position: relative;
        flex: 1;
        min-width: 220px;
        max-width: 400px;
    }

    .pc-search i {
        position: absolute;
        left: 14px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--muted);
        font-size: 0.9rem;
    }

    .pc-search input {
        width: 100%;
        padding: 11px 14px 11px 38px;
        border: 1px solid var(--line);
        border-radius: 10px;
        background: var(--white);
        font-size: 0.84rem;
        outline: none;
        transition: 0.2s ease;
    }

    .pc-search input:focus {
        border-color: var(--teal);
        box-shadow: 0 0 0 3px rgba(30, 201, 186, 0.12);
    }

    .pc-sort {
        padding: 10px 14px;
        border: 1px solid var(--line);
        border-radius: 10px;
        background: var(--white);
        color: var(--text);
        font-size: 0.8rem;
        outline: none;
    }

    .pc-result-text {
        margin-left: auto;
        color: var(--muted);
        font-size: 0.78rem;
    }

    .pc-result-text strong {
        color: var(--text);
    }

    /* ===== FILTER CHIPS ===== */
    .pc-filter-row {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 10px;
        margin-bottom: 30px;
    }

    .pc-filter-group {
        display: flex;
        flex-wrap: wrap;
        gap: 6px;
        padding: 5px;
        background: var(--white);
        border: 1px solid var(--line);
        border-radius: 11px;
    }

    .pc-chip {
        padding: 7px 13px;
        border-radius: 7px;
        color: var(--muted);
        font-size: 0.74rem;
        font-weight: 700;
        cursor: pointer;
        border: none;
        background: none;
        white-space: nowrap;
        transition: 0.15s ease;
    }

    .pc-chip:hover {
        color: var(--navy);
    }

    .pc-chip.is-active {
        background: var(--navy);
        color: var(--white);
    }

    .pc-budget {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 8px 15px;
        background: var(--white);
        border: 1px solid var(--line);
        border-radius: 11px;
        font-size: 0.74rem;
        color: var(--muted);
    }

    .pc-budget input[type="range"] {
        width: 130px;
        accent-color: var(--teal-dark);
    }

    .pc-budget strong {
        color: var(--text);
    }

    .pc-reset {
        color: var(--teal-dark);
        font-size: 0.76rem;
        font-weight: 700;
        text-decoration: none;
        cursor: pointer;
        background: none;
        border: none;
    }

    /* ===== PRODUCT GRID ===== */
    .pc-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(255px, 1fr));
        gap: 22px;
    }

    .pc-card {
        background: var(--white);
        border: 1px solid var(--line);
        border-radius: 14px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        transition: border-color 0.25s ease, transform 0.25s ease;
    }

    .pc-card:hover {
        border-color: var(--teal);
        transform: translateY(-3px);
    }

    .pc-card-img {
        position: relative;
        height: 178px;
        background: #f2f4f5;
        overflow: hidden;
    }

    .pc-card-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .pc-card:hover .pc-card-img img {
        transform: scale(1.06);
    }

    .pc-wish-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        width: 33px;
        height: 33px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, 0.92);
        color: var(--navy);
        border-radius: 50%;
        text-decoration: none;
        font-size: 0.85rem;
    }

    .pc-wish-btn:hover {
        background: var(--navy);
        color: var(--white);
    }

    .pc-eco-tag {
        position: absolute;
        left: 10px;
        bottom: 10px;
        padding: 4px 9px;
        background: rgba(11, 18, 32, 0.78);
        color: #a9f2ea;
        border-radius: 6px;
        font-size: 0.63rem;
        font-weight: 700;
    }

    .pc-card-body {
        padding: 15px 16px 17px;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .pc-card-cat {
        color: var(--violet);
        font-size: 0.65rem;
        font-weight: 800;
        letter-spacing: 0.4px;
        margin-bottom: 5px;
    }

    .pc-card-name {
        margin: 0 0 6px;
        font-size: 0.9rem;
        line-height: 1.4;
        font-weight: 700;
        min-height: 38px;
    }

    .pc-card-name a {
        color: var(--text);
        text-decoration: none;
    }

    .pc-card-name a:hover {
        color: var(--teal-dark);
    }

    .pc-card-specs {
        color: var(--muted);
        font-size: 0.68rem;
        margin-bottom: 10px;
        min-height: 17px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .pc-card-rating {
        display: flex;
        align-items: center;
        gap: 5px;
        margin-bottom: 12px;
        font-size: 0.72rem;
        color: var(--muted);
    }

    .pc-card-rating i {
        color: #e9a91f;
    }

    .pc-card-rating strong {
        color: var(--text);
    }

    .pc-card-foot {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 8px;
        margin-top: auto;
        padding-top: 12px;
        border-top: 1px solid var(--line);
    }

    .pc-price-wrap strong {
        display: block;
        color: var(--text);
        font-size: 1.12rem;
        font-weight: 900;
    }

    .pc-price-wrap span {
        color: #a3aab5;
        font-size: 0.68rem;
        text-decoration: line-through;
    }

    .pc-cart-btn {
        display: flex;
        align-items: center;
        gap: 6px;
        padding: 9px 13px;
        background: var(--teal);
        color: var(--white);
        border-radius: 9px;
        font-size: 0.72rem;
        font-weight: 800;
        text-decoration: none;
        transition: 0.2s ease;
    }

    .pc-cart-btn:hover {
        background: var(--teal-dark);
        color: var(--white);
    }

    /* ===== NO RESULTS ===== */
    .pc-empty {
        display: none;
        padding: 65px 20px;
        text-align: center;
        background: var(--white);
        border: 1px solid var(--line);
        border-radius: 14px;
    }

    @media (max-width: 767px) {
        .pc-header { align-items: flex-start; flex-direction: column; }
        .pc-stat-group { gap: 18px; }
        .pc-result-text { margin-left: 0; width: 100%; order: 3; }
    }
</style>

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

<script>
    const searchInput = document.getElementById('productSearchInput');
    const categoryChips = document.querySelectorAll('#categoryChipGroup .pc-chip');
    const conditionChips = document.querySelectorAll('#conditionChipGroup .pc-chip');
    const priceRangeInput = document.getElementById('priceRangeInput');
    const priceRangeLabel = document.getElementById('priceRangeLabel');
    const sortSelect = document.getElementById('sortSelect');
    const resetFiltersBtn = document.getElementById('resetFiltersBtn');

    const productGrid = document.getElementById('productGrid');
    const productItems = Array.from(document.querySelectorAll('.product-item'));
    const noResultsBox = document.getElementById('noResultsBox');
    const visibleCountText = document.getElementById('visibleCountText');

    let activeCategory = 'All Categories';
    let activeCondition = 'All Conditions';

    function setActiveChip(chipList, chip, valueSetter) {
        chipList.forEach(c => c.classList.remove('is-active'));
        chip.classList.add('is-active');
        valueSetter(chip.dataset.value);
        applyFilters();
    }

    categoryChips.forEach(chip => {
        chip.addEventListener('click', () => setActiveChip(categoryChips, chip, v => activeCategory = v));
    });

    conditionChips.forEach(chip => {
        chip.addEventListener('click', () => setActiveChip(conditionChips, chip, v => activeCondition = v));
    });

    function applyFilters() {

        const searchTerm = searchInput.value.trim().toLowerCase();
        const maxPrice = parseInt(priceRangeInput.value);
        let visibleCount = 0;

        productItems.forEach(function (item) {

            const name = item.dataset.name;
            const specs = item.dataset.specs;
            const category = item.dataset.category;
            const condition = item.dataset.condition;
            const price = parseInt(item.dataset.price);

            const matchesSearch = searchTerm === '' || name.includes(searchTerm) || specs.includes(searchTerm) || category.toLowerCase().includes(searchTerm);
            const matchesCategory = activeCategory === 'All Categories' || category === activeCategory;
            const matchesCondition = activeCondition === 'All Conditions' || condition === activeCondition;
            const matchesPrice = price <= maxPrice;

            if (matchesSearch && matchesCategory && matchesCondition && matchesPrice) {
                item.style.display = '';
                visibleCount++;
            } else {
                item.style.display = 'none';
            }
        });

        visibleCountText.textContent = visibleCount;
        noResultsBox.style.display = visibleCount === 0 ? 'block' : 'none';
        productGrid.style.display = visibleCount === 0 ? 'none' : 'grid';
    }

    function applySort() {

        const sortValue = sortSelect.value;
        const sortedItems = productItems.slice();

        if (sortValue === 'low') {
            sortedItems.sort((a, b) => parseInt(a.dataset.price) - parseInt(b.dataset.price));
        } else if (sortValue === 'high') {
            sortedItems.sort((a, b) => parseInt(b.dataset.price) - parseInt(a.dataset.price));
        }

        sortedItems.forEach(item => productGrid.appendChild(item));
    }

    searchInput.addEventListener('input', applyFilters);

    priceRangeInput.addEventListener('input', function () {
        priceRangeLabel.textContent = '₹' + parseInt(this.value).toLocaleString('en-IN');
        applyFilters();
    });

    sortSelect.addEventListener('change', function () {
        applySort();
        applyFilters();
    });

    resetFiltersBtn.addEventListener('click', function () {

        searchInput.value = '';

        categoryChips.forEach(c => c.classList.remove('is-active'));
        categoryChips[0].classList.add('is-active');
        activeCategory = 'All Categories';

        conditionChips.forEach(c => c.classList.remove('is-active'));
        conditionChips[0].classList.add('is-active');
        activeCondition = 'All Conditions';

        priceRangeInput.value = 65000;
        priceRangeLabel.textContent = '₹65,000';
        sortSelect.value = 'featured';

        applySort();
        applyFilters();
    });
</script>

<?php
$page_content = ob_get_clean();
require_once 'layout.php';
?>