<?php require_once "./inc/static/head.php"; ?>
    <div class="app-admin-wrap layout-sidebar-large">
    <?php require_once "./inc/tmp/header.php"; ?>
        <?php require_once "./inc/tmp/menu.php"; ?>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>No ui SLider</h1>
                    <ul>
                        <li><a href="href">Componets</a></li>
                        <li>No ui SLider</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row mb-5">
                    <div class="col-md-12">
                        <h2 class="card-title mb-4">Slider Values</h2>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="slider-example">
                                    <h4 class="card-title text-left mb-4">Handles</h4>
                                    <div class="mb-3 slider-default" id="slider-handles"></div>
                                    <p>The number of handles can be set using the start option.</p>
                                </div>
                                <div class="slider-example">
                                    <h4 class="card-title text-left mb-4">More than two handles</h4>
                                    <div class="mb-3 slider-default" id="slider-handles4"></div>
                                    <p>The number of handles in the start option is not limited to two. You can use the connect option between every handle</p>
                                </div>
                                <div class="slider-example">
                                    <h4 class="card-title text-left mb-4">Range</h4>
                                    <div class="mb-3 slider-default" id="slider-range"></div>
                                    <p>Value:<span id="slider-range-value"></span></p>
                                    <p>The range has a minimum and maximum value. The minimum value cannot be equal to the maximum value.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="slider-example">
                                    <h4 class="card-title text-left mb-4">Stepping and snapping to values</h4>
                                    <div class="mb-3 slider-default" id="slider-step"></div>
                                    <p>The amount the slider changes on movement can be set using the step option.</p>
                                </div>
                                <div class="slider-example">
                                    <h4 class="card-title text-left mb-4">Non-linear sliders</h4>
                                    <div class="mb-3 slider-default" id="slider-non-linear"></div>
                                    <p>Value: <span id="slider-non-linear-value"></span></p>
                                    <p>noUiSlider offers some powerful mechanisms that allow a slider to behave in a non-linear fashion.</p>
                                </div>
                                <div class="slider-example">
                                    <h4 class="card-title text-left mb-4">Stepping in non-linear sliders</h4>
                                    <div class="mb-3 slider-default" id="slider-non-linear-step"></div>
                                    <p>Value: <span id="slider-non-linear-step-value"></span></p>
                                    <p>For every subrange in a non-linear slider, stepping can be set.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                </div>
                <!--  end of row mb-5 -->
                <div class="row mb-5">
                    <div class="col-md-7 mb-4">
                        <h2 class="card-title mb-2">Slider Behaviour</h2>
                        <p>noUiSlider offers several ways to handle user interaction. The range can be set to drag, and handles can move to taps. All these effects are optional, and can be enable by adding their keyword to the behaviour option. This option accepts a "-" separated list of "drag", "tap", "fixed", "snap", "unconstrained" or "none".</p>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="slider-example">
                                    <h4 class="card-title text-left mb-4">Tap</h4>
                                    <div class="mb-3 slider-default" id="tap"></div>
                                    <p>A handle snaps to a clicked location. A smooth transition is used. This option is default.</p>
                                </div>
                                <div class="slider-example">
                                    <h4 class="card-title text-left mb-4">Fixed dragging</h4>
                                    <div class="mb-3 slider-default" id="drag-fixed"></div>
                                    <p>
                                        Keeps the distance between handles fixed when the 'drag' flag is set.

                                    </p>
                                </div>
                                <div class="slider-example">
                                    <h4 class="card-title text-left mb-4">Drag</h4>
                                    <div class="mb-3 slider-default" id="drag"></div>
                                    <!--  <p>Value:<span id="slider-range-value"></span></p> -->
                                    <p>Makes the range draggable. Requires two handles. The connect option must be set to true.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="slider-example">
                                    <h4 class="card-title text-left mb-4">Snap</h4>
                                    <div class="mb-3 slider-default" id="snap"></div>
                                    <p>A handle snaps to a clicked location. It can immediatly be moved, without a mouseup + mousedown.</p>
                                </div>
                                <div class="slider-example">
                                    <h4 class="card-title text-left mb-4">Hover</h4>
                                    <div class="mb-3 slider-default" id="hover"></div>
                                    <!--  <p>Value: <span id="hover-val"></span></p> -->
                                    <p>With this option set, the slider fires hover events when a mouse or pen user hovers over the slider.</p>
                                </div>
                                <div class="slider-example">
                                    <h4 class="card-title text-left mb-4">Combined options</h4>
                                    <div class="mb-3 slider-default" id="combined"></div>
                                    <p>Most 'behaviour' flags can be combined.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                </div>
                <!--  end of row -->
                <div class="row mb-5">
                    <div class="col-md-7 mb-4">
                        <h2 class="card-title mb-2">scale/pips to a slider</h2>
                        <p>This feature allows you to generate points along the slider. Five options can be set: mode to determine where to place pips, values as additional options for mode, stepped to round pip values to the slider stepping, density to pre-scale the number of pips, and filter to manually modify pip size.</p>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title text-left mb-3">Range</h4>
                                <p class="text-left">
                                    The range mode uses the slider range to determine where the pips should be. A pip is generated for every percentage specified.

                                </p>
                                <div class="slider-example pl-4 pr-4 pb-4">
                                    <h4 class="card-title text-left mb-4">Left-to-Right (default)</h4>
                                    <div class="mb-5 slider-default" id="pips-range"></div>
                                </div>
                                <div class="slider-example pl-4 pr-4 pb-4">
                                    <h4 class="card-title text-left mb-4">Right-to-Left</h4>
                                    <div class="mb-3 slider-default" id="pips-range-rtl"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                    <div class="col-md-6 mb-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title text-left mb-3">Positions</h4>
                                <p class="text-left">
                                    In positions mode, pips are generated at percentage-based positions on the slider. Optionally, the stepped option can be set to true to match the pips to the slider steps.

                                </p>
                                <div class="slider-example pl-4 pr-4 pb-4">
                                    <h4 class="card-title text-left mb-4">Positions</h4>
                                    <div class="mb-5 slider-default" id="pips-positions"></div>
                                </div>
                                <div class="slider-example pl-4 pr-4 pb-4">
                                    <h4 class="card-title text-left mb-4">Stepped positions</h4>
                                    <div class="mb-3 slider-default" id="pips-positions-stepped"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                    <div class="col-md-6 mb-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title text-left mb-3">Count</h4>
                                <p class="text-left">The count mode can be used to generate a fixed number of pips. As with positions mode, the stepped option can be used.</p>
                                <div class="slider-example pl-4 pr-4 pb-4">
                                    <h4 class="card-title text-left mb-4">Count</h4>
                                    <div class="mb-5 slider-default" id="pips-count"></div>
                                </div>
                                <div class="slider-example pl-4 pr-4 pb-4">
                                    <h4 class="card-title text-left mb-4">Stepped count</h4>
                                    <div class="mb-3 slider-default" id="pips-count-stepped"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                    <div class="col-md-6 mb-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title text-left mb-3">Values</h4>
                                <p class="text-left">The values mode is similar to positions, but it accepts values instead of percentages. The stepped option can be used for this mode.</p>
                                <div class="slider-example pl-4 pr-4 pb-4">
                                    <h4 class="card-title text-left mb-4">Values</h4>
                                    <div class="mb-5 slider-default" id="pips-values"></div>
                                </div>
                                <div class="slider-example pl-4 pr-4 pb-4">
                                    <h4 class="card-title text-left mb-4">Stepped values</h4>
                                    <div class="mb-3 slider-default" id="pips-values-stepped"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                </div>
                <!--  end of row -->
                <div class="row mb-5">
                    <div class="col-md-7 mb-4">
                        <h2 class="card-title mb-1">Slider Colors - Handles</h2>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="slider-example pl-4 pr-4 pb-4">
                                    <h4 class="card-title text-left mb-3">Primary color slider</h4>
                                    <div class="slider-primary slider-default" id="primary-color-slider"></div>
                                </div>
                                <div class="slider-example pl-4 pr-4 pb-4">
                                    <h4 class="card-title text-left mb-3">success color slider</h4>
                                    <div class="slider-success slider-default" id="success-color-slider"></div>
                                </div>
                                <div class="slider-example pl-4 pr-4 pb-4">
                                    <h4 class="card-title text-left mb-3">info color slider</h4>
                                    <div class="slider-info slider-default" id="info-color-slider"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                    <div class="col-md-6 mb-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="slider-example pl-4 pr-4 pb-4">
                                    <h4 class="card-title text-left mb-3">warning color slider</h4>
                                    <div class="slider-warning slider-default" id="warning-color-slider"></div>
                                </div>
                                <div class="slider-example pl-4 pr-4 pb-4">
                                    <h4 class="card-title text-left mb-3">danger color slider</h4>
                                    <div class="slider-danger slider-default" id="danger-color-slider"></div>
                                </div>
                                <div class="slider-example pl-4 pr-4 pb-4">
                                    <h4 class="card-title text-left mb-3">custom color slider</h4>
                                    <div class="slider-custom slider-default" id="custom-color-slider"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                </div>
                <!--  end of row -->
                <div class="row mb-5">
                    <div class="col-md-12 mb-4">
                        <h2 class="card-title mb-1">Slider Sizing</h2>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title text-left mb-3">Default handle</h4>
                                <div class="slider-example pl-4 pr-4 pb-4">
                                    <h4 class="card-title text-left mb-3">extra large slider</h4>
                                    <div class="slider-extra-large slider-default slider-primary" id="extra-large-slider"></div>
                                </div>
                                <div class="slider-example pl-4 pr-4 pb-4">
                                    <h4 class="card-title text-left mb-3">large slider</h4>
                                    <div class="slider-large slider-default slider-info" id="large-slider"></div>
                                </div>
                                <div class="slider-example pl-4 pr-4 pb-4">
                                    <h4 class="card-title text-left mb-3">default slider</h4>
                                    <div class="slider-default slider-warning" id="default-slider"></div>
                                </div>
                                <div class="slider-example pl-4 pr-4 pb-4">
                                    <h4 class="card-title text-left mb-3">small slider</h4>
                                    <div class="slider-small slider-default slider-danger" id="small-slider"></div>
                                </div>
                                <div class="slider-example pl-4 pr-4 pb-4">
                                    <h4 class="card-title text-left mb-3">extra small slider</h4>
                                    <div class="slider-extra-small slider-default slider-custom" id="extra-small-slider"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                    <div class="col-md-4 mb-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title text-left mb-3">CIRCLE FILLED HANDLE</h4>
                                <div class="slider-example pl-4 pr-4 pb-4">
                                    <h4 class="card-title text-left mb-3">extra large slider</h4>
                                    <div class="circle-filled slider-default slider-extra-large slider-primary" id="extra-large-slider-circle-filled"></div>
                                </div>
                                <div class="slider-example pl-4 pr-4 pb-4">
                                    <h4 class="card-title text-left mb-3">large slider</h4>
                                    <div class="circle-filled slider-default slider-large slider-info" id="large-slider-circle-filled"></div>
                                </div>
                                <div class="slider-example pl-4 pr-4 pb-4">
                                    <h4 class="card-title text-left mb-3">default slider</h4>
                                    <div class="circle-filled slider-default slider-warning" id="default-slider-circle-filled"></div>
                                </div>
                                <div class="slider-example pl-4 pr-4 pb-4">
                                    <h4 class="card-title text-left mb-3">small slider</h4>
                                    <div class="circle-filled slider-small slider-default slider-danger" id="small-slider-circle-filled"></div>
                                </div>
                                <div class="slider-example pl-4 pr-4 pb-4">
                                    <h4 class="card-title text-left mb-3">extra small slider</h4>
                                    <div class="circle-filled slider-default slider-extra-small slider-custom" id="extra-small-slider-circle-filled"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                    <div class="col-md-4 mb-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title text-left mb-3">square FILLED HANDLE</h4>
                                <div class="slider-example pl-4 pr-4 pb-4">
                                    <h4 class="card-title text-left mb-3">extra large slider</h4>
                                    <div class="square-default slider-extra-large slider-primary" id="extra-large-slider-square-default"></div>
                                </div>
                                <div class="slider-example pl-4 pr-4 pb-4">
                                    <h4 class="card-title text-left mb-3">large slider</h4>
                                    <div class="square-default slider-large slider-info" id="large-slider-square-default"></div>
                                </div>
                                <div class="slider-example pl-4 pr-4 pb-4">
                                    <h4 class="card-title text-left mb-3">default slider</h4>
                                    <div class="square-default slider-warning" id="default-slider-square-default"></div>
                                </div>
                                <div class="slider-example pl-4 pr-4 pb-4">
                                    <h4 class="card-title text-left mb-3">small slider</h4>
                                    <div class="square-default slider-small slider-danger" id="small-slider-square-default"></div>
                                </div>
                                <div class="slider-example pl-4 pr-4 pb-4">
                                    <h4 class="card-title text-left mb-3">extra small slider</h4>
                                    <div class="square-default slider-extra-small slider-custom" id="extra-small-slider-square-default"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                </div>
                <!--  end of row -->
                <div class="row mb-4">
                    <div class="col-md-12 mb-4">
                        <h2 class="card-title mb-2">Vertical Sliders</h2>
                        <p class="w-50">The orientation setting can be used to set the slider to "vertical" or "horizontal". Set dimensions! Vertical sliders don't assume a default height, so you'll need to set one. You can use any unit you want, including % or px.</p>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title text-left mb-3">DEFAULT VERTICAL SLIDER</h4>
                                <div class="vertical-slider-example pl-4 pr-4 pb-4">
                                    <div class="slider-default slider-primary" id="slider-vertical-1"></div>
                                </div>
                                <div class="vertical-slider-example pl-4 pr-4 pb-4">
                                    <div class="slider-default slider-info" id="slider-vertical-2"></div>
                                </div>
                                <div class="vertical-slider-example pl-4 pr-4 pb-4">
                                    <div class="slider-default slider-warning" id="slider-vertical-3"></div>
                                </div>
                                <div class="vertical-slider-example pl-4 pr-4 pb-4">
                                    <div class="slider-default slider-danger" id="slider-vertical-4"></div>
                                </div>
                                <div class="vertical-slider-example pl-4 pr-4 pb-4">
                                    <div class="slider-default slider-custom" id="slider-vertical-5"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                    <div class="col-md-4 mb-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title text-left mb-3">CONNECT TO LOWER</h4>
                                <div class="vertical-slider-example pl-4 pr-4 pb-4">
                                    <div class="slider-default slider-primary" id="slider-vertical-connect-lower-1"></div>
                                </div>
                                <div class="vertical-slider-example pl-4 pr-4 pb-4">
                                    <div class="slider-default slider-info" id="slider-vertical-connect-lower-2"></div>
                                </div>
                                <div class="vertical-slider-example pl-4 pr-4 pb-4">
                                    <div class="slider-default slider-warning" id="slider-vertical-connect-lower-3"></div>
                                </div>
                                <div class="vertical-slider-example pl-4 pr-4 pb-4">
                                    <div class="slider-default slider-danger" id="slider-vertical-connect-lower-4"></div>
                                </div>
                                <div class="vertical-slider-example pl-4 pr-4 pb-4">
                                    <div class="slider-default slider-custom" id="slider-vertical-connect-lower-5"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                    <div class="col-md-4 mb-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title text-left mb-3">CONNECT TO Uper</h4>
                                <div class="vertical-slider-example pl-4 pr-4 pb-4">
                                    <div class="slider-default slider-primary" id="slider-vertical-connect-upper-1"></div>
                                </div>
                                <div class="vertical-slider-example pl-4 pr-4 pb-4">
                                    <div class="slider-default slider-info" id="slider-vertical-connect-upper-2"></div>
                                </div>
                                <div class="vertical-slider-example pl-4 pr-4 pb-4">
                                    <div class="slider-default slider-warning" id="slider-vertical-connect-upper-3"></div>
                                </div>
                                <div class="vertical-slider-example pl-4 pr-4 pb-4">
                                    <div class="slider-default slider-danger" id="slider-vertical-connect-upper-4"></div>
                                </div>
                                <div class="vertical-slider-example pl-4 pr-4 pb-4">
                                    <div class="slider-default slider-custom" id="slider-vertical-connect-upper-5"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                    <div class="col-md-4 mb-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title text-left mb-3">CONNECT TO Uper with tooltip</h4>
                                <div class="vertical-slider-example mr-3 pl-4 pr-4 pb-4">
                                    <div class="slider-default slider-primary" id="slider-vertical-tooltip-1"></div>
                                </div>
                                <div class="vertical-slider-example mr-3 pl-4 pr-4 pb-4">
                                    <div class="slider-default slider-info" id="slider-vertical-tooltip-2"></div>
                                </div>
                                <div class="vertical-slider-example mr-3 pl-4 pr-4 pb-4">
                                    <div class="slider-default slider-warning" id="slider-vertical-tooltip-3"></div>
                                </div>
                                <div class="vertical-slider-example mr-3 pl-4 pr-4 pb-4">
                                    <div class="slider-default slider-danger" id="slider-vertical-tooltip-4"></div>
                                </div>
                                <div class="vertical-slider-example mr-3 pl-4 pr-4 pb-4">
                                    <div class="slider-default slider-custom" id="slider-vertical-tooltip-5"></div>
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
    <script src="../../dist-assets/js/plugins/nuslider.min.js"></script>
    <script src="../../dist-assets/js/scripts/nuslider.script.min.js"></script>
</body>

</html>