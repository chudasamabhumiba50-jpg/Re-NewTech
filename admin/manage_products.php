<?php
$page_title = "Manage Products - Re-NewTech Admin";
$page_heading = "Products";

$products = [
    ['id' => 1, 'name' => 'Refurbished ThinkPad T480', 'category' => 'Laptops', 'condition' => 'Like New', 'price' => 22500, 'stock' => 4, 'image' => 'https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=200&q=70'],
    ['id' => 2, 'name' => 'iPhone 11 - 128GB', 'category' => 'Smartphones', 'condition' => 'Good Condition', 'price' => 18900, 'stock' => 8, 'image' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=200&q=70'],
    ['id' => 3, 'name' => 'NVIDIA GTX 1060 6GB GPU', 'category' => 'Components', 'condition' => 'Refurbished', 'price' => 7499, 'stock' => 3, 'image' => 'https://images.unsplash.com/photo-1591488320449-011701bb6704?w=200&q=70'],
    ['id' => 4, 'name' => 'Sony WH-1000XM3', 'category' => 'Audio', 'condition' => 'For Parts', 'price' => 2999, 'stock' => 1, 'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=200&q=70'],
    ['id' => 5, 'name' => 'Samsung 500GB Evo SSD', 'category' => 'Storage', 'condition' => 'Like New', 'price' => 2400, 'stock' => 12, 'image' => 'https://images.unsplash.com/photo-1544652478-6653e09f18a2?w=200&q=70']
];

// Search using a plain GET parameter (no JavaScript)
$search_term = isset($_GET['search']) ? trim($_GET['search']) : '';

$filtered_products = [];
foreach ($products as $p) {
    if ($search_term === '' || stripos($p['name'], $search_term) !== false || stripos($p['category'], $search_term) !== false) {
        $filtered_products[] = $p;
    }
}

$low_stock_count = 0;
foreach ($products as $p) {
    if ($p['stock'] <= 3) {
        $low_stock_count++;
    }
}

ob_start();
?>

<!-- SUMMARY STRIP -->
<div class="row g-3 mb-4">

    <div class="col-6 col-md-3">
        <div class="prd-admin-stat">
            <i class="bi bi-box-seam-fill"></i>
            <div>
                <strong><?php echo count($products); ?></strong>
                <span>Total Products</span>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-3">
        <div class="prd-admin-stat">
            <i class="bi bi-exclamation-triangle-fill"></i>
            <div>
                <strong><?php echo $low_stock_count; ?></strong>
                <span>Low Stock</span>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-3">
        <div class="prd-admin-stat">
            <i class="bi bi-tags-fill"></i>
            <div>
                <strong>5</strong>
                <span>Categories</span>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-3">
        <div class="prd-admin-stat">
            <i class="bi bi-currency-rupee"></i>
            <div>
                <strong>₹56,298</strong>
                <span>Inventory Value</span>
            </div>
        </div>
    </div>

</div>

<div class="admin-card">

    <div class="prd-toolbar">

        <form method="GET" action="manage_products.php" class="prd-search-form">
            <i class="bi bi-search"></i>
            <input
                type="text"
                name="search"
                value="<?php echo htmlspecialchars($search_term); ?>"
                placeholder="Search by name or category..."
            >
            <button type="submit">Search</button>
        </form>

        <?php if ($search_term !== ''): ?>
            <a href="manage_products.php" class="admin-btn">Clear Filter</a>
        <?php endif; ?>

    </div>

    <?php if ($search_term !== ''): ?>
        <p class="prd-search-result">
            Showing <strong><?php echo count($filtered_products); ?></strong> result(s) for "<strong><?php echo htmlspecialchars($search_term); ?></strong>"
        </p>
    <?php endif; ?>

    <div class="table-responsive">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Category</th>
                    <th>Condition</th>
                    <th>Price</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($filtered_products) === 0): ?>
                    <tr>
                        <td colspan="5" class="prd-admin-empty">No products matched your search.</td>
                    </tr>
                <?php endif; ?>

                <?php foreach ($filtered_products as $p): ?>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-3">
                                <img src="<?php echo $p['image']; ?>" class="admin-thumb" alt="">
                                <strong><?php echo $p['name']; ?></strong>
                            </div>
                        </td>
                        <td><?php echo $p['category']; ?></td>
                        <td><?php echo $p['condition']; ?></td>
                        <td>₹<?php echo number_format($p['price']); ?></td>
                        <td>
                            <span class="admin-pill <?php echo $p['stock'] <= 3 ? 'pill-pending' : 'pill-delivered'; ?>">
                                <?php echo $p['stock']; ?> in stock
                            </span>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

<!-- ADD PRODUCT (pure HTML details/summary, no JavaScript) -->
<details class="prd-add-card">

    <summary>
        <i class="bi bi-plus-circle-fill"></i> Add New Product
        <span class="prd-add-hint">Click to expand</span>
    </summary>

    <form method="POST" action="manage_products.php" class="prd-add-form">

        <div class="row g-3">

            <div class="col-md-6">
                <label>Product Name</label>
                <input
                    type="text"
                    class="form-control"
                    name="product_name"
                    placeholder="e.g. Dell Latitude 5490"
                    data-validation="required min max"
                    data-min="3"
                    data-max="80"
                >
                <span id="product_nameError" class="prd-error"></span>
            </div>

            <div class="col-md-6">
                <label>Category</label>
                <select class="form-control" name="category" data-validation="required">
                    <option value="">Select category</option>
                    <option>Laptops</option>
                    <option>Smartphones</option>
                    <option>Components</option>
                    <option>Audio</option>
                    <option>Storage</option>
                </select>
                <span id="categoryError" class="prd-error"></span>
            </div>

            <div class="col-md-6">
                <label>Condition</label>
                <select class="form-control" name="condition" data-validation="required">
                    <option value="">Select condition</option>
                    <option>Like New</option>
                    <option>Good Condition</option>
                    <option>Refurbished</option>
                    <option>For Parts</option>
                </select>
                <span id="conditionError" class="prd-error"></span>
            </div>

            <div class="col-md-3">
                <label>Price (₹)</label>
                <input
                    type="text"
                    class="form-control"
                    name="price"
                    placeholder="0"
                    data-validation="required numeric"
                >
                <span id="priceError" class="prd-error"></span>
            </div>

            <div class="col-md-3">
                <label>Stock</label>
                <input
                    type="text"
                    class="form-control"
                    name="stock"
                    placeholder="0"
                    data-validation="required numeric"
                >
                <span id="stockError" class="prd-error"></span>
            </div>

            <div class="col-12">
                <label>Image URL</label>
                <input
                    type="text"
                    class="form-control"
                    name="image_url"
                    placeholder="https://..."
                    data-validation="required"
                >
                <span id="image_urlError" class="prd-error"></span>
            </div>

        </div>

        <button type="submit" class="admin-btn admin-btn-primary mt-3">
            <i class="bi bi-check-lg"></i> Save Product
        </button>

    </form>

</details>

<?php
$page_content = ob_get_clean();
require_once 'admin_layout.php';
?>