<?php require_once "./inc/static/head.php"; ?>
    <div class="app-admin-wrap layout-sidebar-large">
    <?php require_once "./inc/tmp/header.php"; ?>
        <?php require_once "./inc/tmp/menu.php"; ?>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Collapsible</h1>
                    <ul>
                        <li><a href="href">UI Kits</a></li>
                        <li>Collapsible</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <!--  start Collapsible content -->
                <section class="content">
                    <!--  Collapsible option -->
                    <!--
            <div class="mb-3">
                                <h3 class="heading text-secondary">Collapsible options</h3>
                                <h5 class="text-mute">Examples of elements and states</h5>
                            </div> 
            -->
                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <div class="card card-body ul-border__bottom">
                                <div class="text-center">
                                    <h5 class="heading text-primary">Inline or block element</h5>
                                    <p class="mb-3 text-muted">Example of inline text toggler</p><span class="t-font-boldest ul-cursor--pointer" data-toggle="collapse" data-target="#collapse-text">
                                        Toggle content
                                    </span>
                                </div>
                                <div class="collapse" id="collapse-text">
                                    <div class="mt-3">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="card card-body ul-border__bottom">
                                <div class="text-center">
                                    <h5 class="heading text-primary">Text and other links</h5>
                                    <p class="mb-3 text-muted">Example of a simple <code><a></code> element</p><a class="font-weight-semibold collapsed typo_link text-primary t-font-boldest" href="#collapse-link" data-toggle="collapse" aria-expanded="false">
                                        Toggle content
                                    </a>
                                </div>
                                <div class="collapse" id="collapse-link">
                                    <div class="mt-3">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="card card-body ul-border__bottom">
                                <div class="text-center">
                                    <h5 class="heading text-primary">Single or multiple icons</h5>
                                    <p class="mb-3 text-muted">Icons in block or inline elements</p><a class="text-default collapsed" href="#collapse-icon" data-toggle="collapse" aria-expanded="false"><i class="i-Arrow-Down-2 t-font-boldest"></i></a>
                                </div>
                                <div class="collapse" id="collapse-icon">
                                    <div class="mt-3">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-4 mb-3">
                            <div class="card card-body ul-border__bottom">
                                <div class="text-center">
                                    <h5 class="heading text-primary">Link with href</h5>
                                    <p class="mb-3 text-muted">Specify target in <code>href</code> attribute</p><a class="btn btn-primary collapsed" data-toggle="collapse" href="#collapse-link-collapsed" aria-expanded="false">
                                        Toggle content
                                    </a>
                                </div>
                                <div class="collapse" id="collapse-link-collapsed">
                                    <div class="mt-3">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="card card-body border-top-info ul-border__bottom">
                                <div class="text-center">
                                    <h5 class="heading text-primary">Button with data attribute</h5>
                                    <p class="mb-3 text-muted">Specify target in <code>data-target</code> attribute</p>
                                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse-button-collapsed">
                                        Toggle content

                                    </button>
                                </div>
                                <div class="collapse" id="collapse-button-collapsed">
                                    <div class="mt-3">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="card card-body ul-border__bottom">
                                <div class="text-center">
                                    <h5 class="heading text-primary">Input with data attribute</h5>
                                    <p class="mb-3 text-muted">Specify target in <code>data-target</code> attribute</p>
                                    <input class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse-input-collapsed" value="Toggle content" />
                                </div>
                                <div class="collapse" id="collapse-input-collapsed">
                                    <div class="mt-3">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-4 mb-3">
                            <div class="card card-body ul-border__bottom">
                                <div class="text-center">
                                    <h5 class="heading text-primary">Link with href</h5>
                                    <p class="mb-3 text-muted">Expand content by default</p><a class="btn btn-primary" data-toggle="collapse" href="#collapse-link-expanded" aria-expanded="true">
                                        Toggle content
                                    </a>
                                </div>
                                <div class="collapse show" id="collapse-link-expanded">
                                    <div class="mt-3">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="card card-body ul-border__bottom">
                                <div class="text-center">
                                    <h5 class="heading text-primary">Button With Data Attribute</h5>
                                    <p class="mb-3 text-muted">Expand content by default</p>
                                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse-button-expanded">
                                        Toggle content

                                    </button>
                                </div>
                                <div class="collapse show" id="collapse-button-expanded">
                                    <div class="mt-3">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card card-body ul-border__bottom">
                                <div class="text-center">
                                    <h5 class="heading text-primary">Input with data attribute</h5>
                                    <p class="mb-3 text-muted">Expand content by default</p>
                                    <input class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse-input-expanded" value="Toggle content" />
                                </div>
                                <div class="collapse show" id="collapse-input-expanded">
                                    <div class="mt-3">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  /collapsible option -->
                    <!--  accordion and collapsible -->
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <!--  basic collapsible -->
                                    <div class="card-title mb-3">
                                        <h3>Basic collapsible</h3>
                                        <h5 class="text-mute">Basic collapsible functionality</h5>
                                    </div>
                                    <div>
                                        <div class="card ul-card__v-space">
                                            <div class="card-header">
                                                <h6 class="card-title mb-0"><a class="text-default" data-toggle="collapse" href="#collapse-item-default1" aria-expanded="true">Collapsible Item #1</a></h6>
                                            </div>
                                            <div class="collapse show" id="collapse-item-default1">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card ul-card__v-space">
                                            <div class="card-header">
                                                <h6 class="card-title mb-0"><a class="text-default collapsed" data-toggle="collapse" href="#collapse-item-default2" aria-expanded="false">Collapsible Item #2</a></h6>
                                            </div>
                                            <div class="collapse" id="collapse-item-default2">
                                                <div class="card-body">
                                                    Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card ul-card__v-space">
                                            <div class="card-header">
                                                <h6 class="card-title mb-0"><a class="text-default collapsed" data-toggle="collapse" href="#collapse-item-default3" aria-expanded="false">Collapsible Item #3</a></h6>
                                            </div>
                                            <div class="collapse" id="collapse-item-default3">
                                                <div class="card-body">
                                                    3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  end::basic collapsible -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title mb-3">
                                        <h3>Basic accordion</h3>
                                        <h5 class="text-mute">Basic accordion functionality</h5>
                                    </div>
                                    <div id="accordion-default">
                                        <div class="card ul-card__v-space">
                                            <div class="card-header">
                                                <h6 class="card-title mb-0"><a class="text-default" data-toggle="collapse" href="#accordion-item-defaulta1">Accordion Item #1</a></h6>
                                            </div>
                                            <div class="collapse show" id="accordion-item-defaulta1" data-parent="#accordion-default">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card ul-card__v-space">
                                            <div class="card-header">
                                                <h6 class="card-title mb-0"><a class="collapsed text-default" data-toggle="collapse" href="#accordion-item-defaulta2">Accordion Item #2</a></h6>
                                            </div>
                                            <div class="collapse" id="accordion-item-defaulta2" data-parent="#accordion-default">
                                                <div class="card-body">
                                                    Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card ul-card__v-space">
                                            <div class="card-header">
                                                <h6 class="card-title mb-0"><a class="collapsed text-default" data-toggle="collapse" href="#accordion-item-defaulta3">Accordion Item #3</a></h6>
                                            </div>
                                            <div class="collapse" id="accordion-item-defaulta3" data-parent="#accordion-default">
                                                <div class="card-body">
                                                    3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title mb-5">
                                        <h3>Accordion group</h3>
                                        <h5 class="text-mute">Display cards as card group</h5>
                                    </div>
                                    <div class="accordion" id="accordionExample">
                                        <div class="card ul-card__border-radius">
                                            <div class="card-header">
                                                <h6 class="card-title mb-0"><a class="text-default" data-toggle="collapse" href="#accordion-item-group1">Accordion asd Item #1</a></h6>
                                            </div>
                                            <div class="collapse show" id="accordion-item-group1" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card ul-card__border-radius">
                                            <div class="card-header">
                                                <h6 class="card-title mb-0"><a class="collapsed text-default" data-toggle="collapse" href="#accordion-item-group2">Accordion Item #2</a></h6>
                                            </div>
                                            <div class="collapse" id="accordion-item-group2" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card ul-card__border-radius">
                                            <div class="card-header">
                                                <h6 class="card-title mb-0"><a class="collapsed text-default" data-toggle="collapse" href="#accordion-item-default3">Accordion Item #3</a></h6>
                                            </div>
                                            <div class="collapse" id="accordion-item-default3" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-5">
                                        <h3>Collapsible group</h3>
                                        <h5 class="text-mute">Display cards as card group</h5>
                                    </div>
                                    <div>
                                        <div class="card ul-card__border-radius">
                                            <div class="card-header">
                                                <h6 class="card-title mb-0"><a class="text-default collapsed" data-toggle="collapse" href="#accordion-item-coll-group1" aria-expanded="false">Accordion asd Item #1</a></h6>
                                            </div>
                                            <div id="accordion-item-coll-group1">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card ul-card__border-radius">
                                            <div class="card-header">
                                                <h6 class="card-title mb-0"><a class="collapsed text-default" data-toggle="collapse" href="#accordion-item-coll-group2">Accordion Item #2</a></h6>
                                            </div>
                                            <div class="collapse" id="accordion-item-coll-group2">
                                                <div class="card-body">
                                                    Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card ul-card__border-radius">
                                            <div class="card-header">
                                                <h6 class="card-title mb-0"><a class="collapsed text-default" data-toggle="collapse" href="#accordion-item-coll-default3">Accordion Item #3</a></h6>
                                            </div>
                                            <div class="collapse" id="accordion-item-coll-default3">
                                                <div class="card-body">
                                                    3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  end collapsible group -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <!--  accordion with controls -->
                                    <div class="card-title mb-5 mt-5">
                                        <h3>Accordion With Controls</h3>
                                        <h5 class="text-mute">Using card controls, except <code>collapse</code></h5>
                                    </div>
                                    <div class="accordion" id="accordionControl">
                                        <div class="card ul-card__v-space">
                                            <div class="card-header header-elements-inline">
                                                <h6 class="card-title mb-0"><a class="text-default" data-toggle="collapse" href="#accordion-item-group-control1">Accordion Item #1</a></h6>
                                                <div class="list-icons ul-card__list--icon-font"><a class="list-icons-item" data-action="reload"><i class="i-Reload"></i></a><a class="list-icons-item ui-sortable-handle" data-action="move"><i class="i-Drag"></i></a><a class="list-icons-item" data-action="fullscreen"><i class="i-Full-Screen-2"></i></a><a class="list-icons-item" data-action="remove"><i class="i-Close-Window"></i></a></div>
                                            </div>
                                            <div class="collapse show" id="accordion-item-group-control1" data-parent="#accordionControl">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card ul-card__v-space">
                                            <div class="card-header header-elements-inline">
                                                <h6 class="card-title mb-0"><a class="text-default" data-toggle="collapse" href="#accordion-item-group-control2">Accordion Item #2</a></h6>
                                                <div class="list-icons ul-card__list--icon-font"><a class="list-icons-item" data-action="reload"><i class="i-Reload"></i></a><a class="list-icons-item ui-sortable-handle" data-action="move"><i class="i-Drag"></i></a><a class="list-icons-item" data-action="fullscreen"><i class="i-Full-Screen-2"></i></a><a class="list-icons-item" data-action="remove"><i class="i-Close-Window"></i></a></div>
                                            </div>
                                            <div class="collapse" id="accordion-item-group-control2" data-parent="#accordionControl">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card ul-card__v-space">
                                            <div class="card-header header-elements-inline">
                                                <h6 class="card-title mb-0"><a class="text-default" data-toggle="collapse" href="#accordion-item-group-control3">Accordion Item #3</a></h6>
                                                <div class="list-icons ul-card__list--icon-font"><a class="list-icons-item" data-action="reload"><i class="i-Reload"></i></a><a class="list-icons-item ui-sortable-handle" data-action="move"><i class="i-Drag"></i></a><a class="list-icons-item" data-action="fullscreen"><i class="i-Full-Screen-2"></i></a><a class="list-icons-item" data-action="remove"><i class="i-Close-Window"></i></a></div>
                                            </div>
                                            <div class="collapse" id="accordion-item-group-control3" data-parent="#accordionControl">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  /accordion with controls -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <!--  collapsible with controls -->
                                    <div class="card-title mb-5 mt-5">
                                        <h3>Collapsible with controls</h3>
                                        <h5 class="text-mute">Using card controls, except <code>collapse</code></h5>
                                    </div>
                                    <div>
                                        <div class="card ul-card__v-space">
                                            <div class="card-header header-elements-inline">
                                                <h6 class="card-title mb-0"><a class="text-default collapsed" data-toggle="collapse" href="#accordion-item-group-colw-control1" aria-expanded="false">Accordion Item #1</a></h6>
                                                <div class="list-icons ul-card__list--icon-font"><a class="list-icons-item" data-action="reload"><i class="i-Reload"></i></a><a class="list-icons-item ui-sortable-handle" data-action="move"><i class="i-Drag"></i></a><a class="list-icons-item" data-action="fullscreen"><i class="i-Full-Screen-2"></i></a><a class="list-icons-item" data-action="remove"><i class="i-Close-Window"></i></a></div>
                                            </div>
                                            <div class="show" id="accordion-item-group-colw-control1">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card ul-card__v-space">
                                            <div class="card-header header-elements-inline">
                                                <h6 class="card-title mb-0"><a class="text-default" data-toggle="collapse" href="#accordion-item-group-colw-control2">Accordion Item #2</a></h6>
                                                <div class="list-icons ul-card__list--icon-font"><a class="list-icons-item" data-action="reload"><i class="i-Reload"></i></a><a class="list-icons-item ui-sortable-handle" data-action="move"><i class="i-Drag"></i></a><a class="list-icons-item" data-action="fullscreen"><i class="i-Full-Screen-2"></i></a><a class="list-icons-item" data-action="remove"><i class="i-Close-Window"></i></a></div>
                                            </div>
                                            <div class="collapse" id="accordion-item-group-colw-control2">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card ul-card__v-space">
                                            <div class="card-header header-elements-inline">
                                                <h6 class="card-title mb-0"><a class="text-default" data-toggle="collapse" href="#accordion-item-group-colw-control3">Accordion Item #3</a></h6>
                                                <div class="list-icons ul-card__list--icon-font"><a class="list-icons-item" data-action="reload"><i class="i-Reload"></i></a><a class="list-icons-item ui-sortable-handle" data-action="move"><i class="i-Drag"></i></a><a class="list-icons-item" data-action="fullscreen"><i class="i-Full-Screen-2"></i></a><a class="list-icons-item" data-action="remove"><i class="i-Close-Window"></i></a></div>
                                            </div>
                                            <div class="collapse" id="accordion-item-group-colw-control3">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  end::collapsible with controls -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <!--  left control icon -->
                                    <div class="card-title">
                                        <h3>Left control ssss icon</h3>
                                        <h5 class="text-mute">Using <code>left</code> aligned control icon</h5>
                                    </div>
                                    <div class="accordion" id="accordionLeftIcon">
                                        <div class="card ul-card__v-space">
                                            <div class="card-header header-elements-inline">
                                                <h6 class="card-title ul-collapse__icon--size ul-collapse__left-icon mb-0"><a data-toggle="collapse" href="#accordion-item-icon-left-1">Accordion asdasd Item #1</a></h6>
                                            </div>
                                            <div class="collapse show" id="accordion-item-icon-left-1" data-parent="#accordionLeftIcon">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card ul-card__v-space">
                                            <div class="card-header header-elements-inline">
                                                <h6 class="card-title ul-collapse__icon--size ul-collapse__left-icon mb-0"><a class="collapsed" data-toggle="collapse" href="#accordion-item-icon-left-2">Accordion Item #2</a></h6>
                                            </div>
                                            <div class="collapse" id="accordion-item-icon-left-2" data-parent="#accordionLeftIcon">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card ul-card__v-space">
                                            <div class="card-header header-elements-inline">
                                                <h6 class="card-title ul-collapse__icon--size ul-collapse__left-icon mb-0"><a class="collapsed" data-toggle="collapse" href="#accordion-item-icon-left-3">Accordion Item #3</a></h6>
                                            </div>
                                            <div class="collapse" id="accordion-item-icon-left-3" data-parent="#accordionLeftIcon">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  end::left control icon -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3>Left control icon</h3>
                                        <h5 class="text-mute">Using <code>left</code> aligned control icon</h5>
                                    </div>
                                    <div class="accordion">
                                        <div class="card ul-card__v-space">
                                            <div class="card-header header-elements-inline">
                                                <h6 class="card-title ul-collapse__icon--size ul-collapse__left-icon mb-0"><a data-toggle="collapse" href="#accordion-item-icon-left-coll-1" aria-expanded="false">Accordion asdasd Item #1</a></h6>
                                            </div>
                                            <div class="show" id="accordion-item-icon-left-coll-1">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card ul-card__v-space">
                                            <div class="card-header header-elements-inline">
                                                <h6 class="card-title ul-collapse__icon--size ul-collapse__left-icon mb-0"><a class="collapsed" data-toggle="collapse" href="#accordion-item-icon-left-coll-2">Accordion Item #2</a></h6>
                                            </div>
                                            <div class="collapse" id="accordion-item-icon-left-coll-2">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card ul-card__v-space">
                                            <div class="card-header header-elements-inline">
                                                <h6 class="card-title ul-collapse__icon--size ul-collapse__left-icon mb-0"><a class="collapsed" data-toggle="collapse" href="#accordion-item-icon-left-coll-3">Accordion Item #3</a></h6>
                                            </div>
                                            <div class="collapse" id="accordion-item-icon-left-coll-3">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <!--  right control icon -->
                                    <div class="card-title">
                                        <h3>Right control icon</h3>
                                        <h5 class="text-mute">Using <code>right</code> aligned control icon</h5>
                                    </div>
                                    <div class="accordion" id="accordionRightIcon">
                                        <div class="card ul-card__v-space">
                                            <div class="card-header header-elements-inline">
                                                <h6 class="card-title ul-collapse__icon--size ul-collapse__right-icon mb-0"><a class="text-default" data-toggle="collapse" href="#accordion-item-icon-right-1">Accordion asdasd Item #1</a></h6>
                                            </div>
                                            <div class="collapse show" id="accordion-item-icon-right-1" data-parent="#accordionRightIcon">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card ul-card__v-space">
                                            <div class="card-header header-elements-inline">
                                                <h6 class="card-title ul-collapse__icon--size ul-collapse__right-icon mb-0"><a class="text-default collapsed" data-toggle="collapse" href="#accordion-item-icon-right-2">Accordion Item #2</a></h6>
                                            </div>
                                            <div class="collapse" id="accordion-item-icon-right-2" data-parent="#accordionRightIcon">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card ul-card__v-space">
                                            <div class="card-header header-elements-inline">
                                                <h6 class="card-title ul-collapse__icon--size ul-collapse__right-icon mb-0"><a class="text-default collapsed" data-toggle="collapse" href="#accordion-item-icon-right-3">Accordion Item #3</a></h6>
                                            </div>
                                            <div class="collapse" id="accordion-item-icon-right-3" data-parent="#accordionRightIcon">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  /right control icon -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3>Right control icon right one</h3>
                                        <h5 class="text-mute">Using <code>right</code> aligned control icon</h5>
                                    </div>
                                    <div class="accordion" id="accordionRightIcon">
                                        <div class="card ul-card__v-space">
                                            <div class="card-header header-elements-inline">
                                                <h6 class="card-title ul-collapse__icon--size ul-collapse__right-icon mb-0"><a class="text-default" data-toggle="collapse" href="#accordion-item-icon-right-coll-1">Accordion asdasd Item #1</a></h6>
                                            </div>
                                            <div class="collapse show" id="accordion-item-icon-right-coll-1">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card ul-card__v-space">
                                            <div class="card-header header-elements-inline">
                                                <h6 class="card-title ul-collapse__icon--size ul-collapse__right-icon mb-0"><a class="text-default collapsed" data-toggle="collapse" href="#accordion-item-icon-right-coll-2">Accordion Item #2</a></h6>
                                            </div>
                                            <div class="collapse" id="accordion-item-icon-right-coll-2">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card ul-card__v-space">
                                            <div class="card-header header-elements-inline">
                                                <h6 class="card-title ul-collapse__icon--size ul-collapse__right-icon mb-0"><a class="text-default collapsed" data-toggle="collapse" href="#accordion-item-icon-right-coll-3">Accordion Item #3</a></h6>
                                            </div>
                                            <div class="collapse" id="accordion-item-icon-right-coll-3">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3>Nested accordions</h3>
                                        <h5 class="text-mute">Multiple accordion levels</h5>
                                    </div>
                                    <div id="accordion-parent">
                                        <div class="card ul-card__v-space">
                                            <div class="card-header header-elements-inline">
                                                <h6 class="card-title mb-0"><a class="text-default" data-toggle="collapse" href="#accordion-item-nested-parent1" aria-expanded="true">Parent accordion item #1</a></h6>
                                            </div>
                                            <div class="collapse show" id="accordion-item-nested-parent1" data-parent="#accordion-parent">
                                                <div class="card-body">
                                                    <!--  Child level -->
                                                    <div id="accordion-child1">
                                                        <div class="card ul-card__v-space">
                                                            <div class="card-header bg-dark header-elements-inline">
                                                                <h6 class="card-title mb-0"><a class="text-white" data-toggle="collapse" href="#accordion-item-nested-child1" aria-expanded="true">Child accordion item #1</a></h6>
                                                            </div>
                                                            <div class="collapse show" id="accordion-item-nested-child1" data-parent="#accordion-child1">
                                                                <div class="card-body">
                                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card ul-card__v-space">
                                                            <div class="card-header bg-dark">
                                                                <h6 class="card-title mb-0"><a class="collapsed text-white" data-toggle="collapse" href="#accordion-item-nested-child2">Child accordion item #2</a></h6>
                                                            </div>
                                                            <div class="collapse" id="accordion-item-nested-child2" data-parent="#accordion-child1">
                                                                <div class="card-body">
                                                                    Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--  /child level -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cardul-card__v-space">
                                            <div class="card-header">
                                                <h6 class="card-title mb-0"><a class="collapsed text-default" data-toggle="collapse" href="#accordion-item-nested-parent2">Parent accordion item #2</a></h6>
                                            </div>
                                            <div class="collapse" id="accordion-item-nested-parent2" data-parent="#accordion-parent">
                                                <div class="card-body">
                                                    <!--  Child level -->
                                                    <div id="accordion-child2">
                                                        <div class="cardul-card__v-space">
                                                            <div class="card-header bg-dark">
                                                                <h6 class="card-title mb-0"><a class="text-white" data-toggle="collapse" href="#accordion-item-nested-child3">Child accordion item #1</a></h6>
                                                            </div>
                                                            <div class="collapse show" id="accordion-item-nested-child3" data-parent="#accordion-child2">
                                                                <div class="card-body">
                                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card ul-card__v-space">
                                                            <div class="card-header bg-dark">
                                                                <h6 class="card-title mb-0"><a class="collapsed text-white" data-toggle="collapse" href="#accordion-item-nested-child4">Child accordion item #2</a></h6>
                                                            </div>
                                                            <div class="collapse" id="accordion-item-nested-child4" data-parent="#accordion-child2">
                                                                <div class="card-body">
                                                                    Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--  /child level -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3>Nested collapsibles</h3>
                                        <h5 class="text-mute">Multiple collapsibles levels</h5>
                                    </div>
                                    <div>
                                        <div class="card ul-card__v-space">
                                            <div class="card-header">
                                                <h6 class="card-title mb-0"><a class="text-default" data-toggle="collapse" href="#collapsible-item-nested-parent1">Parent collapsible item #1</a></h6>
                                            </div>
                                            <div class="collapse show" id="collapsible-item-nested-parent1">
                                                <div class="card-body">
                                                    <!--  Child level -->
                                                    <div class="card ul-card__v-space">
                                                        <div class="card-header bg-dark">
                                                            <h6 class="card-title mb-0"><a class="text-white" data-toggle="collapse" href="#collapsible-item-nested-child1">Child collapsible item #1</a></h6>
                                                        </div>
                                                        <div class="collapse show" id="collapsible-item-nested-child1">
                                                            <div class="card-body">
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card ul-card__v-space">
                                                        <div class="card-header bg-dark">
                                                            <h6 class="card-title mb-0"><a class="collapsed text-white" data-toggle="collapse" href="#collapsible-item-nested-child2">Child collapsible item #2</a></h6>
                                                        </div>
                                                        <div class="collapse" id="collapsible-item-nested-child2">
                                                            <div class="card-body">
                                                                Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--  /child level -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card ul-card__v-space">
                                            <div class="card-header">
                                                <h6 class="card-title mb-0"><a class="collapsed text-default" data-toggle="collapse" href="#collapsible-item-nested-parent2">Parent collapsible item #2</a></h6>
                                            </div>
                                            <div class="collapse" id="collapsible-item-nested-parent2">
                                                <div class="card-body">
                                                    <!--  Child level -->
                                                    <div class="card ul-card__v-space">
                                                        <div class="card-header bg-dark">
                                                            <h6 class="card-title mb-0"><a class="text-white" data-toggle="collapse" href="#collapsible-item-nested-child3">Child collapsible item #1</a></h6>
                                                        </div>
                                                        <div class="collapse show" id="collapsible-item-nested-child3">
                                                            <div class="card-body">
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card ul-card__v-space">
                                                        <div class="card-header bg-dark">
                                                            <h6 class="card-title mb-0"><a class="collapsed text-white" data-toggle="collapse" href="#collapsible-item-nested-child4">Child collapsible item #2</a></h6>
                                                        </div>
                                                        <div class="collapse" id="collapsible-item-nested-child4">
                                                            <div class="card-body">
                                                                Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--  /child level -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3>Cards styling</h3>
                                        <h5 class="text-mute">Using <code>left</code> aligned control icon</h5>
                                    </div>
                                    <div id="accordion-default-c">
                                        <div class="card ul-card__v-space">
                                            <div class="card-header bg-danger">
                                                <h6 class="card-title mb-0"><a class="text-white collapsed" data-toggle="collapse" href="#accordion-item-default-c1" aria-expanded="false">Accordion Item #1</a></h6>
                                            </div>
                                            <div class="collapse" id="accordion-item-default-c1" data-parent="#accordion-default-c">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card ul-card__v-space">
                                            <div class="card-header bg-success">
                                                <h6 class="card-title mb-0"><a class="collapsed text-white" data-toggle="collapse" href="#accordion-item-default-c2">Accordion Item #2</a></h6>
                                            </div>
                                            <div class="collapse" id="accordion-item-default-c2" data-parent="#accordion-default-c">
                                                <div class="card-body">
                                                    Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card ul-card__v-space">
                                            <div class="card-header bg-info">
                                                <h6 class="card-title mb-0"><a class="collapsed text-white" data-toggle="collapse" href="#accordion-item-default-c3">Accordion Item #3</a></h6>
                                            </div>
                                            <div class="collapse" id="accordion-item-default-c3" data-parent="#accordion-default-c">
                                                <div class="card-body">
                                                    3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3>Cards styling</h3>
                                        <h5 class="text-mute">Using <code>left</code> aligned control icon</h5>
                                    </div>
                                    <div>
                                        <div class="card ul-card__v-space">
                                            <div class="card-header bg-danger">
                                                <h6 class="card-title mb-0"><a class="text-white collapsed" data-toggle="collapse" href="#accordion-item-default-col-c1" aria-expanded="false">Accordion Item #1</a></h6>
                                            </div>
                                            <div class="collapse" id="accordion-item-default-col-c1">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card ul-card__v-space">
                                            <div class="card-header bg-success">
                                                <h6 class="card-title mb-0"><a class="collapsed text-white" data-toggle="collapse" href="#accordion-item-default-col-c2">Accordion Item #2</a></h6>
                                            </div>
                                            <div class="collapse" id="accordion-item-default-col-c2">
                                                <div class="card-body">
                                                    Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card ul-card__v-space">
                                            <div class="card-header bg-info">
                                                <h6 class="card-title mb-0"><a class="collapsed text-white" data-toggle="collapse" href="#accordion-item-default-col-c3">Accordion Item #3</a></h6>
                                            </div>
                                            <div class="collapse" id="accordion-item-default-col-c3">
                                                <div class="card-body">
                                                    3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  /accordion collapsible -->
                </section>
                <!--  end Collapsible content -->
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