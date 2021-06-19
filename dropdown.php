<?php require_once "./inc/static/head.php"; ?>
    <div class="app-admin-wrap layout-sidebar-large">
    <?php require_once "./inc/tmp/header.php"; ?>
        <?php require_once "./inc/tmp/menu.php"; ?>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Dropdown</h1>
                    <ul>
                        <li><a href="href">Extra UIKits</a></li>
                        <li>Dropdown</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <section class="__demo-dropdown" id="__demo-dropdown">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <!--  basic examples -->
                                <div class="card mb-4">
                                    <div class="card-header bg-transparent">
                                        Basic Examples

                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-2 mt-2 text-muted">Single button dropdowns:</h6>
                                        <!--  begin::single-button-row-dropdown -->
                                        <div class="row">
                                            <div class="col">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown button

                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="dropdown">
                                                    <button class="btn btn-primary dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown button

                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="dropdown">
                                                    <button class="btn btn-success dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown button

                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  end::single-button-row-dropdown -->
                                        <div class="tab-border"></div>
                                        <h6 class="card-subtitle mb-4 mt-4 text-muted">Single button dropdowns:</h6>
                                        <!--  begin::Dropdown-menu-with-icons-row -->
                                        <div class="row mt-2">
                                            <div class="col">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown button

                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><i class="i-Bell"></i> Action</a><a class="dropdown-item" href="#"><i class="i-Download-from-Cloud"></i> Another action</a><a class="dropdown-item" href="#"><i class="i-Money-Bag"></i> Something else here</a></div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="dropdown">
                                                    <button class="btn btn-primary dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown button

                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><i class="i-Bell"></i> Action</a><a class="dropdown-item" href="#"><i class="i-Download-from-Cloud"></i> Another action</a><a class="dropdown-item" href="#"><i class="i-Money-Bag"></i> Something else here</a></div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="dropdown">
                                                    <button class="btn btn-success dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown button

                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><i class="i-Bell"></i> Action</a><a class="dropdown-item" href="#"><i class="i-Download-from-Cloud"></i> Another action</a><a class="dropdown-item" href="#"><i class="i-Money-Bag"></i> Something else here</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  end::Dropdown-menu-with-icons-row -->
                                        <div class="tab-border"></div>
                                        <h6 class="card-subtitle mb-4 mt-4 text-muted">Button state dropdowns:</h6>
                                        <!--  begin::button-state-dropdown -->
                                        <div class="row">
                                            <div class="col">
                                                <div class="btn-group">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary</button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                                <!--  /btn-group -->
                                                <div class="btn-group">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Secondary</button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                                <!--  /btn-group -->
                                                <div class="btn-group">
                                                    <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Success</button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                                <!--  /btn-group -->
                                                <div class="btn-group">
                                                    <button class="btn btn-brand dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info</button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                                <!--  /btn-group -->
                                                <div class="btn-group">
                                                    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danger</button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                                <!--  /btn-group -->
                                            </div>
                                        </div>
                                        <!--  end::button-state-dropdown -->
                                        <div class="tab-border"></div>
                                        <h6 class="card-subtitle mb-4 mt-4 text-muted">Single button dropdowns:</h6>
                                        <!--  single-button-dropdowns -->
                                        <div class="row mt-2">
                                            <div class="col">
                                                <div class="btn-group">
                                                    <button class="btn btn-primary" type="button">
                                                        Primary

                                                    </button>
                                                    <button class="btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
                                                    <div class="dropdown-menu"><a class="dropdown-item" href="#"><i class="i-Bell"></i> Action</a><a class="dropdown-item" href="#"><i class="i-Download-from-Cloud"></i> Another action</a><a class="dropdown-item" href="#"><i class="i-Money-Bag"></i> Something else here</a></div>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-info" type="button">
                                                        Info

                                                    </button>
                                                    <button class="btn btn-sm btn-info dropdown-toggle dropdown-toggle-split" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
                                                    <div class="dropdown-menu"><a class="dropdown-item" href="#"><i class="i-Bell"></i> Action</a><a class="dropdown-item" href="#"><i class="i-Download-from-Cloud"></i> Another action</a><a class="dropdown-item" href="#"><i class="i-Money-Bag"></i> Something else here</a></div>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-success" type="button">
                                                        Success

                                                    </button>
                                                    <button class="btn btn-sm btn-success dropdown-toggle dropdown-toggle-split" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
                                                    <div class="dropdown-menu"><a class="dropdown-item" href="#"><i class="i-Bell"></i> Action</a><a class="dropdown-item" href="#"><i class="i-Download-from-Cloud"></i> Another action</a><a class="dropdown-item" href="#"><i class="i-Money-Bag"></i> Something else here</a></div>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-warning" type="button">
                                                        Warning

                                                    </button>
                                                    <button class="btn btn-sm btn-warning dropdown-toggle dropdown-toggle-split" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
                                                    <div class="dropdown-menu"><a class="dropdown-item" href="#"><i class="i-Bell"></i> Action</a><a class="dropdown-item" href="#"><i class="i-Download-from-Cloud"></i> Another action</a><a class="dropdown-item" href="#"><i class="i-Money-Bag"></i> Something else here</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  end::single-button-dropdowns -->
                                        <div class="tab-border"></div>
                                        <h6 class="card-subtitle mb-4 mt-4 text-muted">Single icon button dropdowns:</h6>
                                        <!--  begin::single-icon-buttons-dropdown -->
                                        <div class="row mt-2">
                                            <div class="col">
                                                <div class="btn-group">
                                                    <button class="btn btn-primary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot"></span><span class="_dot _inline-dot"></span><span class="_dot _inline-dot"></span></button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn bg-white _r_btn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-warning"></span><span class="_dot _inline-dot bg-warning"></span><span class="_dot _inline-dot bg-warning"></span></button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-success _round-button" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot"></span><span class="_dot _inline-dot"></span><span class="_dot _inline-dot"></span></button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn bg-white _r_btn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _r_block-dot bg-danger"></span><span class="_dot _r_block-dot bg-primary"></span><span class="_dot _r_block-dot bg-danger"></span></button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn bg-white _r_btn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _r_block-dot bg-success"></span><span class="_dot _r_block-dot bg-success"></span><span class="_dot _r_block-dot bg-success"></span></button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  end::single-icon-buttons-dropdown -->
                                    </div>
                                </div>
                                <!--  end::basic example -->
                                <!--  begin::sizing -->
                                <div class="card">
                                    <div class="card-header">Sizing</div>
                                    <div class="card-body">
                                        <div class="card-text">Button dropdowns work with buttons of all sizes, including default and split dropdown buttons.</div>
                                        <div class="row mt-2">
                                            <div class="col-md-12 mt-2 mb-2">
                                                <!--  Large button groups (default and split) -->
                                                <div class="btn-group">
                                                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Large button

                                                    </button>
                                                    <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another Action</a><a class="dropdown-item" href="#">Something Else Here</a></div>
                                                </div>
                                                <div class="tab-border"></div>
                                            </div>
                                            <div class="col-md-12 mt-2 mb-2">
                                                <!--  Small button groups (default and split) -->
                                                <div class="btn-group">
                                                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Small button

                                                    </button>
                                                    <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another Action</a><a class="dropdown-item" href="#">Something Else Here</a></div>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-primary btn-sm" type="button">
                                                        Small split button

                                                    </button>
                                                    <button class="btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
                                                    <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another Action</a><a class="dropdown-item" href="#">Something Else Here</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  end::sizing -->
                            </div>
                            <div class="col-md-6">
                                <!--  begin::dropup-variation -->
                                <div class="card mb-4">
                                    <div class="card-header bg-transparent">Dropup Variation</div>
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-3 mt-2 text-muted">Trigger dropdown menus above elements by adding <code>.dropup</code> to the parent element.</h6>
                                        <!--  begin::single-button-dropup-variation -->
                                        <div class="row">
                                            <div class="col">
                                                <!--  Default dropup button -->
                                                <div class="btn-group dropup">
                                                    <button class="btn bg-white _r_btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown Up Button

                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <!--  Dropdown menu links --><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                                <!--  end::dropup button -->
                                            </div>
                                            <div class="col">
                                                <!--  Default dropleft button -->
                                                <div class="btn-group dropleft">
                                                    <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown Left Button

                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <!--  Dropdown menu links --><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                                <!--  end::dropleft button -->
                                            </div>
                                            <div class="col mt-4">
                                                <div class="btn-group dropright">
                                                    <button class="btn btn-outline-success" type="button">
                                                        Dropdown right button

                                                    </button>
                                                    <button class="btn btn-outline-success dropdown-toggle dropdown-toggle-split _r_drop_right" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
                                                    <div class="dropdown-menu" x-placement="right-start"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  end::single-button-dropup-variation -->
                                    </div>
                                </div>
                                <!--  end::dropup-variation -->
                                <!--  begin::dropdown-menu -->
                                <div class="card mb-4">
                                    <div class="card-header bg-transparent">Dropdown Menu</div>
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-3 mt-2 text-muted">You can optionally use <code>button</code> elements for your dropdowns items.</h6>
                                        <div class="row">
                                            <div class="col">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown menu

                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="dropdown">
                                                    <button class="btn btn-primary dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown menu

                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="dropdown">
                                                    <button class="btn btn-success dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown menu

                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-border"></div>
                                        <h6 class="card-subtitle mb-3 mt-2 text-muted">Add <code>.dropdown-menu-right</code> to a <code>.dropdown-menu</code> to right align the dropdown menu.</h6>
                                        <div class="row">
                                            <div class="col">
                                                <div class="btn-group">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Right Aligned

                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(130px, 38px, 0px);">
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item" type="button">Something else here</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="btn-group">
                                                    <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Left Aligned

                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-left" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item" type="button">Something else here</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="btn-group">
                                                    <button class="btn btn-outline-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Right Aligned

                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(130px, 38px, 0px);">
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item" type="button">Something else here</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-border"></div>
                                        <h6 class="card-subtitle mb-3 mt-2 text-muted">Add a header to label sections of actions in any dropdown menu.</h6>
                                        <div class="row">
                                            <div class="col">
                                                <div class="btn-group">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Right Aligned

                                                    </button>
                                                    <div class="dropdown-menu" x-placement="right-start">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="btn-group">
                                                    <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Left Aligned

                                                    </button>
                                                    <div class="dropdown-menu" x-placement="right-start">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="btn-group dropdown">
                                                    <button class="btn btn-outline-success" type="button">
                                                        Dropdown right button

                                                    </button>
                                                    <button class="btn btn-outline-success dropdown-toggle dropdown-toggle-split _r_drop_right" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
                                                    <div class="dropdown-menu" x-placement="right-start">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-border"></div>
                                        <h6 class="card-subtitle mb-3 mt-2 text-muted">Separate groups of related menu items with a divider.</h6>
                                        <div class="row">
                                            <div class="col">
                                                <div class="btn-group">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown button

                                                    </button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="btn-group">
                                                    <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown button

                                                    </button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="btn-group">
                                                    <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown button

                                                    </button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-border"></div>
                                        <h6 class="card-subtitle mb-3 mt-2 text-muted">Add <code>.disabled</code> to items in the dropdown to style them as disabled.</h6>
                                        <div class="row">
                                            <div class="col">
                                                <div class="btn-group">
                                                    <button class="btn btn-warning dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown button

                                                    </button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"><a class="dropdown-item active" href="#">Active link</a><a class="dropdown-item disabled" href="#">Disabled link</a><a class="dropdown-item" href="#">Another link</a></div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="btn-group">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown button

                                                    </button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"><a class="dropdown-item active" href="#">Active link</a><a class="dropdown-item disabled" href="#">Disabled link</a><a class="dropdown-item" href="#">Another link</a></div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="btn-group">
                                                    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown button

                                                    </button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"><a class="dropdown-item" href="#">Regular link</a><a class="dropdown-item disabled" href="#">Disabled link</a><a class="dropdown-item active" href="#">Active link</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  end::dropdown-menu -->
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