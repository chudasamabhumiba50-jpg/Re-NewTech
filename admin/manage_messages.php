
<?php
$page_title = "Messages - Re-NewTech Admin";
$page_heading = "Messages";

ob_start();
?>

<div class="msg-layout">

    <!-- LEFT: MESSAGE LIST -->
    <div class="msg-list-card">

        <div class="msg-list-head">
            <h6>Inbox</h6>
            <span class="msg-unread-chip">2 Unread</span>
        </div>

        <div class="msg-list">

            <a href="manage_messages.php?id=1"
               class="msg-list-item is-active is-unread">

                <div class="msg-avatar">R</div>

                <div class="msg-item-body">
                    <div class="msg-item-head">
                        <strong>Ravi Patel</strong>
                        <span>26 Sep 2026</span>
                    </div>
                    <span class="msg-item-subject">Warranty claim</span>
                    <p>My laptop battery is draining faster than expected. How can I claim the 6 month warranty?</p>
                </div>

            </a>

            <a href="manage_messages.php?id=2"
               class="msg-list-item is-unread">

                    <div class="msg-item-body">
                <div class="msg-avatar">S</div>

                <div class="msg-item-body">
                    <div class="msg-item-head">
                        <strong>Sneha Mehta</strong>
                        <span>24 Sep 2026</span>
                    </div>
                    <span class="msg-item-subject">Bulk order enquiry</span>
                    <p>We are a small office and want to buy 10 refurbished monitors. Do you offer a bulk discount?</p>
                </div>

            </a>

            <a href="manage_messages.php?id=3"
               class="msg-list-item">

                <div class="msg-avatar">A</div>

                <div class="msg-item-body">
                    <div class="msg-item-head">
                        <strong>Amit Shah</strong>
                        <span>20 Sep 2026</span>
                    </div>
                    <span class="msg-item-subject">Delivery delay</span>
                    <p>My order was supposed to arrive yesterday. Can you share the tracking details?</p>
                </div>

            </a>

            <a href="manage_messages.php?id=4"
               class="msg-list-item">

                <div class="msg-avatar">K</div>

                <div class="msg-item-body">
                    <div class="msg-item-head">
                        <strong>Karan Desai</strong>
                        <span>15 Sep 2026</span>
                    </div>
                    <span class="msg-item-subject">Sell my old phone</span>
                    <p>Can I sell my old phone to Re-NewTech? Please tell me the process.</p>
                </div>

            </a>

        </div>

    </div>

    <!-- RIGHT: MESSAGE DETAIL + REPLY -->
    <div class="msg-detail-card">

        <div class="msg-detail-head">

            <div class="msg-detail-avatar">R</div>

            <div class="msg-detail-meta">
                <strong>Ravi Patel</strong>
                <span><i class="bi bi-envelope"></i> ravi.patel@example.com</span>
            </div>

            <span class="msg-detail-date">26 Sep 2026</span>

        </div>

        <h5 class="msg-detail-subject">Warranty claim</h5>

        <p class="msg-detail-text">My laptop battery is draining faster than expected. How can I claim the 6 month warranty?</p>

        <div class="msg-detail-divider"></div>

        <h6 class="msg-reply-title"><i class="bi bi-reply-fill"></i> Reply to Ravi Patel</h6>

        <form method="POST" action="manage_messages.php?id=1">

            <div class="msg-reply-field">
                <label>Subject</label>
                <input
                    type="text"
                    class="form-control"
                    name="reply_subject"
                    value="Re: Warranty claim"
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

                <a href="mailto:ravi.patel@example.com" class="admin-btn">
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
