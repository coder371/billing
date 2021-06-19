<?php require_once "./inc/static/head.php"; ?>
    <div class="app-admin-wrap layout-sidebar-large">
        <?php require_once "./inc/tmp/header.php"; ?>
        <?php require_once "./inc/tmp/menu.php"; ?>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Badges</h1>
                    <ul>
                        <li><a href="">UI Kits</a></li>
                        <li>Badges</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="card-title mb-4">Badge outline</div><span class="badge badge-pill badge-outline-primary p-2 m-1">Primary</span><span class="badge badge-pill badge-outline-secondary p-2 m-1">Secondary</span><span class="badge badge-pill badge-outline-success p-2 m-1">Success</span><span class="badge badge-pill badge-outline-danger p-2 m-1">Danger</span><span class="badge badge-pill badge-outline-warning p-2 m-1">Warning</span><span class="badge badge-pill badge-outline-info p-2 m-1">Info</span><span class="badge badge-pill badge-outline-dark p-2 m-1">Dark</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title mb-4">Regular Badges</div><span class="badge badge-primary m-2">Primary</span><span class="badge badge-secondary m-2">Secondary</span><span class="badge badge-success m-2">Success</span><span class="badge badge-danger m-2">Danger</span><span class="badge badge-warning m-2">Warning</span><span class="badge badge-info m-2">Info</span><span class="badge badge-light m-2">Light</span><span class="badge badge-dark m-2">Dark</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="card-title mb-4">Badge Pill</div><span class="badge badge-pill badge-primary m-2">Primary</span><span class="badge badge-pill badge-secondary m-2">Secondary</span><span class="badge badge-pill badge-success m-2">Success</span><span class="badge badge-pill badge-danger m-2">Danger</span><span class="badge badge-pill badge-warning m-2">Warning</span><span class="badge badge-pill badge-info m-2">Info</span><span class="badge badge-pill badge-light m-2">Light</span><span class="badge badge-pill badge-dark m-2">Dark</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="card-title mb-4">Badge Pill with Padding</div><span class="badge badge-pill badge-primary p-2 m-1">Primary</span><span class="badge badge-pill badge-secondary p-2 m-1">Secondary</span><span class="badge badge-pill badge-success p-2 m-1">Success</span><span class="badge badge-pill badge-danger p-2 m-1">Danger</span><span class="badge badge-pill badge-warning p-2 m-1">Warning</span><span class="badge badge-pill badge-info p-2 m-1">Info</span><span class="badge badge-pill badge-light p-2 m-1">Light</span><span class="badge badge-pill badge-dark p-2 m-1">Dark</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="card-title mb-4">Badge link</div><a class="badge badge-primary m-2" href="#">Primary</a><a class="badge badge-secondary m-2" href="#">Secondary</a><a class="badge badge-success m-2" href="#">Success</a><a class="badge badge-danger m-2" href="#">Danger</a><a class="badge badge-warning m-2" href="#">Warning</a><a class="badge badge-info m-2" href="#">Info</a><a class="badge badge-light m-2" href="#">Light</a><a class="badge badge-dark m-2" href="#">Dark</a>
                            </div>
                        </div>
                    </div>
                    <!-- begin::basic-examples-->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- begin::sizing and styles-->
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="card-title mb-4">Sizing &amp; Styles</div>
                                        <ul class="list-group list-group-flush">
                                            <h6 class="card-subtitle mt-2 mb-2 text-muted">Medium Size</h6>
                                            <li class="list-group-item border-0"><span class="badge badge-round-primary m-1">A</span><span class="badge badge-round-success m-1">D</span><span class="badge badge-round-secondary m-1">C</span><span class="badge badge-round-danger m-1">E</span><span class="badge badge-round-warning m-1">F</span><span class="badge badge-round-info m-1">G</span><span class="badge badge-round-light m-1">H</span><span class="badge badge-round-dark m-1">I</span></li>
                                            <li class="list-group-item border-0"><span class="badge badge-square-primary m-1">A</span><span class="badge badge-square-secondary m-1">C</span><span class="badge badge-square-success m-1">D</span><span class="badge badge-square-danger m-1">E</span><span class="badge badge-square-warning m-1">F</span><span class="badge badge-square-info m-1">G</span><span class="badge badge-square-light m-1">H</span><span class="badge badge-square-dark m-1">I</span></li>
                                            <h6 class="card-subtitle mt-2 mb-2 text-muted">Large Size</h6>
                                            <li class="list-group-item border-0"><span class="badge badge-round-primary lg m-1">A</span><span class="badge badge-round-secondary lg m-1">C</span><span class="badge badge-round-success lg m-1">D</span><span class="badge badge-round-danger lg m-1">E</span><span class="badge badge-round-warning lg m-1">F</span><span class="badge badge-round-info lg m-1">G</span><span class="badge badge-round-light lg m-1">H</span><span class="badge badge-round-dark lg m-1">I</span></li>
                                            <li class="list-group-item border-0"><span class="badge badge-square-primary lg m-1">A</span><span class="badge badge-square-secondary lg m-1">C</span><span class="badge badge-square-success lg m-1">D</span><span class="badge badge-square-danger lg m-1">E</span><span class="badge badge-square-warning lg m-1">F</span><span class="badge badge-square-info lg m-1">G</span><span class="badge badge-square-light lg m-1">H</span><span class="badge badge-square-dark lg m-1">I</span></li>
                                            <h6 class="card-subtitle mt-2 mb-2 text-muted">Extra Large Size</h6>
                                            <li class="list-group-item border-0"><span class="badge badge-round-primary xl m-1">A</span><span class="badge badge-round-secondary xl m-1">C</span><span class="badge badge-round-success xl m-1">D</span><span class="badge badge-round-danger xl m-1">E</span><span class="badge badge-round-warning xl m-1">F</span><span class="badge badge-round-info xl m-1">G</span><span class="badge badge-round-light xl m-1">H</span><span class="badge badge-round-dark xl m-1">I</span></li>
                                            <li class="list-group-item border-0"><span class="badge badge-square-primary xl m-1">A</span><span class="badge badge-square-secondary xl m-1">C</span><span class="badge badge-square-success xl m-1">D</span><span class="badge badge-square-danger xl m-1">E</span><span class="badge badge-square-warning xl m-1">F</span><span class="badge badge-square-info xl m-1">G</span><span class="badge badge-square-light xl m-1">H</span><span class="badge badge-square-dark xl m-1">I</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end::sizing-styles-->
                                <!-- begin::more-styles-->
                                <div class="card mb-">
                                    <div class="card-body">
                                        <div class="card-title mb-4">More Styles &amp; Options</div>
                                        <ul class="list-group list-group-flash">
                                            <h6 class="card-subtitle mt-2 mb-2 text-muted">Wide badges for longer text:</h6>
                                            <li class="list-group-item border-0"><span class="badge badge-primary w-badge">New</span><span class="badge badge-dark w-badge">pending </span><span class="badge badge-primary w-badge">203 </span><span class="badge badge-success w-badge">hot </span><span class="badge badge-warning w-badge">fixed </span><span class="badge badge-info w-badge">in process </span><span class="badge badge-danger w-badge">completed </span></li>
                                            <h6 class="card-subtitle mt-2 mb-2 text-muted">Rounded badges examples:</h6>
                                            <li class="list-group-item border-0"><span class="badge badge-primary r-badge">New</span><span class="badge badge-dark r-badge">pending </span><span class="badge badge-primary r-badge">203 </span><span class="badge badge-success r-badge">hot </span><span class="badge badge-warning r-badge">fixed </span><span class="badge badge-info r-badge">in process </span><span class="badge badge-danger r-badge">completed </span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end::more-styles-->
                            </div>
                            <div class="col-md-6">
                                <!-- begin Unified Styles-->
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="card-title mb-4">Unified Styles</div>
                                        <ul class="list-group list-group-flash">
                                            <h6 class="card-subtitle mt-2 mb-2 text-muted">Circle and Square Unified Styles</h6>
                                            <li class="list-group-item border-0"><span class="badge badge-round badge-round-opacity-primary m-1">A</span><span class="badge badge-round badge-round-opacity-secondary m-1">B</span><span class="badge badge-round badge-round-opacity-success m-1">C</span><span class="badge badge-round badge-round-opacity-danger m-1">D</span><span class="badge badge-round badge-round-opacity-warning m-1">E</span><span class="badge badge-round badge-round-opacity-info m-1">F</span><span class="badge badge-round badge-round-opacity-dark m-1">G</span></li>
                                            <li class="list-group-item border-0"><span class="badge badge-square badge-square-opacity-primary m-1">A</span><span class="badge badge-square badge-square-opacity-secondary m-1">B</span><span class="badge badge-square badge-square-opacity-success m-1">C</span><span class="badge badge-square badge-square-opacity-danger m-1">D</span><span class="badge badge-square badge-square-opacity-warning m-1">E</span><span class="badge badge-square badge-square-opacity-info m-1">F</span><span class="badge badge-square badge-square-opacity-dark m-1">G</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end of Unified Styles-->
                                <!-- begin basic examples-->
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="card-title mb-4">Basic Examples</div>
                                        <ul class="list-group list-group-flash">
                                            <h6 class="card-subtitle mt-2 mb-2 text-muted">Circle and Square Unified Styles:</h6>
                                            <li class="list-group-item border-0"><span class="badge badge-round-primary sm m-1">A</span><span class="badge badge-round-secondary sm m-1">C</span><span class="badge badge-round-success sm m-1">D</span><span class="badge badge-round-success pill m-1">HOT</span><span class="badge badge-round-primary pill m-1">NEW</span><span class="badge badge-round-danger sm m-1">E</span><span class="badge badge-round-warning sm m-1">F</span><span class="badge badge-round-info sm m-1">G</span><span class="badge badge-round-light sm m-1">H</span><span class="badge badge-round-dark sm m-1">I</span></li>
                                        </ul>
                                        <ul class="list-group list-group-flash">
                                            <h6 class="card-subtitle mt-2 mb-2 text-muted">Dot Styles Examples:</h6>
                                            <li class="list-group-item border-0"><span class="badge-dot-primary"></span><span class="badge-dot-secondary"></span><span class="badge-dot-success"></span><span class="badge-dot-danger"></span><span class="badge-dot-warning"></span><span class="badge-dot-info"></span><span class="badge-dot-light"></span><span class="badge-dot-dark"></span></li>
                                            <li class="list-group-item border-0">Pending <span class="badge-dot-primary"></span> Caption <span class="badge-dot-secondary"></span> Heading <span class="badge-dot-success"></span> Status <span class="badge-dot-danger"></span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end basic examples-->
                                <!-- begin outline badges-->
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="card-title mb-4">Outline Badges</div>
                                        <ul class="list-group list-group-flash">
                                            <h6 class="card-subtitle mt-2 mb-2 text-muted">Basic state color badges:</h6>
                                            <li class="list-group-item border-0"><span class="badge outline-round-primary sm m-1">A</span><span class="badge outline-round-secondary sm m-1">C</span><span class="badge outline-round-success sm m-1">D</span><span class="badge outline-round-danger sm m-1">E</span><span class="badge outline-round-warning sm m-1">F</span><span class="badge outline-round-info sm m-1">G</span><span class="badge outline-round-light sm m-1">H</span><span class="badge outline-round-dark sm m-1">I</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end outline badges-->
                            </div>
                        </div>
                    </div>
                    <!-- end::basic-examples-->
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