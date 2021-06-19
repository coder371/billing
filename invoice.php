<?php require_once "./inc/static/head.php"; ?>
    <div class="app-admin-wrap layout-sidebar-large">
    <?php require_once "./inc/tmp/header.php"; ?>
        <?php require_once "./inc/tmp/menu.php"; ?>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs justify-content-end mb-4" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="invoice-tab" data-toggle="tab" href="#invoice" role="tab" aria-controls="invoice" aria-selected="true">Invoice</a></li>
                            <li class="nav-item"><a class="nav-link" id="edit-tab" data-toggle="tab" href="#edit" role="tab" aria-controls="edit" aria-selected="false">Edit</a></li>
                        </ul>
                        <div class="card">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="invoice" role="tabpanel" aria-labelledby="invoice-tab">
                                    <div class="d-sm-flex mb-5" data-view="print"><span class="m-auto"></span>
                                        <button class="btn btn-primary mb-sm-0 mb-3 print-invoice">Print Invoice</button>
                                    </div>
                                    <!-- -===== Print Area =======-->
                                    <div id="print-area">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4 class="font-weight-bold">Order Info</h4>
                                                <p>#106</p>
                                            </div>
                                            <div class="col-md-6 text-sm-right">
                                                <p><strong>Order status: </strong>Delivered</p>
                                                <p><strong>Order date: </strong>10 Dec, 2018</p>
                                            </div>
                                        </div>
                                        <div class="mt-3 mb-4 border-top"></div>
                                        <div class="row mb-5">
                                            <div class="col-md-6 mb-3 mb-sm-0">
                                                <h5 class="font-weight-bold">Bill From</h5>
                                                <p>New Age Inc.</p><span style="white-space: pre-line">
                                                    rodriguez.trent@senger.com 61 Johnson St. Shirley, NY 11967. +202-555-0170
                                                </span>
                                            </div>
                                            <div class="col-md-6 text-sm-right">
                                                <h5 class="font-weight-bold">Bill To</h5>
                                                <p>UI Lib</p><span style="white-space: pre-line">
                                                    sales@ui-lib.com 8254 S. Garfield Street. Villa Rica, GA 30180. +1-202-555-0170
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 table-responsive">
                                                <table class="table table-hover mb-4">
                                                    <thead class="bg-gray-300">
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Item Name</th>
                                                            <th scope="col">Unit Price</th>
                                                            <th scope="col">Unit</th>
                                                            <th scope="col">Cost</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Product 1</td>
                                                            <td>300</td>
                                                            <td>2</td>
                                                            <td>600</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Product 2</td>
                                                            <td>200</td>
                                                            <td>3</td>
                                                            <td>600</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="invoice-summary">
                                                    <p>Sub total: <span>$1200</span></p>
                                                    <p>Vat: <span>$120</span></p>
                                                    <h5 class="font-weight-bold">Grand Total: <span>$1320</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ==== / Print Area =====-->
                                </div>
                                <div class="tab-pane fade" id="edit" role="tabpanel" aria-labelledby="edit-tab">
                                    <!-- ==== Edit Area =====-->
                                    <div class="d-flex mb-5"><span class="m-auto"></span>
                                        <button class="btn btn-primary">Save</button>
                                    </div>
                                    <form>
                                        <div class="row justify-content-between">
                                            <div class="col-md-6">
                                                <h4 class="font-weight-bold">Order Info</h4>
                                                <div class="col-sm-4 form-group mb-3 pl-0">
                                                    <label for="orderNo">Order Number</label>
                                                    <input class="form-control" id="orderNo" type="text" placeholder="Enter order number" />
                                                </div>
                                            </div>
                                            <div class="col-md-3 text-right">
                                                <label class="d-block text-12 text-muted">Order Status</label>
                                                <div class="pr-0 mb-4">
                                                    <label class="radio radio-reverse radio-danger">
                                                        <input type="radio" name="orderStatus" value="Pending" /><span>Pending</span><span class="checkmark"></span>
                                                    </label>
                                                    <label class="radio radio-reverse radio-warning">
                                                        <input type="radio" name="orderStatus" value="Processing" /><span>Processing</span><span class="checkmark"></span>
                                                    </label>
                                                    <label class="radio radio-reverse radio-success">
                                                        <input type="radio" name="orderStatus" value="Delivered" /><span>Delivered</span><span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="order-datepicker">Order Date</label>
                                                    <input class="form-control text-right" id="order-datepicker" placeholder="yyyy-mm-dd" name="dp" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 mb-4 border-top"></div>
                                        <div class="row mb-5">
                                            <div class="col-md-6">
                                                <h5 class="font-weight-bold">Bill From</h5>
                                                <div class="col-md-10 form-group mb-3 pl-0">
                                                    <input class="form-control" id="billFrom3" type="text" placeholder="Bill From" />
                                                </div>
                                                <div class="col-md-10 form-group mb-3 pl-0">
                                                    <textarea class="form-control" placeholder="Bill From Address"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <h5 class="font-weight-bold">Bill To</h5>
                                                <div class="col-md-10 offset-md-2 form-group mb-3 pr-0">
                                                    <input class="form-control text-right" id="billFrom2" type="text" placeholder="Bill From" />
                                                </div>
                                                <div class="col-md-10 offset-md-2 form-group mb-3 pr-0">
                                                    <textarea class="form-control text-right" placeholder="Bill From Address"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 table-responsive">
                                                <table class="table table-hover mb-3">
                                                    <thead class="bg-gray-300">
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Item Name</th>
                                                            <th scope="col">Unit Price</th>
                                                            <th scope="col">Unit</th>
                                                            <th scope="col">Cost</th>
                                                            <th scope="col"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>
                                                                <input class="form-control" value="Product 1" type="text" placeholder="Item Name" />
                                                            </td>
                                                            <td>
                                                                <input class="form-control" value="300" type="number" placeholder="Unit Price" />
                                                            </td>
                                                            <td>
                                                                <input class="form-control" value="2" type="number" placeholder="Unit" />
                                                            </td>
                                                            <td>600</td>
                                                            <td>
                                                                <button class="btn btn-outline-secondary float-right">Delete</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>
                                                                <input class="form-control" value="Product 1" type="text" placeholder="Item Name" />
                                                            </td>
                                                            <td>
                                                                <input class="form-control" value="300" type="number" placeholder="Unit Price" />
                                                            </td>
                                                            <td>
                                                                <input class="form-control" value="2" type="number" placeholder="Unit" />
                                                            </td>
                                                            <td>600</td>
                                                            <td>
                                                                <button class="btn btn-outline-secondary float-right">Delete</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <button class="btn btn-primary float-right mb-4">Add Item</button>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="invoice-summary invoice-summary-input float-right">
                                                    <p>Sub total: <span>$1200</span></p>
                                                    <p class="d-flex align-items-center">Vat(%):<span>
                                                            <input class="form-control small-input" type="text" value="10" />$120</span></p>
                                                    <h5 class="font-weight-bold d-flex align-items-center">Grand Total:<span>
                                                            <input class="form-control small-input" type="text" value="$" />$1320</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- ==== / Edit Area =====-->
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