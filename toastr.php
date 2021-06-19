<?php require_once "./inc/static/head.php"; ?>
    <div class="app-admin-wrap layout-sidebar-large">
    <?php require_once "./inc/tmp/header.php"; ?>
        <?php require_once "./inc/tmp/menu.php"; ?>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Toastr</h1>
                    <ul>
                        <li><a href="href">Componets</a></li>
                        <li>Toastr</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <p>Toastr is a Javascript library for non-blocking notifications. jQuery is required. The goal is to create a simple core library that can be customized and extended.</p>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-block btn-outline-success btn-success" id="toast-success">success toaster</button>
                                <button class="btn btn-block btn-outline-info btn-info" id="toast-info">info toaster</button>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-block btn-outline-warning btn-warning" id="toast-warning">warning toaster</button>
                                <button class="btn btn-block btn-outline-danger btn-danger" id="toast-error">danger toaster</button>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                </div>
                <!--  end of row -->
                <div class="row mb-4">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Top Positions</h3>
                                <button class="btn btn-block btn-outline-info btn-info" id="toast-position-top-left">Top Left</button>
                                <button class="btn btn-block btn-outline-info btn-info" id="toast-position-top-center">Top Center</button>
                                <button class="btn btn-block btn-outline-info btn-info" id="toast-position-top-right">Top Right</button>
                                <button class="btn btn-block btn-outline-info btn-info" id="toast-position-top-full">Top Full</button>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Bottom Positions</h3>
                                <button class="btn btn-block btn-outline-info btn-info" id="toast-position-bottom-left">bottom Left</button>
                                <button class="btn btn-block btn-outline-info btn-info" id="toast-position-bottom-center">bottom Center</button>
                                <button class="btn btn-block btn-outline-info btn-info" id="toast-position-bottom-right">bottom Right</button>
                                <button class="btn btn-block btn-outline-info btn-info" id="toast-position-bottom-full">bottom Full</button>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                </div>
                <!--  end of row -->
                <div class="row mb-4">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Text Notifications</h3>
                                <button class="btn btn-block btn-outline-info btn-info" id="toast-text-notification">Show Toast</button>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Close Button</h3>
                                <button class="btn btn-block btn-outline-success btn-success" id="toast-close-button">Show Toast</button>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Progress Bar</h3>
                                <button class="btn btn-block btn-outline-warning btn-warning" id="toast-progress-bar">Show Toast</button>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Clear Toast</h3>
                                <button class="btn btn-block btn-outline-danger btn-danger" id="toast-clear-btn">Show Toast</button>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                </div>
                <!--  end of row -->
                <div class="row mb-4">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Remove Toast</h3>
                                <p>remove toast without animation</p>
                                <button class="btn btn-block btn-outline-info btn-info" id="toast-show-remove">Show Toast</button>
                                <button class="btn btn-block btn-outline-info btn-info" id="toast-remove">Remove Toast</button>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Clear Toast</h3>
                                <p>Clear toast with animation</p>
                                <button class="btn btn-block btn-outline-info btn-info" id="toast-show-clear">Show Toast</button>
                                <button class="btn btn-block btn-outline-info btn-info" id="toast-clear">Clear Toast</button>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                </div>
                <!--  end of row -->
                <div class="row mb-4">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title mb-1">Show .6s</h3>
                                <p>the show time can be define by using <code>showDuration</code></p>
                                <button class="btn btn-block btn-outline-info btn-info mb-3" id="toast-fast-duration">Show Fast Toast</button>
                                <h3 class="card-title mb-1">Timeout 6s</h3>
                                <p>Time Out can be define by <code>timeout</code> to set what amount of time will stay</p>
                                <button class="btn btn-block btn-outline-info btn-info" id="toast-timeout">Timeout Toast</button>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title mb-1">Hide 3s</h3>
                                <p>Hide can be define by <code>hideDuration</code> to set what amount of time will take to hide message</p>
                                <button class="btn btn-block btn-outline-info btn-info mb-3" id="toast-slow-duration">Hide Toast</button>
                                <h3 class="card-title mb-1">Sticky</h3>
                                <p>Sticky Message can be create by set the <code>timeout</code> to <code>0</code></p>
                                <button class="btn btn-block btn-outline-info btn-info" id="toast-sticky">Sticky Toast</button>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                </div>
                <!--  end of row -->
                <div class="row mb-4">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">FadeIn /FadeOut</h3>
                                <button class="btn btn-block btn-outline-info btn-info" id="toast-fade">Fade Toast</button>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">SlideDown /SlideUp</h3>
                                <button class="btn btn-block btn-outline-info btn-info" id="toast-slide">Slide Toast</button>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                </div>
                <!--  end of row -->
                <!-- end of main-content -->
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
    <script src="../../dist-assets/js/plugins/toastr.min.js"></script>
    <script src="../../dist-assets/js/scripts/toastr.script.min.js"></script>
</body>

</html>