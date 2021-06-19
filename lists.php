<?php require_once "./inc/static/head.php"; ?>
    <div class="app-admin-wrap layout-sidebar-large">
    <?php require_once "./inc/tmp/header.php"; ?>
        <?php require_once "./inc/tmp/menu.php"; ?>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>List</h1>
                    <ul>
                        <li><a href="href">Componets</a></li>
                        <li>List</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <p>List groups are a flexible and powerful component for displaying a series of content. Modify and extend them to support just about any content within.</p>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-4 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-2">Basic example</h4>
                                <p>The most basic list group is an unordered list with list items and the proper classes.</p>
                                <ul class="list-group">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Morbi leo risus</li>
                                    <li class="list-group-item">Porta ac consectetur ac</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                    <div class="col-md-4 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-2">Basic example with Active items</h4>
                                <p>Add .active to a .list-group-item to indicate the current active selection.</p>
                                <ul class="list-group">
                                    <li class="list-group-item active">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Morbi leo risus</li>
                                    <li class="list-group-item">Porta ac consectetur ac</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                    <div class="col-md-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-2">Basic example with Disabled items</h4>
                                <p>Add .disabled to a .list-group-item to make it appear disabled</p>
                                <ul class="list-group">
                                    <li class="list-group-item disabled">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Morbi leo risus</li>
                                    <li class="list-group-item">Porta ac consectetur ac</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                </div>
                <!--  end of row -->
                <div class="row mb-4">
                    <div class="col-md-4 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-2">Links</h4>
                                <p>Use <code>'anchor tag'</code> to create actionable list group items with hover, disabled, and active states by adding .list-group-item-action<span class="text-warning">Be sure to not use the standard .btn classes here.</span></p>
                                <div class="list-group"><a class="list-group-item list-group-item-action active" href="#">
                                        Cras justo odio
                                    </a><a class="list-group-item list-group-item-action" href="#">Dapibus ac facilisis in</a><a class="list-group-item list-group-item-action" href="#">Morbi leo risus</a><a class="list-group-item list-group-item-action" href="#">Porta ac consectetur ac</a><a class="list-group-item list-group-item-action disabled" href="#">Vestibulum at eros</a></div>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                    <div class="col-md-4 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-2">buttons list items</h4>
                                <p>With <code>button tag</code>, you can also make use of the disabled attribute instead of the .disabled class.<span class="text-warning">Be sure to not use the standard .btn classes here.</span></p>
                                <div class="list-group">
                                    <button class="list-group-item list-group-item-action active" type="button">
                                        Cras justo odio

                                    </button>
                                    <button class="list-group-item list-group-item-action" type="button">Dapibus ac facilisis in</button>
                                    <button class="list-group-item list-group-item-action" type="button">Morbi leo risus</button>
                                    <button class="list-group-item list-group-item-action" type="button">Porta ac consectetur ac</button>
                                    <button class="list-group-item list-group-item-action" type="button" disabled="disabled">Vestibulum at eros</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                    <div class="col-md-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-2">Flush</h4>
                                <p>
                                    Add .list-group-flush to remove some borders and rounded corners to render list group items edge-to-edge in a parent container

                                </p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Morbi leo risus</li>
                                    <li class="list-group-item">Porta ac consectetur ac</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                </div>
                <!--  end of row -->
                <div class="row mb-4">
                    <div class="col-md-4 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-2">Contextual classes</h4>
                                <p>Use contextual classes to style list items with a stateful background and color</p>
                                <ul class="list-group">
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item list-group-item-primary">A simple primary list group item</li>
                                    <li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>
                                    <li class="list-group-item list-group-item-success">A simple success list group item</li>
                                    <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
                                    <li class="list-group-item list-group-item-warning">A simple warning list group item</li>
                                    <li class="list-group-item list-group-item-info">A simple info list group item</li>
                                    <li class="list-group-item list-group-item-light">A simple light list group item</li>
                                    <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                    <div class="col-md-4 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-2">Contextual Action</h4>
                                <p>Contextual classes also work with .list-group-item-action. Note the addition of the hover styles here not present in the previous example. Also supported is the .active state; apply it to indicate an active selection on a contextual list group item.</p>
                                <div class="list-group"><a class="list-group-item list-group-item-action" href="#">Dapibus ac facilisis in</a><a class="list-group-item list-group-item-action list-group-item-primary" href="#">A simple primary list group item</a><a class="list-group-item list-group-item-action list-group-item-secondary" href="#">A simple secondary list group item</a><a class="list-group-item list-group-item-action list-group-item-success" href="#">A simple success list group item</a><a class="list-group-item list-group-item-action list-group-item-danger" href="#">A simple danger list group item</a><a class="list-group-item list-group-item-action list-group-item-warning" href="#">A simple warning list group item</a><a class="list-group-item list-group-item-action list-group-item-info" href="#">A simple info list group item</a><a class="list-group-item list-group-item-action list-group-item-light" href="#">A simple light list group item</a><a class="list-group-item list-group-item-action list-group-item-dark" href="#">A simple dark list group item</a></div>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                    <div class="col-md-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-2">List With Badges</h4>
                                <p>
                                    Add .list-group-flush to remove some borders and rounded corners to render list group items edge-to-edge in a parent container

                                </p>
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">Cras justo odio<span class="badge badge-primary badge-pill">4</span></li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">Dapibus ac facilisis in<span class="badge badge-info badge-pill">2</span></li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">Morbi leo risus<span class="badge badge-success badge-pill">1</span></li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">Morbi leo risus<span class="badge badge-warning badge-pill">1</span></li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">Morbi leo risus<span class="badge badge-danger badge-pill">1</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                </div>
                <!--  end of row -->
                <div class="row mb-4">
                    <div class="col-md-4 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-2">Custom content</h4>
                                <p>Add nearly any HTML within, even for linked list groups like the one below, with the help of flexbox utilities.</p>
                                <div class="list-group"><a class="list-group-item list-group-item-action flex-column align-items-start active" href="#">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1 text-white">List group item heading</h5><small>3 days ago</small>
                                        </div>
                                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small>Donec id elit non mi porta.</small>
                                    </a><a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">List group item heading</h5><small class="text-muted">3 days ago</small>
                                        </div>
                                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small class="text-muted">Donec id elit non mi porta.</small>
                                    </a><a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">List group item heading</h5><small class="text-muted">3 days ago</small>
                                        </div>
                                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small class="text-muted">Donec id elit non mi porta.</small>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                    <div class="col-md-8">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-2">List With JavaScript behavior</h4>
                                <p>Use the tab JavaScript plugin—include it individually or through the compiled bootstrap.js file—to extend our list group to create tabbable panes of local content.</p>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="list-group" id="list-tab" role="tablist"><a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Home</a><a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Profile</a><a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Messages</a><a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a></div>
                                    </div>
                                    <div class="col-8">
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">Enable tabbable list item via JavaScript (each list item needs to be activated individually<br /><code>
                                                    $('#myList a').on('click', function (e) { e.preventDefault() $(this).tab('show') })
                                                </code></div>
                                            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do cillum ad laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia anim incididunt laboris deserunt anim aute dolor incididunt veniam aute dolore do exercitation. Dolor nisi culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa commodo veniam incididunt veniam ad.</div>
                                            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do cillum ad laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia anim incididunt laboris deserunt anim aute dolor incididunt veniam aute dolore do exercitation. Dolor nisi culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa commodo veniam incididunt veniam ad.</div>
                                            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do cillum ad laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia anim incididunt laboris deserunt anim aute dolor incididunt veniam aute dolore do exercitation. Dolor nisi culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa commodo veniam incididunt veniam ad.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                </div>
                <!--  end of row -->
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