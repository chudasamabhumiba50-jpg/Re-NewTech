<?php
$page_title = "About Us - Re-NewTech";
ob_start();
?>

<!-- HERO -->
<section class="ab-hero">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <span class="ab-badge"><i class="bi bi-recycle"></i> Our Story</span>
                <h1 class="ab-hero-title">
                    We give technology <span>a second life</span>, not a landfill.
                </h1>
                <p class="ab-hero-text">
                    Re-NewTech started with a simple question: why should a working laptop or phone end up in a drawer or a dump, just because it's a year old? We inspect, repair and certify pre-owned electronics so they can keep doing their job — for someone new, at a fraction of the cost.
                </p>

                <div class="ab-hero-chips">
                    <div class="ab-chip">
                        <strong>5,000+</strong>
                        <span>Devices Renewed</span>
                    </div>
                    <div class="ab-chip">
                        <strong>120+ Tons</strong>
                        <span>CO2 Saved</span>
                    </div>
                    <div class="ab-chip">
                        <strong>98%</strong>
                        <span>Happy Customers</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="ab-hero-visual">
                    <div class="ab-hero-card card-one">
                        <i class="bi bi-shield-check"></i>
                        <div>
                            <strong>50-Point Check</strong>
                            <span>Before every listing</span>
                        </div>
                    </div>
                    <div class="ab-hero-card card-two">
                        <i class="bi bi-tree-fill"></i>
                        <div>
                            <strong>Eco Impact</strong>
                            <span>More devices renewed, fewer discarded</span>
                        </div>
                    </div>
                    <div class="ab-hero-blob"></div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- STORY / MISSION -->
<section class="ab-section">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <span class="ab-eyebrow">Why we exist</span>
                <h2 class="ab-section-title">Electronics shouldn't be disposable.</h2>
                <p class="ab-section-text">
                    Every year, millions of perfectly usable devices are thrown away simply because something newer launched. Re-NewTech was built to interrupt that cycle — we source pre-owned laptops, phones, monitors and components, restore them to a reliable working state, and pass the savings on to you.
                </p>
                <p class="ab-section-text">
                    We're not just a resale platform. Every item that passes through us is tested, graded honestly, and backed by a warranty — so "renewed" never means "risky."
                </p>
            </div>

            <div class="col-lg-6">
                <div class="ab-mission-card">
                    <i class="bi bi-bullseye"></i>
                    <h5>Our Mission</h5>
                    <p>Make trustworthy, affordable technology accessible to everyone, while giving more devices a renewed life instead of ending up in landfills — one device at a time.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- PROCESS TIMELINE -->
<section class="ab-section ab-process-section">
    <div class="container">

        <div class="text-center mb-5">
            <span class="ab-eyebrow">How it works</span>
            <h2 class="ab-section-title">From used to renewed, in 4 steps</h2>
        </div>

        <div class="ab-process-grid">

            <div class="ab-process-step">
                <div class="ab-step-num">01</div>
                <h5>Sourcing</h5>
                <p>We collect pre-owned devices from trusted sellers, upgrades and trade-ins.</p>
            </div>

            <div class="ab-process-step">
                <div class="ab-step-num">02</div>
                <h5>50-Point Inspection</h5>
                <p>Certified technicians test hardware, battery health, ports and performance.</p>
            </div>

            <div class="ab-process-step">
                <div class="ab-step-num">03</div>
                <h5>Repair & Grade</h5>
                <p>Any faults are fixed, and each device is honestly graded by condition.</p>
            </div>

            <div class="ab-process-step">
                <div class="ab-step-num">04</div>
                <h5>Warranty & Ship</h5>
                <p>Every renewed device ships with a 6-month warranty and 7-day returns.</p>
            </div>

        </div>

    </div>
</section>

<!-- WHY CHOOSE US -->
<section class="ab-section">
    <div class="container">

        <div class="text-center mb-5">
            <span class="ab-eyebrow">Why Re-NewTech</span>
            <h2 class="ab-section-title">Built on trust, not just savings</h2>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="ab-feature-card">
                    <div class="ab-feature-icon"><i class="bi bi-shield-check"></i></div>
                    <h5>Certified Quality</h5>
                    <p>Every device passes a 50+ point quality inspection before it's listed.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="ab-feature-card">
                    <div class="ab-feature-icon"><i class="bi bi-arrow-counterclockwise"></i></div>
                    <h5>6 Month Warranty</h5>
                    <p>Backed by a 6-month Re-NewTech warranty and 7-day hassle-free returns.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="ab-feature-card">
                    <div class="ab-feature-icon"><i class="bi bi-tree"></i></div>
                    <h5>Real Eco Impact</h5>
                    <p>Choosing renewed tech keeps working devices out of landfills and cuts carbon footprint.</p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- CTA -->
<section class="ab-cta-section">
    <div class="container">
        <div class="ab-cta-card">
            <div>
                <h3>Ready to find your next device?</h3>
                <p>Browse certified, renewed electronics at prices that make sense.</p>
            </div>
            <a href="products.php" class="ab-cta-btn">
                Explore Catalog <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<?php
$page_content = ob_get_clean();
require_once 'layout.php';
?>