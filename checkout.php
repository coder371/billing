<?php require_once "./inc/static/head.php"; ?>
    <div class="app-admin-wrap layout-sidebar-large">
    <?php require_once "./inc/tmp/header.php"; ?>
        <?php require_once "./inc/tmp/menu.php"; ?>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Checkout</h1>
                    <ul>
                        <li><a href="href">Apps</a></li>
                        <li>Checkout</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <!--  content goes here -->
                <section class="chekout-page">
                    <div class="row">
                        <div class="col-lg-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">Product Cart</div><span class="text-muted">Gull Modern Cart</span>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col">Total</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td scope="row"><img class="profile-picture avatar-sm mb-2 img-fluid" src="../../dist-assets/images/faces/1.jpg" alt="alt" />
                                                        <div class="ul-product-cart__detail d-inline-block align-middle"><a href="href">
                                                                <h6 class="heading">Nike Air Jordan</h6>
                                                            </a><span class="text-mute">size-14 mode:664</span></div>
                                                    </td>
                                                    <td>$2,000</td>
                                                    <td>4</td>
                                                    <td>$8,000</td>
                                                    <td><a href="href"><i class="i-Close-Window text-19 text-danger font-weight-700"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td scope="row"><img class="profile-picture avatar-sm mb-2 img-fluid" src="../../dist-assets/images/faces/1.jpg" alt="alt" />
                                                        <div class="ul-product-cart__detail d-inline-block align-middle"><a href="href">
                                                                <h6 class="heading">Nike Air Jordan</h6>
                                                            </a><span class="text-mute">size-14 mode:664</span></div>
                                                    </td>
                                                    <td>$2,000</td>
                                                    <td>4</td>
                                                    <td>$8,000</td>
                                                    <td><a href="href"><i class="i-Close-Window text-19 text-danger font-weight-700"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td scope="row"><img class="profile-picture avatar-sm mb-2 img-fluid" src="../../dist-assets/images/faces/1.jpg" alt="alt" />
                                                        <div class="ul-product-cart__detail d-inline-block align-middle"><a href="href">
                                                                <h6 class="heading">Nike Air Jordan</h6>
                                                            </a><span class="text-mute">size-14 mode:664</span></div>
                                                    </td>
                                                    <td>$2,000</td>
                                                    <td>4</td>
                                                    <td>$8,000</td>
                                                    <td><a href="href"><i class="i-Close-Window text-19 text-danger font-weight-700"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mt-5">
                                            <div class="ul-product-cart__invoice">
                                                <div class="card-title">
                                                    <h4 class="heading text-primary">Total Payment</h4>
                                                </div>
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <th class="text-16" scope="row">Subtotal</th>
                                                            <td class="text-16 text-success font-weight-700">
                                                                $5,000

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-16" scope="row">Shipping</th>
                                                            <td>
                                                                <ul class="list-unstyled mb-0">
                                                                    <li>
                                                                        <div>
                                                                            <label class="radio radio-primary" checked="checked">
                                                                                <input type="radio" name="radio" value="0" /><span>Shipping Charge : $15.00</span><span class="checkmark"></span>
                                                                            </label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div>
                                                                            <label class="radio radio-primary">
                                                                                <input type="radio" name="radio" value="0" /><span>Shipping Charge : $15.00</span><span class="checkmark"></span>
                                                                            </label>
                                                                        </div>
                                                                    </li>
                                                                    <li><a class="text-dark font-weight-bold" href="href">Change Address</a></li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-primary text-16" scope="row">
                                                                Total:

                                                            </th>
                                                            <td class="font-weight-700 text-16">$5,015</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <form action="action">
                                        <div class="card-body">
                                            <div class="card-title">Delivery Address</div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="ul-form__label" for="inputtext11">First Name:</label>
                                                    <input class="form-control" id="inputtext11" type="text" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="ul-form__label" for="inputEmail12">Last Name:</label>
                                                    <input class="form-control" id="inputEmail12" type="text" />
                                                </div>
                                            </div>
                                            <div class="custom-separator"></div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="ul-form__label" for="inputtext14">Delivery Address:</label>
                                                    <input class="form-control" id="inputtext14" type="text" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="ul-form__label" for="inputEmail15">Address:</label>
                                                    <div class="input-right-icon">
                                                        <input class="form-control" id="inputEmail15" type="text" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-separator"></div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label class="ul-form__label" for="inputtext14">City:</label>
                                                    <input class="form-control" id="inputtext14" type="text" />
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="ul-form__label" for="inputEmail15">State:</label>
                                                    <select class="form-control" id="sel1">
                                                        <option>Select</option>
                                                        <option>California</option>
                                                        <option>Ukraine</option>
                                                        <option>UK</option>
                                                        <option>Finland</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="ul-form__label" for="inputEmail16">Country:</label>
                                                    <select class="form-control" id="sel1">
                                                        <option>Select</option>
                                                        <option>USA</option>
                                                        <option>UK</option>
                                                        <option>Finland</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card mt-4">
                                <div class="card-body">
                                    <div class="card-title">Billing Details</div>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" id="home-basic-tab" data-toggle="tab" href="#homeBasic" role="tab" aria-controls="homeBasic" aria-selected="true"><i class="i-Credit-Card-2 text-danger text-16 align-middle mr-1"></i><span>credit card</span></a></li>
                                        <li class="nav-item"><a class="nav-link" id="profile-basic-tab" data-toggle="tab" href="#profileBasic" role="tab" aria-controls="profileBasic" aria-selected="false"><i class="i-Paypal text-primary text-16 align-middle mr-1"></i><span>Paypal</span></a></li>
                                        <li class="nav-item"><a class="nav-link" id="contact-basic-tab" data-toggle="tab" href="#contactBasic" role="tab" aria-controls="contactBasic" aria-selected="false"><i class="i-Bitcoin text-warning text-16 align-middle mr-1"></i><span>Bitcoin</span></a></li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="homeBasic" role="tabpanel" aria-labelledby="home-basic-tab">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="ul-form__label" for="inputtext11">Card Number:</label>
                                                    <input class="form-control" id="inputtext11" type="text" value="card number" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="ul-form__label" for="inputEmail12">Full Name:</label>
                                                    <input class="form-control" id="inputEmail12" type="text" value="full name" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="ul-form__label" for="inputtext11">Ex Date:</label>
                                                    <input class="form-control" id="inputtext11" type="text" value="dd/mm/yy" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="ul-form__label" for="inputEmail12">CCV:</label>
                                                    <input class="form-control" id="inputEmail12" type="text" value="CVC" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profileBasic" role="tabpanel" aria-labelledby="profile-basic-tab">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="ul-form__label" for="inputtext11">Card Number:</label>
                                                    <input class="form-control" id="inputtext11" type="text" value="card number" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="ul-form__label" for="inputEmail12">Full Name:</label>
                                                    <input class="form-control" id="inputEmail12" type="text" value="full name" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="ul-form__label" for="inputtext11">Ex Date:</label>
                                                    <input class="form-control" id="inputtext11" type="text" value="dd/mm/yy" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="ul-form__label" for="inputEmail12">CCV:</label>
                                                    <input class="form-control" id="inputEmail12" type="text" value="CVC" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="contactBasic" role="tabpanel" aria-labelledby="contact-basic-tab">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="ul-form__label" for="inputtext11">Card Number:</label>
                                                    <input class="form-control" id="inputtext11" type="text" value="card number" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="ul-form__label" for="inputEmail12">Full Name:</label>
                                                    <input class="form-control" id="inputEmail12" type="text" value="full name" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="ul-form__label" for="inputtext11">Ex Date:</label>
                                                    <input class="form-control" id="inputtext11" type="text" value="dd/mm/yy" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="ul-form__label" for="inputEmail12">CCV:</label>
                                                    <input class="form-control" id="inputEmail12" type="text" value="CVC" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row text-right">
                                        <div class="col-lg-12">
                                            <button class="btn btn-success m-1" type="button">Pay Now</button>
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