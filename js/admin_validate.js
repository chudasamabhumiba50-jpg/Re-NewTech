$(document).ready(function () {

    // ===== dashboard.php =====
    // (no JS yet)


    // ===== manage_products.php =====

    window.toggleProductModal = function (show) {
        const modal = document.getElementById('productModal');
        if (modal) {
            modal.classList.toggle('show', show);
        }
    };

    window.deleteProductRow = function (button) {
        if (confirm('Delete this product? (demo only)')) {
            button.closest('tr').remove();
        }
    };

    const productForm = document.getElementById('productForm');
    if (productForm) {
        productForm.addEventListener('submit', function (event) {
            event.preventDefault();
            alert('Demo only: product saved (not stored in database).');
            this.reset();
            window.toggleProductModal(false);
        });
    }

    const adminProductSearch = document.getElementById('adminProductSearch');
    if (adminProductSearch) {
        adminProductSearch.addEventListener('input', function () {
            const term = this.value.trim().toLowerCase();
            document.querySelectorAll('#productsTable tbody tr').forEach(function (row) {
                row.style.display = row.textContent.toLowerCase().includes(term) ? '' : 'none';
            });
        });
    }


    // ===== manage_orders.php =====

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


    // ===== manage_reviews.php =====

    const reviewTabs = document.querySelectorAll('#reviewTabs .admin-filter-tab');

    reviewTabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            reviewTabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');

            const status = this.dataset.status;
            document.querySelectorAll('#reviewsTable tbody tr').forEach(function (row) {
                row.style.display = (status === 'all' || row.dataset.status === status) ? '' : 'none';
            });
        });
    });

    window.setReviewStatus = function (button, newStatus) {
        const row = button.closest('tr');
        const pill = row.querySelector('.status-pill');
        const pillClass = newStatus === 'approved' ? 'pill-delivered' : 'pill-cancelled';

        row.dataset.status = newStatus;
        pill.className = 'admin-pill status-pill ' + pillClass;
        pill.textContent = newStatus.charAt(0).toUpperCase() + newStatus.slice(1);
    };

    window.deleteReviewRow = function (button) {
        if (confirm('Delete this review? (demo only)')) {
            button.closest('tr').remove();
        }
    };


    // ===== manage_users.php =====

    const adminUserSearch = document.getElementById('adminUserSearch');
    if (adminUserSearch) {
        adminUserSearch.addEventListener('input', function () {
            const term = this.value.trim().toLowerCase();
            document.querySelectorAll('#usersTable tbody tr').forEach(function (row) {
                row.style.display = row.textContent.toLowerCase().includes(term) ? '' : 'none';
            });
        });
    }

    window.toggleBlock = function (button) {
        const row = button.closest('tr');
        const pill = row.querySelector('.status-pill');
        const isActive = pill.textContent.trim() === 'Active';

        if (isActive) {
            pill.className = 'admin-pill status-pill pill-cancelled';
            pill.textContent = 'Blocked';
            button.textContent = 'Unblock';
        } else {
            pill.className = 'admin-pill status-pill pill-delivered';
            pill.textContent = 'Active';
            button.textContent = 'Block';
        }
    };


    // ===== manage_messages.php =====

    window.updateUnreadCount = function () {
        const count = document.querySelectorAll('.msg-item.is-unread').length;
        const countText = document.getElementById('unreadCountText');
        if (countText) {
            countText.textContent = count + ' unread';
        }
    };

    window.toggleRead = function (button) {
        button.closest('.msg-item').classList.toggle('is-unread');
        window.updateUnreadCount();
    };

    window.deleteMessage = function (button) {
        if (confirm('Delete this message? (demo only)')) {
            button.closest('.msg-item').remove();
            window.updateUnreadCount();
        }
    };

    if (document.getElementById('unreadCountText')) {
        window.updateUnreadCount();
    }

});