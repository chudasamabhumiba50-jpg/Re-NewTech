<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$page_title = "Manage Orders - Re-NewTech Admin";
$page_heading = "Orders";

$orders = [
    ['id' => 'RNT10245', 'customer' => 'Ravi Patel', 'date' => '18 Sep 2026', 'payment' => 'UPI', 'total' => 22500, 'status' => 'delivered'],
    ['id' => 'RNT10198', 'customer' => 'Sneha Mehta', 'date' => '02 Sep 2026', 'payment' => 'Card', 'total' => 14999, 'status' => 'shipped'],
    ['id' => 'RNT10122', 'customer' => 'Amit Shah', 'date' => '21 Aug 2026', 'payment' => 'COD', 'total' => 900, 'status' => 'cancelled'],
    ['id' => 'RNT10087', 'customer' => 'Neha Joshi', 'date' => '05 Aug 2026', 'payment' => 'Net Banking', 'total' => 6200, 'status' => 'pending'],
    ['id' => 'RNT10061', 'customer' => 'Karan Desai', 'date' => '29 Jul 2026', 'payment' => 'COD', 'total' => 2400, 'status' => 'pending']
];

ob_start();
?>



<div class="admin-card">

    <div class="admin-filter-tabs" id="orderTabs">
        <button type="button" class="admin-filter-tab active" data-status="all">All</button>
        <button type="button" class="admin-filter-tab" data-status="pending">Pending</button>
        <button type="button" class="admin-filter-tab" data-status="shipped">Shipped</button>
        <button type="button" class="admin-filter-tab" data-status="delivered">Delivered</button>
        <button type="button" class="admin-filter-tab" data-status="cancelled">Cancelled</button>
    </div>

    <div class="table-responsive">
        <table class="admin-table" id="ordersTable">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Date</th>
                    <th>Payment</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $o): ?>
                    <tr data-status="<?php echo $o['status']; ?>">
                        <td><strong>#<?php echo $o['id']; ?></strong></td>
                        <td><?php echo $o['customer']; ?></td>
                        <td><?php echo $o['date']; ?></td>
                        <td><?php echo $o['payment']; ?></td>
                        <td>₹<?php echo number_format($o['total']); ?></td>
                        <td>
                            <span class="admin-pill pill-<?php echo $o['status']; ?> status-pill">
                                <?php echo ucfirst($o['status']); ?>
                            </span>
                        </td>
                        <td>
                            <select class="order-status-select">
                                <?php foreach (['pending', 'shipped', 'delivered', 'cancelled'] as $st): ?>
                                    <option value="<?php echo $st; ?>" <?php echo $st === $o['status'] ? 'selected' : ''; ?>>
                                        <?php echo ucfirst($st); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
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