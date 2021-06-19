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
                    <h1>الصفحة الرئيسية</h1>
                    <ul>
                        <li><a href="">احصائيات عامة</a></li>
                        <li></li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top text-left">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                <div class="card-body text-center"><i class="i-Billing"></i>
                                    <div class="content">
                                        <p class="text-muted mt-2 mb-0">اجمالي الفواتير</p>
                                        <p class="text-primary text-24 line-height-1 mb-2"><?php echo number_format(getDateInfo($db,"sum(total)","bill"," 1")); ?><small>ج.م</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                <div class="card-body text-center"><i class="i-Empty-Box"></i>
                                    <div class="content">
                                        <p class="text-muted mt-2 mb-0">عدد المنتجات</p>
                                        <p class="text-primary text-24 line-height-1 mb-2"><?php echo number_format(getCountReturn($db,"ID","producer","")); ?><small>منتج</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                <div class="card-body text-center"><i class="i-Boy"></i>
                                    <div class="content">
                                        <p class="text-muted mt-2 mb-0">العملاء</p>
                                        <p class="text-primary text-24 line-height-1 mb-2"><?php echo number_format(getCountReturn($db,"ID","client","")); ?><small>عميل</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                <div class="card-body text-center"><i class="i-Money-2"></i>
                                    <div class="content">
                                        <p class="text-muted mt-2 mb-0">Expense</p>
                                        <p class="text-primary text-24 line-height-1 mb-2">$1200</p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class='row'>
                        <div class="col-md-8">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="card-title"> إحصائيات عام (<?php echo DATE("Y") ?>)</div>
                                    <canvas id="MixChart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="card-title">ملخص الفواتير</div>
                                    <canvas id="DoughnutChart" height="200px"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='row  text-left'>
                        <div class="card-body col-md-8">
                            <div class="card-title">أخر 10 فواتير</div>
                            <div class="table-responsive">
                                <table class="display table" id="ul-contact-list" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>اسم العميل</th>
                                            <th>الحالة</th>
                                            <th>عدد العناصر</th>
                                            <th>اجمالي الفاتورة</th>
                                            <th>تحكم</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $stmt = $db->prepare("SELECT * FROM bill WHERE status != 0 ORDER BY ID DESC Limit 10");
                                            $stmt->execute();
                                            if($stmt->rowcount() > 0){
                                                $dataBill = $stmt->fetchall();
                                                foreach($dataBill as $bill){ ?>
                                                    <tr>
                                                        <td><?php echo $bill['ID'] ?></td>
                                                        <td>
                                                            <a href="/user/<?php echo $bill['IDclient'] ?>">
                                                                <div class="ul-widget-app__profile-pic"><?php echo getDateInfo($db,"fullname","client","ID = " . $bill['IDclient']); ?></div>
                                                            </a>
                                                        </td>
                                                        <td><a><?php arrowBillPaid($bill['paid']) ?></a></td>
                                                        <td><a><?php echo getDateInfo($db,"count(ID)","itembill","IDbill = " . $bill['ID']); ?></a></td>
                                                        <td><a><?php echo $bill['total'] ?> <small>ج.م</small></a></td>
                                                        <td class="">
                                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                                            <div class="dropdown-menu text-left" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(36px, 72px, 0px);">
                                                                <a class="dropdown-item ul-widget__link--font" href="/bill/<?php echo $bill['ID'] ?>"><i class="i-Newspaper"> </i> تقرير</a>
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
                        <div class="card-body col-md-4">
                            <div class="card-title">منتجات غير متوفرة او على وشك</div>
                            <div class="table-responsive">
                                <table class="display table" id="ul-contact-list" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>اسم المنتج</th>
                                            <th>الكمية</th>
                                            <th>تحكم</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                           $stmt = $db->prepare("SELECT * FROM producer WHERE status != 1 ORDER BY amount ASC");
                                           $stmt->execute();
                                           if($stmt->rowcount() > 0){
                                               $dataProducer = $stmt->fetchall();
                                               foreach($dataProducer as $producer){ ?>
                                                   <tr>
                                                       <td><?php echo $producer['ID'] ?></td>
                                                       <td>
                                                           <a href="/producer/<?php echo $producer['ID'] ?>">
                                                               <div class="ul-widget-app__profile-pic"><?php echo $producer['title'] ?></div>
                                                           </a>
                                                       </td>
                                                       <td><a><?php echo $producer['amount'] ?></a></td>
                                                       <td class="">
                                                           <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                                           <div class="dropdown-menu text-left" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(36px, 72px, 0px);">
                                                               <a class="dropdown-item ul-widget__link--font" href="#"><i class="nav-icon i-Edit"> </i> تعديل الكمية</a>
                                                               <a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Newspaper"> </i> تقرير</a>
                                                               <a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Code"></i> الباركود</a>
                                                               <div class="dropdown-divider"></div>
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
    <script src="https://majarah.com/bitasmart.com/dist-assets/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="https://majarah.com/bitasmart.com/dist-assets/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="https://majarah.com/bitasmart.com/dist-assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="https://majarah.com/bitasmart.com/dist-assets/js/scripts/script.min.js"></script>
    <script src="https://majarah.com/bitasmart.com/dist-assets/js/scripts/sidebar.large.script.min.js"></script>

    <script>
            analytics = [];
        <?php for($m=1;$m<=12;$m++){ ?>
            analytics["PaidBill-<?php echo $m ?>"] = <?php $num = getDateInfo($db,"sum(total)","bill"," paid='1' AND YEAR(date) = YEAR(CURRENT_DATE) AND MONTH(date) = $m ");if($num){echo $num;}else{echo 0;};?>;
        <?php } ?>
        <?php for($m=1;$m<=12;$m++){ ?>
            analytics["NotPaidBill-<?php echo $m ?>"] = <?php $num = getDateInfo($db,"sum(total)","bill"," paid='0' AND YEAR(date) = YEAR(CURRENT_DATE) AND MONTH(date) = $m ");if($num){echo $num;}else{echo 0;};?>;
        <?php } ?>
        <?php for($m=1;$m<=12;$m++){ ?>
            analytics["TotalBill-<?php echo $m ?>"] = <?php $num = getDateInfo($db,"sum(total)","bill"," YEAR(date) = YEAR(CURRENT_DATE) AND MONTH(date) = $m ");if($num){echo $num;}else{echo 0;};?>;
        <?php } ?>
        analytics['TotalBillPaid'] = <?php $num = getDateInfo($db,"sum(total)","bill"," paid='1' AND YEAR(date) = YEAR(CURRENT_DATE)");if($num){echo $num;}else{echo 0;};?>;
        analytics['NotTotalBillPaid'] = <?php $num = getDateInfo($db,"sum(total)","bill"," paid='0' AND YEAR(date) = YEAR(CURRENT_DATE)");if($num){echo $num;}else{echo 0;};?>;
        <?php for($m=1;$m<=12;$m++){ ?>
            analytics["month<?php echo $m ?>"] = <?php $num = getDateInfo($db,"sum(amount)","movements"," type='bill' AND YEAR(date) = YEAR(CURRENT_DATE) AND MONTH(date) = $m ");if($num){echo $num;}else{echo 0;};?>;
        <?php } ?>
    </script>
    <script src="https://majarah.com/bitasmart.com/dist-assets/js/custom/home.js"></script>
</body>
</html>