<?php
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

<style>
    .order-status-select {
        padding: 5px 8px;
        border: 1px solid var(--line);
        border-radius: 7px;
        font-size: 0.74rem;
        font-weight: 700;
        background: var(--white);
        cursor: pointer;
        outline: none;
    }

    .admin-filter-tabs {
        display: flex;
        gap: 6px;
        flex-wrap: wrap;
        margin-bottom: 16px;
    }

    .admin-filter-tab {
        padding: 7px 14px;
        border: 1px solid var(--line);
        border-radius: 20px;
        background: var(--white);
        color: var(--muted);
        font-size: 0.74rem;
        font-weight: 700;
        cursor: pointer;
    }

    .admin-filter-tab.active {
        background: var(--navy);
        color: var(--white);
        border-color: var(--navy);
    }
</style>

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

<script>
    const orderRows = document.querySelectorAll('#ordersTable tbody tr');
    const orderTabs = document.querySelectorAll('.admin-filter-tab');

    orderTabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            orderTabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');

            const status = this.dataset.status;
            orderRows.forEach(function (row) {
                row.style.display = (status === 'all' || row.dataset.status === status) ? '' : 'none';
            });
        });
    });

    document.querySelectorAll('.order-status-select').forEach(function (select) {
        select.addEventListener('change', function () {
            const row = this.closest('tr');
            const pill = row.querySelector('.status-pill');
            const newStatus = this.value;

            row.dataset.status = newStatus;
            pill.className = 'admin-pill status-pill pill-' + newStatus;
            pill.textContent = newStatus.charAt(0).toUpperCase() + newStatus.slice(1);
        });
    });
</script>

<?php
$page_content = ob_get_clean();
require_once 'admin_layout.php';
?>