<?php require_once "./inc/static/head.php"; ?>
    <div class="app-admin-wrap layout-sidebar-large">
    <?php require_once "./inc/tmp/header.php"; ?>
        <?php require_once "./inc/tmp/menu.php"; ?>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>ToolTip</h1>
                    <ul>
                        <li><a href="">Componets</a></li>
                        <li>ToolTip</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row mb-4">
                    <div class="col-md-12">
                        <h2>ToolTip</h2>
                        <p></p>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-12 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Basic Tooltips</h4>
                                <p>Hover over the buttons below to see the four tooltips directions: top, right, bottom, and left.</p>
                                <div class="row">
                                    <div class="col-md-3">
                                        <button class="btn btn-default m-1" type="button" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
                                    </div>
                                    <div class="col-md-3">
                                        <button class="btn btn-default m-1" type="button" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
                                    </div>
                                    <div class="col-md-3">
                                        <button class="btn btn-default m-1" type="button" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
                                    </div>
                                    <div class="col-md-3">
                                        <button class="btn btn-default m-1" type="button" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of col-->
                    <div class="col-md-12 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Basic Tooltips color button</h4>
                                <p>Hover over the buttons below to see the four tooltips directions: top, right, bottom, and left.</p>
                                <div class="row">
                                    <div class="col-md-3">
                                        <button class="btn btn-primary m-1" type="button" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
                                    </div>
                                    <div class="col-md-3">
                                        <button class="btn btn-info" type="button" d="" m-1ata-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
                                    </div>
                                    <div class="col-md-3">
                                        <button class="btn btn-success m-1" type="button" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
                                    </div>
                                    <div class="col-md-3">
                                        <button class="btn btn-warning m-1" type="button" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of col-->
                    <div class="col-md-12 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-3"> Tooltips Trigger</h4>
                                <p>Tooltip is triggered using - click | hover | focus | manual options. You may pass multiple triggers; separate them with a space. &quot;manual&quot; cannot be combined with any other trigger.</p>
                                <div class="row">
                                    <div class="col-md-3">
                                        <p>Use <code>data-trigger=&quot;click&quot;</code> for click trigger.</p>
                                        <button class="btn btn-primary m-1" data-trigger="click" type="button" data-toggle="tooltip" data-placement="top" title="Tooltip on top">on click trigger</button>
                                    </div>
                                    <div class="col-md-3">
                                        <p>Use <code>data-trigger=&quot;focus&quot;</code> for focus trigger.</p>
                                        <button class="btn btn-info" data-trigger="focus" type="button" d="" m-1ata-toggle="tooltip" data-placement="right" title="Tooltip on right">on focus trigger</button>
                                    </div>
                                    <div class="col-md-3">
                                        <p>Use <code>data-trigger=&quot;hover&quot;</code> for hover trigger.</p>
                                        <button class="btn btn-success m-1" data-trigger="hover" type="button" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">on hover trigger</button>
                                    </div>
                                    <div class="col-md-3">
                                        <p>Use <code>data-trigger=&quot;manual&quot;</code> for manual trigger.</p>
                                        <button class="btn btn-warning m-1" id="manual" data-trigger="manual" type="button" data-toggle="tooltip" data-placement="left" title="Tooltip on left">manual trigger</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of col-->
                    <div class="col-md-12 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-3"> Tooltip Options</h4>
                                <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to data-, as in data-animation=&quot;&quot;.</p>
                                <div class="row">
                                    <div class="col-md-3">
                                        <p>Use <code>data-animation=&quot;true&quot;</code> for animation.</p>
                                        <button class="btn btn-primary m-1" data-animation="true" type="button" data-toggle="tooltip" data-placement="top" title="Tooltip on top">With animation</button>
                                    </div>
                                    <div class="col-md-3">
                                        <p>Use <code>data-animation=&quot;false&quot;</code> for no animation.</p>
                                        <button class="btn btn-info" data-animation="false" type="button" d="" m-1ata-toggle="tooltip" data-placement="right" title="Tooltip on right">no amination</button>
                                    </div>
                                    <div class="col-md-3">
                                        <p>Use <code>data-delay=&quot;1000&quot;</code> for 1000ms delay.</p>
                                        <button class="btn btn-success m-1" data-delay="1000" type="button" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Delay</button>
                                    </div>
                                    <div class="col-md-3">
                                        <p>Use <code>data-html=&quot;true&quot;</code> for html .</p>
                                        <button class="btn btn-warning m-1" data-html="true" type="button" data-toggle="tooltip" data-placement="left" title="Tooltip With &lt;em&gt;html&lt;/em&gt;">Show Html</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of col-->
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
    <script src="../../dist-assets/js/scripts/tooltip.script.min.js"></script>
</body>

</html>