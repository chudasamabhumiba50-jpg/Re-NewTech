<?php
$page_title = "Manage Reviews - Re-NewTech Admin";
$page_heading = "Reviews";

ob_start();
?>

<!-- SUMMARY STRIP -->
<div class="row g-3 mb-4">

    <div class="col-6 col-md-3">
        <div class="rev-admin-stat">
            <strong>
                3.4
                <i class="bi bi-star-fill"></i>
            </strong>
            <span>Average Rating</span>
        </div>
    </div>


    <div class="col-6 col-md-3">
        <div class="rev-admin-stat">
            <strong>2</strong>
            <span>Pending Review</span>
        </div>
    </div>


    <div class="col-6 col-md-3">
        <div class="rev-admin-stat">
            <strong>2</strong>
            <span>Approved</span>
        </div>
    </div>


    <div class="col-6 col-md-3">
        <div class="rev-admin-stat">
            <strong>1</strong>
            <span>Rejected</span>
        </div>
    </div>

</div>


<div class="admin-card">


    <!-- REVIEW TABS - VISUAL ONLY -->
    <div class="rev-admin-tabs">

        <span class="rev-admin-tab is-active">
            All <span>5</span>
        </span>

        <span class="rev-admin-tab">
            Pending <span>2</span>
        </span>

        <span class="rev-admin-tab">
            Approved <span>2</span>
        </span>

        <span class="rev-admin-tab">
            Rejected <span>1</span>
        </span>

    </div>


    <div class="rev-list">


        <!-- REVIEW 1 -->
        <div class="rev-card">

            <div class="rev-card-top">

                <div class="rev-card-customer">

                    <span class="rev-avatar">R</span>

                    <div>
                        <strong>Ravi Patel</strong>

                        <span>
                            Refurbished ThinkPad T480
                            &middot;
                            12 Sep 2026
                        </span>
                    </div>

                </div>


                <span class="admin-pill pill-delivered">
                    Approved
                </span>

            </div>


            <div class="rev-stars">

                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>

            </div>


            <p class="rev-text">
                Excellent condition, works like a brand new laptop.
            </p>


            <div class="rev-actions">

                <button type="button" class="admin-btn">
                    <i class="bi bi-check-lg"></i>
                    Approve
                </button>

                <button type="button" class="admin-btn">
                    <i class="bi bi-x-lg"></i>
                    Reject
                </button>

            </div>

        </div>



        <!-- REVIEW 2 -->
        <div class="rev-card">

            <div class="rev-card-top">

                <div class="rev-card-customer">

                    <span class="rev-avatar">S</span>

                    <div>
                        <strong>Sneha Mehta</strong>

                        <span>
                            iPhone 11 - 128GB
                            &middot;
                            29 Aug 2026
                        </span>
                    </div>

                </div>


                <span class="admin-pill pill-pending">
                    Pending
                </span>

            </div>


            <div class="rev-stars">

                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>

            </div>


            <p class="rev-text">
                Good value for money. Minor scratch on the back panel.
            </p>


            <div class="rev-actions">

                <button type="button" class="admin-btn">
                    <i class="bi bi-check-lg"></i>
                    Approve
                </button>

                <button type="button" class="admin-btn">
                    <i class="bi bi-x-lg"></i>
                    Reject
                </button>

            </div>

        </div>



        <!-- REVIEW 3 -->
        <div class="rev-card">

            <div class="rev-card-top">

                <div class="rev-card-customer">

                    <span class="rev-avatar">A</span>

                    <div>
                        <strong>Amit Shah</strong>

                        <span>
                            NVIDIA GTX 1060 6GB GPU
                            &middot;
                            14 Aug 2026
                        </span>
                    </div>

                </div>


                <span class="admin-pill pill-pending">
                    Pending
                </span>

            </div>


            <div class="rev-stars">

                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>

            </div>


            <p class="rev-text">
                Fan makes noise after an hour of gaming.
            </p>


            <div class="rev-actions">

                <button type="button" class="admin-btn">
                    <i class="bi bi-check-lg"></i>
                    Approve
                </button>

                <button type="button" class="admin-btn">
                    <i class="bi bi-x-lg"></i>
                    Reject
                </button>

            </div>

        </div>



        <!-- REVIEW 4 -->
        <div class="rev-card">

            <div class="rev-card-top">

                <div class="rev-card-customer">

                    <span class="rev-avatar">N</span>

                    <div>
                        <strong>Neha Joshi</strong>

                        <span>
                            Samsung 500GB Evo SSD
                            &middot;
                            02 Aug 2026
                        </span>
                    </div>

                </div>


                <span class="admin-pill pill-cancelled">
                    Rejected
                </span>

            </div>


            <div class="rev-stars">

                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>

            </div>


            <p class="rev-text">
                Spam link removed. Buy cheap stuff here!!!
            </p>


            <div class="rev-actions">

                <button type="button" class="admin-btn">
                    <i class="bi bi-check-lg"></i>
                    Approve
                </button>

                <button type="button" class="admin-btn">
                    <i class="bi bi-x-lg"></i>
                    Reject
                </button>

            </div>

        </div>



        <!-- REVIEW 5 -->
        <div class="rev-card">

            <div class="rev-card-top">

                <div class="rev-card-customer">

                    <span class="rev-avatar">K</span>

                    <div>
                        <strong>Karan Desai</strong>

                        <span>
                            Sony WH-1000XM3
                            &middot;
                            28 Jul 2026
                        </span>
                    </div>

                </div>


                <span class="admin-pill pill-delivered">
                    Approved
                </span>

            </div>


            <div class="rev-stars">

                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>

            </div>


            <p class="rev-text">
                Exactly as described, great for the price.
            </p>


            <div class="rev-actions">

                <button type="button" class="admin-btn">
                    <i class="bi bi-check-lg"></i>
                    Approve
                </button>

                <button type="button" class="admin-btn">
                    <i class="bi bi-x-lg"></i>
                    Reject
                </button>

            </div>

        </div>


    </div>

</div>


<?php
$page_content = ob_get_clean();
require_once 'admin_layout.php';
?>