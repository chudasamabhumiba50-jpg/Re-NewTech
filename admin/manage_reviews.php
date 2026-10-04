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

// Filter using a plain URL parameter (no JavaScript)
$active_status = isset($_GET['status']) ? $_GET['status'] : 'all';

$filtered_reviews = [];
foreach ($reviews as $r) {
    if ($active_status === 'all' || $r['status'] === $active_status) {
        $filtered_reviews[] = $r;
    }
}

$counts = ['all' => count($reviews), 'pending' => 0, 'approved' => 0, 'rejected' => 0];
foreach ($reviews as $r) {
    $counts[$r['status']]++;
}

$total_rating = 0;
foreach ($reviews as $r) {
    $total_rating += $r['rating'];
}
$avg_rating = count($reviews) > 0 ? round($total_rating / count($reviews), 1) : 0;

ob_start();
?>

<!-- SUMMARY STRIP -->
<div class="row g-3 mb-4">

    <div class="col-6 col-md-3">
        <div class="rev-admin-stat">
            <strong><?php echo $avg_rating; ?> <i class="bi bi-star-fill"></i></strong>
            <span>Average Rating</span>
        </div>
    </div>

    <div class="col-6 col-md-3">
        <div class="rev-admin-stat">
            <strong><?php echo $counts['pending']; ?></strong>
            <span>Pending Review</span>
        </div>
    </div>

    <div class="col-6 col-md-3">
        <div class="rev-admin-stat">
            <strong><?php echo $counts['approved']; ?></strong>
            <span>Approved</span>
        </div>
    </div>

    <div class="col-6 col-md-3">
        <div class="rev-admin-stat">
            <strong><?php echo $counts['rejected']; ?></strong>
            <span>Rejected</span>
        </div>
    </div>

</div>

<div class="admin-card">

    <!-- FILTER TABS (plain links, no JS) -->
    <div class="rev-admin-tabs">
        <a href="manage_reviews.php" class="rev-admin-tab <?php echo $active_status === 'all' ? 'is-active' : ''; ?>">
            All <span><?php echo $counts['all']; ?></span>
        </a>
        <a href="manage_reviews.php?status=pending" class="rev-admin-tab <?php echo $active_status === 'pending' ? 'is-active' : ''; ?>">
            Pending <span><?php echo $counts['pending']; ?></span>
        </a>
        <a href="manage_reviews.php?status=approved" class="rev-admin-tab <?php echo $active_status === 'approved' ? 'is-active' : ''; ?>">
            Approved <span><?php echo $counts['approved']; ?></span>
        </a>
        <a href="manage_reviews.php?status=rejected" class="rev-admin-tab <?php echo $active_status === 'rejected' ? 'is-active' : ''; ?>">
            Rejected <span><?php echo $counts['rejected']; ?></span>
        </a>
    </div>

    <div class="rev-list">

        <?php if (count($filtered_reviews) === 0): ?>
            <p class="prd-admin-empty">No reviews found in this category.</p>
        <?php endif; ?>

        <?php foreach ($filtered_reviews as $r): ?>

            <div class="rev-card">

                <div class="rev-card-top">

                    <div class="rev-card-customer">
                        <span class="rev-avatar"><?php echo strtoupper(substr($r['customer'], 0, 1)); ?></span>
                        <div>
                            <strong><?php echo htmlspecialchars($r['customer']); ?></strong>
                            <span><?php echo htmlspecialchars($r['product']); ?> &middot; <?php echo $r['date']; ?></span>
                        </div>
                    </div>

                    <span class="admin-pill <?php echo $r['status'] === 'approved' ? 'pill-delivered' : ($r['status'] === 'rejected' ? 'pill-cancelled' : 'pill-pending'); ?>">
                        <?php echo ucfirst($r['status']); ?>
                    </span>

                </div>

                <div class="rev-stars">
                    <?php for ($i = 1; $i <= 5; $i++): ?>
                        <i class="bi <?php echo $i <= $r['rating'] ? 'bi-star-fill' : 'bi-star'; ?>"></i>
                    <?php endfor; ?>
                </div>

                <p class="rev-text"><?php echo htmlspecialchars($r['text']); ?></p>

                <div class="rev-actions">

                    <form method="POST" action="manage_reviews.php" class="rev-action-form">
                        <input type="hidden" name="review_id" value="<?php echo $r['id']; ?>">
                        <input type="hidden" name="set_status" value="approved">
                        <button type="submit" class="admin-btn"><i class="bi bi-check-lg"></i> Approve</button>
                    </form>

                    <form method="POST" action="manage_reviews.php" class="rev-action-form">
                        <input type="hidden" name="review_id" value="<?php echo $r['id']; ?>">
                        <input type="hidden" name="set_status" value="rejected">
                        <button type="submit" class="admin-btn"><i class="bi bi-x-lg"></i> Reject</button>
                    </form>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

</div>

<?php
$page_content = ob_get_clean();
require_once 'admin_layout.php';
?>