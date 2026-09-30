<?php
$page_title = "About Us - Re-NewTech";
ob_start();
?>


<div class="container py-4">

    <!-- HERO SECTION -->
    <div class="about-hero text-center mb-5">
        
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