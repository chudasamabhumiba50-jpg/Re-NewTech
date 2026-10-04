<?php
$page_title = "Messages - Re-NewTech Admin";
$page_heading = "Messages";

$messages = [
    ['id' => 1, 'name' => 'Ravi Patel', 'email' => 'ravi.patel@example.com', 'subject' => 'Warranty claim', 'text' => 'My laptop battery is draining faster than expected. How can I claim the 6 month warranty?', 'date' => '26 Sep 2026', 'read' => false],
    ['id' => 2, 'name' => 'Sneha Mehta', 'email' => 'sneha.mehta@example.com', 'subject' => 'Bulk order enquiry', 'text' => 'We are a small office and want to buy 10 refurbished monitors. Do you offer a bulk discount?', 'date' => '24 Sep 2026', 'read' => false],
    ['id' => 3, 'name' => 'Amit Shah', 'email' => 'amit.shah@example.com', 'subject' => 'Delivery delay', 'text' => 'My order was supposed to arrive yesterday. Can you share the tracking details?', 'date' => '20 Sep 2026', 'read' => true],
    ['id' => 4, 'name' => 'Karan Desai', 'email' => 'karan.desai@example.com', 'subject' => 'Sell my old phone', 'text' => 'Can I sell my old phone to Re-NewTech? Please tell me the process.', 'date' => '15 Sep 2026', 'read' => true]
];

$unread_count = 0;
foreach ($messages as $m) {
    if (!$m['read']) {
        $unread_count++;
    }
}

$selected_id = isset($_GET['id']) ? (int)$_GET['id'] : $messages[0]['id'];

$selected_message = $messages[0];
foreach ($messages as $m) {
    if ($m['id'] === $selected_id) {
        $selected_message = $m;
        break;
    }
}

ob_start();
?>

<div class="msg-layout">

    <!-- LEFT: MESSAGE LIST -->
    <div class="msg-list-card">

        <div class="msg-list-head">
            <h6>Inbox</h6>
            <span class="msg-unread-chip"><?php echo $unread_count; ?> Unread</span>
        </div>

        <div class="msg-list">

            <?php foreach ($messages as $m): ?>

                <a href="manage_messages.php?id=<?php echo $m['id']; ?>"
                   class="msg-list-item <?php echo $m['id'] === $selected_id ? 'is-active' : ''; ?> <?php echo !$m['read'] ? 'is-unread' : ''; ?>">

                    <div class="msg-avatar"><?php echo strtoupper(substr($m['name'], 0, 1)); ?></div>

                    <div class="msg-item-body">
                        <div class="msg-item-head">
                            <strong><?php echo htmlspecialchars($m['name']); ?></strong>
                            <span><?php echo $m['date']; ?></span>
                        </div>
                        <span class="msg-item-subject"><?php echo htmlspecialchars($m['subject']); ?></span>
                        <p><?php echo htmlspecialchars($m['text']); ?></p>
                    </div>

                </a>

            <?php endforeach; ?>

        </div>

    </div>

    <!-- RIGHT: MESSAGE DETAIL + REPLY -->
    <div class="msg-detail-card">

        <div class="msg-detail-head">

            <div class="msg-detail-avatar"><?php echo strtoupper(substr($selected_message['name'], 0, 1)); ?></div>

            <div class="msg-detail-meta">
                <strong><?php echo htmlspecialchars($selected_message['name']); ?></strong>
                <span><i class="bi bi-envelope"></i> <?php echo htmlspecialchars($selected_message['email']); ?></span>
            </div>

            <span class="msg-detail-date"><?php echo $selected_message['date']; ?></span>

        </div>

        <h5 class="msg-detail-subject"><?php echo htmlspecialchars($selected_message['subject']); ?></h5>

        <p class="msg-detail-text"><?php echo htmlspecialchars($selected_message['text']); ?></p>

        <div class="msg-detail-divider"></div>

        <h6 class="msg-reply-title"><i class="bi bi-reply-fill"></i> Reply to <?php echo htmlspecialchars($selected_message['name']); ?></h6>

        <form method="POST" action="manage_messages.php?id=<?php echo $selected_message['id']; ?>">

            <div class="msg-reply-field">
                <label>Subject</label>
                <input
                    type="text"
                    class="form-control"
                    name="reply_subject"
                    value="Re: <?php echo htmlspecialchars($selected_message['subject']); ?>"
                    data-validation="required min max"
                    data-min="3"
                    data-max="100"
                >
                <span id="reply_subjectError" class="msg-reply-error"></span>
            </div>

            <div class="msg-reply-field">
                <label>Message</label>
                <textarea
                    class="form-control"
                    name="reply_message"
                    rows="5"
                    placeholder="Type your reply here..."
                    data-validation="required min max"
                    data-min="10"
                    data-max="1000"
                ></textarea>
                <span id="reply_messageError" class="msg-reply-error"></span>
            </div>

            <div class="msg-reply-actions">
                <button type="submit" class="admin-btn admin-btn-primary">
                    <i class="bi bi-send-fill"></i> Send Reply
                </button>
                <a href="mailto:<?php echo htmlspecialchars($selected_message['email']); ?>" class="admin-btn">
                    <i class="bi bi-envelope"></i> Open in Mail App
                </a>
            </div>

        </form>

    </div>

</div>

<?php
$page_content = ob_get_clean();
require_once 'admin_layout.php';
?>