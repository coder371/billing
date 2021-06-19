<?php require_once "./inc/static/head.php"; ?>
    <div class="app-admin-wrap layout-sidebar-large">
    <?php require_once "./inc/tmp/header.php"; ?>
        <?php require_once "./inc/tmp/menu.php"; ?>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Product Details</h1>
                    <ul>
                        <li><a href="href">Apps</a></li>
                        <li>Ecommerce</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <!--  content goes here -->
                <section class="ul-product-detail">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="ul-product-detail__image"><img src="../../dist-assets/images/mac_book.jpg" alt="alt" /></div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="ul-product-detail__brand-name mb-4">
                                                <h5 class="heading">MAC Book Pro</h5><span class="text-mute">Modern model 2019</span>
                                            </div>
                                            <div class="ul-product-detail__price-and-rating d-flex align-items-baseline">
                                                <h3 class="font-weight-700 text-primary mb-0 mr-2">$2,300</h3><span class="text-mute font-weight-800 mr-2">
                                                    <del>$1,150</del></span><small class="text-success font-weight-700">50% off</small>
                                            </div>
                                            <!--
                        <div class="ul-product-detail__rating">
                                                                        <ul>
                                                                            <li></li>
                                                                        </ul>
                                                                    </div> 
                        -->
                                            <div class="ul-product-detail__features mt-3">
                                                <h6 class="font-weight-700">Features:</h6>
                                                <ul class="m-0 p-0">
                                                    <li><i class="i-Right1 text-primary text-15 align-middle font-weight-700"></i><span class="align-middle">This Refurbished product is tested to work and look like new with minimal to no signs of wear & tear</span></li>
                                                    <li><i class="i-Right1 text-primary text-15 align-middle font-weight-700"></i><span class="align-middle">2.6GHz Intel Core i5 4th Gen processor</span></li>
                                                    <li><i class="i-Right1 text-primary text-15 align-middle font-weight-700"></i><span class="align-middle">8GB DDR3 RAM</span></li>
                                                    <li><i class="i-Right1 text-primary text-15 align-middle font-weight-700"></i><span class="align-middle">13.3-inch screen, Intel Iris 5100 1.5GB Graphics</span></li>
                                                </ul>
                                            </div>
                                            <div class="ul-product-detail__quantity d-flex align-items-center mt-3">
                                                <input class="form-control col-2" type="number" />
                                                <button class="btn btn-primary m-1" type="button"><i class="i-Full-Cart text-15"></i> </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <Add>To Cart</Add>
                <section class="ul-product-detail__box">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 mt-4 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <div class="ul-product-detail__border-box">
                                        <div class="ul-product-detail--icon mb-2"><i class="i-Car text-success text-25 font-weight-500"></i></div>
                                        <h5 class="heading">Quick Delivery</h5>
                                        <p class="text-muted text-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 mt-4 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <div class="ul-product-detail__border-box">
                                        <div class="ul-product-detail--icon mb-2"><i class="i-Reload text-danger text-25 font-weight-500"></i></div>
                                        <h5 class="heading">Back In 30 Days</h5>
                                        <p class="text-muted text-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 mt-4 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <div class="ul-product-detail__border-box">
                                        <div class="ul-product-detail--icon mb-2"><i class="i-Headset text-info text-25 font-weight-500"></i></div>
                                        <h5 class="heading">Support 24/7</h5>
                                        <p class="text-muted text-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 mt-4 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <div class="ul-product-detail__border-box">
                                        <div class="ul-product-detail--icon mb-2"><i class="i-Money-Bag text-warning text-25 font-weight-500"></i></div>
                                        <h5 class="heading">High Secure Payment</h5>
                                        <p class="text-muted text-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="ul-product-detail__tab">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mt-4">
                            <div class="card mt-2 mb-4">
                                <div class="card-body">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist"><a class="nav-item nav-link active show" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Description</a><a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Reviews</a><a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Customize Tab</a><a class="nav-item nav-link" id="nav-brand-tab" data-toggle="tab" href="#nav-brand" role="tab" aria-controls="nav-contact" aria-selected="false">About Brand</a></div>
                                    </nav>
                                    <div class="tab-content ul-tab__content p-5" id="nav-tabContent">
                                        <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-12"><img src="../../dist-assets/images/mac_book.jpg" alt="alt" /></div>
                                                <div class="col-lg-8 col-md-8 col-sm-12">
                                                    <h5 class="text-uppercase font-weight-700 text-muted mt-4 mb-2">Lorem Ipsum is simply dummy text of the printing</h5>
                                                    <p>
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.

                                                    </p>
                                                    <div class="ul-product-detail__nested-card">
                                                        <div class="row text-center">
                                                            <div class="col-lg-4 col-sm-12 mb-2">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="ul-product-detail__border-box">
                                                                            <div class="ul-product-detail--icon mb-2"><i class="i-Car text-success text-25 font-weight-500"></i></div>
                                                                            <h5 class="heading">Quick Delivery</h5>
                                                                            <p class="text-muted text-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-sm-12 mb-2">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="ul-product-detail__border-box">
                                                                            <div class="ul-product-detail--icon mb-2"><i class="i-Car text-primary text-25 font-weight-500"></i></div>
                                                                            <h5 class="heading">Quick Delivery</h5>
                                                                            <p class="text-muted text-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-sm-12 mb-2">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="ul-product-detail__border-box">
                                                                            <div class="ul-product-detail--icon mb-2"><i class="i-Car text-danger text-25 font-weight-500"></i></div>
                                                                            <h5 class="heading">Quick Delivery</h5>
                                                                            <p class="text-muted text-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="ul-product-detail__avg-rate text-center">
                                                        <h3 class="heading text-success">4.9</h3><span class="text-muted font-weight-600">Overall Rating</span>
                                                    </div>
                                                    <div class="ul-product-detail__comment-list mt-3">
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item"><a class="ul-product-detail__reply float-right" href="href"><i class="i-Left"></i><span>Reply</span></a>
                                                                <h5 class="font-weight-800">Timothy Clarkson</h5>
                                                                <p>Very comfortable key,and nice product.</p><span class="text-warning">**** </span>
                                                            </li>
                                                            <li class="list-group-item"><a class="ul-product-detail__reply float-right" href="href"><i class="i-Left"></i><span>Reply</span></a>
                                                                <h5 class="font-weight-800">Jaret Leto</h5>
                                                                <p>Very comfortable key,and nice product.</p><span class="text-warning">**** </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                            <div class="ul-product-detail__nested-card mt-2">
                                                <div class="row text-center">
                                                    <div class="col-lg-4 col-sm-12 mb-2">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="ul-product-detail__border-box">
                                                                    <div class="ul-product-detail--icon mb-2"><i class="i-Car text-success text-25 font-weight-500"></i></div>
                                                                    <h5 class="heading">Quick Delivery</h5>
                                                                    <p class="text-muted text-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 mb-2">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="ul-product-detail__border-box">
                                                                    <div class="ul-product-detail--icon mb-2"><i class="i-Car text-primary text-25 font-weight-500"></i></div>
                                                                    <h5 class="heading">Quick Delivery</h5>
                                                                    <p class="text-muted text-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 mb-2">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="ul-product-detail__border-box">
                                                                    <div class="ul-product-detail--icon mb-2"><i class="i-Car text-danger text-25 font-weight-500"></i></div>
                                                                    <h5 class="heading">Quick Delivery</h5>
                                                                    <p class="text-muted text-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-brand" role="tabpanel" aria-labelledby="nav-contact-tab">
                                            <div class="row">
                                                <div class="col-lg-2"><img src="../../dist-assets/images/mac_book.jpg" alt="alt" /></div>
                                                <div class="col-lg-6"><span class="badge badge-pill badge-danger p-2 m-1">Apple</span>
                                                    <h6 class="heading mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h6>
                                                    <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="ul-product-detail__features mt-3">
                                                        <ul class="m-0 p-0">
                                                            <li><i class="i-Right1 text-primary text-15 align-middle font-weight-700"></i><span class="align-middle">This Refurbished product is tested to work and look like new with minimal to no signs of wear & tear</span></li>
                                                            <li><i class="i-Right1 text-primary text-15 align-middle font-weight-700"></i><span class="align-middle">2.6GHz Intel Core i5 4th Gen processor</span></li>
                                                            <li><i class="i-Right1 text-primary text-15 align-middle font-weight-700"></i><span class="align-middle">8GB DDR3 RAM</span></li>
                                                            <li><i class="i-Right1 text-primary text-15 align-middle font-weight-700"></i><span class="align-middle">13.3-inch screen, Intel Iris 5100 1.5GB Graphics</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!-- end of main-content -->
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