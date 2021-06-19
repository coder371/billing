<?php require_once "./inc/static/head.php"; ?>
    <div class="app-admin-wrap layout-sidebar-large">
    <?php require_once "./inc/tmp/header.php"; ?>
        <?php require_once "./inc/tmp/menu.php"; ?>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Input Groups</h1>
                    <ul>
                        <li><a href="href">UI Kits</a></li>
                        <li>Input Groups</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <!--  start basic input groups -->
                <div class="basic-input-groups">
                    <div class="container-fluid">
                        <!--  begin::main-row -->
                        <div class="row">
                            <!--  begin::main column -->
                            <div class="col-lg-12">
                                <div class="row">
                                    <!--  begin::basic example -->
                                    <div class="col-lg-6 mb-3">
                                        <div class="card">
                                            <div class="card-header bg-transparent">
                                                <h3 class="card-title">Basic Example</h3>
                                            </div>
                                            <!-- begin::form-->
                                            <form action="action">
                                                <div class="card-body">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label class="ul-form__label" for="inputEmail4">Left Addon:</label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">@</span></div>
                                                                <input class="form-control" type="text" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" />
                                                            </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                                Some help content goes here
                                                            </small>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label class="ul-form__label" for="inputEmail4">Right Addon:</label>
                                                            <div class="input-group mb-3">
                                                                <input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                                                                <div class="input-group-append"><span class="input-group-text" id="basic-addon2">@example.com</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="custom-separator"></div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label class="ul-form__label" for="inputEmail4">Joint Addons:</label>
                                                            <div class="input-group mb-3">
                                                                <div class="custom-file">
                                                                    <input class="custom-file-input" id="inputGroupFile02" type="file" />
                                                                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                                                                </div>
                                                                <div class="input-group-append"><span class="input-group-text" id="inputGroupFileAddon02">Upload</span></div>
                                                            </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                                Some help content goes here
                                                            </small>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label class="ul-form__label" for="inputEmail4">Left & Right Addons:</label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                                                <input class="form-control" type="text" aria-label="Amount (to the nearest dollar)" />
                                                                <div class="input-group-append"><span class="input-group-text">.00</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-transparent">
                                                    <div class="mc-footer">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <button class="btn btn-primary m-1" type="button">Submit</button>
                                                                <button class="btn btn-outline-secondary m-1" type="button">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!--  end::form -->
                                        </div>
                                    </div>
                                    <!--  end::basic example -->
                                    <!--  begin::checkoxes & radio addons -->
                                    <div class="col-lg-6 mb-3">
                                        <div class="card">
                                            <div class="card-header bg-transparent">
                                                <h3 class="card-title">Checkoxes & radio addons</h3>
                                            </div>
                                            <!-- begin::form-->
                                            <form action="action">
                                                <div class="card-body">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label class="ul-form__label" for="inputEmail4">Left Radio Addon :</label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend"><span class="input-group-text ul-form__radio bg-transparent">
                                                                        <label class="radio radio-outline-primary">
                                                                            <input type="radio" name="radio" checked="checked" /><span class="checkmark ul-radio__position"></span>
                                                                        </label></span><span class="input-group-text bg-transparent">0.00</span></div>
                                                                <input class="form-control" type="text" aria-label="Amount (to the nearest dollar)" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label class="ul-form__label" for="inputEmail4">Right Addon:</label>
                                                            <div class="input-group mb-3">
                                                                <input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                                                                <div class="input-group-append"><span class="input-group-text" id="basic-addon2">@example.com</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label class="ul-form__label" for="inputEmail4">Left Checkbox Addon :</label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend"><span class="input-group-text bg-transparent ul-form__radio">
                                                                        <label class="checkbox checkbox-outline-primary">
                                                                            <input type="checkbox" checked="checked" /><span class="checkmark ul-radio__position"></span>
                                                                        </label></span><span class="input-group-text bg-transparent">0.00</span></div>
                                                                <input class="form-control" type="text" aria-label="Amount (to the nearest dollar)" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label class="ul-form__label" for="inputEmail4">Right Checkbox Addon:</label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                                                <input class="form-control" type="text" aria-label="Amount (to the nearest dollar)" />
                                                                <div class="input-group-append"><span class="input-group-text">
                                                                        <input type="checkbox" aria-label="Checkbox for following text input" /></span></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label class="ul-form__label" for="inputEmail4">Right & Left Checkbox Addon:</label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend"><span class="input-group-text">
                                                                        <input type="checkbox" aria-label="Checkbox for following text input" /></span></div>
                                                                <input class="form-control" type="text" aria-label="Amount (to the nearest dollar)" />
                                                                <div class="input-group-append"><span class="input-group-text">
                                                                        <input type="checkbox" aria-label="Checkbox for following text input" /></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-transparent">
                                                    <div class="mc-footer">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <button class="btn btn-primary m-1" type="button">Submit</button>
                                                                <button class="btn btn-outline-secondary m-1" type="button">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!--  end::form -->
                                        </div>
                                    </div>
                                    <!--  end::checkoxes & radio addons -->
                                </div>
                                <!--  end of row -->
                                <div class="row">
                                    <!--  begin::with icons -->
                                    <div class="col-lg-6 mb-3">
                                        <div class="card">
                                            <div class="card-header bg-transparent">
                                                <h3 class="card-title">With Icons</h3>
                                            </div>
                                            <!-- begin::form-->
                                            <form action="action">
                                                <div class="card-body">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label class="ul-form__label" for="inputEmail4">Left Addon:</label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="i-Information"></i></span></div>
                                                                <input class="form-control" type="text" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" />
                                                            </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                                Some help content goes here
                                                            </small>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label class="ul-form__label" for="inputEmail4">Right Addon:</label>
                                                            <div class="input-group mb-3">
                                                                <input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                                                                <div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="i-Business-Mens"></i></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="custom-separator"></div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label class="ul-form__label" for="inputEmail4">Joint Addons:</label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                                                <input class="form-control" type="text" placeholder="0.00" aria-label="Amount (to the nearest dollar)" />
                                                                <div class="input-group-append"><span class="input-group-text"><i class="i-Cash-register-2"></i></span></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label class="ul-form__label" for="inputEmail4">Both Addons:</label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="i-Refresh"></i></span></div>
                                                                <input class="form-control" type="text" placeholder="0.00" aria-label="Amount (to the nearest dollar)" />
                                                                <div class="input-group-append"><span class="input-group-text"><i class="i-Add-User"></i></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-transparent">
                                                    <div class="mc-footer">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <button class="btn btn-primary m-1" type="button">Submit</button>
                                                                <button class="btn btn-outline-secondary m-1" type="button">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!--  end::form -->
                                        </div>
                                    </div>
                                    <!--  end::with icons -->
                                    <!--  begin::button-addons -->
                                    <div class="col-lg-6 mb-3">
                                        <div class="card">
                                            <div class="card-header bg-transparent">
                                                <h3 class="card-title">Button Addons</h3>
                                            </div>
                                            <!-- begin::form-->
                                            <form action="action">
                                                <div class="card-body">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label class="ul-form__label" for="inputEmail4">Left Addon Button:</label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend"><span class="input-group-text">Go!</span></div>
                                                                <input class="form-control" type="text" aria-label="Amount (to the nearest dollar)" placeholder="Search for.." />
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label class="ul-form__label" for="inputEmail4">Right Addon Button:</label>
                                                            <div class="input-group mb-3">
                                                                <input class="form-control" type="text" placeholder="Search for.." aria-label="Recipient's username" aria-describedby="basic-addon2" />
                                                                <div class="input-group-append"><span class="input-group-text" id="basic-addon2">Go!</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label class="ul-form__label" for="inputEmail4">Left & Right Addon Button:</label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend"><span class="input-group-text">Go!</span></div>
                                                                <input class="form-control" type="text" aria-label="Amount (to the nearest dollar)" />
                                                                <div class="input-group-append"><span class="input-group-text">Go!</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label class="ul-form__label" for="inputEmail4">Left Addon Button:</label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend"><span class="input-group-text badge-primary">Go!</span></div>
                                                                <input class="form-control" type="text" aria-label="Amount (to the nearest dollar)" placeholder="Search for.." />
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label class="ul-form__label" for="inputEmail4">Right Addon Button:</label>
                                                            <div class="input-group mb-3">
                                                                <input class="form-control" type="text" placeholder="Search for.." aria-label="Recipient's username" aria-describedby="basic-addon2" />
                                                                <div class="input-group-append"><span class="input-group-text badge-primary" id="basic-addon2">Go!</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label class="ul-form__label" for="inputEmail4">Left & Right Addon Button:</label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend"><span class="input-group-text badge-success">Go!</span></div>
                                                                <input class="form-control" type="text" aria-label="Amount (to the nearest dollar)" />
                                                                <div class="input-group-append"><span class="input-group-text badge-warning">Go!</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-transparent">
                                                    <div class="mc-footer">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <button class="btn btn-primary m-1" type="button">Submit</button>
                                                                <button class="btn btn-outline-secondary m-1" type="button">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!--  end::form -->
                                        </div>
                                    </div>
                                    <!--  end::button-addons -->
                                </div>
                                <!--  end of row -->
                                <div class="row">
                                    <!--  begin::sizing -->
                                    <div class="col-lg-6 mb-3">
                                        <div class="card">
                                            <div class="card-header bg-transparent">
                                                <h3 class="card-title">Sizings</h3>
                                            </div>
                                            <!-- begin::form-->
                                            <form action="action">
                                                <div class="card-body">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label class="ul-form__label" for="inputEmail4">Large Input Group:</label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="i-Information"></i></span></div>
                                                                <input class="form-control" type="text" placeholder="Large Size" aria-label="Username" aria-describedby="basic-addon1" />
                                                            </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                                Some help content goes here
                                                            </small>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label class="ul-form__label" for="inputEmail4">Joint Addons:</label>
                                                            <div class="input-group mb-3">
                                                                <div class="custom-file">
                                                                    <input class="custom-file-input" id="inputGroupFile02" type="file" />
                                                                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                                                                </div>
                                                                <div class="input-group-append"><span class="input-group-text" id="inputGroupFileAddon02">Upload</span></div>
                                                            </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                                Some help content goes here
                                                            </small>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label class="ul-form__label" for="inputEmail4">Small Input Group:</label>
                                                            <div class="input-group mb-3">
                                                                <input class="form-control" type="text" placeholder="small size" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                                                                <div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="i-Business-Mens"></i></span></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label class="ul-form__label" for="inputEmail4">Small Input Group:</label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="i-Information"></i></span></div>
                                                                <input class="form-control" type="text" placeholder="Large Size" aria-label="Username" aria-describedby="basic-addon1" />
                                                            </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                                Some help content goes here
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-transparent">
                                                    <div class="mc-footer">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <button class="btn btn-primary m-1" type="button">Submit</button>
                                                                <button class="btn btn-outline-secondary m-1" type="button">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!--  end::form -->
                                        </div>
                                    </div>
                                    <!--  end::sizing -->
                                    <!--  begin::Buttons With Dropdowns -->
                                    <div class="col-lg-6 mb-3">
                                        <div class="card">
                                            <div class="card-header bg-transparent">
                                                <h3 class="card-title">Sizings</h3>
                                            </div>
                                            <!-- begin::form-->
                                            <form action="action">
                                                <div class="card-body">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label class="ul-form__label" for="inputEmail4">Buttons With Dropdowns:</label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                                    <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                                        <div class="dropdown-divider" role="separator"></div><a class="dropdown-item" href="#">Separated link</a>
                                                                    </div>
                                                                </div>
                                                                <input class="form-control" type="text" aria-label="Text input with dropdown button" />
                                                            </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                                Some help content goes here
                                                            </small>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label class="ul-form__label" for="inputEmail4">Right Button Dropdown:</label>
                                                            <div class="input-group">
                                                                <input class="form-control" type="text" aria-label="Text input with dropdown button" />
                                                                <div class="input-group-prepend">
                                                                    <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                                    <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                                        <div class="dropdown-divider" role="separator"></div><a class="dropdown-item" href="#">Separated link</a>
                                                                    </div>
                                                                </div>
                                                            </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                                Some help content goes here
                                                            </small>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label class="ul-form__label" for="inputEmail4">Right Button Dropdown:</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                                    <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                                        <div class="dropdown-divider" role="separator"></div><a class="dropdown-item" href="#">Separated link</a>
                                                                    </div>
                                                                </div>
                                                                <input class="form-control" type="text" aria-label="Text input with dropdown button" />
                                                                <div class="input-group-prepend">
                                                                    <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                                    <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                                        <div class="dropdown-divider" role="separator"></div><a class="dropdown-item" href="#">Separated link</a>
                                                                    </div>
                                                                </div>
                                                            </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                                Some help content goes here
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-transparent">
                                                    <div class="mc-footer">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <button class="btn btn-primary m-1" type="button">Submit</button>
                                                                <button class="btn btn-outline-secondary m-1" type="button">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!--  end::form -->
                                        </div>
                                    </div>
                                    <!--  end::Buttons With Dropdowns -->
                                    <!--  begin::input-icons -->
                                    <div class="col-lg-6 mb-3">
                                        <div class="card">
                                            <div class="card-header bg-transparent">
                                                <h3 class="card-title">Input Icons</h3>
                                            </div>
                                            <!-- begin::form-->
                                            <form action="action">
                                                <div class="card-body">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label class="ul-form__label" for="inputEmail4">Left Icon Input:</label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend"><span class="input-group-text bg-transparent" id="basic-addon1"><i class="i-Search-People"></i></span></div>
                                                                <input class="form-control" type="text" placeholder="search..." aria-label="Username" aria-describedby="basic-addon1" />
                                                            </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                                Some help content goes here
                                                            </small>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label class="ul-form__label" for="inputEmail4">Right Icon Input:</label>
                                                            <div class="input-group mb-3">
                                                                <input class="form-control" type="text" placeholder="search..." aria-label="Recipient's username" aria-describedby="basic-addon2" />
                                                                <div class="input-group-append"><span class="input-group-text bg-transparent" id="basic-addon2"><i class="i-Search-People"></i></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-transparent">
                                                    <div class="mc-footer">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <button class="btn btn-primary m-1" type="button">Submit</button>
                                                                <button class="btn btn-outline-secondary m-1" type="button">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!--  end::form -->
                                        </div>
                                    </div>
                                    <!--  end::input-icons -->
                                </div>
                            </div>
                            <!--  end::main-column -->
                        </div>
                        <!--  end::main-row -->
                    </div>
                </div>
                <!--  end of basic input groups -->
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