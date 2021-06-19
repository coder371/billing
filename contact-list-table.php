<?php require_once "./inc/static/head.php"; ?>
    <div class="app-admin-wrap layout-sidebar-large">
    <?php require_once "./inc/tmp/header.php"; ?>
        <?php require_once "./inc/tmp/menu.php"; ?>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Contact List</h1>
                    <ul>
                        <li><a href="">UI Kits</a></li>
                        <li>Contact List</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <!-- content goes here-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header gradient-purple-indigo 0-hidden pb-80">
                                <div class="pt-4">
                                    <div class="row">
                                        <h4 class="col-md-4 text-white">Contacts</h4>
                                        <input class="form-control form-control-rounded col-md-4 ml-3 mr-3" id="exampleFormControlInput1" type="text" placeholder="Search Contacts..." />
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="ul-contact-list-body">
                                    <div class="ul-contact-main-content">
                                        <div class="ul-contact-left-side">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="ul-contact-list">
                                                        <div class="contact-close-mobile-icon float-right mb-2"><i class="i-Close-Window text-15 font-weight-600"></i></div>
                                                        <!-- modal-->
                                                        <button class="btn btn-outline-secondary btn-block mb-4" type="button" data-toggle="modal" data-target="#exampleModal">ADD CONTACT</button>
                                                        <!-- end:modal-->
                                                        <div class="list-group" id="list-tab" role="tablist"><a class="list-group-item list-group-item-action border-0 active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><i class="nav-icon i-Business-Mens"></i> Contact List</a><a class="list-group-item list-group-item-action border-0" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"><i class="nav-icon i-Conference"></i> Conected</a><a class="list-group-item list-group-item-action border-0" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings"><i class="nav-icon i-Pen-2"></i> Settings</a>
                                                            <label class="text-muted font-weight-600 py-8" for="">MEMBERS</label><a class="list-group-item list-group-item-action border-0" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><i class="nav-icon i-Arrow-Next"></i> Contact List</a><a class="list-group-item list-group-item-action border-0" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"><i class="nav-icon i-Arrow-Next"></i> Conected</a><a class="list-group-item list-group-item-action border-0" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings"><i class="nav-icon i-Arrow-Next"></i> Settings</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">New Contact</h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="form-group">
                                                                <input class="form-control" type="text" placeholder="Name...." />
                                                            </div>
                                                            <div class="form-group">
                                                                <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email...." />
                                                            </div>
                                                            <div class="form-group">
                                                                <input class="form-control" id="exampleInputPassword1" type="text" placeholder="phone...." />
                                                            </div>
                                                            <div class="form-group">
                                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="notes...."></textarea>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                                        <button class="btn btn-primary" type="button">
                                                            Save
                                                            changes
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ul-contact-content">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="float-left"><i class="nav-icon i-Align-Justify-All text-25 ul-contact-mobile-icon"></i></div>
                                                    <div class="tab-content ul-contact-list-table--label" id="nav-tabContent">
                                                        <!-- all-contact-->
                                                        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                                            <div class="text-left">
                                                                <div class="table-responsive">
                                                                    <table class="display table table-borderless ul-contact-list-table" id="contact_list_table" style="width:100%">
                                                                        <thead>
                                                                            <tr class="border-bottom">
                                                                                <th>Name</th>
                                                                                <th>Email</th>
                                                                                <th>Phone</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td> Carl Clarkson</td>
                                                                                <td>carl_657@gmail.com</td>
                                                                                <td>+88 0172-323-233</td>
                                                                                <td>
                                                                                    <button class="btn bg-transparent _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _r_block-dot bg-dark"></span><span class="_dot _r_block-dot bg-dark"></span><span class="_dot _r_block-dot bg-dark"></span></button>
                                                                                    <div class="dropdown-menu" x-placement="bottom-start"><a class="dropdown-item" href="#"><i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>Edit Contact</a><a class="dropdown-item" href="#"><i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>Delete Contact</a></div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> Carl Clarkson</td>
                                                                                <td>carl_657@gmail.com</td>
                                                                                <td>+88 0172-323-233</td>
                                                                                <td>
                                                                                    <button class="btn bg-transparent _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _r_block-dot bg-dark"></span><span class="_dot _r_block-dot bg-dark"></span><span class="_dot _r_block-dot bg-dark"></span></button>
                                                                                    <div class="dropdown-menu" x-placement="bottom-start"><a class="dropdown-item" href="#"><i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>Edit Contact</a><a class="dropdown-item" href="#"><i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>Delete Contact</a></div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> Carl Clarkson</td>
                                                                                <td>carl_657@gmail.com</td>
                                                                                <td>+88 0172-323-233</td>
                                                                                <td>
                                                                                    <button class="btn bg-transparent _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _r_block-dot bg-dark"></span><span class="_dot _r_block-dot bg-dark"></span><span class="_dot _r_block-dot bg-dark"></span></button>
                                                                                    <div class="dropdown-menu" x-placement="bottom-start"><a class="dropdown-item" href="#"><i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>Edit Contact</a><a class="dropdown-item" href="#"><i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>Delete Contact</a></div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> Carl Clarkson</td>
                                                                                <td>carl_657@gmail.com</td>
                                                                                <td>+88 0172-323-233</td>
                                                                                <td>
                                                                                    <button class="btn bg-transparent _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _r_block-dot bg-dark"></span><span class="_dot _r_block-dot bg-dark"></span><span class="_dot _r_block-dot bg-dark"></span></button>
                                                                                    <div class="dropdown-menu" x-placement="bottom-start"><a class="dropdown-item" href="#"><i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>Edit Contact</a><a class="dropdown-item" href="#"><i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>Delete Contact</a></div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> Carl Clarkson</td>
                                                                                <td>carl_657@gmail.com</td>
                                                                                <td>+88 0172-323-233</td>
                                                                                <td>
                                                                                    <button class="btn bg-transparent _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _r_block-dot bg-dark"></span><span class="_dot _r_block-dot bg-dark"></span><span class="_dot _r_block-dot bg-dark"></span></button>
                                                                                    <div class="dropdown-menu" x-placement="bottom-start"><a class="dropdown-item" href="#"><i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>Edit Contact</a><a class="dropdown-item" href="#"><i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>Delete Contact</a></div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> Carl Clarkson</td>
                                                                                <td>carl_657@gmail.com</td>
                                                                                <td>+88 0172-323-233</td>
                                                                                <td>
                                                                                    <button class="btn bg-transparent _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _r_block-dot bg-dark"></span><span class="_dot _r_block-dot bg-dark"></span><span class="_dot _r_block-dot bg-dark"></span></button>
                                                                                    <div class="dropdown-menu" x-placement="bottom-start"><a class="dropdown-item" href="#"><i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>Edit Contact</a><a class="dropdown-item" href="#"><i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>Delete Contact</a></div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> Carl Clarkson</td>
                                                                                <td>carl_657@gmail.com</td>
                                                                                <td>+88 0172-323-233</td>
                                                                                <td>
                                                                                    <button class="btn bg-transparent _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _r_block-dot bg-dark"></span><span class="_dot _r_block-dot bg-dark"></span><span class="_dot _r_block-dot bg-dark"></span></button>
                                                                                    <div class="dropdown-menu" x-placement="bottom-start"><a class="dropdown-item" href="#"><i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>Edit Contact</a><a class="dropdown-item" href="#"><i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>Delete Contact</a></div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> Carl Clarkson</td>
                                                                                <td>carl_657@gmail.com</td>
                                                                                <td>+88 0172-323-233</td>
                                                                                <td>
                                                                                    <button class="btn bg-transparent _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _r_block-dot bg-dark"></span><span class="_dot _r_block-dot bg-dark"></span><span class="_dot _r_block-dot bg-dark"></span></button>
                                                                                    <div class="dropdown-menu" x-placement="bottom-start"><a class="dropdown-item" href="#"><i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>Edit Contact</a><a class="dropdown-item" href="#"><i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>Delete Contact</a></div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> Carl Clarkson</td>
                                                                                <td>carl_657@gmail.com</td>
                                                                                <td>+88 0172-323-233</td>
                                                                                <td>
                                                                                    <button class="btn bg-transparent _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _r_block-dot bg-dark"></span><span class="_dot _r_block-dot bg-dark"></span><span class="_dot _r_block-dot bg-dark"></span></button>
                                                                                    <div class="dropdown-menu" x-placement="bottom-start"><a class="dropdown-item" href="#"><i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>Edit Contact</a><a class="dropdown-item" href="#"><i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>Delete Contact</a></div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> Carl Clarkson</td>
                                                                                <td>carl_657@gmail.com</td>
                                                                                <td>+88 0172-323-233</td>
                                                                                <td>
                                                                                    <button class="btn bg-transparent _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _r_block-dot bg-dark"></span><span class="_dot _r_block-dot bg-dark"></span><span class="_dot _r_block-dot bg-dark"></span></button>
                                                                                    <div class="dropdown-menu" x-placement="bottom-start"><a class="dropdown-item" href="#"><i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>Edit Contact</a><a class="dropdown-item" href="#"><i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>Delete Contact</a></div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> Carl Clarkson</td>
                                                                                <td>carl_657@gmail.com</td>
                                                                                <td>+88 0172-323-233</td>
                                                                                <td>
                                                                                    <button class="btn bg-transparent _r_btn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _r_block-dot bg-dark"></span><span class="_dot _r_block-dot bg-dark"></span><span class="_dot _r_block-dot bg-dark"></span></button>
                                                                                    <div class="dropdown-menu" x-placement="bottom-start"><a class="dropdown-item" href="#"><i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>Edit Contact</a><a class="dropdown-item" href="#"><i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>Delete Contact</a></div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--
                              <div class="tab-pane fade" id="list-profile" role="tabpanel"
                              aria-labelledby="list-profile-list">...</div>
                              <div class="tab-pane fade" id="list-messages" role="tabpanel"
                              aria-labelledby="list-messages-list">...</div>
                              <div class="tab-pane fade" id="list-settings" role="tabpanel"
                              aria-labelledby="list-settings-list">...</div>
                              
                              -->
                                                    </div>
                                                </div>
                                            </div>
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
    <script src="../../dist-assets/js/plugins/datatables.min.js"></script>
    <script src="../../dist-assets/js/scripts/contact-list-table.min.js"></script>
    <script src="../../dist-assets/js/scripts/datatables.script.min.js"></script>
</body>

</html>