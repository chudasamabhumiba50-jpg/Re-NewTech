<?php
$page_title = "Product Details - Re-NewTech";

// URL માંથી ID મેળવો (જેમ કે product_details.php?id=2), જો ન હોય તો 1 ગણાશે
$product_id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

// products.php ની તમામ પ્રોડક્ટ્સનો ડમી ડેટા સ્ટોર
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

// જો પસંદ કરેલી ID ડેટામાં ન મળે તો ડિફોલ્ટ 1 નંબરની પ્રોડક્ટ લોડ કરશે
$product = isset($all_products[$product_id]) ? $all_products[$product_id] : $all_products[1];

ob_start();
?>

<!-- Custom Frontend CSS for Re-NewTech Product Details -->
<style>
    :root {
        --primary-color: #0f5132;
        --primary-hover: #0b3d26;
        --bg-light: #f4f7f6;
        --card-shadow: 0 10px 25px rgba(0,0,0,0.05);
        --border-radius: 16px;
    }

    body {
        background-color: var(--bg-light);
    }

    .main-img-container {
        background: #ffffff;
        border-radius: var(--border-radius);
        padding: 15px;
        border: 1px solid rgba(0,0,0,0.06);
        box-shadow: var(--card-shadow);
        height: 380px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .main-img-container img {
        max-height: 100%;
        max-width: 100%;
        object-fit: contain;
        transition: transform 0.3s ease;
    }

    .thumbnail-img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 10px;
        cursor: pointer;
        border: 2px solid transparent;
        transition: all 0.2s ease;
        background: #fff;
        padding: 3px;
    }

    .thumbnail-img:hover, .thumbnail-img.active {
        border-color: var(--primary-color);
        transform: scale(1.05);
    }

    .details-card {
        background: #ffffff;
        border-radius: var(--border-radius);
        padding: 28px;
        border: 1px solid rgba(0,0,0,0.06);
        box-shadow: var(--card-shadow);
    }

    .eco-impact-box {
        background: linear-gradient(135deg, #e6f4ea 0%, #d1e7dd 100%);
        border: 1px solid #a3cfbb;
        border-radius: 12px;
        padding: 16px;
    }

    .badge-condition {
        font-size: 0.8rem;
        font-weight: 600;
        padding: 6px 12px;
        border-radius: 8px;
    }
    .badge-like-new { background-color: #e0f2fe; color: #0369a1; }

    .btn-buy-now {
        background-color: var(--primary-color);
        color: #ffffff;
        border-radius: 12px;
        padding: 12px 24px;
        font-weight: 600;
        border: none;
        transition: all 0.2s ease;
    }
    .btn-buy-now:hover {
        background-color: var(--primary-hover);
        color: #ffffff;
        transform: translateY(-2px);
    }

    .btn-add-cart {
        background-color: #f1f5f9;
        color: #0f172a;
        border-radius: 12px;
        padding: 12px 24px;
        font-weight: 600;
        border: 1px solid #cbd5e1;
        transition: all 0.2s ease;
    }
    .btn-add-cart:hover {
        background-color: #e2e8f0;
    }

    .table-specs td {
        padding: 10px 12px;
        font-size: 0.9rem;
    }
    .table-specs tr:nth-child(even) {
        background-color: #f8f9fa;
    }
</style>

<div class="container py-4">

    <!-- BREADCRUMB -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-4 small">
            <li class="breadcrumb-item"><a href="products.php" class="text-decoration-none text-success fw-semibold">Re-NewTech Catalog</a></li>
            <li class="breadcrumb-item text-muted"><?php echo $product['category']; ?></li>
            <li class="breadcrumb-item active text-muted" aria-current="page"><?php echo $product['name']; ?></li>
        </ol>
    </nav>

    <div class="row g-4">

        <!-- LEFT COLUMN: PRODUCT IMAGES -->
        <div class="col-lg-5">
            <div class="main-img-container mb-3">
                <img id="currentMainImg" src="<?php echo $product['images'][0]; ?>" alt="<?php echo $product['name']; ?>">
            </div>

            <!-- THUMBNAILS -->
            <div class="d-flex gap-2 justify-content-start">
                <?php foreach($product['images'] as $index => $imgUrl): ?>
                    <img src="<?php echo $imgUrl; ?>" 
                         class="thumbnail-img shadow-sm <?php echo $index === 0 ? 'active' : ''; ?>" 
                         onclick="changeMainImage(this.src, this)" 
                         alt="Thumbnail">
                <?php endforeach; ?>
            </div>

            <!-- ECO ENVIRONMENTAL IMPACT CARD -->
            <div class="eco-impact-box mt-4">
                <h6 class="fw-bold text-success mb-2"><i class="bi bi-tree-fill me-1"></i> Re-NewTech Green Savings</h6>
                <div class="d-flex justify-content-between align-items-center text-dark small mb-1">
                    <span>🌱 Carbon Footprint Reduced:</span>
                    <strong class="text-success"><?php echo $product['co2_saved']; ?></strong>
                </div>
                <div class="d-flex justify-content-between align-items-center text-dark small">
                    <span>♻️ Sustainable Tech Life Impact:</span>
                    <strong class="text-success"><?php echo $product['sustainability_impact']; ?></strong>
                </div>
            </div>
        </div>

        <!-- RIGHT COLUMN: PRODUCT DETAILS & ACTIONS -->
        <div class="col-lg-7">
            <div class="details-card">

                <!-- CATEGORY & CONDITION -->
                <div class="d-flex align-items-center gap-2 mb-2">
                    <span class="badge-condition <?php echo $product['condition_badge']; ?>">
                        <?php echo $product['condition_text']; ?>
                    </span>
                    <span class="text-muted small">| Category: <strong><?php echo $product['category']; ?></strong></span>
                </div>

                <!-- TITLE -->
                <h3 class="fw-bold text-dark mb-2"><?php echo $product['name']; ?></h3>

                <!-- RATING & REVIEWS -->
                <div class="d-flex align-items-center gap-2 mb-3">
                    <div class="text-warning small">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                    </div>
                    <span class="fw-bold small"><?php echo $product['rating']; ?></span>
                    <span class="text-muted small">(<?php echo $product['reviews_count']; ?> verified buyer reviews)</span>
                </div>

                <!-- PRICE SECTION -->
                <div class="p-3 bg-light rounded-3 mb-4 d-flex align-items-center justify-content-between">
                    <div>
                        <span class="fs-2 fw-bold text-dark me-2">₹<?php echo number_format($product['price']); ?></span>
                        <span class="text-muted text-decoration-line-through fs-6">₹<?php echo number_format($product['original_price']); ?></span>
                        <span class="badge bg-danger ms-2">Save Discount</span>
                    </div>
                    <div>
                        <span class="badge bg-success-subtle text-success border border-success px-3 py-2 rounded-pill small fw-semibold">
                            In Stock (Only <?php echo $product['stock_count']; ?> left)
                        </span>
                    </div>
                </div>

                <!-- SHORT DESCRIPTION -->
                <p class="text-secondary small mb-4 line-height-base">
                    <?php echo $product['description']; ?>
                </p>

                <!-- QUANTITY & ACTION BUTTONS -->
                <div class="d-flex flex-wrap gap-3 mb-4">
                    <div style="width: 100px;">
                        <select class="form-select form-select-lg text-center fw-bold fs-6">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>

                    <a href="cart.php" class="btn btn-add-cart flex-grow-1 text-decoration-none text-center d-flex align-items-center justify-content-center gap-2">
                        <i class="bi bi-cart-plus fs-5"></i> Add to Cart
                    </a>

                    <a href="checkout.php" class="btn btn-buy-now flex-grow-1 text-decoration-none text-center d-flex align-items-center justify-content-center gap-2">
                        <i class="bi bi-lightning-charge-fill"></i> Buy Now
                    </a>
                </div>

                <!-- SELLER & WARRANTY INFO -->
                <div class="border-top pt-3 mt-3 row g-2 text-muted small">
                    <div class="col-6"><i class="bi bi-shield-check text-success me-1"></i> Re-NewTech 50-Point Quality Inspection</div>
                    <div class="col-6"><i class="bi bi-truck text-primary me-1"></i> Free Shipping Across India</div>
                    <div class="col-6"><i class="bi bi-arrow-counterclockwise text-warning me-1"></i> 7-Days Replacement Guarantee</div>
                    <div class="col-6"><i class="bi bi-shop me-1"></i> Seller: <?php echo $product['seller']; ?></div>
                </div>

            </div>
        </div>

    </div>

    <!-- TECHNICAL SPECIFICATIONS TAB/SECTION -->
    <div class="mt-5">
        <div class="details-card">
            <h5 class="fw-bold text-dark mb-3"><i class="bi bi-cpu me-2"></i>Technical Specifications</h5>
            <div class="table-responsive">
                <table class="table table-bordered table-specs align-middle mb-0">
                    <tbody>
                        <?php foreach($product['specs'] as $key => $val): ?>
                            <tr>
                                <td class="fw-semibold text-secondary" style="width: 30%;"><?php echo $key; ?></td>
                                <td class="text-dark"><?php echo $val; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<!-- JavaScript for Thumbnail Image Switching -->
<script>
    function changeMainImage(src, element) {
        document.getElementById('currentMainImg').src = src;
        
        let thumbnails = document.querySelectorAll('.thumbnail-img');
        thumbnails.forEach(thumb => thumb.classList.remove('active'));
        
        element.classList.add('active');
    }
</script>

<?php
$page_content = ob_get_clean();
require_once 'layout.php';
?>