<?php require_once "./init/init.php"; ?>
<?php require_once "./inc/static/head.php"; ?>
    <div class="app-admin-wrap layout-sidebar-large">
        <?php require_once "./inc/tmp/header.php"; ?>
        <?php require_once "./inc/tmp/menu.php"; ?>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>العملاء</h1>
                    <ul>
                        <li><a href="">اضافة عميل</a></li>
                        <li>عميل جديد</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <!-- end of main-content -->
            </div>


            <div class="col-md-12 text-left" style="direction: rtl;">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title mb-3">عميل جديد</div>
                        <form class='formAddContant'>
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="fullname">الاسم بالكامل</label>
                                    <input class="form-control" id="fullname" type="text" placeholder="ادخل اسمك الاول">
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="email">البريد الالكتروني</label>
                                    <input class="form-control" id="email" type="email" placeholder="ادخل بريدك الالكتروني">
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary">موافق</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="../../dist-assets/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="../../dist-assets/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="../../dist-assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../dist-assets/js/scripts/script.min.js"></script>
    <script src="../../dist-assets/js/plugins/sweetalert2.min.js"></script>
    <script src="../../dist-assets/js/scripts/sweetalert.script.min.js"></script>
    <script src="../../dist-assets/js/scripts/sidebar.large.script.min.js"></script>
    <script src="../../dist-../../dist-assets/js/script.js"></script>
</body>

</html>