<?php
ob_start();
?>

<div class="pd-page">
<div class="container">

    <div class="pd-breadcrumb">
        <a href="products.php">Re-NewTech Catalog</a>
        <i class="bi bi-chevron-right" style="font-size: 0.6rem;"></i>
        <span>Laptops</span>
    </div>

    <div class="row g-4">

        <!-- GALLERY -->
        <div class="col-lg-6">

            <div class="pd-gallery-wrap">

                <div class="pd-thumb-col">

                    <div class="pd-thumb is-active" onclick="changeMainImage('https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=800&q=80', this)">
                        <img src="https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=800&q=80" alt="Thumbnail">
                    </div>

                    <div class="pd-thumb" onclick="changeMainImage('https://images.unsplash.com/photo-1541807084-5c52b6b3adef?w=800&q=80', this)">
                        <img src="https://images.unsplash.com/photo-1541807084-5c52b6b3adef?w=800&q=80" alt="Thumbnail">
                    </div>

                    <div class="pd-thumb" onclick="changeMainImage('https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=800&q=80', this)">
                        <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=800&q=80" alt="Thumbnail">
                    </div>

                </div>

                <div class="pd-main-img">
                    <img 
                        id="currentMainImg" 
                        src="https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=800&q=80" 
                        alt="Refurbished ThinkPad T480"
                    >
                </div>

            </div>

            <div class="pd-eco-strip">

                <div class="pd-eco-card">
                    <span>🌱 Carbon Reduced</span>
                    <strong>140kg CO2 Saved</strong>
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
                        Certified Renewed (Grade A)
                    </span>

                    <span>· Laptops</span>
                </div>

                <h1 class="pd-title">
                    Refurbished ThinkPad T480 (Core i5, 16GB RAM, 256GB SSD)
                </h1>

                <div class="pd-rating-row">
                    <i class="bi bi-star-fill"></i>
                    <strong>4.8</strong>
                    <a href="#pdReviewsPanel" onclick="switchTab('reviews')">
                        (34 reviews)
                    </a>
                </div>

                <div class="pd-price-block">
                    <strong>₹22,500</strong>
                    <span>₹65,000</span>
                </div>

                <div class="pd-stock-line">
                    <i class="bi bi-check-circle-fill"></i>
                    In stock — only 4 left
                </div>

                <p class="pd-desc">
                    This Lenovo ThinkPad T480 has been professionally inspected,
                    rigorously tested, and renewed to full working order by
                    certified technicians at Re-NewTech. It is in Grade-A
                    condition with minimal to no signs of cosmetic wear.
                </p>

                <div class="pd-actions">

                    <input 
                        type="number" 
                        class="pd-qty" 
                        value="1" 
                        min="1" 
                        max="5"
                    >

                    <a href="cart.php" class="pd-btn-cart">
                        <i class="bi bi-cart-plus"></i> Add to Cart
                    </a>

                    <a href="checkout.php" class="pd-btn-buy">
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
                Reviews (34)
            </button>

        </div>

        <!-- OVERVIEW -->
        <div class="pd-tab-panel is-active" id="pdOverviewPanel">

            <p class="pd-desc" style="max-width: 640px;">
                This Lenovo ThinkPad T480 has been professionally inspected,
                rigorously tested, and renewed to full working order by
                certified technicians at Re-NewTech. It is in Grade-A
                condition with minimal to no signs of cosmetic wear.
            </p>

        </div>

        <!-- SPECIFICATIONS -->
        <div class="pd-tab-panel" id="pdSpecsPanel">

            <table class="pd-spec-table">

                <tbody>

                    <tr>
                        <td>Processor</td>
                        <td>Intel Core i5-8350U (8th Gen, Quad-Core)</td>
                    </tr>

                    <tr>
                        <td>RAM</td>
                        <td>16 GB DDR4 (Expandable up to 32GB)</td>
                    </tr>

                    <tr>
                        <td>Storage</td>
                        <td>256 GB NVMe M.2 SSD</td>
                    </tr>

                    <tr>
                        <td>Display</td>
                        <td>14" Full HD (1920x1080) IPS Anti-glare</td>
                    </tr>

                    <tr>
                        <td>Graphics</td>
                        <td>Intel UHD Graphics 620</td>
                    </tr>

                    <tr>
                        <td>Battery Health</td>
                        <td>89% (Original Battery, Tested)</td>
                    </tr>

                    <tr>
                        <td>Operating System</td>
                        <td>Windows 11 Pro</td>
                    </tr>

                    <tr>
                        <td>Warranty</td>
                        <td>6 Months Re-NewTech Assured Warranty</td>
                    </tr>

                </tbody>

            </table>

        </div>

        <!-- REVIEWS -->
        <div class="pd-tab-panel" id="pdReviewsPanel">

            <div class="pd-review-summary">

                <div class="pd-review-avg">

                    <div class="big-num">4.8</div>

                    <div class="stars-row">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                    </div>

                    <div class="count-text">
                        34 ratings
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