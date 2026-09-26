<?php
$page_title = "About Us - Re-NewTech";
ob_start();
?>

<style>
    :root {
        --primary-color: #0f5132;
        --bg-light: #f4f7f6;
        --card-shadow: 0 10px 25px rgba(0,0,0,0.05);
        --border-radius: 16px;
    }

    body {
        background-color: var(--bg-light);
    }

    .about-hero {
        background: linear-gradient(135deg, #0f5132 0%, #198754 100%);
        color: white;
        border-radius: var(--border-radius);
        padding: 50px 30px;
    }

    .feature-card {
        background: #ffffff;
        border-radius: var(--border-radius);
        padding: 25px;
        border: 1px solid rgba(0,0,0,0.06);
        box-shadow: var(--card-shadow);
        height: 100%;
        transition: transform 0.3s ease;
    }

    .feature-card:hover {
        transform: translateY(-5px);
    }

    .icon-box {
        width: 60px;
        height: 60px;
        background: #e6f4ea;
        color: #0f5132;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        margin-bottom: 20px;
    }
</style>

<div class="container py-4">

    <!-- HERO SECTION -->
    <div class="about-hero text-center mb-5">
        <h1>About Us......123</h1>
        <span class="badge bg-light text-success px-3 py-2 rounded-pill fw-bold mb-3">Green Tech Revolution</span>
        <h1 class="fw-bold mb-3">Renewing Tech, Restoring Nature</h1>
        <p class="lead mx-auto opacity-90" style="max-width: 700px;">
            Re-NewTech is dedicated to reducing e-waste and making top-tier certified electronics accessible and affordable for everyone.
        </p>
    </div>

    <!-- STATS COUNTER -->
    <div class="row g-4 mb-5 text-center">
        <div class="col-md-3 col-6">
            <div class="p-4 bg-white rounded-4 shadow-sm border">
                <h2 class="fw-bold text-success mb-1">5,000+</h2>
                <p class="text-muted small mb-0">Devices Renewed</p>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="p-4 bg-white rounded-4 shadow-sm border">
                <h2 class="fw-bold text-success mb-1">120+ Tons</h2>
                <p class="text-muted small mb-0">CO2 Emissions Saved</p>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="p-4 bg-white rounded-4 shadow-sm border">
                <h2 class="fw-bold text-success mb-1">50-Point</h2>
                <p class="text-muted small mb-0">Rigorous Quality Check</p>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="p-4 bg-white rounded-4 shadow-sm border">
                <h2 class="fw-bold text-success mb-1">98%</h2>
                <p class="text-muted small mb-0">Satisfied Customers</p>
            </div>
        </div>
    </div>

    <!-- WHY CHOOSE US -->
    <div class="mb-5">
        <h3 class="fw-bold text-dark text-center mb-4">Why Choose Re-NewTech?</h3>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="icon-box">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Certified Quality</h5>
                    <p class="text-secondary small mb-0">Every device undergoes a 50+ point quality inspection by certified technicians before listing.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="icon-box">
                        <i class="bi bi-arrow-counterclockwise"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">6 Months Warranty</h5>
                    <p class="text-secondary small mb-0">All products include 6 months Re-NewTech warranty along with a 7-day hassle-free return policy.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="icon-box">
                        <i class="bi bi-tree"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Eco Impact</h5>
                    <p class="text-secondary small mb-0">Choosing renewed electronics prevents electronic waste and significantly cuts down carbon footprint.</p>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
$page_content = ob_get_clean();
require_once 'layout.php';
?>