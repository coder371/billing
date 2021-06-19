<?php require_once "./inc/static/head.php"; ?>
    <div class="app-admin-wrap layout-sidebar-large">
    <?php require_once "./inc/tmp/header.php"; ?>
        <?php require_once "./inc/tmp/menu.php"; ?>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Weather App</h1>
                    <ul>
                        <li><a href="href">Widgets</a></li>
                        <li>Weather App</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <section class="weather-card">
                    <!--  begin::row-1 -->
                    <div class="row">
                        <div class="col-lg-12 col-xl-12">
                            <div class="card o-hidden">
                                <div class="weather-card-1">
                                    <div class="ul-weather-card__img-overlay">
                                        <div class="ul-weather-card__weather-time">
                                            <div class="text-white"><i class="i-Cloud-Sun display-4"></i><br /><span class="display-5">30 <sup>o</sup></span><span>C /9<sup>o</sup> C</span>
                                                <p>SATURDAY 01.08.2019</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ul-weather-card__weather-info">
                                        <div class="row text-center">
                                            <div class="col-6 col-md-2">
                                                <div>SAT</div>
                                                <div><i class="i-Cloud-Weather"></i></div>
                                                <div>12 <sup>o</sup>C</div>
                                            </div>
                                            <div class="col-6 col-md-2">
                                                <div>SUN</div>
                                                <div><i class="i-Cloud-Settings"></i></div>
                                                <div>23 <sup>o</sup>C</div>
                                            </div>
                                            <div class="col-6 col-md-2">
                                                <div>MON</div>
                                                <div><i class="i-Cloud-Weather"></i></div>
                                                <div>17 <sup>o</sup>C</div>
                                            </div>
                                            <div class="col-6 col-md-2">
                                                <div>TUE</div>
                                                <div><i class="i-Clouds"></i></div>
                                                <div>23 <sup>o</sup>C</div>
                                            </div>
                                            <div class="col-6 col-md-2">
                                                <div>WED</div>
                                                <div><i class="i-Clouds-Weather"></i></div>
                                                <div>27 <sup>o</sup>C</div>
                                            </div>
                                            <div class="col-6 col-md-2">
                                                <div>THU</div>
                                                <div><i class="i-Cloud-Sun"></i></div>
                                                <div>38 <sup>o</sup>C</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  end::row-1 -->
                    <!--  begin::row-2-->
                    <div class="row mt-4">
                        <div class="col-lg-6 col-xl-6 mb-4">
                            <div class="card bg-primary">
                                <div class="card-body">
                                    <div class="row text-center">
                                        <div class="col-12 col-md-12">
                                            <div class="text-white">
                                                <h4 class="card-title text-white">Lester, London</h4>
                                                <h5 class="font-light text-white">MONDAY May 11, 2017</h5>
                                            </div>
                                            <div class="mt-4"><span class="text-white"><i class="i-Cloud-Sun display-4"></i></span>
                                                <div class="d-inline-block ml-3">
                                                    <h2 class="text-white">29° C</h2>
                                                    <h4 class="text-white">Day Rain</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ul-weather-card__weather-info text-white mt-4">
                                        <div class="row text-center">
                                            <div class="col-6 col-md-2">
                                                <div>SAT</div>
                                                <div><i class="i-Cloud-Weather"></i></div>
                                                <div>12 <sup>o</sup>C</div>
                                            </div>
                                            <div class="col-6 col-md-2">
                                                <div>SUN</div>
                                                <div><i class="i-Cloud-Settings"></i></div>
                                                <div>23 <sup>o</sup>C</div>
                                            </div>
                                            <div class="col-6 col-md-2">
                                                <div>MON</div>
                                                <div><i class="i-Cloud-Weather"></i></div>
                                                <div>17 <sup>o</sup>C</div>
                                            </div>
                                            <div class="col-6 col-md-2">
                                                <div>TUE</div>
                                                <div><i class="i-Clouds"></i></div>
                                                <div>23 <sup>o</sup>C</div>
                                            </div>
                                            <div class="col-6 col-md-2">
                                                <div>WED</div>
                                                <div><i class="i-Clouds-Weather"></i></div>
                                                <div>27 <sup>o</sup>C</div>
                                            </div>
                                            <div class="col-6 col-md-2">
                                                <div>THU</div>
                                                <div><i class="i-Cloud-Sun"></i></div>
                                                <div>38 <sup>o</sup>C</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6 mb-4">
                            <div class="card">
                                <div class="card-header bg-success p-3">
                                    <div class="ul-weather-card__header"><i class="i-Map-Marker ul-weather-card__font-md text-white mr-2"></i><span class="t-font-bolder">California</span></div>
                                </div>
                                <div class="card-body">
                                    <div class="ul-weather-card__calendar">
                                        <div class="ul-weather-card__calendar-time">
                                            <h5 class="text-mute">Fri 20/5</h5>
                                            <h2>27<sup>o</sup> C</h2>
                                        </div>
                                        <div class="text-right"><i class="i-Clouds display-4 text-mute t-font-boldest"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-body">
                                    <div class="ul-weather-card__calendar-2">
                                        <div class="text-left"><i class="i-Cloud-Sun display-4 text-mute t-font-boldest"></i><br /><i class="i-Map-Marker t-font-bolder mt-1 text-mute"></i><span class="t-font-bolder text-mute">California</span></div>
                                        <div class="ul-weather-card__calendar-time">
                                            <h5 class="text-mute">Fri 20/5</h5>
                                            <h2>27<sup>o</sup> C</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  end::row-2-->
                    <!--  begin::weather-3 -->
                    <div class="row mt-4">
                        <div class="col-md-12 mb-4">
                            <div class="card ul-weather-card__card-group o-hidden">
                                <div class="row">
                                    <div class="col-6 ul-weather-card__both-group bg-dark text-center">
                                        <div class="d-inline-block ml-3">
                                            <h2 class="text-white">29° C</h2>
                                            <h4 class="text-white">California, U.S</h4>
                                        </div>
                                    </div>
                                    <div class="col-6 ul-weather-card__both-group">
                                        <div class="ul-weather-card__icon-center text-center"><i class="i-Cloud-Sun display-4 text-mute t-font-boldest"></i></div>
                                        <div class="ul-weather-card__info"><span class="t-font-bold">40 kmph</span><span class="t-font-bold mr-3">60%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  end::weather-3 -->
                    <!--  begin::weather-4 -->
                    <div class="row mb-4 mt-4">
                        <div class="col-lg-6 col-xl-6 mb-4">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <div class="card bg-danger p-5">
                                        <div class="d-inline-block ml-3">
                                            <h2 class="text-white">29° C</h2>
                                            <h4 class="text-white">California, U.S</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 text-center">
                                    <div class="card bg-danger p-5">
                                        <div class="ul-weather-card__icon-center text-center"><i class="i-Cloud-Sun display-4 text-white t-font-boldest"></i></div>
                                        <h5 class="t-font-bold text-white mt-2">12.11.2019</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="card o-hidden">
                                <div class="ul-weather-card__bg-img"><img class="img-fluid" src="../../dist-assets/images/products/weather.jpg" alt="alt" /></div>
                                <div class="ul-weather-card__img-overlay-2">
                                    <div class="d-flex no-block align-items-center">
                                        <h5 class="t-font-bold text-white">California, U.S</h5>
                                        <div class="ml-auto"><span><i class="i-Map-Marker mr-2 ul-weather-card__font-md"></i></span></div>
                                    </div>
                                    <div class="d-inline-block"><span class="display-5 font-25">30 <sup>o</sup></span><span class="font-25">C /9<sup>o</sup> C</span></div>
                                    <div class="mt-3">
                                        <h5 class="text-white">WEDNESDAY</h5>
                                        <h6 class="text-white">1.8.2018</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  end::weather-4 -->
                    <!--  begin::weather-5 -->
                    <div class="row mb-4 mt-4">
                        <div class="col-lg-6 col-xl-6 text-center">
                            <div class="card o-hidden mb-4">
                                <div class="card-header indigo-400">
                                    <div class="d-inline-block"><i class="i-Cloud-Sun display-4 text-white t-font-boldest mr-3"></i><span class="display-5 font-25 text-white">30<sup>o</sup></span><span class="font-25 text-white">C /9<sup>o</sup> C</span></div>
                                </div>
                                <div class="card-title ul-weather-card__footer-color mt-2 bg-white">
                                    22 April 2019

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="card o-hidden">
                                <div class="card-header pink-500 text-center">
                                    <div class="d-inline-block"><span class="display-5 font-25 text-white">3<sup>o</sup></span><span class="font-25 text-white">C /9<sup>o</sup> C</span><i class="i-Clouds display-4 text-white t-font-boldest ml-3"></i></div>
                                </div>
                                <div class="card-title ul-weather-card__footer-color-2 bg-white">
                                    <div class="ul-weather-card__info mt-2"><span class="t-font-bold ml-2 t-font-boldest">40 kmph</span><span class="t-font-bold mr-2 t-font-boldest">60%</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  end::weather-5 -->
                    <!--  begin::weather-6 -->
                    <div class="row mb-4 mt-4">
                        <div class="col-lg-6 col-xl-6 text-center">
                            <div class="card o-hidden mb-4">
                                <div class="card-header teal-300 p-5">
                                    <div class="ul-weather-card__grid-style"><i class="i-Cloud-Sun display-4 t-font-boldest text-white mr-3"></i><span class="display-5 font-25 text-white">30<sup>o</sup></span><span class="mr-3 text-white ul-weather-card__weather-s-title">Sunny</span></div>
                                </div>
                                <div class="card-footer ul-weather-card__footer-color-3 bg-white">
                                    <h4 class="t-font-bolder">California, U.S</h4>
                                    <h5>Today, 07:30AM</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="card">
                                <div class="card-body text-center p-4"><i class="i-Clouds display-4 t-font-boldest text-mute mr-3"></i></div>
                                <div class="card-footer bg-dark">
                                    <div class="ul-weather-card__footer">
                                        <div class="d-flex no-block align-items-center">
                                            <div class="text-center">
                                                <h3 class="text-white"><i class="text-success i-Arrow-Up t-font-boldest"></i> 24° C</h3>
                                                <h5 class="text-white">High</h5>
                                            </div>
                                            <div class="ml-auto">
                                                <div class="text-center">
                                                    <h3 class="text-white"><i class="text-danger i-Arrow-Down t-font-boldest"></i> 7° C</h3>
                                                    <h5 class="text-white">Low</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  end::weather-6 -->
                </section>
                <!--  content goes here -->
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