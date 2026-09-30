<?php
$page_title = "Messages - Re-NewTech Admin";
$page_heading = "Messages";

$messages = [
    ['id' => 1, 'name' => 'Ravi Patel', 'email' => 'ravi.patel@example.com', 'subject' => 'Warranty claim', 'text' => 'My laptop battery is draining faster than expected. How can I claim the 6 month warranty?', 'date' => '26 Sep 2026', 'read' => false],
    ['id' => 2, 'name' => 'Sneha Mehta', 'email' => 'sneha.mehta@example.com', 'subject' => 'Bulk order enquiry', 'text' => 'We are a small office and want to buy 10 refurbished monitors. Do you offer a bulk discount?', 'date' => '24 Sep 2026', 'read' => false],
    ['id' => 3, 'name' => 'Amit Shah', 'email' => 'amit.shah@example.com', 'subject' => 'Delivery delay', 'text' => 'My order was supposed to arrive yesterday. Can you share the tracking details?', 'date' => '20 Sep 2026', 'read' => true],
    ['id' => 4, 'name' => 'Karan Desai', 'email' => 'karan.desai@example.com', 'subject' => 'Sell my old phone', 'text' => 'Can I sell my old phone to Re-NewTech? Please tell me the process.', 'date' => '15 Sep 2026', 'read' => true]
];

ob_start();
?>

<div class="admin-card">

    <div class="d-flex justify-content-between align-items-center mb-2">
        <h6 class="fw-bold text-dark mb-0">Contact Form Messages</h6>
        <span class="text-muted small" id="unreadCountText"></span>
    </div>

    <div class="msg-list" id="msgList">
        <?php foreach ($messages as $m): ?>
            <div class="msg-item <?php echo $m['read'] ? '' : 'is-unread'; ?>">

                <div class="msg-avatar"><?php echo strtoupper(substr($m['name'], 0, 1)); ?></div>

                <div class="msg-body">
                    <div class="msg-head">
                        <strong><?php echo htmlspecialchars($m['name']); ?></strong>
                        <span class="msg-date"><?php echo $m['date']; ?></span>
                    </div>
                    <div class="msg-subject"><?php echo htmlspecialchars($m['subject']); ?></div>
                    <p class="msg-text"><?php echo htmlspecialchars($m['text']); ?></p>
                    <span class="msg-email"><i class="bi bi-envelope me-1"></i><?php echo htmlspecialchars($m['email']); ?></span>
                </div>

                <div class="msg-actions">
                    <button type="button" class="admin-icon-btn" title="Mark read / unread" onclick="toggleRead(this)">
                        <i class="bi bi-envelope-open"></i>
                    </button>
                    <a href="mailto:<?php echo htmlspecialchars($m['email']); ?>" class="admin-icon-btn" title="Reply">
                        <i class="bi bi-reply"></i>
                    </a>
                    <button type="button" class="admin-icon-btn" title="Delete" onclick="deleteMessage(this)">
                        <i class="bi bi-trash"></i>
                    </button>
                </div>

            </div>
        <?php endforeach; ?>
    </div>

</div>


<?php
$page_content = ob_get_clean();
require_once 'admin_layout.php';
?>