<?php
$page_title = "My Wishlist - Re-NewTech";

ob_start();
?>

<div class="container py-4">

    <!-- BREADCRUMB -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-4 small">
            <li class="breadcrumb-item"><a href="products.php" class="text-decoration-none text-success fw-semibold">Re-NewTech Catalog</a></li>
            <li class="breadcrumb-item active text-muted" aria-current="page">My Wishlist</li>
        </ol>
    </nav>

    <h3 class="fw-bold text-dark mb-4"><i class="bi bi-heart-fill me-2 text-danger"></i> My Wishlist</h3>

    <div class="wishlist-card">
        <div class="d-flex justify-content-between align-items-center pb-3 mb-3 border-bottom">
            <span class="fw-bold text-dark">Saved Items (2)</span>
            <a href="products.php" class="text-success text-decoration-none small fw-semibold">
                <i class="bi bi-arrow-left me-1"></i> Continue Exploring
            </a>
        </div>

        <div class="row align-items-center py-3 border-bottom">
            <div class="col-3 col-md-2 text-center">
                <img src="https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=800&q=80" alt="Refurbished ThinkPad T480 (Core i5, 16GB RAM)" class="product-img-thumb border">
            </div>

            <div class="col-9 col-md-5">
                <span class="badge bg-success-subtle text-success border border-success mb-1" style="font-size: 0.7rem;">
                    Certified Renewed (Grade A)
                </span>
                <h6 class="fw-bold text-dark mb-1">Refurbished ThinkPad T480 (Core i5, 16GB RAM)</h6>
                <p class="text-muted mb-0 small">Category: Laptops</p>
            </div>

            <div class="col-6 col-md-2 mt-3 mt-md-0">
                <span class="fs-6 fw-bold text-dark d-block">₹22,500</span>
                <span class="text-muted text-decoration-line-through small">₹65,000</span>
            </div>

            <div class="col-6 col-md-3 text-end mt-3 mt-md-0 d-flex align-items-center justify-content-end gap-2">
                <a href="checkout.php?id=1" class="btn btn-buy-now text-decoration-none small">
                    <i class="bi bi-lightning-charge-fill me-1"></i> Buy Now
                </a>
                <a href="#" class="btn btn-outline-danger btn-sm rounded-circle" title="Remove">
                    <i class="bi bi-trash"></i>
                </a>
            </div>
        </div>

        <div class="row align-items-center py-3">
            <div class="col-3 col-md-2 text-center">
                <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=800&q=80" alt="Apple iPhone 11 - 128GB (Renewed)" class="product-img-thumb border">
            </div>

            <div class="col-9 col-md-5">
                <span class="badge bg-success-subtle text-success border border-success mb-1" style="font-size: 0.7rem;">
                    Certified Renewed (Grade A)
                </span>
                <h6 class="fw-bold text-dark mb-1">Apple iPhone 11 - 128GB (Renewed)</h6>
                <p class="text-muted mb-0 small">Category: Smartphones</p>
            </div>

            <div class="col-6 col-md-2 mt-3 mt-md-0">
                <span class="fs-6 fw-bold text-dark d-block">₹19,999</span>
                <span class="text-muted text-decoration-line-through small">₹49,900</span>
            </div>

            <div class="col-6 col-md-3 text-end mt-3 mt-md-0 d-flex align-items-center justify-content-end gap-2">
                <a href="checkout.php?id=2" class="btn btn-buy-now text-decoration-none small">
                    <i class="bi bi-lightning-charge-fill me-1"></i> Buy Now
                </a>
                <a href="#" class="btn btn-outline-danger btn-sm rounded-circle" title="Remove">
                    <i class="bi bi-trash"></i>
                </a>
            </div>
        </div>

    </div>

</div>

<?php
$page_content = ob_get_clean();
require_once 'layout.php';
?>