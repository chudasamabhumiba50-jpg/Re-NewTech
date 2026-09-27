<?php
$page_title = "Logout - Re-NewTech";

$main_class = "logout-main";

ob_start();
?>

<style>
    .logout-main {
        min-height: 68vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--cream);
    }

    .logout-card {
        max-width: 420px;
        width: 100%;
        margin: 40px 15px;
        padding: 45px 35px;
        text-align: center;
        background: var(--white);
        border: 1px solid var(--line);
        border-radius: 20px;
        box-shadow: var(--shadow);
    }

    .logout-icon-circle {
        width: 68px;
        height: 68px;
        margin: 0 auto 22px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--teal-soft);
        color: var(--teal-dark);
        border-radius: 50%;
        font-size: 1.7rem;
    }

    .logout-card h3 {
        margin-bottom: 10px;
        color: var(--navy);
        font-weight: 800;
    }

    .logout-card p {
        margin-bottom: 26px;
        color: var(--muted);
        font-size: 0.88rem;
        line-height: 1.7;
    }

    .logout-actions {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .btn-logout-login {
        padding: 12px 20px;
        background: var(--navy);
        color: var(--white);
        border: 1px solid var(--navy);
        border-radius: 10px;
        font-weight: 700;
        font-size: 0.85rem;
        text-decoration: none;
        transition: 0.2s ease;
    }

    .btn-logout-login:hover {
        background: var(--navy-light);
        color: var(--white);
    }

    .btn-logout-home {
        padding: 12px 20px;
        background: var(--white);
        color: var(--navy);
        border: 1px solid var(--line);
        border-radius: 10px;
        font-weight: 700;
        font-size: 0.85rem;
        text-decoration: none;
        transition: 0.2s ease;
    }

    .btn-logout-home:hover {
        border-color: #bfc6ce;
        background: #fafafa;
    }
</style>

<div class="container" align="center">

    <div class="logout-card">

        <div class="logout-icon-circle">
            <i class="bi bi-check-lg"></i>
        </div>

        <h3>You've Been Logged Out</h3>

        <p>
            You have successfully logged out of your
            Re-NewTech account. Thank you for shopping
            with us — see you again soon!
        </p>

        <div class="logout-actions">

            <a href="login.php" class="btn-logout-login">
                <i class="bi bi-box-arrow-in-right me-1"></i>
                Login Again
            </a>

            <a href="index.php" class="btn-logout-home">
                <i class="bi bi-house me-1"></i>
                Back to Home
            </a>

        </div>

    </div>

</div>

<?php
$page_content = ob_get_clean();
require_once 'layout.php';
?>