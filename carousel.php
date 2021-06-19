<?php require_once "./inc/static/head.php"; ?>
    <div class="app-admin-wrap layout-sidebar-large">
    <?php require_once "./inc/tmp/header.php"; ?>
        <?php require_once "./inc/tmp/menu.php"; ?>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Carousel</h1>
                    <ul>
                        <li><a href="">Componets</a></li>
                        <li>Carousel</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <p>
                            use a large block of connected links for our pagination, making links hard to miss and easily scalable&mdash;all while providing large hit areas. Pagination is built with list HTML elements so screen readers can announce the number of available
                            links. Use a wrapping<code>nav</code> element to identify it as a navigation section to screen readers and other assistive technologies.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Basic Carousel With Control</h4>
                                <p>can also add the indicators to the carousel, alongside the controls, too</p>
                                <div class="carousel_wrap">
                                    <div class="carousel slide" id="carouselExampleControls" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active"><img class="d-block w-100" src="../../dist-assets/images/products/iphone-1.jpg" alt="First slide" /></div>
                                            <div class="carousel-item"><img class="d-block w-100" src="../../dist-assets/images/products/headphone-1.jpg" alt="Second slide" /></div>
                                            <div class="carousel-item"><img class="d-block w-100" src="../../dist-assets/images/products/iphone-1.jpg" alt="Third slide" /></div>
                                        </div><a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of col-->
                    <div class="col-md-6 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Carousel With Indicators</h4>
                                <p>Adding in the previous and next controls</p>
                                <div class="carousel_wrap">
                                    <div class="carousel slide" id="carouselExampleIndicators" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active"><img class="d-block w-100" src="../../dist-assets/images/products/headphone-1.jpg" alt="First slide" /></div>
                                            <div class="carousel-item"><img class="d-block w-100" src="../../dist-assets/images/products/iphone-1.jpg" alt="Second slide" /></div>
                                            <div class="carousel-item"><img class="d-block w-100" src="../../dist-assets/images/products/headphone-1.jpg" alt="Third slide" /></div>
                                        </div><a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of col-->
                </div>
                <!-- end of row-->
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-3"> Carousel With Caption</h4>
                                <p>Add captions to your slides easily with the <code>.carousel-caption</code> element within any <code>.carousel-item</code> . They can be easily hidden on smaller viewports, as shown below, with optional display utilities.</p>
                                <div class="carousel_wrap">
                                    <div class="carousel slide" id="carouselExampleCaption" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active"><img class="d-block w-100" src="../../dist-assets/images/products/iphone-1.jpg" alt="First slide" />
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 class="text-white">Add captions to your slides easily </h5>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                                </div>
                                            </div>
                                            <div class="carousel-item"><img class="d-block w-100" src="../../dist-assets/images/products/headphone-1.jpg" alt="Second slide" />
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 class="text-white">Add captions to your slides easily </h5>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                                </div>
                                            </div>
                                            <div class="carousel-item"><img class="d-block w-100" src="../../dist-assets/images/products/iphone-1.jpg" alt="Third slide" />
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 class="text-white">Add captions to your slides easily </h5>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                                </div>
                                            </div>
                                        </div><a class="carousel-control-prev" href="#carouselExampleCaption" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleCaption" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of col-->
                    <div class="col-md-6 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Carousel With CrossFade</h4>
                                <p>Add <code>.carousel-fade</code> to your carousel to animate slides with a fade transition instead of a slide.</p>
                                <div class="carousel_wrap">
                                    <div class="carousel carousel-fade slide" id="carouselExampleCrossfade" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li class="active" data-target="#carouselExampleCrossfade" data-slide-to="0"></li>
                                            <li data-target="#carouselExampleCrossfade" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleCrossfade" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active"><img class="d-block w-100" src="../../dist-assets/images/products/headphone-1.jpg" alt="First slide" />
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 class="text-white">Add captions to your slides easily </h5>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                                </div>
                                            </div>
                                            <div class="carousel-item"><img class="d-block w-100" src="../../dist-assets/images/products/iphone-1.jpg" alt="Second slide" />
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 class="text-white">Add captions to your slides easily </h5>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                                </div>
                                            </div>
                                            <div class="carousel-item"><img class="d-block w-100" src="../../dist-assets/images/products/headphone-1.jpg" alt="Third slide" />
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 class="text-white">Add captions to your slides easily </h5>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                                </div>
                                            </div>
                                        </div><a class="carousel-control-prev" href="#carouselExampleCrossfade" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleCrossfade" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of col-->
                </div>
                <!-- end of row-->
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-3"> Carousel Interval Option</h4>
                                <p><code> interval: 2000</code> The amount of time to delay between automatically cycling an item. If false, carousel will not automatically cycle</p>
                                <div class="carousel_wrap">
                                    <div class="carousel slide" id="carouselExampleInterval" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active"><img class="d-block w-100" src="../../dist-assets/images/products/iphone-1.jpg" alt="First slide" />
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 class="text-white">Add captions to your slides easily </h5>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                                </div>
                                            </div>
                                            <div class="carousel-item"><img class="d-block w-100" src="../../dist-assets/images/products/headphone-1.jpg" alt="Second slide" />
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 class="text-white">Add captions to your slides easily </h5>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                                </div>
                                            </div>
                                            <div class="carousel-item"><img class="d-block w-100" src="../../dist-assets/images/products/iphone-1.jpg" alt="Third slide" />
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 class="text-white">Add captions to your slides easily </h5>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                                </div>
                                            </div>
                                        </div><a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of col-->
                    <div class="col-md-6 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Carousel With Pause Option</h4>
                                <p>If set to <code>&quot;hover&quot;</code>, pauses the cycling of the carousel on <code>mouseenter</code> and resumes the cycling of the carousel on<code>mouseleave</code> . If set to <code>false</code>, hovering over the carousel won&apos;t pause it.</p>
                                <div class="carousel_wrap">
                                    <div class="carousel slide" id="carouselExamplePause" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li class="active" data-target="#carouselExamplePause" data-slide-to="0"></li>
                                            <li data-target="#carouselExamplePause" data-slide-to="1"></li>
                                            <li data-target="#carouselExamplePause" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active"><img class="d-block w-100" src="../../dist-assets/images/products/headphone-1.jpg" alt="First slide" />
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 class="text-white">Add captions to your slides easily </h5>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                                </div>
                                            </div>
                                            <div class="carousel-item"><img class="d-block w-100" src="../../dist-assets/images/products/iphone-1.jpg" alt="Second slide" />
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 class="text-white">Add captions to your slides easily </h5>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                                </div>
                                            </div>
                                            <div class="carousel-item"><img class="d-block w-100" src="../../dist-assets/images/products/headphone-1.jpg" alt="Third slide" />
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 class="text-white">Add captions to your slides easily </h5>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                                </div>
                                            </div>
                                        </div><a class="carousel-control-prev" href="#carouselExamplePause" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExamplePause" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of col-->
                </div>
                <!-- end of row-->
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-3"> Carousel Wrap Option</h4>
                                <p>Whether the carousel should cycle continuously or have hard stops.Default <code>true</code></p>
                                <div class="carousel_wrap">
                                    <div class="carousel slide" id="carouselExampleWrap" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active"><img class="d-block w-100" src="../../dist-assets/images/products/iphone-1.jpg" alt="First slide" /></div>
                                            <div class="carousel-item"><img class="d-block w-100" src="../../dist-assets/images/products/headphone-1.jpg" alt="Second slide" /></div>
                                            <div class="carousel-item"><img class="d-block w-100" src="../../dist-assets/images/products/iphone-1.jpg" alt="Third slide" /></div>
                                        </div><a class="carousel-control-prev" href="#carouselExampleWrap" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleWrap" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of col-->
                    <div class="col-md-6 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Carousel With Keyboard Option</h4>
                                <p>Whether the carousel should react to keyboard events.Default <code>true</code></p>
                                <div class="carousel_wrap">
                                    <div class="carousel slide" id="carouselExampleKeyboard" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li class="active" data-target="#carouselExampleKeyboard" data-slide-to="0"></li>
                                            <li data-target="#carouselExampleKeyboard" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleKeyboard" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active"><img class="d-block w-100" src="../../dist-assets/images/products/headphone-1.jpg" alt="First slide" /></div>
                                            <div class="carousel-item"><img class="d-block w-100" src="../../dist-assets/images/products/iphone-1.jpg" alt="Second slide" /></div>
                                            <div class="carousel-item"><img class="d-block w-100" src="../../dist-assets/images/products/headphone-1.jpg" alt="Third slide" /></div>
                                        </div><a class="carousel-control-prev" href="#carouselExampleKeyboard" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleKeyboard" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of col-->
                </div>
                <!-- end of row-->
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
</body>

</html>