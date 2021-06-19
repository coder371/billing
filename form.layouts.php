<?php require_once "./inc/static/head.php"; ?>
    <div class="app-admin-wrap layout-sidebar-large">
        <?php require_once "./inc/tmp/header.php"; ?>
        <?php require_once "./inc/tmp/menu.php"; ?>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Layouts</h1>
                    <ul>
                        <li><a href="href">Forms</a></li>
                        <li>Form Layouts</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <h4>Horizontal Layout</h4>
                        <p>A form control layout using row to create horizontal alignment.</p>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row row-xs">
                                    <div class="col-md-5">
                                        <input class="form-control" type="text" placeholder="Enter your username" />
                                    </div>
                                    <div class="col-md-5 mt-3 mt-md-0">
                                        <input class="form-control" type="password" placeholder="Enter your password" />
                                    </div>
                                    <div class="col-md-2 mt-3 mt-md-0">
                                        <button class="btn btn-primary btn-block">Sign In</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-top mb-5"></div>
                <div class="row">
                    <div class="col-md-6">
                        <h4>Verticle Layout</h4>
                        <p>A form control layout using flex to create verticle alignment.</p>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="d-flex flex-column">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Enter your username" />
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="password" placeholder="Enter your password" />
                                    </div>
                                    <button class="btn btn-primary pd-x-20">Sign In</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-top mb-5"></div>
                <div class="row">
                    <div class="col-md-6">
                        <h4>Left Label Alignment</h4>
                        <p>A form control layout using row with left label alignment.</p>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="inputEmail3">Email</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" id="inputEmail3" type="email" placeholder="Email" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="inputPassword3">Password</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" id="inputPassword3" type="password" placeholder="Password" />
                                        </div>
                                    </div>
                                    <fieldset class="form-group">
                                        <div class="row">
                                            <div class="col-form-label col-sm-2 pt-0">Radios</div>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="gridRadios1" type="radio" name="gridRadios" value="option1" checked="checked" />
                                                    <label class="form-check-label ml-3" for="gridRadios1">
                                                        First radio

                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="gridRadios2" type="radio" name="gridRadios" value="option2" />
                                                    <label class="form-check-label ml-3" for="gridRadios2">
                                                        Second radio

                                                    </label>
                                                </div>
                                                <div class="form-check disabled">
                                                    <input class="form-check-input" id="gridRadios3" type="radio" name="gridRadios" value="option3" disabled="disabled" />
                                                    <label class="form-check-label ml-3" for="gridRadios3">
                                                        Third disabled radio

                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="form-group row">
                                        <div class="col-sm-2">Checkbox</div>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" id="gridCheck1" type="checkbox" />
                                                <label class="form-check-label ml-3" for="gridCheck1">
                                                    Example checkbox

                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button class="btn btn-primary" type="submit">Sign in</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-top mb-5"></div>
                <div class="row">
                    <div class="col-md-6">
                        <h4>Form Inside Dropdown</h4>
                        <p>A form group layout inside dropdown</p>
                        <div class="btn-group">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Download File

                            </button>
                            <div class="dropdown-menu bg-transparent shadow-none p-0 m-0" style="width: 320px">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title mb-1">Please Sign In First</div>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                        <div class="d-flex flex-column">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Enter your username" />
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" type="password" placeholder="Enter your password" />
                                            </div>
                                            <button class="btn btn-primary pd-x-20">Sign In</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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