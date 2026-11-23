<?php
// connect to database
require_once 'db_config.php';

// get product ID from URL
$product_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($product_id <= 0) {
    header("Location: products.php");
    exit();
}

// get selected product from database
$query = "SELECT * FROM products WHERE id = ? LIMIT 1";

$stmt = mysqli_prepare($con, $query);
mysqli_stmt_bind_param($stmt, "i", $product_id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$product = mysqli_fetch_assoc($result);

mysqli_stmt_close($stmt);

// check product exists or not
if (!$product) {
    header("Location: products.php");
    exit();
}

// store product details
$name = $product['name'];
$category = $product['category'];
$item_condition = $product['item_condition'];
$specs = $product['specs'];
$price = $product['price'];
$old_price = $product['old_price'];
$image = $product['image'];
$rating = $product['rating'];
$rating_count = $product['rating_count'];
$co2_saved = $product['co2_saved'];
$description = $product['description'];
$stock = $product['stock'];

// get gallery images
$gallery_images = [];

if (!empty($product['gallery_images'])) {
    $gallery_images = array_filter(
        array_map('trim', explode(',', $product['gallery_images']))
    );
}

if (empty($gallery_images)) {
    $gallery_images = [$image];
}

ob_start();
?>

<div class="pd-page">

<div class="container">

    <div class="pd-breadcrumb">

        <a href="products.php">Re-NewTech Catalog</a>

        <i class="bi bi-chevron-right" style="font-size: 0.6rem;"></i>

        <span><?php echo htmlspecialchars($category); ?></span>

    </div>

    <div class="row g-4">

        <!-- GALLERY -->
        <div class="col-lg-6">

            <div class="pd-gallery-wrap">

                <div class="pd-thumb-col">

                    <?php foreach ($gallery_images as $index => $gallery_image) { ?>

                        <div class="pd-thumb <?php echo $index === 0 ? 'is-active' : ''; ?>"
                             onclick="changeMainImage('<?php echo htmlspecialchars($gallery_image, ENT_QUOTES, 'UTF-8'); ?>', this)">

                            <img
                                src="<?php echo htmlspecialchars($gallery_image, ENT_QUOTES, 'UTF-8'); ?>"
                                alt="Thumbnail"
                            >

                        </div>

                    <?php } ?>

                </div>

                <div class="pd-main-img">

                    <img
                        id="currentMainImg"
                        src="<?php echo htmlspecialchars($image, ENT_QUOTES, 'UTF-8'); ?>"
                        alt="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>"
                    >

                </div>

            </div>

            <div class="pd-eco-strip">

                <div class="pd-eco-card">

                    <span>🌱 Carbon Reduced</span>

                    <strong><?php echo htmlspecialchars($co2_saved); ?>kg CO2 Saved</strong>

                </div>

                <div class="pd-eco-card">

                    <span>♻️ Tech Life Impact</span>

                    <strong>1.65 kg Tech Saved from Disposal</strong>

                </div>

            </div>

        </div>

        <!-- INFO -->
        <div class="col-lg-6">

            <div class="pd-info">

                <div class="pd-meta-row">

                    <span class="pd-condition-pill">

                        <?php echo htmlspecialchars($item_condition); ?>

                    </span>

                    <span>· <?php echo htmlspecialchars($category); ?></span>

                </div>

                <h1 class="pd-title">

                    <?php echo htmlspecialchars($name); ?>

                </h1>

                <div class="pd-rating-row">

                    <i class="bi bi-star-fill"></i>

                    <strong><?php echo number_format((float)$rating, 1); ?></strong>

                    <a href="#pdReviewsPanel" onclick="switchTab('reviews')">

                        (<?php echo (int)$rating_count; ?> reviews)

                    </a>

                </div>

                <div class="pd-price-block">

                    <strong>₹<?php echo number_format((float)$price); ?></strong>

                    <span>₹<?php echo number_format((float)$old_price); ?></span>

                </div>

                <div class="pd-stock-line">

                    <?php if ($stock > 0) { ?>

                        <i class="bi bi-check-circle-fill"></i>

                        In stock — only <?php echo (int)$stock; ?> left

                    <?php } else { ?>

                        <i class="bi bi-x-circle-fill"></i>

                        Out of stock

                    <?php } ?>

                </div>

                <p class="pd-desc">

                    <?php echo nl2br(htmlspecialchars($description)); ?>

                </p>

                <div class="pd-actions">

                    <input
                        type="number"
                        class="pd-qty"
                        value="1"
                        min="1"
                        max="<?php echo (int)$stock; ?>"
                        <?php echo $stock <= 0 ? 'disabled' : ''; ?>
                    >

                    <a href="cart.php?add=<?php echo $product['id']; ?>"
                       class="pd-btn-cart"
                       <?php echo $stock <= 0 ? 'aria-disabled="true" onclick="return false;"' : ''; ?>>

                        <i class="bi bi-cart-plus"></i> Add to Cart

                    </a>

                    <a href="cart.php?add=<?php echo $product['id']; ?>"
                       class="pd-btn-buy"
                       <?php echo $stock <= 0 ? 'aria-disabled="true" onclick="return false;"' : ''; ?>>

                        <i class="bi bi-lightning-charge-fill"></i> Buy Now

                    </a>

                </div>

                <div class="pd-trust-grid">

                    <div>
                        <i class="bi bi-shield-check"></i>
                        50-Point Inspection
                    </div>

                    <div>
                        <i class="bi bi-truck"></i>
                        Free Shipping
                    </div>

                    <div>
                        <i class="bi bi-arrow-counterclockwise"></i>
                        7-Day Replacement
                    </div>

                    <div>
                        <i class="bi bi-shop"></i>
                        Re-NewTech Certified Partner
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- TABS -->
    <div class="pd-tabs-section">

        <div class="pd-tab-nav">

            <button
                type="button"
                class="pd-tab-btn is-active"
                data-tab="overview"
                onclick="switchTab('overview')"
            >

                Overview

            </button>

            <button
                type="button"
                class="pd-tab-btn"
                data-tab="specs"
                onclick="switchTab('specs')"
            >

                Specifications

            </button>

            <button
                type="button"
                class="pd-tab-btn"
                data-tab="reviews"
                onclick="switchTab('reviews')"
            >

                Reviews (<?php echo (int)$rating_count; ?>)

            </button>

        </div>

        <!-- OVERVIEW -->
        <div class="pd-tab-panel is-active" id="pdOverviewPanel">

            <p class="pd-desc" style="max-width: 640px;">

                <?php echo nl2br(htmlspecialchars($description)); ?>

            </p>

        </div>

        <!-- SPECIFICATIONS -->
        <div class="pd-tab-panel" id="pdSpecsPanel">

            <table class="pd-spec-table">

                <tbody>

                    <tr>

                        <td>Specifications</td>

                        <td><?php echo htmlspecialchars($specs); ?></td>

                    </tr>

                </tbody>

            </table>

        </div>

        <!-- REVIEWS -->
        <div class="pd-tab-panel" id="pdReviewsPanel">

            <div class="pd-review-summary">

                <div class="pd-review-avg">

                    <div class="big-num">

                        <?php echo number_format((float)$rating, 1); ?>

                    </div>

                    <div class="stars-row">

                        <i class="bi bi-star-fill"></i>

                        <i class="bi bi-star-fill"></i>

                        <i class="bi bi-star-fill"></i>

                        <i class="bi bi-star-fill"></i>

                        <i class="bi bi-star-half"></i>

                    </div>

                    <div class="count-text">

                        <?php echo (int)$rating_count; ?> ratings

                    </div>

                </div>

                <div style="flex: 1; min-width: 220px;">

                    <div class="pd-bar-row">

                        <span>5 star</span>

                        <div class="pd-bar-track">

                            <div class="pd-bar-fill" style="width: 72%;"></div>

                        </div>

                        <span>72%</span>

                    </div>

                    <div class="pd-bar-row">

                        <span>4 star</span>

                        <div class="pd-bar-track">

                            <div class="pd-bar-fill" style="width: 18%;"></div>

                        </div>

                        <span>18%</span>

                    </div>

                    <div class="pd-bar-row">

                        <span>3 star</span>

                        <div class="pd-bar-track">

                            <div class="pd-bar-fill" style="width: 6%;"></div>

                        </div>

                        <span>6%</span>

                    </div>

                    <div class="pd-bar-row">

                        <span>2 star</span>

                        <div class="pd-bar-track">

                            <div class="pd-bar-fill" style="width: 3%;"></div>

                        </div>

                        <span>3%</span>

                    </div>

                    <div class="pd-bar-row">

                        <span>1 star</span>

                        <div class="pd-bar-track">

                            <div class="pd-bar-fill" style="width: 1%;"></div>

                        </div>

                        <span>1%</span>

                    </div>

                </div>

            </div>

            <div id="reviewList">

                <!-- REVIEW 1 -->
                <div class="pd-review-card">

                    <div class="pd-review-head">

                        <div class="d-flex align-items-center">

                            <span class="pd-avatar">R</span>

                            <div>

                                <div class="fw-semibold small text-dark">

                                    Ravi Patel

                                    <span class="pd-verified ms-1">

                                        <i class="bi bi-patch-check-fill"></i>

                                        Verified Buyer

                                    </span>

                                </div>

                                <div class="pd-review-stars">

                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>

                                </div>

                            </div>

                        </div>

                        <span class="text-muted small">

                            12 Sep 2026

                        </span>

                    </div>

                    <p class="pd-review-text">

                        Excellent condition, works like a brand new laptop.
                        Battery backup is also great, very happy with the purchase.

                    </p>

                </div>

                <!-- REVIEW 2 -->
                <div class="pd-review-card">

                    <div class="pd-review-head">

                        <div class="d-flex align-items-center">

                            <span class="pd-avatar">S</span>

                            <div>

                                <div class="fw-semibold small text-dark">

                                    Sneha Mehta

                                    <span class="pd-verified ms-1">

                                        <i class="bi bi-patch-check-fill"></i>

                                        Verified Buyer

                                    </span>

                                </div>

                                <div class="pd-review-stars">

                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>

                                </div>

                            </div>

                        </div>

                        <span class="text-muted small">

                            29 Aug 2026

                        </span>

                    </div>

                    <p class="pd-review-text">

                        Good value for money. Minor scratch on the back panel
                        but performance is smooth. Delivery was fast.

                    </p>

                </div>

                <!-- REVIEW 3 -->
                <div class="pd-review-card">

                    <div class="pd-review-head">

                        <div class="d-flex align-items-center">

                            <span class="pd-avatar">A</span>

                            <div>

                                <div class="fw-semibold small text-dark">

                                    Amit Shah

                                </div>

                                <div class="pd-review-stars">

                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>

                                </div>

                            </div>

                        </div>

                        <span class="text-muted small">

                            14 Aug 2026

                        </span>

                    </div>

                    <p class="pd-review-text">

                        Exactly as described. Re-NewTech quality check really
                        shows, no issues so far after 3 weeks of daily use.

                    </p>

                </div>

            </div>

            <!-- WRITE REVIEW -->
            <div class="pd-write-review">

                <h6 class="fw-bold text-dark mb-3">

                    Write a Review

                </h6>

                <form id="reviewForm">

                    <div class="mb-3">

                        <label class="form-label small fw-semibold d-block">

                            Your Rating

                        </label>

                        <div class="pd-star-input" id="starRatingInput">

                            <i class="bi bi-star-fill" data-value="1"></i>
                            <i class="bi bi-star-fill" data-value="2"></i>
                            <i class="bi bi-star-fill" data-value="3"></i>
                            <i class="bi bi-star-fill" data-value="4"></i>
                            <i class="bi bi-star-fill" data-value="5"></i>

                        </div>

                        <input
                            type="hidden"
                            id="selectedRating"
                            value="0"
                        >

                    </div>

                    <div class="row g-3 mb-3">

                        <div class="col-md-6">

                            <label class="form-label small fw-semibold">

                                Your Name

                            </label>

                            <input
                                type="text"
                                class="pd-form-control"
                                id="reviewerName"
                                placeholder="Enter your name"
                                required
                            >

                        </div>

                    </div>

                    <div class="mb-3">

                        <label class="form-label small fw-semibold">

                            Your Review

                        </label>

                        <textarea
                            class="pd-form-control"
                            id="reviewText"
                            rows="3"
                            placeholder="Share your experience with this product..."
                            required
                        ></textarea>

                    </div>

                    <button
                        type="submit"
                        class="pd-btn-buy"
                        style="display: inline-flex; width: auto; padding: 12px 22px;"
                    >

                        <i class="bi bi-send-fill me-1"></i>

                        Submit Review

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