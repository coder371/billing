<?php require_once "./inc/static/head.php"; ?>
    <div class="app-admin-wrap layout-sidebar-large">
    <?php require_once "./inc/tmp/header.php"; ?>
        <?php require_once "./inc/tmp/menu.php"; ?>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Task Manager</h1>
                    <ul>
                        <li><a href="href">Apps</a></li>
                        <li>Task Manager</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div id="task-manager-list">
                    <!--  content area -->
                    <div class="content">
                        <!--  task manager table -->
                        <div class="card" id="card">
                            <div class="card-header bg-transparent ul-task-manager__header-inline">
                                <h6 class="card-title task-title">Task Manager</h6>
                                <div class="headder-elements">
                                    <div class="list-icons"><a class="ul-task-manager__list-icon" id="arrow-down" href="href"><i class="i-Arrow-Down"></i></a><a class="ul-task-manager__list-icon" id="reload" href="href"><i class="i-Repeat-21"></i></a><a class="ul-task-manager__list-icon" id="close-window" href="href"><i class="i-Close-Window"></i></a></div>
                                </div>
                            </div>
                            <div class="card-body" id="card-body">
                                <div class="search ul-task-manager__search-inline">
                                    <nav class="navbar">
                                        <form class="form-inline">
                                            <label class="col-sm-2 col-form-label mr-2" for="inputEmail3">Filter:</label>
                                            <input class="form-control mr-sm-2" id="filterInput" type="search" placeholder="type to filter" aria-label="Search" />
                                        </form>
                                    </nav>
                                    <label><span>Show:</span>
                                        <select>
                                            <option value="15">15</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="75">75</option>
                                            <option value="100">100</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered custom-sm-width" id="names">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Task Description</th>
                                                <th scope="col">Priority</th>
                                                <th scope="col">Latest Update</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Assigned Users</th>
                                                <th scope="col"><a href="href"><span class="checkmarks">
                                                            <div class="checkmark_stem"></div>
                                                            <div class="checkmark_kick"></div>
                                                        </span></a></th>
                                            </tr>
                                        </thead>
                                        <thead class="thead-light">
                                            <tr>
                                                <th colspan="7">Last Week</th>
                                            </tr>
                                        </thead>
                                        <tbody id="names">
                                            <!-- --------------------------- tr1 -------------------------------------------->
                                            <tr id="names">
                                                <th class="head-width" scope="row">#1</th>
                                                <td class="collection-item">
                                                    <div class="font-weight-bold"><a href="#">Update User profile page</a></div>
                                                    <div class="text-muted">A small river named Duden flows by their place and supplies it..</div>
                                                </td>
                                                <td class="custom-align">
                                                    <div class="btn-group">
                                                        <button class="btn btn-danger custom-btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Blocker

                                                        </button>
                                                        <div class="dropdown-menu ul-task-manager__dropdown-menu"><a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-primary mr-2"></span>Blocker</a><a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-danger mr-2"></span>High Priority</a><a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-warning mr-2"></span>Normal Priority</a><a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-success mr-2"></span>Low Priority</a></div>
                                                    </div>
                                                </td>
                                                <td class="custom-align">
                                                    <div class="d-inline-flex align-items-center calendar align-middle"><i class="i-Calendar-4"></i><span>12 January 2015</span></div>
                                                </td>
                                                <td class="custom-align">
                                                    <select class="custom-select task-manager-list-select" id="inputGroupSelect01">
                                                        <option selected="selected">Choose...</option>
                                                        <option value="1">Open</option>
                                                        <option value="2">On hold</option>
                                                        <option value="3">Resolved</option>
                                                        <option value="3">Duplicate</option>
                                                        <option value="3">Invalid</option>
                                                        <option value="3">Wontfix</option>
                                                        <option value="3">Closed</option>
                                                    </select>
                                                </td>
                                                <td class="custom-align"><img class="rounded-circle m-0 ul-task-manager__avatar" src="../../dist-assets/images/faces/1.jpg" alt="alt" /><img class="rounded-circle m-0 ul-task-manager__avatar" src="../../dist-assets/images/faces/1.jpg" alt="alt" /><i class="i-Add font-custom-table"></i></td>
                                                <td class="custom-align"><span id="menu-toggle">
                                                        <div class="dropdown"><i class="i-Align-Right custom-font-down-arrow" data-toggle="dropdown"></i>
                                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Check In</a><a class="dropdown-item" href="#">Attach Screenshot 2</a><a class="dropdown-item" href="#">Reassign</a><a class="dropdown-item" href="#">Edit Task</a><a class="dropdown-item" href="#">Remove</a></div>
                                                        </div>
                                                    </span></td>
                                            </tr>
                                            <!-- ------------------------------ end of tr1 -------------------------------------->
                                            <!--  table row 2 -->
                                            <tr>
                                                <th scope="row">#2</th>
                                                <td class="collection-item">
                                                    <div class="font-weight-bold"><a href="#">Not Update User profile page</a></div>
                                                    <div class="text-muted">A small river named Duden flows by their place and supplies it..</div>
                                                </td>
                                                <td class="custom-align">
                                                    <div class="btn-group">
                                                        <button class="btn btn-success custom-btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Low

                                                        </button>
                                                        <div class="dropdown-menu ul-task-manager__dropdown-menu"><a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-primary mr-2"></span>Blocker</a><a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-warning mr-2"></span>High Priority</a><a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-danger mr-2"></span>Normal Priority</a><a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-info mr-2"></span>Low Priority</a></div>
                                                    </div>
                                                </td>
                                                <td class="custom-align">
                                                    <div class="d-inline-flex align-items-center calendar"><i class="i-Calendar-4"></i><span>12 January 2015</span>
                                                        <!--  <input size="16" type="text" value="2012-06-15 14:45" readonly class="form_datetime"> -->
                                                    </div>
                                                </td>
                                                <td class="custom-align">
                                                    <select class="custom-select task-manager-list-select" id="inputGroupSelect01">
                                                        <option selected="selected">Choose...</option>
                                                        <option value="1">Open</option>
                                                        <option value="2">On hold</option>
                                                        <option value="3">Resolved</option>
                                                        <option value="3">Duplicate</option>
                                                        <option value="3">Invalid</option>
                                                        <option value="3">Wontfix</option>
                                                        <option value="3">Closed</option>
                                                    </select>
                                                </td>
                                                <td class="custom-align"><img class="rounded-circle m-0 ul-task-manager__avatar" src="../../dist-assets/images/faces/1.jpg" alt="alt" /><img class="rounded-circle m-0 ul-task-manager__avatar" src="../../dist-assets/images/faces/1.jpg" alt="alt" /><i class="i-Add font-custom-table"></i></td>
                                                <td class="custom-align"><span id="menu-toggle">
                                                        <div class="dropdown"><i class="i-Align-Right custom-font-down-arrow" data-toggle="dropdown"></i>
                                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Check In</a><a class="dropdown-item" href="#">Attach Screenshot 2</a><a class="dropdown-item" href="#">Reassign</a><a class="dropdown-item" href="#">Edit Task</a><a class="dropdown-item" href="#">Remove</a></div>
                                                        </div>
                                                    </span></td>
                                            </tr>
                                            <!--  end of table row 2 -->
                                        </tbody>
                                        <thead class="thead-light">
                                            <tr>
                                                <th colspan="7">2 Days Ago</th>
                                            </tr>
                                        </thead>
                                        <!--  table row 3 -->
                                        <tbody>
                                            <tr>
                                                <th scope="row">#3</th>
                                                <td class="collection-item">
                                                    <div class="font-weight-bold"><a href="#">Update User profile page</a></div>
                                                    <div class="text-muted">A small river named Duden flows by their place and supplies it..</div>
                                                </td>
                                                <td class="custom-align">
                                                    <div class="btn-group">
                                                        <button class="btn btn-warning text-white custom-btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            High

                                                        </button>
                                                        <div class="dropdown-menu ul-task-manager__dropdown-menu"><a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-primary mr-2"></span>Blocker</a><a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-danger mr-2"></span>High Priority</a><a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-success mr-2"></span>Normal Priority</a><a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-warning mr-2"></span>Low Priority</a></div>
                                                    </div>
                                                </td>
                                                <td class="custom-align">
                                                    <div class="d-inline-flex align-items-center calendar"><i class="i-Calendar-4"></i><span>12 January 2015</span></div>
                                                </td>
                                                <td class="custom-align">
                                                    <select class="custom-select task-manager-list-select" id="inputGroupSelect01">
                                                        <option selected="selected">Choose...</option>
                                                        <option value="1">Open</option>
                                                        <option value="2">On hold</option>
                                                        <option value="3">Resolved</option>
                                                        <option value="3">Duplicate</option>
                                                        <option value="3">Invalid</option>
                                                        <option value="3">Wontfix</option>
                                                        <option value="3">Closed</option>
                                                    </select>
                                                </td>
                                                <td class="custom-align"><img class="rounded-circle m-0 ul-task-manager__avatar" src="../../dist-assets/images/faces/1.jpg" alt="alt" /><img class="rounded-circle m-0 ul-task-manager__avatar" src="../../dist-assets/images/faces/1.jpg" alt="alt" /><i class="i-Add font-custom-table"></i></td>
                                                <td class="custom-align"><span id="menu-toggle">
                                                        <div class="dropdown"><i class="i-Align-Right custom-font-down-arrow" data-toggle="dropdown"></i>
                                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Check In</a><a class="dropdown-item" href="#">Attach Screenshot 2</a><a class="dropdown-item" href="#">Reassign</a><a class="dropdown-item" href="#">Edit Task</a><a class="dropdown-item" href="#">Remove</a></div>
                                                        </div>
                                                    </span></td>
                                            </tr>
                                            <!--  end of table row 3 -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                                <div class="row align-items-center">
                                    <div class="col"><span>Showing 1 to 25 of 25 entries</span></div>
                                    <div class="col">
                                        <ul class="pagination justify-content-end">
                                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  end of task manager table -->
                    </div>
                    <!--  end of content area -->
                </div><!-- end of main-content -->
            </div><!-- Footer Start -->
            <div class="flex-grow-1"></div>
            <div class="app-footer">
                <div class="row">
                    <div class="col-md-9">
                        <p><strong>Gull - Laravel + Bootstrap 4 admin template</strong></p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero quis beatae officia saepe perferendis voluptatum minima eveniet voluptates dolorum, temporibus nisi maxime nesciunt totam repudiandae commodi sequi dolor quibusdam
                            <sunt></sunt>
                        </p>
                    </div>
                </div>
                <div class="footer-bottom border-top pt-3 d-flex flex-column flex-sm-row align-items-center">
                    <a class="btn btn-primary text-white btn-rounded" href="https://themeforest.net/item/gull-bootstrap-laravel-admin-dashboard-template/23101970" target="_blank">Buy Gull HTML</a>
                    <span class="flex-grow-1"></span>
                    <div class="d-flex align-items-center">
                        <img class="logo" src="../../dist-assets/images/logo.png" alt="">
                        <div>
                            <p class="m-0">&copy; 2018 Gull HTML</p>
                            <p class="m-0">All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fotter end -->
        </div>
    </div><!-- ============ Search UI Start ============= -->
    <div class="search-ui">
        <div class="search-header">
            <img src="../../dist-assets/images/logo.png" alt="" class="logo">
            <button class="search-close btn btn-icon bg-transparent float-right mt-2">
                <i class="i-Close-Window text-22 text-muted"></i>
            </button>
        </div>
        <input type="text" placeholder="Type here" class="search-input" autofocus>
        <div class="search-title">
            <span class="text-muted">Search results</span>
        </div>
        <div class="search-results list-horizontal">
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="../../dist-assets/images/products/headphone-1.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-danger">Sale</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="../../dist-assets/images/products/headphone-2.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="../../dist-assets/images/products/headphone-3.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="../../dist-assets/images/products/headphone-4.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PAGINATION CONTROL -->
        <div class="col-md-12 mt-5 text-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination d-inline-flex">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- ============ Search UI End ============= -->
    <script src="../../dist-assets/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="../../dist-assets/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="../../dist-assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../dist-assets/js/scripts/script.min.js"></script>
    <script src="../../dist-assets/js/scripts/sidebar.large.script.min.js"></script>
</body>

</html>