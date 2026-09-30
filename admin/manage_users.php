<?php
$page_title = "Manage Users - Re-NewTech Admin";
$page_heading = "Users";

$users = [
    ['id' => 1, 'name' => 'Ravi Patel', 'email' => 'ravi.patel@example.com', 'joined' => '10 Jun 2026', 'orders' => 4, 'status' => 'active'],
    ['id' => 2, 'name' => 'Sneha Mehta', 'email' => 'sneha.mehta@example.com', 'joined' => '22 Jun 2026', 'orders' => 2, 'status' => 'active'],
    ['id' => 3, 'name' => 'Amit Shah', 'email' => 'amit.shah@example.com', 'joined' => '03 Jul 2026', 'orders' => 1, 'status' => 'active'],
    ['id' => 4, 'name' => 'Neha Joshi', 'email' => 'neha.joshi@example.com', 'joined' => '15 Jul 2026', 'orders' => 0, 'status' => 'blocked'],
    ['id' => 5, 'name' => 'Karan Desai', 'email' => 'karan.desai@example.com', 'joined' => '01 Aug 2026', 'orders' => 3, 'status' => 'active']
];

ob_start();
?>


<div class="admin-card">

    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-3">

        <div class="admin-search">
            <i class="bi bi-search"></i>
            <input type="text" id="adminUserSearch" placeholder="Search by name or email...">
        </div>

        <span class="text-muted small"><strong><?php echo count($users); ?></strong> registered users</span>

    </div>

    <div class="table-responsive">
        <table class="admin-table" id="usersTable">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Email</th>
                    <th>Joined</th>
                    <th>Orders</th>
                    <th>Status</th>
                    <th style="width: 110px;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $u): ?>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-3">
                                <span class="user-avatar"><?php echo strtoupper(substr($u['name'], 0, 1)); ?></span>
                                <strong><?php echo htmlspecialchars($u['name']); ?></strong>
                            </div>
                        </td>
                        <td><?php echo htmlspecialchars($u['email']); ?></td>
                        <td><?php echo $u['joined']; ?></td>
                        <td><?php echo $u['orders']; ?></td>
                        <td>
                            <span class="admin-pill status-pill <?php echo $u['status'] === 'active' ? 'pill-delivered' : 'pill-cancelled'; ?>">
                                <?php echo ucfirst($u['status']); ?>
                            </span>
                        </td>
                        <td>
                            <button type="button" class="admin-btn toggle-block-btn" onclick="toggleBlock(this)">
                                <?php echo $u['status'] === 'active' ? 'Block' : 'Unblock'; ?>
                            </button>
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