<?php require_once "./inc/static/head.php"; ?>
    <div class="app-admin-wrap layout-sidebar-large">
    <?php require_once "./inc/tmp/header.php"; ?>
        <?php require_once "./inc/tmp/menu.php"; ?>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Task Manager</h1>
                    <ul>
                        <li><a href="">Apps</a></li>
                        <li>Task Manager</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div id="task-manager">
                    <!-- top-content-bar-->
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="navbar navbar-expand-lg navbar-light navbar-component rounded">
                                <div class="text-center d-lg-none w-100">
                                    <button class="task-manager-button navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbar-filter"><i class="i-Filter-2"></i></button>
                                </div>
                                <div class="navbar-collapse collapse" id="navbar-filter">
                                    <div class="filter-mobile"><span class="navbar-text font-weight-semibold">Filter:</span></div>
                                    <ul class="navbar-nav flex-wrap">
                                        <li class="nav-item dropdown"><a class="navbar-nav-link" href="#" data-toggle="dropdown" aria-expanded="false"><i class="i-Time-Window"></i> By date</a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Show all</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Yesterday</a><a class="dropdown-item" href="#">This week</a><a class="dropdown-item" href="#">This month</a><a class="dropdown-item" href="#">This year</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown"><a class="navbar-nav-link" href="#" data-toggle="dropdown" aria-expanded="false"><i class="i-Bar-Chart-2"></i> By status</a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Show all</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Open</a><a class="dropdown-item" href="#">On hold</a><a class="dropdown-item" href="#">Resolved</a><a class="dropdown-item" href="#">Closed</a><a class="dropdown-item" href="#">Duplicate</a><a class="dropdown-item" href="#">Invalid</a><a class="dropdown-item" href="#">Wontfix</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown"><a class="navbar-nav-link" href="#" data-toggle="dropdown" aria-expanded="false"><i class="i-Arrow-Turn-Right"></i> By priority</a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Show all</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Highest</a><a class="dropdown-item" href="#">High</a><a class="dropdown-item" href="#">Normal</a><a class="dropdown-item" href="#">Low</a>
                                            </div>
                                        </li>
                                    </ul>
                                    <!--
                    <span class="navbar-text font-weight-semibold mr-2 ml-md-auto">
                    View mode:
                    </span>
                    <div class="form-check form-check-switchery form-check-switchery-double mb-3 mb-lg-0">
                    <label class="form-check-label">
                    List
                    <input type="checkbox" class="form-input-switchery" checked="" data-fouc="" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="background-color: rgb(100, 189, 99); border-color: rgb(100, 189, 99); box-shadow: rgb(100, 189, 99) 0px 0px 0px 10px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 18px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s; background-color: rgb(255, 255, 255);"></small></span>
                    Grid
                    </label>
                    </div>
                    -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end-of-top-content-bar-->
                    <!-- content-start-->
                    <div class="row">
                        <div class="col-xl-9">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card mt-4 mb-4">
                                        <div class="card-body">
                                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                                <div>
                                                    <h6><a href="">#23. New icons set for an iOS app</a></h6>
                                                    <p class="ul-task-manager__paragraph mb-3">A collection of textile samples lay spread out on the table..</p><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted" /></a><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted 2" /></a><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted 2" /></a><a href="#"><i class="ul-task-manager__fonts i-Add"></i></a><a class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed" href=""><i class="icon-plus22"></i></a>
                                                </div>
                                                <ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
                                                    <li><span class="ul-task-manager__font-date text-muted">20 January, 2015</span></li>
                                                    <li class="dropdown">Priority: &nbsp;<a class="badge badge-danger align-top dropdown-toggle" href="#" data-toggle="dropdown">Blocker</a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item active" href="#"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a></div>
                                                    </li>
                                                    <li><a href="#">Eternity app</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center"><span>Due: <span class="font-weight-semibold">18 hours</span></span>
                                            <ul class="list-inline mb-0 mt-2 mt-sm-0">
                                                <li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown">On hold</a>
                                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Open</a><a class="dropdown-item active" href="#">On hold</a><a class="dropdown-item" href="#">Resolved</a><a class="dropdown-item" href="#">Closed</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Dublicate</a><a class="dropdown-item" href="#">Invalid</a><a class="dropdown-item" href="#">Wontfix</a>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown"><i class="i-Gear-2"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="icon-alarm-add"></i> Check in</a><a class="dropdown-item" href="#"><i class="icon-attachment"></i> Attach screenshot</a><a class="dropdown-item" href="#"><i class="icon-rotate-ccw2"></i> Reassign</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="icon-pencil7"></i> Edit task</a><a class="dropdown-item" href="#"><i class="icon-cross2"></i> Remove</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card mt-4 mb-4">
                                        <div class="card-body">
                                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                                <div>
                                                    <h6><a href="">#23. New icons set for an iOS app</a></h6>
                                                    <p class="ul-task-manager__paragraph mb-3">A collection of textile samples lay spread out on the table..</p><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted" /></a><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted 2" /></a><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted 2" /></a><a href="#"><i class="ul-task-manager__fonts i-Add"></i></a><a class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed" href=""><i class="icon-plus22"></i></a>
                                                </div>
                                                <ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
                                                    <li><span class="ul-task-manager__font-date text-muted">20 January, 2015</span></li>
                                                    <li class="dropdown">Priority: &nbsp;<a class="badge badge-danger align-top dropdown-toggle" href="#" data-toggle="dropdown">Blocker</a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item active" href="#"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a></div>
                                                    </li>
                                                    <li><a href="#">Eternity app</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center"><span>Due: <span class="font-weight-semibold">18 hours</span></span>
                                            <ul class="list-inline mb-0 mt-2 mt-sm-0">
                                                <li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown">On hold</a>
                                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Open</a><a class="dropdown-item active" href="#">On hold</a><a class="dropdown-item" href="#">Resolved</a><a class="dropdown-item" href="#">Closed</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Dublicate</a><a class="dropdown-item" href="#">Invalid</a><a class="dropdown-item" href="#">Wontfix</a>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown"><i class="i-Gear-2"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="icon-alarm-add"></i> Check in</a><a class="dropdown-item" href="#"><i class="icon-attachment"></i> Attach screenshot</a><a class="dropdown-item" href="#"><i class="icon-rotate-ccw2"></i> Reassign</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="icon-pencil7"></i> Edit task</a><a class="dropdown-item" href="#"><i class="icon-cross2"></i> Remove</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card mt-4 mb-4">
                                        <div class="card-body">
                                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                                <div>
                                                    <h6><a href="">#23. New icons set for an iOS app</a></h6>
                                                    <p class="ul-task-manager__paragraph mb-3">A collection of textile samples lay spread out on the table..</p><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted" /></a><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted 2" /></a><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted 2" /></a><a href="#"><i class="ul-task-manager__fonts i-Add"></i></a><a class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed" href=""><i class="icon-plus22"></i></a>
                                                </div>
                                                <ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
                                                    <li><span class="ul-task-manager__font-date text-muted">20 January, 2015</span></li>
                                                    <li class="dropdown">Priority: &nbsp;<a class="badge badge-danger align-top dropdown-toggle" href="#" data-toggle="dropdown">Blocker</a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item active" href="#"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a></div>
                                                    </li>
                                                    <li><a href="#">Eternity app</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center"><span>Due: <span class="font-weight-semibold">18 hours</span></span>
                                            <ul class="list-inline mb-0 mt-2 mt-sm-0">
                                                <li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown">On hold</a>
                                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Open</a><a class="dropdown-item active" href="#">On hold</a><a class="dropdown-item" href="#">Resolved</a><a class="dropdown-item" href="#">Closed</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Dublicate</a><a class="dropdown-item" href="#">Invalid</a><a class="dropdown-item" href="#">Wontfix</a>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown"><i class="i-Gear-2"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="icon-alarm-add"></i> Check in</a><a class="dropdown-item" href="#"><i class="icon-attachment"></i> Attach screenshot</a><a class="dropdown-item" href="#"><i class="icon-rotate-ccw2"></i> Reassign</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="icon-pencil7"></i> Edit task</a><a class="dropdown-item" href="#"><i class="icon-cross2"></i> Remove</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card mt-4 mb-4">
                                        <div class="card-body">
                                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                                <div>
                                                    <h6><a href="">#23. New icons set for an iOS app</a></h6>
                                                    <p class="ul-task-manager__paragraph mb-3">A collection of textile samples lay spread out on the table..</p><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted" /></a><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted 2" /></a><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted 2" /></a><a href="#"><i class="ul-task-manager__fonts i-Add"></i></a><a class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed" href=""><i class="icon-plus22"></i></a>
                                                </div>
                                                <ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
                                                    <li><span class="ul-task-manager__font-date text-muted">20 January, 2015</span></li>
                                                    <li class="dropdown">Priority: &nbsp;<a class="badge badge-danger align-top dropdown-toggle" href="#" data-toggle="dropdown">Blocker</a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item active" href="#"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a></div>
                                                    </li>
                                                    <li><a href="#">Eternity app</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center"><span>Due: <span class="font-weight-semibold">18 hours</span></span>
                                            <ul class="list-inline mb-0 mt-2 mt-sm-0">
                                                <li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown">On hold</a>
                                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Open</a><a class="dropdown-item active" href="#">On hold</a><a class="dropdown-item" href="#">Resolved</a><a class="dropdown-item" href="#">Closed</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Dublicate</a><a class="dropdown-item" href="#">Invalid</a><a class="dropdown-item" href="#">Wontfix</a>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown"><i class="i-Gear-2"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="icon-alarm-add"></i> Check in</a><a class="dropdown-item" href="#"><i class="icon-attachment"></i> Attach screenshot</a><a class="dropdown-item" href="#"><i class="icon-rotate-ccw2"></i> Reassign</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="icon-pencil7"></i> Edit task</a><a class="dropdown-item" href="#"><i class="icon-cross2"></i> Remove</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card mt-4 mb-4">
                                        <div class="card-body">
                                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                                <div>
                                                    <h6><a href="">#23. New icons set for an iOS app</a></h6>
                                                    <p class="ul-task-manager__paragraph mb-3">A collection of textile samples lay spread out on the table..</p><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted" /></a><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted 2" /></a><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted 2" /></a><a href="#"><i class="ul-task-manager__fonts i-Add"></i></a><a class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed" href=""><i class="icon-plus22"></i></a>
                                                </div>
                                                <ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
                                                    <li><span class="ul-task-manager__font-date text-muted">20 January, 2015</span></li>
                                                    <li class="dropdown">Priority: &nbsp;<a class="badge badge-danger align-top dropdown-toggle" href="#" data-toggle="dropdown">Blocker</a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item active" href="#"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a></div>
                                                    </li>
                                                    <li><a href="#">Eternity app</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center"><span>Due: <span class="font-weight-semibold">18 hours</span></span>
                                            <ul class="list-inline mb-0 mt-2 mt-sm-0">
                                                <li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown">On hold</a>
                                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Open</a><a class="dropdown-item active" href="#">On hold</a><a class="dropdown-item" href="#">Resolved</a><a class="dropdown-item" href="#">Closed</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Dublicate</a><a class="dropdown-item" href="#">Invalid</a><a class="dropdown-item" href="#">Wontfix</a>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown"><i class="i-Gear-2"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="icon-alarm-add"></i> Check in</a><a class="dropdown-item" href="#"><i class="icon-attachment"></i> Attach screenshot</a><a class="dropdown-item" href="#"><i class="icon-rotate-ccw2"></i> Reassign</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="icon-pencil7"></i> Edit task</a><a class="dropdown-item" href="#"><i class="icon-cross2"></i> Remove</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card mt-4 mb-4">
                                        <div class="card-body">
                                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                                <div>
                                                    <h6><a href="">#23. New icons set for an iOS app</a></h6>
                                                    <p class="ul-task-manager__paragraph mb-3">A collection of textile samples lay spread out on the table..</p><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted" /></a><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted 2" /></a><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted 2" /></a><a href="#"><i class="ul-task-manager__fonts i-Add"></i></a><a class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed" href=""><i class="icon-plus22"></i></a>
                                                </div>
                                                <ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
                                                    <li><span class="ul-task-manager__font-date text-muted">20 January, 2015</span></li>
                                                    <li class="dropdown">Priority: &nbsp;<a class="badge badge-danger align-top dropdown-toggle" href="#" data-toggle="dropdown">Blocker</a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item active" href="#"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a></div>
                                                    </li>
                                                    <li><a href="#">Eternity app</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center"><span>Due: <span class="font-weight-semibold">18 hours</span></span>
                                            <ul class="list-inline mb-0 mt-2 mt-sm-0">
                                                <li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown">On hold</a>
                                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Open</a><a class="dropdown-item active" href="#">On hold</a><a class="dropdown-item" href="#">Resolved</a><a class="dropdown-item" href="#">Closed</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Dublicate</a><a class="dropdown-item" href="#">Invalid</a><a class="dropdown-item" href="#">Wontfix</a>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown"><i class="i-Gear-2"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="icon-alarm-add"></i> Check in</a><a class="dropdown-item" href="#"><i class="icon-attachment"></i> Attach screenshot</a><a class="dropdown-item" href="#"><i class="icon-rotate-ccw2"></i> Reassign</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="icon-pencil7"></i> Edit task</a><a class="dropdown-item" href="#"><i class="icon-cross2"></i> Remove</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card mt-4 mb-4">
                                        <div class="card-body">
                                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                                <div>
                                                    <h6><a href="">#23. New icons set for an iOS app</a></h6>
                                                    <p class="ul-task-manager__paragraph mb-3">A collection of textile samples lay spread out on the table..</p><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted" /></a><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted 2" /></a><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted 2" /></a><a href="#"><i class="ul-task-manager__fonts i-Add"></i></a><a class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed" href=""><i class="icon-plus22"></i></a>
                                                </div>
                                                <ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
                                                    <li><span class="ul-task-manager__font-date text-muted">
                                                            20 January,
                                                            2015</span></li>
                                                    <li class="dropdown">Priority: &nbsp;<a class="badge badge-danger align-top dropdown-toggle" href="#" data-toggle="dropdown">Blocker</a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item active" href="#"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a></div>
                                                    </li>
                                                    <li><a href="#">Eternity app</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center"><span>Due: <span class="font-weight-semibold">18 hours</span></span>
                                            <ul class="list-inline mb-0 mt-2 mt-sm-0">
                                                <li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown">On hold</a>
                                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Open</a><a class="dropdown-item active" href="#">On hold</a><a class="dropdown-item" href="#">Resolved</a><a class="dropdown-item" href="#">Closed</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Dublicate</a><a class="dropdown-item" href="#">Invalid</a><a class="dropdown-item" href="#">Wontfix</a>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown"><i class="i-Gear-2"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="icon-alarm-add"></i> Check in</a><a class="dropdown-item" href="#"><i class="icon-attachment"></i> Attach screenshot</a><a class="dropdown-item" href="#"><i class="icon-rotate-ccw2"></i> Reassign</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="icon-pencil7"></i> Edit task</a><a class="dropdown-item" href="#"><i class="icon-cross2"></i> Remove</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card mt-4 mb-4">
                                        <div class="card-body">
                                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                                <div>
                                                    <h6><a href="">#23. New icons set for an iOS app</a></h6>
                                                    <p class="ul-task-manager__paragraph mb-3">A collection of textile samples lay spread out on the table..</p><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted" /></a><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted 2" /></a><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted 2" /></a><a href="#"><i class="ul-task-manager__fonts i-Add"></i></a><a class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed" href=""><i class="icon-plus22"></i></a>
                                                </div>
                                                <ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
                                                    <li><span class="ul-task-manager__font-date text-muted">
                                                            20 January,
                                                            2015</span></li>
                                                    <li class="dropdown">Priority: &nbsp;<a class="badge badge-danger align-top dropdown-toggle" href="#" data-toggle="dropdown">Blocker</a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item active" href="#"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a></div>
                                                    </li>
                                                    <li><a href="#">Eternity app</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center"><span>Due: <span class="font-weight-semibold">18 hours</span></span>
                                            <ul class="list-inline mb-0 mt-2 mt-sm-0">
                                                <li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown">On hold</a>
                                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Open</a><a class="dropdown-item active" href="#">On hold</a><a class="dropdown-item" href="#">Resolved</a><a class="dropdown-item" href="#">Closed</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Dublicate</a><a class="dropdown-item" href="#">Invalid</a><a class="dropdown-item" href="#">Wontfix</a>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown"><i class="i-Gear-2"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="icon-alarm-add"></i> Check in</a><a class="dropdown-item" href="#"><i class="icon-attachment"></i> Attach screenshot</a><a class="dropdown-item" href="#"><i class="icon-rotate-ccw2"></i> Reassign</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="icon-pencil7"></i> Edit task</a><a class="dropdown-item" href="#"><i class="icon-cross2"></i> Remove</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card mt-4 mb-4">
                                        <div class="card-body">
                                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                                <div>
                                                    <h6><a href="">#23. New icons set for an iOS app</a></h6>
                                                    <p class="ul-task-manager__paragraph mb-3">A collection of textile samples lay spread out on the table..</p><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted" /></a><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted 2" /></a><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted 2" /></a><a href="#"><i class="ul-task-manager__fonts i-Add"></i></a><a class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed" href=""><i class="icon-plus22"></i></a>
                                                </div>
                                                <ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
                                                    <li><span class="ul-task-manager__font-date text-muted">
                                                            20
                                                            January, 2015</span></li>
                                                    <li class="dropdown">Priority: &nbsp;<a class="badge badge-danger align-top dropdown-toggle" href="#" data-toggle="dropdown">Blocker</a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item active" href="#"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a></div>
                                                    </li>
                                                    <li><a href="#">Eternity app</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center"><span>Due: <span class="font-weight-semibold">18 hours</span></span>
                                            <ul class="list-inline mb-0 mt-2 mt-sm-0">
                                                <li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown">
                                                        On
                                                        hold</a>
                                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Open</a><a class="dropdown-item active" href="#">On hold</a><a class="dropdown-item" href="#">Resolved</a><a class="dropdown-item" href="#">Closed</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Dublicate</a><a class="dropdown-item" href="#">Invalid</a><a class="dropdown-item" href="#">Wontfix</a>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown"><i class="i-Gear-2"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="icon-alarm-add"></i> Check in</a><a class="dropdown-item" href="#"><i class="icon-attachment"></i> Attach screenshot</a><a class="dropdown-item" href="#"><i class="icon-rotate-ccw2"></i> Reassign</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="icon-pencil7"></i> Edit task</a><a class="dropdown-item" href="#"><i class="icon-cross2"></i> Remove</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card mt-4 mb-4">
                                        <div class="card-body">
                                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                                <div>
                                                    <h6><a href="">#23. New icons set for an iOS app</a></h6>
                                                    <p class="ul-task-manager__paragraph mb-3">A collection of textile samples lay spread out on the table..</p><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted" /></a><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted 2" /></a><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted 2" /></a><a href="#"><i class="ul-task-manager__fonts i-Add"></i></a><a class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed" href=""><i class="icon-plus22"></i></a>
                                                </div>
                                                <ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
                                                    <li><span class="ul-task-manager__font-date text-muted">
                                                            20
                                                            January, 2015</span></li>
                                                    <li class="dropdown">Priority: &nbsp;<a class="badge badge-danger align-top dropdown-toggle" href="#" data-toggle="dropdown">Blocker</a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item active" href="#"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a></div>
                                                    </li>
                                                    <li><a href="#">Eternity app</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center"><span>Due: <span class="font-weight-semibold">18 hours</span></span>
                                            <ul class="list-inline mb-0 mt-2 mt-sm-0">
                                                <li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown">
                                                        On
                                                        hold</a>
                                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Open</a><a class="dropdown-item active" href="#">On hold</a><a class="dropdown-item" href="#">Resolved</a><a class="dropdown-item" href="#">Closed</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Dublicate</a><a class="dropdown-item" href="#">Invalid</a><a class="dropdown-item" href="#">Wontfix</a>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown"><i class="i-Gear-2"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="icon-alarm-add"></i> Check in</a><a class="dropdown-item" href="#"><i class="icon-attachment"></i> Attach screenshot</a><a class="dropdown-item" href="#"><i class="icon-rotate-ccw2"></i> Reassign</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="icon-pencil7"></i> Edit task</a><a class="dropdown-item" href="#"><i class="icon-cross2"></i> Remove</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card mt-4 mb-4">
                                        <div class="card-body">
                                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                                <div>
                                                    <h6><a href="">#23. New icons set for an iOS app</a></h6>
                                                    <p class="ul-task-manager__paragraph mb-3">A collection of textile samples lay spread out on the table..</p><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted" /></a><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted 2" /></a><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted 2" /></a><a href="#"><i class="ul-task-manager__fonts i-Add"></i></a><a class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed" href=""><i class="icon-plus22"></i></a>
                                                </div>
                                                <ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
                                                    <li><span class="ul-task-manager__font-date text-muted">
                                                            20
                                                            January, 2015</span></li>
                                                    <li class="dropdown">Priority: &nbsp;<a class="badge badge-danger align-top dropdown-toggle" href="#" data-toggle="dropdown">Blocker</a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item active" href="#"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a></div>
                                                    </li>
                                                    <li><a href="#">Eternity app</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center"><span>Due: <span class="font-weight-semibold">18 hours</span></span>
                                            <ul class="list-inline mb-0 mt-2 mt-sm-0">
                                                <li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown">
                                                        On
                                                        hold</a>
                                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Open</a><a class="dropdown-item active" href="#">On hold</a><a class="dropdown-item" href="#">Resolved</a><a class="dropdown-item" href="#">Closed</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Dublicate</a><a class="dropdown-item" href="#">Invalid</a><a class="dropdown-item" href="#">Wontfix</a>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown"><i class="i-Gear-2"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="icon-alarm-add"></i> Check in</a><a class="dropdown-item" href="#"><i class="icon-attachment"></i> Attach screenshot</a><a class="dropdown-item" href="#"><i class="icon-rotate-ccw2"></i> Reassign</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="icon-pencil7"></i> Edit task</a><a class="dropdown-item" href="#"><i class="icon-cross2"></i> Remove</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card mt-4 mb-4">
                                        <div class="card-body">
                                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                                <div>
                                                    <h6><a href="">#23. New icons set for an iOS app</a></h6>
                                                    <p class="ul-task-manager__paragraph mb-3">A collection of textile samples lay spread out on the table..</p><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted" /></a><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted 2" /></a><a href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" height="36" alt="corrupted 2" /></a><a href="#"><i class="ul-task-manager__fonts i-Add"></i></a><a class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed" href=""><i class="icon-plus22"></i></a>
                                                </div>
                                                <ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
                                                    <li><span class="ul-task-manager__font-date text-muted">
                                                            20
                                                            January, 2015</span></li>
                                                    <li class="dropdown">Priority: &nbsp;<a class="badge badge-danger align-top dropdown-toggle" href="#" data-toggle="dropdown">Blocker</a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item active" href="#"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a><a class="dropdown-item" href="#"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a></div>
                                                    </li>
                                                    <li><a href="#">Eternity app</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center"><span>Due: <span class="font-weight-semibold">18 hours</span></span>
                                            <ul class="list-inline mb-0 mt-2 mt-sm-0">
                                                <li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown">
                                                        On
                                                        hold</a>
                                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Open</a><a class="dropdown-item active" href="#">On hold</a><a class="dropdown-item" href="#">Resolved</a><a class="dropdown-item" href="#">Closed</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Dublicate</a><a class="dropdown-item" href="#">Invalid</a><a class="dropdown-item" href="#">Wontfix</a>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown"><i class="i-Gear-2"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="icon-alarm-add"></i> Check in</a><a class="dropdown-item" href="#"><i class="icon-attachment"></i> Attach
                                                            screenshot</a><a class="dropdown-item" href="#"><i class="icon-rotate-ccw2"></i> Reassign</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="icon-pencil7"></i> Edit task</a><a class="dropdown-item" href="#"><i class="icon-cross2"></i> Remove</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- pagination-->
                            <div class="row justify-content-center mt-4">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- end of pagination-->
                        </div>
                        <!-- right-sidebar-content-->
                        <div class="col-xl-3">
                            <!-- search-->
                            <div class="card mt-4 mb-3">
                                <div class="card-header font-weight-bold dropdown-toggle" onclick="customToggle()">Search Task</div>
                                <div class="card-body" id="custom-toggle">
                                    <input class="form-control" type="text" placeholder="type  &amp;  hit enter" />
                                </div>
                            </div>
                            <!-- end of search-->
                            <!-- actions-->
                            <div class="card mb-3">
                                <div class="card-header font-weight-bold dropdown-toggle" onclick="customToggle2()">Actions</div>
                                <div class="card-body" id="custom-toggle2">
                                    <h5 class="card-title">Light card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&apos;s content.</p>
                                </div>
                            </div>
                            <!-- end of actions-->
                            <!-- navigation-->
                            <div class="card mb-3">
                                <div class="card-header font-weight-bold dropdown-toggle" onclick="customToggle3()">Navigation</div>
                                <div class="card-body" id="custom-toggle3">
                                    <p class="card-text">Actions</p>
                                    <div class="list-group"><a class="list-group-item list-group-item-action active" href="#"><span class="custom-font"><i class="i-Add-Window"> </i></span>Create Task</a><a class="list-group-item list-group-item-action" href="#"><i class="i-Empty-Box"> </i> Create Project</a><a class="list-group-item list-group-item-action" href="#"><i class="i-Edit"> </i> Edit Task List</a><a class="list-group-item list-group-item-action" href="#"><i class="i-Add-User"> </i> Assign User</a><a class="list-group-item list-group-item-action disabled" href="#"><i class="i-Network"> </i> Create Team</a></div>
                                    <div class="mb-4"></div>
                                    <!-- add task-->
                                    <p class="card-text">Tasks</p>
                                    <div class="list-group"><a class="list-group-item list-group-item-action" href="#"><span class="custom-font"><i class="i-Folders"> </i></span>All Tasks</a><a class="list-group-item list-group-item-action" href="#"><i class="i-Add-File"> </i> Active Tasks</a><a class="list-group-item list-group-item-action" href="#"><i class="i-File-Favorite"> </i> Closed Tasks</a><a class="list-group-item list-group-item-action" href="#"><i class="i-Administrator"> </i> Assigned To Me <span class="badge badge-primary badge-pill ml-4">14</span></a><a class="list-group-item list-group-item-action" href="#"><i class="i-Conference"> </i> Assigned To My Team <span class="badge badge-primary badge-pill ml-4">14</span></a><a class="list-group-item list-group-item-action" href="#"><i class="i-Gears"> </i> Settings</a></div>
                                    <!-- end of Tasks-->
                                </div>
                            </div>
                            <!-- end of navigation-->
                            <!-- assigners-->
                            <div class="card mb-3">
                                <div class="card-header font-weight-bold dropdown-toggle" onclick="customToggle4()">Assigners</div>
                                <div class="card-body" id="custom-toggle4">
                                    <ul class="media-list">
                                        <li class="media mb-2"><a class="mr-4" href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" alt="asd" srcset="" /></a>
                                            <div class="ul-task-manager__media"><a href="">James Alexander gull</a>
                                                <div class="font-size-sm text-muted">Santa Ana,CA</div>
                                            </div>
                                            <div class="ml-3 align-self-center"><span class="badge badge-mark"></span></div>
                                        </li>
                                        <li class="media mb-2"><a class="mr-4" href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" alt="asd" srcset="" /></a>
                                            <div class="ul-task-manager__media"><a href="">James Alexander</a>
                                                <div class="font-size-sm text-muted">Santa Ana,CA</div>
                                            </div>
                                            <div class="ml-3 align-self-center"><span class="badge badge-mark"></span></div>
                                        </li>
                                        <li class="media mb-2"><a class="mr-4" href="#"><img class="rounded-circle" src="../../dist-assets/images/faces/1.jpg" width="36" alt="asd" srcset="" /></a>
                                            <div class="ul-task-manager__media"><a href="">James Alexander</a>
                                                <div class="font-size-sm text-muted">Santa Ana,CA</div>
                                            </div>
                                            <div class="ml-3 align-self-center"><span class="badge badge-mark"></span></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end of assigners-->
                            <!-- Revisions-->
                            <div class="card mb-3">
                                <div class="card-header font-weight-bold dropdown-toggle" onclick="customToggle5()">Revisions</div>
                                <div class="card-body" id="custom-toggle5">
                                    <li class="media mb-3"><a class="revision-font" href="#"><i class="i-Arrow-Down-in-Circle"></i></a>
                                        <div class="ul-task-manager__media">
                                            <p class="revisions-p">Add full font overrides for popovers and tooltips</p>
                                            <div class="font-size-sm text-muted">24 minutes ago</div>
                                        </div>
                                    </li>
                                    <li class="media mb-3"><a class="revision-font" href="#"><i class="i-Arrow-Down-in-Circle"></i></a>
                                        <div class="ul-task-manager__media">
                                            <p class="revisions-p">Add full font overrides for popovers and tooltips</p>
                                            <div class="font-size-sm text-muted">24 minutes ago</div>
                                        </div>
                                    </li>
                                    <li class="media mb-3"><a class="revision-font" href="#"><i class="i-Arrow-Left-in-Circle"></i></a>
                                        <div class="ul-task-manager__media">
                                            <p class="revisions-p">Chris Arney created a new Design branch</p>
                                            <div class="font-size-sm text-muted">2 hours ago</div>
                                        </div>
                                        <div class="ml-3 align-self-center"><span class="badge badge-mark"></span></div>
                                    </li>
                                </div>
                            </div>
                            <!-- end of revisions-->
                            <!-- completeness stats-->
                            <div class="card mb-3">
                                <div class="card-header font-weight-bold dropdown-toggle" onclick="customToggle6()">Completeness Stats</div>
                                <div class="card-body" id="custom-toggle6">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-3">
                                            <div class="d-flex align-items-center mb-1">Blockers <span class="text-muted ml-auto">50%</span></div>
                                            <div class="progress" style="height: 0.125rem;">
                                                <div class="progress-bar bg-danger" style="width: 50%"><span class="sr-only">50% Complete</span></div>
                                            </div>
                                        </li>
                                        <li class="mb-3">
                                            <div class="d-flex align-items-center mb-1">High priority <span class="text-muted ml-auto">70%</span></div>
                                            <div class="progress" style="height: 0.125rem;">
                                                <div class="progress-bar bg-warning-400" style="width: 70%"><span class="sr-only">70% Complete</span></div>
                                            </div>
                                        </li>
                                        <li class="mb-3">
                                            <div class="d-flex align-items-center mb-1">Normal priority <span class="text-muted ml-auto">80%</span></div>
                                            <div class="progress" style="height: 0.125rem;">
                                                <div class="progress-bar bg-success-400" style="width: 80%"><span class="sr-only">80% Complete</span></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center mb-1">Low priority <span class="text-muted ml-auto">60%</span></div>
                                            <div class="progress" style="height: 0.125rem;">
                                                <div class="progress-bar bg-grey-400" style="width: 60%"><span class="sr-only">60% Complete</span></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end of completeness-->
                        </div>
                        <!-- end of sidebar content-->
                        <!-- end-of-content-->
                        <!-- Footer Start-->
                        <div class="flex-grow-1"></div>
                        <div class="app-footer">
                            <div class="row">
                                <div class="col-md-9">
                                    <p><strong>Gull - Laravel + Bootstrap 4 admin template</strong></p>
                                    <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero quis beatae officia saepe perferendis voluptatum minima eveniet voluptates dolorum, temporibus nisi maxime nesciunt totam repudiandae commodi sequi dolor
                                        quibusdam sunt.
                                    </p>
                                </div>
                            </div>
                            <div class="footer-bottom border-top pt-3 d-flex flex-column flex-sm-row align-items-center"><a class="btn btn-primary text-white btn-rounded" href="https://themeforest.net/user/mh_rafi" target="_blank">
                                    Buy
                                    Gull HTML</a><span class="flex-grow-1"></span>
                                <div class="d-flex align-items-center"><img class="logo" src="../../dist-assets/images/logo.png" alt="" />
                                    <div>
                                        <p class="m-0">&copy; 2018 Gull HTML</p>
                                        <p class="m-0">All rights reserved</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fotter end-->
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