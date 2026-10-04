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

// Search using a plain GET parameter (no JavaScript)
$search_term = isset($_GET['search']) ? trim($_GET['search']) : '';

$filtered_users = [];
foreach ($users as $u) {
    if ($search_term === '' || stripos($u['name'], $search_term) !== false || stripos($u['email'], $search_term) !== false) {
        $filtered_users[] = $u;
    }
}

$active_count = 0;
$blocked_count = 0;
foreach ($users as $u) {
    if ($u['status'] === 'active') {
        $active_count++;
    } else {
        $blocked_count++;
    }
}

ob_start();
?>

<!-- SUMMARY STRIP -->
<div class="row g-3 mb-4">

    <div class="col-6 col-md-4">
        <div class="usr-admin-stat">
            <i class="bi bi-people-fill"></i>
            <div>
                <strong><?php echo count($users); ?></strong>
                <span>Total Users</span>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4">
        <div class="usr-admin-stat">
            <i class="bi bi-person-check-fill"></i>
            <div>
                <strong><?php echo $active_count; ?></strong>
                <span>Active</span>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4">
        <div class="usr-admin-stat">
            <i class="bi bi-person-x-fill"></i>
            <div>
                <strong><?php echo $blocked_count; ?></strong>
                <span>Blocked</span>
            </div>
        </div>
    </div>

</div>

<div class="admin-card">

    <div class="prd-toolbar">

        <form method="GET" action="manage_users.php" class="prd-search-form">
            <i class="bi bi-search"></i>
            <input
                type="text"
                name="search"
                value="<?php echo htmlspecialchars($search_term); ?>"
                placeholder="Search by name or email..."
            >
            <button type="submit">Search</button>
        </form>

        <?php if ($search_term !== ''): ?>
            <a href="manage_users.php" class="admin-btn">Clear Filter</a>
        <?php endif; ?>

    </div>

    <?php if ($search_term !== ''): ?>
        <p class="prd-search-result">
            Showing <strong><?php echo count($filtered_users); ?></strong> result(s) for "<strong><?php echo htmlspecialchars($search_term); ?></strong>"
        </p>
    <?php endif; ?>

    <div class="table-responsive">
        <table class="admin-table">
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

                <?php if (count($filtered_users) === 0): ?>
                    <tr>
                        <td colspan="6" class="prd-admin-empty">No users matched your search.</td>
                    </tr>
                <?php endif; ?>

                <?php foreach ($filtered_users as $u): ?>
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
                            <span class="admin-pill <?php echo $u['status'] === 'active' ? 'pill-delivered' : 'pill-cancelled'; ?>">
                                <?php echo ucfirst($u['status']); ?>
                            </span>
                        </td>
                        <td>
                            <form method="POST" action="manage_users.php">
                                <input type="hidden" name="user_id" value="<?php echo $u['id']; ?>">
                                <input type="hidden" name="new_status" value="<?php echo $u['status'] === 'active' ? 'blocked' : 'active'; ?>">
                                <button type="submit" class="admin-btn">
                                    <?php echo $u['status'] === 'active' ? 'Block' : 'Unblock'; ?>
                                </button>
                            </form>
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