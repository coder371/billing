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
                    <h1>إدارة الفواتير</h1>
                    <ul>
                        <li><a href="">كل الفواتير</a></li>
                        <li></li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top">
                    <?php echo require_once "./inc/tmp/billing/countBillingStatus.php"; ?>
                    <div class="card">
                        <div class="breadcrumb">
                            <ul>
                                <li><a>بحث مخصص</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class='row  text-left'>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display table" id="ul-contact-list" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>تحديد</th>
                                            <th>#</th>
                                            <th>اسم العميل</th>
                                            <th>الحالة</th>
                                            <th>عدد العناصر</th>
                                            <th>اجمالي الفاتورة</th>
                                            <th>الباركود</th>
                                            <th>تحكم</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $stmt = $db->prepare("SELECT * FROM bill WHERE status != 0 ORDER BY ID DESC");
                                            $stmt->execute();
                                            if($stmt->rowcount() > 0){
                                                $dataBill = $stmt->fetchall();
                                                foreach($dataBill as $bill){ ?>
                                                    <tr>
                                                        <th scope="row">
                                                            <label class="checkbox checkbox-outline-info">
                                                                <input type="checkbox"><span class="checkmark"></span>
                                                            </label>
                                                        </th>
                                                        <td><?php echo $bill['ID'] ?></td>
                                                        <td>
                                                            <a href="/user/<?php echo $bill['IDclient'] ?>">
                                                                <div class="ul-widget-app__profile-pic"><?php echo getDateInfo($db,"fullname","client","ID = " . $bill['IDclient']); ?></div>
                                                            </a>
                                                        </td>
                                                        <td><a><?php arrowBillPaid($bill['paid']) ?></a></td>
                                                        <td><a><?php echo getDateInfo($db,"count(ID)","itembill","IDbill = " . $bill['ID']); ?></a></td>
                                                        <td><a><?php echo $bill['total'] ?> <small>ج.م</small></a></td>
                                                        <td><?php  echo $bill['barcode'] ?></td>
                                                        <td class="">
                                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                                            <div class="dropdown-menu text-left" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(36px, 72px, 0px);">
                                                                <a class="dropdown-item ul-widget__link--font" href="/bill/<?php echo $bill['ID'] ?>"><i class="i-Newspaper"> </i> تقرير</a>
                                                                <div class="dropdown-divider">
                                                                </div>
                                                                    <a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Close"></i> حذف</a>
                                                                    <a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> تعديل</a>
                                                                </div>
                                                        </td>
                                                    </tr>
                                                <?php }

                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                        

                </div>
            </div>
        </div>
    </div>
    <script src="../../dist-assets/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="../../dist-assets/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="../../dist-assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../dist-assets/js/scripts/script.min.js"></script>
    <script src="../../dist-assets/js/scripts/sidebar.large.script.min.js"></script>

</body>
</html>