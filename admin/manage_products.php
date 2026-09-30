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

ob_start();
?>



<div class="admin-card">

    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-3">

        <div class="admin-search">
            <i class="bi bi-search"></i>
            <input type="text" id="adminProductSearch" placeholder="Search products...">
        </div>

        <button type="button" class="admin-btn admin-btn-primary" onclick="toggleProductModal(true)">
            <i class="bi bi-plus-lg"></i> Add Product
        </button>

    </div>

    <div class="table-responsive">
        <table class="admin-table" id="productsTable">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Category</th>
                    <th>Condition</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th style="width: 100px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $p): ?>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-3">
                                <img src="<?php echo $p['image']; ?>" class="admin-thumb" alt="">
                                <strong class="product-name-cell"><?php echo $p['name']; ?></strong>
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
                        <td>
                            <div class="d-flex gap-2">
                                <button type="button" class="admin-icon-btn" title="Edit" onclick="toggleProductModal(true)">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button type="button" class="admin-icon-btn" title="Delete" onclick="deleteProductRow(this)">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

<!-- ADD / EDIT MODAL -->
<div class="admin-modal-backdrop" id="productModal">
    <div class="admin-modal">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h6 class="fw-bold text-dark mb-0">Add / Edit Product</h6>
            <button type="button" class="admin-icon-btn" onclick="toggleProductModal(false)">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>

        <form id="productForm">

            <label>Product Name</label>
            <input type="text" placeholder="e.g. Dell Latitude 5490" required>

            <label>Category</label>
            <select required>
                <option value="">Select category</option>
                <option>Laptops</option>
                <option>Smartphones</option>
                <option>Components</option>
                <option>Audio</option>
                <option>Storage</option>
            </select>

            <label>Condition</label>
            <select required>
                <option value="">Select condition</option>
                <option>Like New</option>
                <option>Good Condition</option>
                <option>Refurbished</option>
                <option>For Parts</option>
            </select>

            <div class="row">
                <div class="col-6">
                    <label>Price (₹)</label>
                    <input type="number" placeholder="0" required>
                </div>
                <div class="col-6">
                    <label>Stock</label>
                    <input type="number" placeholder="0" required>
                </div>
            </div>

            <label>Image URL</label>
            <input type="text" placeholder="https://...">

            <button type="submit" class="admin-btn admin-btn-primary w-100 justify-content-center">
                <i class="bi bi-check-lg"></i> Save Product
            </button>

        </form>

    </div>
</div>



<?php
$page_content = ob_get_clean();
require_once 'admin_layout.php';
?>