<?php
$page_title = "Product Details - Re-NewTech";

// Get ID from URL (e.g. product_details.php?id=2), default to 1 if not set
$product_id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

// Dummy product data store, same as used in products.php
$all_products = [
    1 => [
        'id' => 1,
        'name' => 'Refurbished ThinkPad T480 (Core i5, 16GB RAM, 256GB SSD)',
        'category' => 'Laptops',
        'condition_badge' => 'badge-like-new',
        'condition_text' => 'Certified Renewed (Grade A)',
        'price' => 22500,
        'original_price' => 65000,
        'rating' => 4.8,
        'reviews_count' => 34,
        'co2_saved' => '140kg CO2 Saved',
        'sustainability_impact' => '1.65 kg Tech Saved from Disposal',
        'in_stock' => true,
        'stock_count' => 4,
        'seller' => 'Re-NewTech Certified Partner',
        'description' => 'This Lenovo ThinkPad T480 has been professionally inspected, rigorously tested, and renewed to full working order by certified technicians at Re-NewTech. It is in Grade-A condition with minimal to no signs of cosmetic wear.',
        'images' => [
            'https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=800&q=80',
            'https://images.unsplash.com/photo-1541807084-5c52b6b3adef?w=800&q=80',
            'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=800&q=80'
        ],
        'specs' => [
            'Processor' => 'Intel Core i5-8350U (8th Gen, Quad-Core)',
            'RAM' => '16 GB DDR4 (Expandable up to 32GB)',
            'Storage' => '256 GB NVMe M.2 SSD',
            'Display' => '14" Full HD (1920x1080) IPS Anti-glare',
            'Graphics' => 'Intel UHD Graphics 620',
            'Battery Health' => '89% (Original Battery, Tested)',
            'Operating System' => 'Windows 11 Pro',
            'Warranty' => '6 Months Re-NewTech Assured Warranty'
        ]
    ],
    2 => [
        'id' => 2,
        'name' => 'Apple iPhone 11 - 128GB (Renewed Grade A)',
        'category' => 'Smartphones',
        'condition_badge' => 'badge-like-new',
        'condition_text' => 'Certified Renewed (Grade A)',
        'price' => 19999,
        'original_price' => 49900,
        'rating' => 4.7,
        'reviews_count' => 88,
        'co2_saved' => '75kg CO2 Saved',
        'sustainability_impact' => '0.22 kg Tech Saved from Disposal',
        'in_stock' => true,
        'stock_count' => 8,
        'seller' => 'Re-NewTech Certified Partner',
        'description' => 'Fully functional iPhone 11 tested by Re-NewTech experts. Features Liquid Retina display, dual 12MP camera system, and all-day battery life.',
        'images' => [
            'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=800&q=80',
            'https://images.unsplash.com/photo-1592750475338-74b7b21085ab?w=800&q=80'
        ],
        'specs' => [
            'Display' => '6.1-inch Liquid Retina HD display',
            'Processor' => 'A13 Bionic chip with Neural Engine',
            'Storage' => '128 GB Internal',
            'Camera' => 'Dual 12MP Ultra Wide and Wide cameras',
            'Battery Health' => '86% (Tested and verified)',
            'Warranty' => '6 Months Re-NewTech Assured Warranty'
        ]
    ],
    3 => [
        'id' => 3,
        'name' => 'Dell UltraSharp 27" 4K Monitor (Refurbished)',
        'category' => 'Monitors',
        'condition_badge' => 'badge-like-new',
        'condition_text' => 'Certified Renewed (Grade A)',
        'price' => 15499,
        'original_price' => 38000,
        'rating' => 4.6,
        'reviews_count' => 19,
        'co2_saved' => '95kg CO2 Saved',
        'sustainability_impact' => '4.20 kg Tech Saved from Disposal',
        'in_stock' => true,
        'stock_count' => 2,
        'seller' => 'Re-NewTech Display Hub',
        'description' => 'Experience stunning 4K clarity with factory-calibrated color accuracy. Fully inspected and cleaned with zero dead pixel guarantee.',
        'images' => [
            'https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=800&q=80'
        ],
        'specs' => [
            'Screen Size' => '27 Inches',
            'Resolution' => '4K UHD (3840 x 2160)',
            'Ports' => 'HDMI, DisplayPort, USB-C Hub',
            'Warranty' => '3 Months Warranty'
        ]
    ],
    4 => [
        'id' => 4,
        'name' => 'Samsung Galaxy Tab S7 (128GB - Refurbished)',
        'category' => 'Tablets',
        'condition_badge' => 'badge-like-new',
        'condition_text' => 'Certified Renewed (Grade B)',
        'price' => 17999,
        'original_price' => 42000,
        'rating' => 4.4,
        'reviews_count' => 15,
        'co2_saved' => '60kg CO2 Saved',
        'sustainability_impact' => '0.50 kg Tech Saved from Disposal',
        'in_stock' => true,
        'stock_count' => 5,
        'seller' => 'Re-NewTech Partner',
        'description' => 'Powerful Android tablet with S-Pen support included. Perfect for note-taking, sketching, and media consumption.',
        'images' => [
            'https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?w=800&q=80'
        ],
        'specs' => [
            'Display' => '11-inch 120Hz TFT',
            'RAM / Storage' => '6GB RAM / 128GB Storage',
            'Included' => 'S-Pen & Charger Cable',
            'Warranty' => '3 Months Warranty'
        ]
    ]
];

// If selected ID not found in data, load product 1 as default
$product = isset($all_products[$product_id]) ? $all_products[$product_id] : $all_products[1];

// Dummy reviews data for this product
$reviews = [
    [
        'name' => 'Ravi Patel',
        'rating' => 5,
        'date' => '12 Sep 2026',
        'text' => 'Excellent condition, works like a brand new laptop. Battery backup is also great, very happy with the purchase.',
        'verified' => true
    ],
    [
        'name' => 'Sneha Mehta',
        'rating' => 4,
        'date' => '29 Aug 2026',
        'text' => 'Good value for money. Minor scratch on the back panel but performance is smooth. Delivery was fast.',
        'verified' => true
    ],
    [
        'name' => 'Amit Shah',
        'rating' => 5,
        'date' => '14 Aug 2026',
        'text' => 'Exactly as described. Re-NewTech quality check really shows, no issues so far after 3 weeks of daily use.',
        'verified' => false
    ]
];

ob_start();
?>


<div class="pd-page">
<div class="container">

    <div class="pd-breadcrumb">
        <a href="products.php">Re-NewTech Catalog</a>
        <i class="bi bi-chevron-right" style="font-size: 0.6rem;"></i>
        <span><?php echo $product['category']; ?></span>
    </div>

    <div class="row g-4">

        <!-- GALLERY -->
        <div class="col-lg-6">

            <div class="pd-gallery-wrap">

                <div class="pd-thumb-col">
                    <?php foreach ($product['images'] as $index => $imgUrl): ?>
                        <div class="pd-thumb <?php echo $index === 0 ? 'is-active' : ''; ?>" onclick="changeMainImage('<?php echo $imgUrl; ?>', this)">
                            <img src="<?php echo $imgUrl; ?>" alt="Thumbnail">
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="pd-main-img">
                    <img id="currentMainImg" src="<?php echo $product['images'][0]; ?>" alt="<?php echo $product['name']; ?>">
                </div>

            </div>

            <div class="pd-eco-strip">
                <div class="pd-eco-card">
                    <span>🌱 Carbon Reduced</span>
                    <strong><?php echo $product['co2_saved']; ?></strong>
                </div>
                <div class="pd-eco-card">
                    <span>♻️ Tech Life Impact</span>
                    <strong><?php echo $product['sustainability_impact']; ?></strong>
                </div>
            </div>

        </div>

        <!-- INFO -->
        <div class="col-lg-6">
            <div class="pd-info">

                <div class="pd-meta-row">
                    <span class="pd-condition-pill"><?php echo $product['condition_text']; ?></span>
                    <span>· <?php echo $product['category']; ?></span>
                </div>

                <h1 class="pd-title"><?php echo $product['name']; ?></h1>

                <div class="pd-rating-row">
                    <i class="bi bi-star-fill"></i>
                    <strong><?php echo $product['rating']; ?></strong>
                    <a href="#pdReviewsPanel" onclick="switchTab('reviews')">(<?php echo $product['reviews_count']; ?> reviews)</a>
                </div>

                <div class="pd-price-block">
                    <strong>₹<?php echo number_format($product['price']); ?></strong>
                    <span>₹<?php echo number_format($product['original_price']); ?></span>
                </div>

                <div class="pd-stock-line">
                    <i class="bi bi-check-circle-fill"></i>
                    In stock — only <?php echo $product['stock_count']; ?> left
                </div>

                <p class="pd-desc"><?php echo $product['description']; ?></p>

                <div class="pd-actions">
                    <input type="number" class="pd-qty" value="1" min="1" max="5">
                    <a href="cart.php" class="pd-btn-cart"><i class="bi bi-cart-plus"></i> Add to Cart</a>
                    <a href="checkout.php" class="pd-btn-buy"><i class="bi bi-lightning-charge-fill"></i> Buy Now</a>
                </div>

                <div class="pd-trust-grid">
                    <div><i class="bi bi-shield-check"></i> 50-Point Inspection</div>
                    <div><i class="bi bi-truck"></i> Free Shipping</div>
                    <div><i class="bi bi-arrow-counterclockwise"></i> 7-Day Replacement</div>
                    <div><i class="bi bi-shop"></i> <?php echo $product['seller']; ?></div>
                </div>

            </div>
        </div>

    </div>

    <!-- TABS -->
    <div class="pd-tabs-section">

        <div class="pd-tab-nav">
            <button type="button" class="pd-tab-btn is-active" data-tab="overview" onclick="switchTab('overview')">Overview</button>
            <button type="button" class="pd-tab-btn" data-tab="specs" onclick="switchTab('specs')">Specifications</button>
            <button type="button" class="pd-tab-btn" data-tab="reviews" onclick="switchTab('reviews')">Reviews (<?php echo $product['reviews_count']; ?>)</button>
        </div>

        <!-- OVERVIEW -->
        <div class="pd-tab-panel is-active" id="pdOverviewPanel">
            <p class="pd-desc" style="max-width: 640px;"><?php echo $product['description']; ?></p>
        </div>

        <!-- SPECIFICATIONS -->
        <div class="pd-tab-panel" id="pdSpecsPanel">
            <table class="pd-spec-table">
                <tbody>
                    <?php foreach ($product['specs'] as $key => $val): ?>
                        <tr>
                            <td><?php echo $key; ?></td>
                            <td><?php echo $val; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- REVIEWS -->
        <div class="pd-tab-panel" id="pdReviewsPanel">

            <div class="pd-review-summary">

                <div class="pd-review-avg">
                    <div class="big-num"><?php echo $product['rating']; ?></div>
                    <div class="stars-row">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                    </div>
                    <div class="count-text"><?php echo $product['reviews_count']; ?> ratings</div>
                </div>

                <div style="flex: 1; min-width: 220px;">
                    <div class="pd-bar-row"><span>5 star</span><div class="pd-bar-track"><div class="pd-bar-fill" style="width: 72%;"></div></div><span>72%</span></div>
                    <div class="pd-bar-row"><span>4 star</span><div class="pd-bar-track"><div class="pd-bar-fill" style="width: 18%;"></div></div><span>18%</span></div>
                    <div class="pd-bar-row"><span>3 star</span><div class="pd-bar-track"><div class="pd-bar-fill" style="width: 6%;"></div></div><span>6%</span></div>
                    <div class="pd-bar-row"><span>2 star</span><div class="pd-bar-track"><div class="pd-bar-fill" style="width: 3%;"></div></div><span>3%</span></div>
                    <div class="pd-bar-row"><span>1 star</span><div class="pd-bar-track"><div class="pd-bar-fill" style="width: 1%;"></div></div><span>1%</span></div>
                </div>

            </div>

            <div id="reviewList">
                <?php foreach ($reviews as $review): ?>
                    <div class="pd-review-card">

                        <div class="pd-review-head">
                            <div class="d-flex align-items-center">
                                <span class="pd-avatar"><?php echo strtoupper(substr($review['name'], 0, 1)); ?></span>
                                <div>
                                    <div class="fw-semibold small text-dark">
                                        <?php echo htmlspecialchars($review['name']); ?>
                                        <?php if ($review['verified']): ?>
                                            <span class="pd-verified ms-1"><i class="bi bi-patch-check-fill"></i> Verified Buyer</span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="pd-review-stars">
                                        <?php for ($i = 1; $i <= 5; $i++): ?>
                                            <i class="bi <?php echo $i <= $review['rating'] ? 'bi-star-fill' : 'bi-star'; ?>"></i>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </div>
                            <span class="text-muted small"><?php echo $review['date']; ?></span>
                        </div>

                        <p class="pd-review-text"><?php echo htmlspecialchars($review['text']); ?></p>

                    </div>
                <?php endforeach; ?>
            </div>

            <div class="pd-write-review">

                <h6 class="fw-bold text-dark mb-3">Write a Review</h6>

                <form id="reviewForm">

                    <div class="mb-3">
                        <label class="form-label small fw-semibold d-block">Your Rating</label>
                        <div class="pd-star-input" id="starRatingInput">
                            <i class="bi bi-star-fill" data-value="1"></i>
                            <i class="bi bi-star-fill" data-value="2"></i>
                            <i class="bi bi-star-fill" data-value="3"></i>
                            <i class="bi bi-star-fill" data-value="4"></i>
                            <i class="bi bi-star-fill" data-value="5"></i>
                        </div>
                        <input type="hidden" id="selectedRating" value="0">
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label small fw-semibold">Your Name</label>
                            <input type="text" class="pd-form-control" id="reviewerName" placeholder="Enter your name" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Your Review</label>
                        <textarea class="pd-form-control" id="reviewText" rows="3" placeholder="Share your experience with this product..." required></textarea>
                    </div>

                    <button type="submit" class="pd-btn-buy" style="display: inline-flex; width: auto; padding: 12px 22px;">
                        <i class="bi bi-send-fill me-1"></i> Submit Review
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>
</div>

<?php
$page_content = ob_get_clean();
require_once 'layout.php';
?>