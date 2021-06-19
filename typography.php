<?php require_once "./inc/static/head.php"; ?>
    <div class="app-admin-wrap layout-sidebar-large">
    <?php require_once "./inc/tmp/header.php"; ?>
        <?php require_once "./inc/tmp/menu.php"; ?>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Typography</h1>
                    <ul>
                        <li><a href="">UI Kits</a></li>
                        <li>Typography</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <!-- begin::typography-->
                <section class="typography">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <!-- left-content-->
                                    <div class="col-md-6">
                                        <!-- begin::headings-->
                                        <div class="card mt-4 mt-4">
                                            <div class="card-header bg-transparent">
                                                <h3 class="card-title">Headings</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title"><span class="section-info">All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>, are available.</span>
                                                    <div class="row mt-4 mb-4">
                                                        <div class="col-md-6">
                                                            <h1 class="heading">h1. Heading 1</h1>
                                                            <div class="br"></div>
                                                            <h2 class="heading">h2. Heading 2</h2>
                                                            <div class="br"></div>
                                                            <h3 class="heading">h3. Heading 3</h3>
                                                            <div class="br"></div>
                                                            <h3 class="heading">h3. Heading 3</h3>
                                                            <div class="br"></div>
                                                            <h4 class="heading">h4. Heading 4</h4>
                                                            <div class="br"></div>
                                                            <h5 class="heading">h5. Heading 5</h5>
                                                            <div class="br"></div>
                                                            <h6 class="heading">h6. Heading 6</h6>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h1 class="heading text-primary">h1. Heading 1</h1>
                                                            <div class="card-title"></div>
                                                            <h2 class="heading text-secondary">h2. Heading 2</h2>
                                                            <div class="br"></div>
                                                            <h3 class="heading text-success">h3. Heading 3</h3>
                                                            <div class="br"></div>
                                                            <h3 class="heading text-danger">h3. Heading 3</h3>
                                                            <div class="br"></div>
                                                            <h4 class="heading text-warning">h4. Heading 4</h4>
                                                            <div class="br"></div>
                                                            <h5 class="heading text-info">h5. Heading 5</h5>
                                                            <div class="br"></div>
                                                            <h6 class="heading text-info">h6. Heading 6</h6>
                                                        </div>
                                                    </div>
                                                    <div class="br"></div>
                                                    <div class="row">
                                                        <div class="col-md-12"><span class="section-info">Use the included utility classes to recreate the small secondary heading text.</span>
                                                            <div class="br"></div>
                                                            <h3 class="heading">Fancy display heading<small class="text-mute">With faded secondary text</small></h3><span class="section-info">Larger, slightly more opinionated heading styles.</span>
                                                            <div class="display-content">
                                                                <h3 class="heading display-1">Display 1</h3>
                                                                <h3 class="heading display-2">Display 2</h3>
                                                                <h3 class="heading display-3">Display 3</h3>
                                                            </div>
                                                            <div class="br"></div><span class="section-info">Make a paragraph stand out by adding <code>.lead</code></span>
                                                            <div class="content-section">
                                                                <p class="lead text-mute">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end::headings-->
                                        <!-- begin:general-->
                                        <div class="card mt-4 mt-4">
                                            <div class="card-header bg-transparent">
                                                <h3 class="card-title">General</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title"><span class="section-info">Styling for common inline HTML5 elements:</span>
                                                    <div class="row mt-4 mb-4">
                                                        <div class="col-md-12">
                                                            <p>You can use the mark tag to
                                                                <mark>highlight</mark> text.
                                                            </p>
                                                            <div class="br"></div>
                                                            <p>
                                                                <del>This line of text is meant to be treated as deleted text.</del>
                                                            </p>
                                                            <div class="br"></div>
                                                            <p>
                                                                <s>This line of text is meant to be treated as no longer accurate.</s>
                                                            </p>
                                                            <div class="br"></div>
                                                            <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                                                            <div class="br"></div>
                                                            <p>
                                                                <u>This line of text will render as underlined</u>
                                                            </p>
                                                            <div class="br"></div>
                                                            <p><small>This line of text is meant to be treated as fine print.</small></p>
                                                            <div class="br"></div>
                                                            <p><strong>This line rendered as bold text.</strong></p>
                                                            <div class="br"></div>
                                                            <p><em>This line rendered as italicized text.</em></p>
                                                        </div>
                                                    </div><span class="section-info">Stylized abbreviations implementation of HTML&rsquo;s <code>&lt;abbr&gt;</code> element:</span>
                                                    <div class="section-content">
                                                        <p><abbr title="attribute">attr</abbr></p>
                                                        <p><abbr title="HyperText Markup Language">HTML</abbr></p>
                                                    </div>
                                                    <div class="br"></div><span class="section-info mb-4">Quoting blocks of content:</span>
                                                    <div class="br"></div>
                                                    <blockquote class="blockquote">
                                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                        <footer class="blockquote-footer">Someone famous in
                                                            <cite title="Source Title">Source Title</cite>
                                                        </footer>
                                                    </blockquote>
                                                    <blockquote class="blockquote">
                                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                        <footer class="blockquote-footer">Someone famous in
                                                            <cite title="Source Title">Source Title</cite>
                                                        </footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end:general-->
                                    </div>
                                    <!-- end::left-content-->
                                    <!-- right-content-->
                                    <div class="col-md-6">
                                        <!-- begin::Text-->
                                        <div class="card mt-4 mt-4">
                                            <div class="card-header bg-transparent">
                                                <h3 class="card-title">Text</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title"><span class="section-info">Basic Text Examples:</span>
                                                    <div class="row mt-4 mb-4">
                                                        <div class="col-md-12">
                                                            <p><span>Example Text</span></p>
                                                            <div class="br"></div>
                                                            <p><span class="t-font-bold">Example Bold Text</span></p>
                                                            <div class="br"></div>
                                                            <p><span class="t-font-bolder">Example Bolder Text</span></p>
                                                            <div class="br"></div>
                                                            <p><span class="t-font-boldest">Example Boldest Text</span></p>
                                                            <div class="br"></div>
                                                            <p><span class="t-font-u">Example Uppercase Text</span></p>
                                                        </div>
                                                    </div><span class="section-info">State colors:</span>
                                                    <div class="row mt-4 mb-4">
                                                        <div class="col-md-12">
                                                            <p><span class="text-success">Success state text</span></p>
                                                            <div class="br"></div>
                                                            <p><span class="text-warning">Warning state text</span></p>
                                                            <div class="br"></div>
                                                            <p><span class="text-info">Info state text</span></p>
                                                            <div class="br"></div>
                                                            <p><span class="text-danger">Danger state text</span></p>
                                                            <div class="br"></div>
                                                            <p><span class="text-primary">Primary state text</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end::text-->
                                        <!-- begin::links-->
                                        <div class="card mt-4 mt-4">
                                            <div class="card-header bg-transparent">
                                                <h3 class="card-title">Link</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title"><span class="section-info">Basic link Examples:</span>
                                                    <div class="row mt-4 mb-4">
                                                        <div class="col-md-12">
                                                            <p><a class="typo_link text-primary" href="">Example Text</a></p>
                                                            <div class="br"></div>
                                                            <p><a class="typo_link text-primary t-font-bold" href="">Example Bold Text</a></p>
                                                            <div class="br"></div>
                                                            <p><a class="typo_link text-primary t-font-bolder" href="">Example Bolder Text</a></p>
                                                            <div class="br"></div>
                                                            <p><a class="typo_link text-primary t-font-boldest" href="">Example Boldest Text</a></p>
                                                            <div class="br"></div>
                                                            <p><a class="typo_link text-primary t-font-u" href="">Example Uppercase Text</a></p>
                                                        </div>
                                                    </div><span class="section-info">State colors:</span>
                                                    <div class="row mt-4 mb-4">
                                                        <div class="col-md-12">
                                                            <p><a class="typo_link text-success" href="">Success state text</a></p>
                                                            <div class="br"></div>
                                                            <p><a class="typo_link text-warning" href="">Warning state text</a></p>
                                                            <div class="br"></div>
                                                            <p><a class="typo_link text-info" href="">Info state text</a></p>
                                                            <div class="br"></div>
                                                            <p><a class="typo_link text-danger" href="">Danger state text</a></p>
                                                            <div class="br"></div>
                                                            <p><a class="typo_link text-primary" href="">Primary state text</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end::links-->
                                        <!-- divider-->
                                        <div class="card mt-4 mt-4">
                                            <div class="card-header bg-transparent">
                                                <h3 class="card-title">Divider</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="divider"><span></span><span>or</span><span></span></div>
                                            </div>
                                        </div>
                                        <!-- end::divider-->
                                    </div>
                                    <!-- end::right-content-->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end::typography-->
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