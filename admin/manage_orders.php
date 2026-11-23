<?php
$page_title = "Manage Orders - Re-NewTech Admin";
$page_heading = "Orders";

ob_start();
?>

<!-- SUMMARY STRIP -->
<div class="row g-3 mb-4">

    <div class="col-6 col-md-3">
        <div class="ord-admin-stat">
            <strong>2</strong>
            <span>Pending</span>
        </div>
    </div>

    <div class="col-6 col-md-3">
        <div class="ord-admin-stat">
            <strong>1</strong>
            <span>Shipped</span>
        </div>
    </div>

    <div class="col-6 col-md-3">
        <div class="ord-admin-stat">
            <strong>1</strong>
            <span>Delivered</span>
        </div>
    </div>

    <div class="col-6 col-md-3">
        <div class="ord-admin-stat">
            <strong>1</strong>
            <span>Cancelled</span>
        </div>
    </div>

</div>

<div class="admin-card">

    <!-- FILTER TABS -->
    <div class="ord-admin-tabs">

        <a href="manage_orders.php" class="ord-admin-tab is-active">
            All <span>5</span>
        </a>

        <a href="manage_orders.php?status=pending" class="ord-admin-tab">
            Pending <span>2</span>
        </a>

        <a href="manage_orders.php?status=shipped" class="ord-admin-tab">
            Shipped <span>1</span>
        </a>

        <a href="manage_orders.php?status=delivered" class="ord-admin-tab">
            Delivered <span>1</span>
        </a>

        <a href="manage_orders.php?status=cancelled" class="ord-admin-tab">
            Cancelled <span>1</span>
        </a>

    </div>

    <div class="table-responsive">

        <table class="admin-table">

            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Date</th>
                    <th>Payment</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Update Status</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td><strong>#RNT10245</strong></td>
                    <td>Ravi Patel</td>
                    <td>18 Sep 2026</td>
                    <td>UPI</td>
                    <td>₹22,500</td>
                    <td>
                        <span class="admin-pill pill-delivered">
                            Delivered
                        </span>
                    </td>
                    <td>
                        <form method="POST" action="manage_orders.php" class="ord-status-form">
                            <input type="hidden" name="order_id" value="RNT10245">

                            <select name="new_status" class="ord-status-select">
                                <option value="pending">Pending</option>
                                <option value="shipped">Shipped</option>
                                <option value="delivered" selected>Delivered</option>
                                <option value="cancelled">Cancelled</option>
                            </select>

                            <button type="submit" class="admin-icon-btn" title="Save">
                                <i class="bi bi-check-lg"></i>
                            </button>
                        </form>
                    </td>
                </tr>

                <tr>
                    <td><strong>#RNT10198</strong></td>
                    <td>Sneha Mehta</td>
                    <td>02 Sep 2026</td>
                    <td>Card</td>
                    <td>₹14,999</td>
                    <td>
                        <span class="admin-pill pill-shipped">
                            Shipped
                        </span>
                    </td>
                    <td>
                        <form method="POST" action="manage_orders.php" class="ord-status-form">
                            <input type="hidden" name="order_id" value="RNT10198">

                            <select name="new_status" class="ord-status-select">
                                <option value="pending">Pending</option>
                                <option value="shipped" selected>Shipped</option>
                                <option value="delivered">Delivered</option>
                                <option value="cancelled">Cancelled</option>
                            </select>

                            <button type="submit" class="admin-icon-btn" title="Save">
                                <i class="bi bi-check-lg"></i>
                            </button>
                        </form>
                    </td>
                </tr>

                <tr>
                    <td><strong>#RNT10122</strong></td>
                    <td>Amit Shah</td>
                    <td>21 Aug 2026</td>
                    <td>COD</td>
                    <td>₹900</td>
                    <td>
                        <span class="admin-pill pill-cancelled">
                            Cancelled
                        </span>
                    </td>
                    <td>
                        <form method="POST" action="manage_orders.php" class="ord-status-form">
                            <input type="hidden" name="order_id" value="RNT10122">

                            <select name="new_status" class="ord-status-select">
                                <option value="pending">Pending</option>
                                <option value="shipped">Shipped</option>
                                <option value="delivered">Delivered</option>
                                <option value="cancelled" selected>Cancelled</option>
                            </select>

                            <button type="submit" class="admin-icon-btn" title="Save">
                                <i class="bi bi-check-lg"></i>
                            </button>
                        </form>
                    </td>
                </tr>

                <tr>
                    <td><strong>#RNT10087</strong></td>
                    <td>Neha Joshi</td>
                    <td>05 Aug 2026</td>
                    <td>Net Banking</td>
                    <td>₹6,200</td>
                    <td>
                        <span class="admin-pill pill-pending">
                            Pending
                        </span>
                    </td>
                    <td>
                        <form method="POST" action="manage_orders.php" class="ord-status-form">
                            <input type="hidden" name="order_id" value="RNT10087">

                            <select name="new_status" class="ord-status-select">
                                <option value="pending" selected>Pending</option>
                                <option value="shipped">Shipped</option>
                                <option value="delivered">Delivered</option>
                                <option value="cancelled">Cancelled</option>
                            </select>

                            <button type="submit" class="admin-icon-btn" title="Save">
                                <i class="bi bi-check-lg"></i>
                            </button>
                        </form>
                    </td>
                </tr>

                <tr>
                    <td><strong>#RNT10061</strong></td>
                    <td>Karan Desai</td>
                    <td>29 Jul 2026</td>
                    <td>COD</td>
                    <td>₹2,400</td>
                    <td>
                        <span class="admin-pill pill-pending">
                            Pending
                        </span>
                    </td>
                    <td>
                        <form method="POST" action="manage_orders.php" class="ord-status-form">
                            <input type="hidden" name="order_id" value="RNT10061">

                            <select name="new_status" class="ord-status-select">
                                <option value="pending" selected>Pending</option>
                                <option value="shipped">Shipped</option>
                                <option value="delivered">Delivered</option>
                                <option value="cancelled">Cancelled</option>
                            </select>

                            <button type="submit" class="admin-icon-btn" title="Save">
                                <i class="bi bi-check-lg"></i>
                            </button>
                        </form>
                    </td>
                </tr>

            </tbody>

        </table>

    </div>

</div>

<?php
$page_content = ob_get_clean();
require_once 'admin_layout.php';
?>