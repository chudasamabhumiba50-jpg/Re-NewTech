<?php
$page_title = "Manage Products - Re-NewTech Admin";
$page_heading = "Products";

ob_start();
?>

<!-- SUMMARY STRIP -->
<div class="row g-3 mb-4">

    <div class="col-6 col-md-3">
        <div class="prd-admin-stat">
            <i class="bi bi-box-seam-fill"></i>
            <div>
                <strong>6</strong>
                <span>Total Products</span>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-3">
        <div class="prd-admin-stat">
            <i class="bi bi-exclamation-triangle-fill"></i>
            <div>
                <strong>2</strong>
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

    <!-- SEARCH IS VISUAL ONLY FOR NOW -->
    <div class="prd-toolbar">

        <div class="prd-search-form">
            <i class="bi bi-search"></i>
            <input
                type="text"
                placeholder="Search by name or category..."
            >
            <button type="button">Search</button>
        </div>

    </div>

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

                <tr>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=200&q=70" class="admin-thumb" alt="Laptop">
                            <strong>Refurbished ThinkPad T480</strong>
                        </div>
                    </td>
                    <td>Laptops</td>
                    <td>Like New</td>
                    <td>₹22,500</td>
                    <td><span class="admin-pill pill-delivered">4 in stock</span></td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=200&q=70" class="admin-thumb" alt="iPhone">
                            <strong>iPhone 11 - 128GB</strong>
                        </div>
                    </td>
                    <td>Smartphones</td>
                    <td>Good Condition</td>
                    <td>₹18,900</td>
                    <td><span class="admin-pill pill-delivered">8 in stock</span></td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1591488320449-011701bb6704?w=200&q=70" class="admin-thumb" alt="GPU">
                            <strong>NVIDIA GTX 1060 6GB GPU</strong>
                        </div>
                    </td>
                    <td>Components</td>
                    <td>Refurbished</td>
                    <td>₹7,499</td>
                    <td><span class="admin-pill pill-pending">3 in stock</span></td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=200&q=70" class="admin-thumb" alt="Headphones">
                            <strong>Sony WH-1000XM3</strong>
                        </div>
                    </td>
                    <td>Audio</td>
                    <td>For Parts</td>
                    <td>₹2,999</td>
                    <td><span class="admin-pill pill-pending">1 in stock</span></td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1544652478-6653e09f18a2?w=200&q=70" class="admin-thumb" alt="SSD">
                            <strong>Samsung 500GB Evo SSD</strong>
                        </div>
                    </td>
                    <td>Storage</td>
                    <td>Like New</td>
                    <td>₹2,400</td>
                    <td><span class="admin-pill pill-delivered">12 in stock</span></td>
                </tr>

                <!-- <tr>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1757709608566-4b9fd41a7af5?q=80&w=1332&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="admin-thumb" alt="iPhone 17 Pro">
                            <strong>Iphone17 Pro</strong>
                        </div>
                    </td>
                    <td>Smartphones</td>
                    <td>Like New</td>
                    <td>₹50,000</td>
                    <td><span class="admin-pill pill-delivered">5 in stock</span></td>
                </tr> -->

            </tbody>
        </table>
    </div>

</div>

<!-- ADD PRODUCT: FRONTEND UI + VALIDATION ONLY -->
<details class="prd-add-card" id="add-product" open>

    <summary>
        <i class="bi bi-plus-circle-fill"></i> Add New Product
        <span class="prd-add-hint">Click to expand</span>
    </summary>

    <form class="prd-add-form" id="productForm" method="post" action="#">

        <div class="row g-3">

            <!-- PRODUCT NAME -->
            <div class="col-md-6">
                <label>Product Name</label>

                <input type="text"
                       name="product_name"
                       class="form-control"
                       placeholder="Enter product name"
                       data-validation="required|min|max"
                       data-min="3"
                       data-max="80">

                <span id="product_nameError" class="text-danger"></span>
            </div>


            <!-- CATEGORY -->
            <div class="col-md-6">
                <label>Category</label>

                <select name="category"
                        class="form-select"
                        data-validation="required">

                    <option value="">Select Category</option>
                    <option>Laptops</option>
                    <option>Smartphones</option>
                    <option>Components</option>
                    <option>Audio</option>
                    <option>Storage</option>

                </select>

                <span id="categoryError" class="text-danger"></span>
            </div>


            <!-- CONDITION -->
            <div class="col-md-6">
                <label>Condition</label>

                <select name="condition"
                        class="form-select"
                        data-validation="required">

                    <option value="">Select Condition</option>
                    <option>Like New</option>
                    <option>Good Condition</option>
                    <option>Refurbished</option>
                    <option>For Parts</option>

                </select>

                <span id="conditionError" class="text-danger"></span>
            </div>


            <!-- PRICE -->
            <div class="col-md-6">
                <label>Price</label>

                <input type="text"
                       name="price"
                       class="form-control"
                       placeholder="Enter price"
                       data-validation="required|numeric">

                <span id="priceError" class="text-danger"></span>
            </div>


            <!-- STOCK -->
            <div class="col-md-6">
                <label>Stock</label>

                <input type="text"
                       name="stock"
                       class="form-control"
                       placeholder="Enter stock"
                       data-validation="required|numeric">

                <span id="stockError" class="text-danger"></span>
            </div>


            <!-- IMAGE URL -->
            <div class="col-md-6">
                <label>Image URL</label>

                <input type="text"
                       name="image_url"
                       class="form-control"
                       placeholder="Enter image URL"
                       data-validation="required">

                <span id="image_urlError" class="text-danger"></span>
            </div>

        </div>


        <!-- SAVE BUTTON -->
        <button type="submit"
                class="admin-btn admin-btn-primary mt-3">

            <i class="bi bi-check-lg"></i>
            Save Product

        </button>

    </form>

</details>

<?php
$page_content = ob_get_clean();
require_once 'admin_layout.php';
?>