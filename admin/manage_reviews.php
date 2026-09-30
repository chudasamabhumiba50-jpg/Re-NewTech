<?php
$page_title = "Manage Reviews - Re-NewTech Admin";
$page_heading = "Reviews";

$reviews = [
    ['id' => 1, 'customer' => 'Ravi Patel', 'product' => 'Refurbished ThinkPad T480', 'rating' => 5, 'text' => 'Excellent condition, works like a brand new laptop.', 'date' => '12 Sep 2026', 'status' => 'approved'],
    ['id' => 2, 'customer' => 'Sneha Mehta', 'product' => 'iPhone 11 - 128GB', 'rating' => 4, 'text' => 'Good value for money. Minor scratch on the back panel.', 'date' => '29 Aug 2026', 'status' => 'pending'],
    ['id' => 3, 'customer' => 'Amit Shah', 'product' => 'NVIDIA GTX 1060 6GB GPU', 'rating' => 2, 'text' => 'Fan makes noise after an hour of gaming.', 'date' => '14 Aug 2026', 'status' => 'pending'],
    ['id' => 4, 'customer' => 'Neha Joshi', 'product' => 'Samsung 500GB Evo SSD', 'rating' => 1, 'text' => 'Spam link removed. Buy cheap stuff here!!!', 'date' => '02 Aug 2026', 'status' => 'rejected'],
    ['id' => 5, 'customer' => 'Karan Desai', 'product' => 'Sony WH-1000XM3', 'rating' => 5, 'text' => 'Exactly as described, great for the price.', 'date' => '28 Jul 2026', 'status' => 'approved']
];

ob_start();
?>

<div class="admin-card">

    <div class="admin-filter-tabs" id="reviewTabs">
        <button type="button" class="admin-filter-tab active" data-status="all">All</button>
        <button type="button" class="admin-filter-tab" data-status="pending">Pending</button>
        <button type="button" class="admin-filter-tab" data-status="approved">Approved</button>
        <button type="button" class="admin-filter-tab" data-status="rejected">Rejected</button>
    </div>

    <div class="table-responsive">
        <table class="admin-table" id="reviewsTable">
            <thead>
                <tr>
                    <th>Customer</th>
                    <th>Product</th>
                    <th>Rating</th>
                    <th>Review</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th style="width: 130px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reviews as $r): ?>
                    <tr data-status="<?php echo $r['status']; ?>">
                        <td><strong><?php echo htmlspecialchars($r['customer']); ?></strong></td>
                        <td><?php echo htmlspecialchars($r['product']); ?></td>
                        <td>
                            <span class="review-stars">
                                <?php for ($i = 1; $i <= 5; $i++): ?>
                                    <i class="bi <?php echo $i <= $r['rating'] ? 'bi-star-fill' : 'bi-star'; ?>"></i>
                                <?php endfor; ?>
                            </span>
                        </td>
                        <td class="review-text-cell"><?php echo htmlspecialchars($r['text']); ?></td>
                        <td><?php echo $r['date']; ?></td>
                        <td>
                            <span class="admin-pill status-pill <?php echo $r['status'] === 'approved' ? 'pill-delivered' : ($r['status'] === 'rejected' ? 'pill-cancelled' : 'pill-pending'); ?>">
                                <?php echo ucfirst($r['status']); ?>
                            </span>
                        </td>
                        <td>
                            <div class="d-flex gap-2">
                                <button type="button" class="admin-icon-btn" title="Approve" onclick="setReviewStatus(this, 'approved')">
                                    <i class="bi bi-check-lg"></i>
                                </button>
                                <button type="button" class="admin-icon-btn" title="Reject" onclick="setReviewStatus(this, 'rejected')">
                                    <i class="bi bi-x-lg"></i>
                                </button>
                                <button type="button" class="admin-icon-btn" title="Delete" onclick="deleteReviewRow(this)">
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


<?php
$page_content = ob_get_clean();
require_once 'admin_layout.php';
?>