<?php require_once "./inc/static/head.php"; ?>
    <div class="app-admin-wrap layout-sidebar-large">
    <?php require_once "./inc/tmp/header.php"; ?>
        <?php require_once "./inc/tmp/menu.php"; ?>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Multi Column Forms</h1>
                    <ul>
                        <li><a href="href">Forms</a></li>
                        <li>Multi Column Forms</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="2-columns-form-layout">
                    <div>
                        <div class="row">
                            <div class="col-lg-12">
                                <!--  start card -->
                                <div class="card">
                                    <div class="card-header bg-transparent">
                                        <h3 class="card-title">2 Columns Form Layout</h3>
                                    </div>
                                    <!-- begin::form-->
                                    <form action="action">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="ul-form__label" for="inputEmail1">Full Name:</label>
                                                    <input class="form-control" id="inputEmail1" type="text" placeholder="Enter full name" /><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                        Please enter your full name
                                                    </small>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="ul-form__label" for="inputEmail2">Contact Number:</label>
                                                    <input class="form-control" id="inputEmail2" type="text" placeholder="Enter Contact Number" /><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                        Please enter your contact number
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="custom-separator"></div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="ul-form__label" for="inputEmail3">Address:</label>
                                                    <div class="input-right-icon">
                                                        <input class="form-control" id="inputEmail3" type="text" placeholder="Enter your address" /><span class="span-right-input-icon"><i class="ul-form__icon i-Map-Marker"></i></span>
                                                    </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                        Please enter your address
                                                    </small>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="ul-form__label" for="inputEmail4">Postcode:</label>
                                                    <div class="input-right-icon">
                                                        <input class="form-control" id="inputEmail4" type="text" placeholder="Enter your postcode" /><span class="span-right-input-icon"><i class="ul-form__icon i-New-Mail"></i></span>
                                                    </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                        Please enter your postcode
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="custom-separator"></div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="ul-form__label" for="inputEmail5">User Group:</label>
                                                    <div class="ul-form__radio-inline">
                                                        <label class="ul-radio__position radio radio-primary form-check-inline">
                                                            <input type="radio" name="radio" value="0" /><span class="ul-form__radio-font">Sales Person</span><span class="checkmark"></span>
                                                        </label>
                                                        <label class="ul-radio__position radio radio-primary">
                                                            <input type="radio" name="radio" value="0" /><span class="ul-form__radio-font">Customer</span><span class="checkmark"></span>
                                                        </label>
                                                    </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                        Please select user group
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="mc-footer">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <button class="btn btn-primary m-1" type="button">Save</button>
                                                        <button class="btn btn-outline-secondary m-1" type="button">Cancel</button>
                                                        <button class="btn btn-danger m-1 footer-delete-right" type="button">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!--  end::form -->
                                </div>
                                <!--  end card -->
                                <!-- begin::form 2-->
                                <form action="action">
                                    <!--  start card 2 Columns Horizontal Form Layout-->
                                    <div class="card ul-card__margin-25">
                                        <div class="card-header bg-transparent">
                                            <h3 class="card-title">2 Columns Horizontal Form Layout</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label class="ul-form__label ul-form--margin col-lg-3 col-form-label" for="staticEmail6">Full Name:</label>
                                                <div class="col-lg-2">
                                                    <input class="form-control" id="staticEmail6" type="text" placeholder="Enter full name" /><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                        Please enter your full name
                                                    </small>
                                                </div>
                                                <label class="ul-form__label ul-form--margin col-lg-3 col-form-label" for="staticEmail7">Contact Number:</label>
                                                <div class="col-lg-2">
                                                    <input class="form-control" id="staticEmail7" type="text" placeholder="Enter Contact Number" /><small class="ul-form__text" id="passwordHelpBlock">
                                                        Please enter your Contact Number
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="custom-separator"></div>
                                            <div class="form-group row">
                                                <label class="ul-form__label ul-form--margin col-lg-3 col-form-label" for="staticEmail8">Address:</label>
                                                <div class="col-lg-2">
                                                    <div class="input-right-icon">
                                                        <input class="form-control" id="inputEmail8" type="text" placeholder="Enter your address" /><span class="span-right-input-icon"><i class="ul-form__icon i-Map-Marker"></i></span>
                                                    </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                        Please enter your address
                                                    </small>
                                                </div>
                                                <label class="ul-form__label ul-form--margin col-lg-3 col-form-label" for="staticEmail9">Postcode:</label>
                                                <div class="col-lg-2">
                                                    <div class="input-right-icon">
                                                        <input class="form-control" id="inputEmail9" type="text" placeholder="Enter your postcode" /><span class="span-right-input-icon"><i class="ul-form__icon i-New-Mail"></i></span>
                                                    </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                        Please enter your postcode
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="custom-separator"></div>
                                            <div class="form-group row">
                                                <label class="ul-form__label ul-form--margin col-lg-3 col-form-label" for="staticEmail10">Group:</label>
                                                <div class="col-lg-2">
                                                    <div class="ul-form__radio-inline">
                                                        <label class="ul-radio__position radio radio-primary form-check-inline">
                                                            <input type="radio" name="radio" value="0" /><span class="ul-form__radio-font">Sales Person</span><span class="checkmark"></span>
                                                        </label>
                                                        <label class="ul-radio__position radio radio-primary">
                                                            <input type="radio" name="radio" value="0" /><span class="ul-form__radio-font">Customer</span><span class="checkmark"></span>
                                                        </label>
                                                    </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                        Please enter your address
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="mc-footer">
                                                <div class="row text-right">
                                                    <div class="col-lg-4">
                                                        <button class="btn btn-primary m-1" type="button">Save</button>
                                                        <button class="btn btn-outline-secondary m-1" type="button">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  end card 2 Columns Horizontal Form Layout-->
                                </form>
                                <!--  end::form 2-->
                                <!--  start card 3 Columns  Form Layout-->
                                <div class="card">
                                    <div class="card-header bg-transparent">
                                        <h3 class="card-title">3 Columns Form Layout</h3>
                                    </div>
                                    <!-- begin::form-->
                                    <form action="action">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label class="ul-form__label" for="inputtext11">Full Name:</label>
                                                    <input class="form-control" id="inputtext11" type="text" placeholder="Enter full name" /><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                        Please enter your full name
                                                    </small>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="ul-form__label" for="inputEmail12">Contact Number:</label>
                                                    <input class="form-control" id="inputEmail12" type="text" placeholder="Enter Contact Number" /><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                        Please enter your contact number
                                                    </small>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="ul-form__label" for="inputEmail13">Username:</label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text bg-transparent"><i class="i-Checked-User"></i></div>
                                                        </div>
                                                        <input class="form-control" id="inlineFormInputGroup" type="text" placeholder="Username" />
                                                    </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                        Please enter your username
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="custom-separator"></div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label class="ul-form__label" for="inputtext14">Contact:</label>
                                                    <input class="form-control" id="inputtext14" type="text" placeholder="Enter contact number " /><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                        Please enter your contact
                                                    </small>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="ul-form__label" for="inputEmail15">Fax:</label>
                                                    <div class="input-right-icon">
                                                        <input class="form-control" id="inputEmail15" type="text" placeholder="Fax Number" /><span class="span-right-input-icon"><i class="ul-form__icon i-Information"></i></span>
                                                    </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                        Please enter your Fax
                                                    </small>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="ul-form__label" for="inputEmail16">Address:</label>
                                                    <div class="input-right-icon">
                                                        <input class="form-control" id="inputEmail16" type="text" placeholder="Enter your address" /><span class="span-right-input-icon"><i class="ul-form__icon i-Map-Marker"></i></span>
                                                    </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                        Please enter your address
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="custom-separator"></div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4 mr-2">
                                                    <label class="ul-form__label" for="inputEmail17">Postcode:</label>
                                                    <div class="input-right-icon">
                                                        <input class="form-control" id="inputEmail17" type="text" placeholder="Enter your postcode" /><span class="span-right-input-icon"><i class="ul-form__icon i-New-Mail"></i></span>
                                                    </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                        Please enter your postcode
                                                    </small>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="ul-form__label" for="inputEmail18">User Group:</label>
                                                    <div class="ul-form__radio-inline">
                                                        <label class="ul-radio__position radio radio-primary form-check-inline">
                                                            <input type="radio" name="radio" value="0" /><span class="ul-form__radio-font">Sales Person</span><span class="checkmark"></span>
                                                        </label>
                                                        <label class="ul-radio__position radio radio-primary">
                                                            <input type="radio" name="radio" value="0" /><span class="ul-form__radio-font">Customer</span><span class="checkmark"></span>
                                                        </label>
                                                    </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                        Please select user group
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="mc-footer">
                                                <div class="row">
                                                    <div class="col-lg-12 text-center">
                                                        <button class="btn btn-primary m-1" type="button">Save</button>
                                                        <button class="btn btn-outline-secondary m-1" type="button">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!--  end::form 3-->
                                </div>
                                <!--  end card 3-->
                                <!-- begin::form 3 Horizontal-->
                                <form action="action">
                                    <!--  start card 3 Columns Horizontal Form Layout-->
                                    <div class="card ul-card__margin-25">
                                        <div class="card-header bg-transparent">
                                            <h3 class="card-title">3 Columns Horizontal Form Layout</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label class="ul-form__label ul-form--margin col-lg-1 col-form-label" for="staticEmail19">Full Name:</label>
                                                <div class="col-lg-3">
                                                    <input class="form-control" id="staticEmail19" type="text" placeholder="Enter full name" /><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                        Please enter your full name
                                                    </small>
                                                </div>
                                                <label class="ul-form__label ul-form--margin col-lg-1 col-form-label" for="staticEmail20">Email:</label>
                                                <div class="col-lg-3">
                                                    <input class="form-control" id="staticEmail20" type="text" placeholder="Enter Your Email" /><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                        Please enter your Email
                                                    </small>
                                                </div>
                                                <label class="ul-form__label ul-form--margin col-lg-1 col-form-label" for="staticEmail21">Username:</label>
                                                <div class="col-lg-3">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text bg-transparent"><i class="i-Checked-User"></i></div>
                                                        </div>
                                                        <input class="form-control" id="inlineFormInputGroup" type="text" placeholder="Username" />
                                                    </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                        Please enter your Email
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="custom-separator"></div>
                                            <div class="form-group row">
                                                <label class="ul-form__label ul-form--margin col-lg-1 col-form-label" for="staticEmail22">Contact:</label>
                                                <div class="col-lg-3">
                                                    <input class="form-control" id="staticEmail22" type="text" placeholder="Enter contact number" /><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                        Please enter your contact number
                                                    </small>
                                                </div>
                                                <label class="ul-form__label ul-form--margin col-lg-1 col-form-label" for="staticEmail23">Fax:</label>
                                                <div class="col-lg-3">
                                                    <div class="input-right-icon">
                                                        <input class="form-control" id="staticEmail23" type="text" placeholder="Enter your fax" /><span class="span-right-input-icon"><i class="ul-form__icon i-Information"></i></span>
                                                    </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                        Please enter your fax
                                                    </small>
                                                </div>
                                                <label class="ul-form__label ul-form--margin col-lg-1 col-form-label" for="staticEmail24">Address:</label>
                                                <div class="col-lg-3">
                                                    <div class="input-right-icon">
                                                        <input class="form-control" id="staticEmail24" type="text" placeholder="Enter your address" /><span class="span-right-input-icon"><i class="ul-form__icon i-Map-Marker"></i></span>
                                                    </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                        Please enter your address
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="custom-separator"></div>
                                            <div class="form-group row">
                                                <label class="ul-form__label ul-form--margin col-lg-1 col-form-label" for="staticEmail25">Postcode:</label>
                                                <div class="col-lg-2">
                                                    <div class="input-right-icon">
                                                        <input class="form-control" id="inputEmail25" type="text" placeholder="Enter your postcode" /><span class="span-right-input-icon"><i class="ul-form__icon i-New-Mail"></i></span>
                                                    </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                        Please enter your postcode
                                                    </small>
                                                </div>
                                                <label class="ul-form__label ul-form--margin col-lg-1 col-form-label" for="staticEmail26">User Group:</label>
                                                <div class="col-lg-2">
                                                    <div class="ul-form__radio-inline">
                                                        <label class="ul-radio__position radio radio-primary form-check-inline">
                                                            <input type="radio" name="radio" value="0" /><span class="ul-form__radio-font">Sales Person</span><span class="checkmark"></span>
                                                        </label>
                                                        <label class="ul-radio__position radio radio-primary">
                                                            <input type="radio" name="radio" value="0" /><span class="ul-form__radio-font">Customer</span><span class="checkmark"></span>
                                                        </label>
                                                    </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                        Please enter your address
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="mc-footer">
                                                <div class="row text-center">
                                                    <div class="col-lg-12">
                                                        <button class="btn btn-primary m-1" type="button">Save</button>
                                                        <button class="btn btn-outline-secondary m-1" type="button">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  end card 3 Columns Horizontal Form Layout-->
                                </form>
                                <!--  end::form 3-->
                            </div>
                        </div>
                        <!--  end of main row -->
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