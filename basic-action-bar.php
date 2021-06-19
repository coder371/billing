<?php require_once "./inc/static/head.php"; ?>
    <div class="app-admin-wrap layout-sidebar-large">
        <?php require_once "./inc/tmp/header.php"; ?>
        <?php require_once "./inc/tmp/menu.php"; ?>        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Basic Action Bar</h1>
                    <ul>
                        <li><a href="">Forms</a></li>
                        <li>Basic action bar</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <!-- begin::basic action bar-->
                <section class="basic-action-bar">
                    <div>
                        <!-- begin::main-row-->
                        <div class="row">
                            <!-- start default action bar-->
                            <div class="col-lg-6 mb-3">
                                <div class="card">
                                    <div class="card-header bg-transparent">
                                        <h3 class="card-title"> Default Action Bar</h3>
                                    </div>
                                    <!-- begin::form-->
                                    <form action="">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label class="ul-form__label" for="inputEmail4">Full Name:</label>
                                                    <input class="form-control" id="inputtext4" type="text" placeholder="Enter full name" /><small class="ul-form__text form-text" id="passwordHelpBlock">Please enter your full name</small>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="ul-form__label" for="inputEmail4">Email Address:</label>
                                                    <input class="form-control" id="inputtext4" type="email" placeholder="Enter full name" /><small class="ul-form__text form-text" id="passwordHelpBlock">We&apos;ll never share your email with anyone else</small>
                                                </div>
                                            </div>
                                            <div class="custom-separator"></div>
                                            <div class="card-title">Communication:</div>
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" checked="" /><span>Email</span><span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" /><span>SMS</span><span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" /><span>Phone</span><span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="card-footer bg-transparent">
                                            <div class="mc-footer">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <button class="btn btn-primary m-1" type="button">Submit</button>
                                                        <button class="btn btn-outline-secondary m-1" type="button">Cancel</button>
                                                        <button class="btn btn-danger m-1 footer-delete-right" type="button">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- end::form-->
                                </div>
                            </div>
                            <!-- end default action bar-->
                            <!-- start no layout bar-->
                            <div class="col-lg-6 mb-3">
                                <div class="card">
                                    <div class="card-header bg-transparent">
                                        <h3 class="card-title"> No Layout</h3>
                                    </div>
                                    <!-- begin::form-->
                                    <form action="">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label class="ul-form__label" for="inputEmail4">Full Name:</label>
                                                    <input class="form-control" id="inputtext4" type="text" placeholder="Enter full name" /><small class="ul-form__text form-text" id="passwordHelpBlock">Please enter your full name</small>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="ul-form__label" for="inputEmail4">Email Address:</label>
                                                    <input class="form-control" id="inputtext4" type="email" placeholder="Enter full name" /><small class="ul-form__text form-text" id="passwordHelpBlock">We&apos;ll never share your email with anyone else</small>
                                                </div>
                                            </div>
                                            <!-- <div class="custom-separator"></div>-->
                                            <div class="card-title">Communication:</div>
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" checked="" /><span>Email</span><span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" /><span>SMS</span><span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" /><span>Phone</span><span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="card-footer bg-transparent">
                                            <div class="mc-footer">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <button class="btn btn-primary m-1" type="button">Submit</button>
                                                        <button class="btn btn-outline-secondary m-1" type="button">Cancel</button>
                                                        <button class="btn btn-danger m-1 footer-delete-right" type="button">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- end::form-->
                                </div>
                            </div>
                            <!-- end no layout bar-->
                            <!-- start Right Action Bar-->
                            <div class="col-lg-6 mb-3">
                                <div class="card">
                                    <div class="card-header bg-transparent">
                                        <h3 class="card-title"> Right Action Bar</h3>
                                    </div>
                                    <!-- begin::form-->
                                    <form action="">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label class="ul-form__label" for="inputEmail4">Full Name:</label>
                                                    <input class="form-control" id="inputtext4" type="text" placeholder="Enter full name" /><small class="ul-form__text form-text" id="passwordHelpBlock">Please enter your full name</small>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="ul-form__label" for="inputEmail4">Email Address:</label>
                                                    <input class="form-control" id="inputtext4" type="email" placeholder="Enter full name" /><small class="ul-form__text form-text" id="passwordHelpBlock">We&apos;ll never share your email with anyone else</small>
                                                </div>
                                            </div>
                                            <div class="custom-separator"></div>
                                            <div class="card-title">Communication:</div>
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" checked="" /><span>Email</span><span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" /><span>SMS</span><span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" /><span>Phone</span><span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="card-footer bg-transparent">
                                            <div class="mc-footer">
                                                <div class="row">
                                                    <div class="col-lg-12 text-right">
                                                        <button class="btn btn-primary m-1" type="button">Submit</button>
                                                        <button class="btn btn-outline-secondary m-1" type="button">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- end::form-->
                                </div>
                            </div>
                            <!-- end Right Action Bar-->
                            <!-- start Solid Bar-->
                            <div class="col-lg-6 mb-3">
                                <div class="card">
                                    <div class="card-header bg-transparent">
                                        <h3 class="card-title"> Solid Bar</h3>
                                    </div>
                                    <!-- begin::form-->
                                    <form action="">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label class="ul-form__label" for="inputEmail4">Full Name:</label>
                                                    <input class="form-control" id="inputtext4" type="text" placeholder="Enter full name" /><small class="ul-form__text form-text" id="passwordHelpBlock">Please enter your full name</small>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="ul-form__label" for="inputEmail4">Email Address:</label>
                                                    <input class="form-control" id="inputtext4" type="email" placeholder="Enter full name" /><small class="ul-form__text form-text" id="passwordHelpBlock">We&apos;ll never share your email with anyone else</small>
                                                </div>
                                            </div>
                                            <div class="custom-separator"></div>
                                            <div class="card-title">Communication:</div>
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" checked="" /><span>Email</span><span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" /><span>SMS</span><span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" /><span>Phone</span><span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="card-footer">
                                            <div class="mc-footer">
                                                <div class="row">
                                                    <div class="col-lg-12 text-right">
                                                        <button class="btn btn-primary m-1" type="button">Submit</button>
                                                        <button class="btn btn-outline-secondary m-1" type="button">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- end::form-->
                                </div>
                            </div>
                            <!-- end Solid Bar-->
                            <!-- start Multiple Buttons-->
                            <div class="col-lg-6 mb-3">
                                <div class="card">
                                    <div class="card-header bg-transparent">
                                        <h3 class="card-title"> Multiple Buttons</h3>
                                    </div>
                                    <!-- begin::form-->
                                    <form action="">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label class="ul-form__label" for="inputEmail4">Full Name:</label>
                                                    <input class="form-control" id="inputtext4" type="text" placeholder="Enter full name" /><small class="ul-form__text form-text" id="passwordHelpBlock">Please enter your full name</small>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="ul-form__label" for="inputEmail4">Email Address:</label>
                                                    <input class="form-control" id="inputtext4" type="email" placeholder="Enter full name" /><small class="ul-form__text form-text" id="passwordHelpBlock">We&apos;ll never share your email with anyone else</small>
                                                </div>
                                            </div>
                                            <div class="custom-separator"></div>
                                            <div class="card-title">Communication:</div>
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" checked="" /><span>Email</span><span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" /><span>SMS</span><span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" /><span>Phone</span><span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="card-footer bg-transparent">
                                            <div class="mc-footer">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <button class="btn btn-primary m-1" type="button">Submit</button>
                                                        <button class="btn btn-outline-secondary m-1" type="button">Cancel</button>
                                                        <button class="btn btn-danger m-1 footer-delete-right" type="button">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- end::form-->
                                </div>
                            </div>
                            <!-- end Multiple Buttons-->
                            <!-- start Top & Bottom Actions Bars-->
                            <div class="col-lg-6 mb-3">
                                <div class="card">
                                    <div class="card-header bg-transparent">
                                        <h3 class="card-title"> Top &amp; Bottom Actions Bars</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="top-action-bar">
                                            <div class="row">
                                                <div class="col-lg-12 text-right">
                                                    <button class="btn btn-primary m-1" type="button">Submit</button>
                                                    <button class="btn btn-outline-secondary m-1" type="button">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- begin::form-->
                                    <form action="">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label class="ul-form__label" for="inputEmail4">Full Name:</label>
                                                    <input class="form-control" id="inputtext4" type="text" placeholder="Enter full name" /><small class="ul-form__text form-text" id="passwordHelpBlock">Please enter your full name</small>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="ul-form__label" for="inputEmail4">Email Address:</label>
                                                    <input class="form-control" id="inputtext4" type="email" placeholder="Enter full name" /><small class="ul-form__text form-text" id="passwordHelpBlock">We&apos;ll never share your email with anyone else</small>
                                                </div>
                                            </div>
                                            <div class="custom-separator"></div>
                                            <div class="card-title">Communication:</div>
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" checked="" /><span>Email</span><span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" /><span>SMS</span><span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" /><span>Phone</span><span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="card-footer">
                                            <div class="mc-footer">
                                                <div class="row">
                                                    <div class="col-lg-12 text-right">
                                                        <button class="btn btn-primary m-1" type="button">Submit</button>
                                                        <button class="btn btn-outline-secondary m-1" type="button">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- end::form-->
                                </div>
                            </div>
                            <!-- end Top & Bottom Actions Bars-->
                            <!-- start Action Button & Link-->
                            <div class="col-lg-6 mb-3">
                                <div class="card">
                                    <div class="card-header bg-transparent">
                                        <h3 class="card-title"> Default Action Bar</h3>
                                    </div>
                                    <!-- begin::form-->
                                    <form action="">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label class="ul-form__label" for="inputEmail4">Full Name:</label>
                                                    <input class="form-control" id="inputtext4" type="text" placeholder="Enter full name" /><small class="ul-form__text form-text" id="passwordHelpBlock">Please enter your full name</small>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="ul-form__label" for="inputEmail4">Email Address:</label>
                                                    <input class="form-control" id="inputtext4" type="email" placeholder="Enter full name" /><small class="ul-form__text form-text" id="passwordHelpBlock">We&apos;ll never share your email with anyone else</small>
                                                </div>
                                            </div>
                                            <div class="custom-separator"></div>
                                            <div class="card-title">Communication:</div>
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" checked="" /><span>Email</span><span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" /><span>SMS</span><span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" /><span>Phone</span><span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="card-footer bg-transparent">
                                            <div class="mc-footer">
                                                <div class="row">
                                                    <div class="col-lg-12 text-right">
                                                        <button class="btn btn-primary m-1" type="button">Submit</button><span>or</span><a href="">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- end::form-->
                                </div>
                            </div>
                            <!-- end Action Button & Link-->
                            <!-- start Hirozontal Form Layout-->
                            <div class="col-lg-6 mb-3">
                                <!-- begin::form 2-->
                                <form action="">
                                    <!-- start card  Horizontal Form Layout-->
                                    <div class="card ul-card__margin-25">
                                        <div class="card-header bg-transparent">
                                            <h3 class="card-title"> Horizontal Form Layout</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label class="action-bar-horizontal-label col-lg-4 col-form-label" for="staticEmail">Full Name:</label>
                                                <div class="col-lg-6 mb-4">
                                                    <input class="form-control" id="staticEmail" type="text" placeholder="Enter full name" /><small class="ul-form__text form-text" id="passwordHelpBlock">Please enter your full name</small>
                                                </div>
                                                <label class="action-bar-horizontal-label col-lg-4 col-form-label" for="staticEmail">Email </label>
                                                <div class="col-lg-6">
                                                    <input class="form-control" id="staticEmail" type="text" placeholder="Enter full name" /><small class="ul-form__text form-text" id="passwordHelpBlock">Please enter your full name</small>
                                                </div>
                                            </div>
                                            <div class="form-group row mt-4">
                                                <label class="action-bar-horizontal-label col-lg-4 col-form-label" for="staticEmail">Communication:</label>
                                                <div class="col-lg-6 d-inline-flex align-self-center">
                                                    <label class="checkbox checkbox-primary mr-2">
                                                        <input type="checkbox" checked="" /><span>Email</span><span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox checkbox-primary mr-2">
                                                        <input type="checkbox" /><span>SMS</span><span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox checkbox-primary mr-2">
                                                        <input type="checkbox" /><span>Phone</span><span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="mc-footer">
                                                <div class="row text-right">
                                                    <div class="col-lg-4"></div>
                                                    <div class="col-lg-6 text-left">
                                                        <button class="btn btn-primary m-1" type="button">Save</button>
                                                        <button class="btn btn-outline-secondary m-1" type="button">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card  Horizontal Form Layout-->
                                </form>
                                <!-- end::form 2-->
                            </div>
                            <!-- end Hirozontal Form Layout-->
                        </div>
                        <!-- end::main-row-->
                    </div>
                </section>
                <!-- end::basic action bar-->
                <!-- end::basic-examples-->
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