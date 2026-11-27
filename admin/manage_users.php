<?php
$page_title = "Manage Users - Re-NewTech Admin";
$page_heading = "Users";

ob_start();
?>

<!-- SUMMARY STRIP -->
<div class="row g-3 mb-4">


    <div class="col-6 col-md-4">

        <div class="usr-admin-stat">

            <i class="bi bi-people-fill"></i>

            <div>
                <strong>5</strong>
                <span>Total Users</span>
            </div>

        </div>

    </div>



    <div class="col-6 col-md-4">

        <div class="usr-admin-stat">

            <i class="bi bi-person-check-fill"></i>

            <div>
                <strong>4</strong>
                <span>Active</span>
            </div>

        </div>

    </div>



    <div class="col-6 col-md-4">

        <div class="usr-admin-stat">

            <i class="bi bi-person-x-fill"></i>

            <div>
                <strong>1</strong>
                <span>Blocked</span>
            </div>

        </div>

    </div>


</div>



<div class="admin-card">


    <!-- SEARCH - VISUAL ONLY -->
    <div class="prd-toolbar">

        <div class="prd-search-form">

            <i class="bi bi-search"></i>

            <input
                type="text"
                placeholder="Search by name or email..."
            >

            <button type="button">
                Search
            </button>

        </div>

    </div>



    <!-- USERS TABLE -->
    <div class="table-responsive">

        <table class="admin-table">


            <thead>

                <tr>

                    <th>User</th>

                    <th>Email</th>

                    <th>Joined</th>

                    <th>Orders</th>

                    <th>Status</th>

                    <th style="width: 110px;">
                        Action
                    </th>

                </tr>

            </thead>



            <tbody>


                <!-- USER 1 -->
                <tr>

                    <td>

                        <div class="d-flex align-items-center gap-3">

                            <span class="user-avatar">
                                R
                            </span>

                            <strong>
                                Ravi Patel
                            </strong>

                        </div>

                    </td>


                    <td>
                        ravi.patel@example.com
                    </td>


                    <td>
                        10 Jun 2026
                    </td>


                    <td>
                        4
                    </td>


                    <td>

                        <span class="admin-pill pill-delivered">
                            Active
                        </span>

                    </td>


                    <td>

                        <button
                            type="button"
                            class="admin-btn"
                        >
                            Block
                        </button>

                    </td>

                </tr>



                <!-- USER 2 -->
                <tr>

                    <td>

                        <div class="d-flex align-items-center gap-3">

                            <span class="user-avatar">
                                S
                            </span>

                            <strong>
                                Sneha Mehta
                            </strong>

                        </div>

                    </td>


                    <td>
                        sneha.mehta@example.com
                    </td>


                    <td>
                        22 Jun 2026
                    </td>


                    <td>
                        2
                    </td>


                    <td>

                        <span class="admin-pill pill-delivered">
                            Active
                        </span>

                    </td>


                    <td>

                        <button
                            type="button"
                            class="admin-btn"
                        >
                            Block
                        </button>

                    </td>

                </tr>



                <!-- USER 3 -->
                <tr>

                    <td>

                        <div class="d-flex align-items-center gap-3">

                            <span class="user-avatar">
                                A
                            </span>

                            <strong>
                                Amit Shah
                            </strong>

                        </div>

                    </td>


                    <td>
                        amit.shah@example.com
                    </td>


                    <td>
                        03 Jul 2026
                    </td>


                    <td>
                        1
                    </td>


                    <td>

                        <span class="admin-pill pill-delivered">
                            Active
                        </span>

                    </td>


                    <td>

                        <button
                            type="button"
                            class="admin-btn"
                        >
                            Block
                        </button>

                    </td>

                </tr>



                <!-- USER 4 -->
                <tr>

                    <td>

                        <div class="d-flex align-items-center gap-3">

                            <span class="user-avatar">
                                N
                            </span>

                            <strong>
                                Neha Joshi
                            </strong>

                        </div>

                    </td>


                    <td>
                        neha.joshi@example.com
                    </td>


                    <td>
                        15 Jul 2026
                    </td>


                    <td>
                        0
                    </td>


                    <td>

                        <span class="admin-pill pill-cancelled">
                            Blocked
                        </span>

                    </td>


                    <td>

                        <button
                            type="button"
                            class="admin-btn"
                        >
                            Unblock
                        </button>

                    </td>

                </tr>



                <!-- USER 5 -->
                <tr>

                    <td>

                        <div class="d-flex align-items-center gap-3">

                            <span class="user-avatar">
                                K
                            </span>

                            <strong>
                                Karan Desai
                            </strong>

                        </div>

                    </td>


                    <td>
                        karan.desai@example.com
                    </td>


                    <td>
                        01 Aug 2026
                    </td>


                    <td>
                        3
                    </td>


                    <td>

                        <span class="admin-pill pill-delivered">
                            Active
                        </span>

                    </td>


                    <td>

                        <button
                            type="button"
                            class="admin-btn"
                        >
                            Block
                        </button>

                    </td>

                </tr>


            </tbody>

        </table>

    </div>


</div>



<?php
$page_content = ob_get_clean();
require_once 'admin_layout.php';
?>