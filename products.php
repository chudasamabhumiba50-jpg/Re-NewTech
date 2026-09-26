<?php
$page_title = "Explore Re-NewTech  Catalog - Re-NewTech  Management";

// Frontend ટેસ્ટિંગ માટેનો Dummy Data Array (No Database Connection Needed)
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
        'image_url' => 'https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=500&q=80'
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
        'image_url' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=500&q=80'
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
        'image_url' => 'https://images.unsplash.com/photo-1591488320449-011701bb6704?w=500&q=80'
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
        'image_url' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=500&q=80'
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
        'image_url' => 'https://images.unsplash.com/photo-1544652478-6653e09f18a2?w=500&q=80'
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
        'image_url' => 'https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=500&q=80'
    ]
];

ob_start();
?>

<!-- Custom Frontend Styling -->
<style>
    :root {
        --primary-color: #0f5132;
        --primary-hover: #0b3d26;
        --bg-light: #f4f7f6;
        --card-shadow: 0 10px 25px rgba(0,0,0,0.05);
        --hover-shadow: 0 15px 30px rgba(0,0,0,0.12);
        --border-radius: 16px;
    }

    body {
        background-color: var(--bg-light);
    }

    /* Page Header Banner */
    .catalog-header {
        background: linear-gradient(135deg, #134e4a 0%, #064e3b 100%);
        border-radius: var(--border-radius);
        padding: 30px;
        color: #ffffff;
        margin-bottom: 25px;
    }

    /* Filter Sidebar */
    .filter-card-modern {
        background: #ffffff;
        border-radius: var(--border-radius);
        padding: 24px;
        border: 1px solid rgba(0,0,0,0.05);
        box-shadow: var(--card-shadow);
    }

    .filter-section-title {
        font-weight: 700;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        color: #6c757d;
        margin-bottom: 12px;
    }

    /* Custom Radio Controls */
    .custom-filter-item {
        margin-bottom: 8px;
    }
    
    .custom-filter-item .form-check-input:checked {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }

    /* Product Card */
    .modern-product-card {
        background: #ffffff;
        border-radius: var(--border-radius);
        border: 1px solid rgba(0,0,0,0.06);
        box-shadow: var(--card-shadow);
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        position: relative;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .modern-product-card:hover {
        transform: translateY(-7px);
        box-shadow: var(--hover-shadow);
    }

    /* Card Image Container */
    .card-img-wrapper {
        position: relative;
        height: 200px;
        overflow: hidden;
        background-color: #f8f9fa;
    }

    .card-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .modern-product-card:hover .card-img-wrapper img {
        transform: scale(1.08);
    }

    /* Wishlist Floating Button */
    .wishlist-floating-btn {
        position: absolute;
        top: 12px;
        right: 12px;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(4px);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #333;
        transition: all 0.2s ease;
        text-decoration: none;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .wishlist-floating-btn:hover {
        background: #ffffff;
        color: #dc3545;
        transform: scale(1.1);
    }

    /* Eco & Condition Badges */
    .badge-eco {
        background-color: #e6f4ea;
        color: #137333;
        font-weight: 600;
        font-size: 0.75rem;
        padding: 4px 10px;
        border-radius: 20px;
    }

    .badge-condition {
        font-size: 0.75rem;
        font-weight: 600;
        padding: 4px 8px;
        border-radius: 6px;
    }

    .badge-like-new { background-color: #e0f2fe; color: #0369a1; }
    .badge-good { background-color: #dcfce7; color: #15803d; }
    .badge-refurbished { background-color: #fef3c7; color: #b45309; }
    .badge-parts { background-color: #fee2e2; color: #b91c1c; }

    /* Buttons */
    .btn-custom-cart {
        background-color: var(--primary-color);
        color: #fff;
        border-radius: 10px;
        padding: 7px 12px;
        font-weight: 600;
        transition: all 0.2s ease;
        border: none;
        text-decoration: none;
    }

    .btn-custom-cart:hover {
        background-color: var(--primary-hover);
        color: #fff;
        transform: scale(1.03);
    }

    .btn-custom-view {
        background-color: #f1f5f9;
        color: #475569;
        border-radius: 10px;
        padding: 7px 12px;
        border: none;
        transition: all 0.2s ease;
        text-decoration: none;
    }

    .btn-custom-view:hover {
        background-color: #e2e8f0;
        color: #0f172a;
    }
</style>

<div class="container py-4">

    <!-- BREADCRUMB -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-3 small">
            <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-success fw-semibold">Home</a></li>
            <li class="breadcrumb-item active text-muted" aria-current="page">Re-NewTech Catalog</li>
        </ol>
    </nav>

    <!-- HEADER BANNER -->
    <div class="catalog-header d-flex flex-wrap align-items-center justify-content-between gap-3 shadow-sm">
        <div>
            <h2 class="fw-bold mb-1">♻️ Certified Re-NewTech Inventory</h2>
            <p class="mb-0 text-white-50 small">Browse tested second-life tech, save money, and reduce Re-NewTech.</p>
        </div>
        <div>
            <span class="badge bg-white text-dark px-3 py-2 rounded-pill fw-normal">
                🌱 <strong><?php echo count($products); ?></strong> Active Items
            </span>
        </div>
    </div>

    <!-- MAIN CONTENT GRID -->
    <div class="row g-4">

        <!-- FILTER SIDEBAR -->
        <div class="col-lg-3">
            <div class="filter-card-modern sticky-top" style="top: 20px;">
                
                <div class="d-flex justify-content-between align-items-center mb-3 pb-2 border-bottom">
                    <h6 class="fw-bold mb-0 text-dark"><i class="bi bi-sliders me-2"></i>Filters</h6>
                    <a href="#" class="text-decoration-none small text-success fw-semibold">Reset All</a>
                </div>

                <!-- CATEGORY FILTER -->
                <div class="mb-4">
                    <div class="filter-section-title">Category</div>
                    <?php 
                    $categories = ['All Categories', 'Laptops', 'Smartphones', 'Components', 'Audio', 'Storage'];
                    foreach($categories as $index => $cat): 
                    ?>
                        <div class="form-check custom-filter-item">
                            <input class="form-check-input" type="radio" name="category_demo" id="cat_<?php echo $index; ?>" <?php echo $index === 0 ? 'checked' : ''; ?>>
                            <label class="form-check-label small text-secondary" for="cat_<?php echo $index; ?>">
                                <?php echo $cat; ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- CONDITION FILTER -->
                <div class="mb-4">
                    <div class="filter-section-title">Condition</div>
                    <?php 
                    $conditions = ['All Conditions', 'Like New', 'Good', 'Refurbished', 'Parts Only'];
                    foreach($conditions as $index => $cond): 
                    ?>
                        <div class="form-check custom-filter-item">
                            <input class="form-check-input" type="radio" name="condition_demo" id="cond_<?php echo $index; ?>" <?php echo $index === 0 ? 'checked' : ''; ?>>
                            <label class="form-check-label small text-secondary" for="cond_<?php echo $index; ?>">
                                <?php echo $cond; ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- PRICE SLIDER -->
                <div class="mb-4">
                    <div class="filter-section-title">Max Budget</div>
                    <div class="d-flex justify-content-between text-dark fw-bold mb-1">
                        <span class="small">₹500</span>
                        <span class="small text-success">₹30,000</span>
                    </div>
                    <input type="range" class="form-range" min="500" max="50000" value="30000">
                </div>

                <!-- ECO STATS SIDE BANNER -->
                <div class="p-3 bg-light rounded-3 text-center border">
                    <div class="fs-4 mb-1">🌍</div>
                    <h6 class="fw-bold small mb-1">Eco-Friendly Tech</h6>
                    <p class="text-muted mb-0" style="font-size: 0.72rem;">
                        Buying reused tech saves manufacturing energy & carbon footprint.
                    </p>
                </div>

            </div>
        </div>

        <!-- PRODUCT LIST AREA -->
        <div class="col-lg-9">

            <!-- SORTING BAR -->
            <div class="d-flex justify-content-between align-items-center mb-4 bg-white p-3 rounded-3 shadow-sm border">
                <span class="text-muted small">Showing <strong><?php echo count($products); ?></strong> items</span>
                
                <div class="d-flex align-items-center gap-2">
                    <select class="form-select form-select-sm border-0 bg-light" style="width: auto; cursor: pointer;">
                        <option value="featured">Sort by: Featured</option>
                        <option value="low">Price: Low to High</option>
                        <option value="high">Price: High to Low</option>
                    </select>
                </div>
            </div>

            <!-- PRODUCT CARDS -->
            <div class="row g-4">
                <?php foreach ($products as $p): ?>
                    <div class="col-md-6 col-xl-4">
                        <div class="modern-product-card">
                            
                            <!-- IMAGE & WISHLIST -->
                            <div class="card-img-wrapper">
                                <img src="<?php echo $p['image_url']; ?>" alt="<?php echo $p['name']; ?>">
                                <a href="#" class="wishlist-floating-btn" title="Add to Wishlist">
                                    <i class="bi bi-heart"></i>
                                </a>
                            </div>

                            <!-- CARD BODY -->
                            <div class="p-3 d-flex flex-column flex-grow-1">
                                
                                <!-- BADGES -->
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge-condition <?php echo $p['condition_badge']; ?>">
                                        <?php echo $p['condition_text']; ?>
                                    </span>
                                    <span class="badge-eco">🌱 <?php echo $p['co2_saved']; ?></span>
                                </div>

                                <!-- TITLE -->
                                <h6 class="fw-bold text-dark mb-1 text-truncate">
                                    <a href="#" class="text-dark text-decoration-none">
                                        <?php echo $p['name']; ?>
                                    </a>
                                </h6>

                                <!-- SPECS -->
                                <p class="text-muted small mb-2 text-truncate" title="<?php echo $p['specs']; ?>">
                                    <?php echo $p['specs']; ?>
                                </p>

                                <!-- RATING -->
                                <div class="d-flex align-items-center gap-1 small text-warning mb-3">
                                    <i class="bi bi-star-fill"></i>
                                    <span class="fw-bold text-dark ms-1"><?php echo $p['rating']; ?></span>
                                    <span class="text-muted small">(<?php echo $p['reviews_count']; ?>)</span>
                                </div>

                                <!-- PRICE & FOOTER BUTTONS -->
                                <div class="d-flex justify-content-between align-items-center mt-auto pt-2 border-top">
                                    <div>
                                        <div class="fs-5 fw-bold text-dark">₹<?php echo number_format($p['price']); ?></div>
                                        <div class="text-muted text-decoration-line-through small" style="font-size: 0.75rem;">₹<?php echo number_format($p['original_price']); ?></div>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <a href="product_details.php?id=<?php echo $p['id']; ?>" class="btn btn-custom-view btn-sm" title="View Details">
    <i class="bi bi-eye"></i>
</a>
                                        <a href="#" class="btn btn-custom-cart btn-sm">
                                            <i class="bi bi-bag-plus me-1"></i> Add
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>

    </div>
</div>

<?php
$page_content = ob_get_clean();
require_once 'layout.php';
?>