<?php require_once "./init/init.php"; ?>
<?php 
    if(isset($_GET['IDBill']) AND is_numeric($_GET['IDBill']) ){
        $IDBill = intval($_GET['IDBill']);
        $stmt = $db->prepare("SELECT * FROM bill WHERE ID = ?");
        $stmt->execute(array($IDBill));
        if($stmt->rowcount() > 0){
            $bill = $stmt->fetch();
            $stmtClient = $db->prepare("SELECT * FROM client WHERE ID = ?");
            $stmtClient->execute(array($bill['IDclient']));
            if($stmtClient->rowcount() > 0){
                $client = $stmtClient->fetch();
            }else{
                gotopage("billing");
            }
        }else{
            gotopage("billing");
        }
    }
?>
<?php require_once "./inc/static/head.php"; ?>
    <div class="app-admin-wrap layout-sidebar-large">
    <?php require_once "./inc/tmp/header.php"; ?>
        <?php require_once "./inc/tmp/menu.php"; ?>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>ادارة الفواثير</h1>
                    <ul>
                        <li><a>فانورة</a></li>
                        <a href="/user/<?php echo $$client['ID'] ?>"><li><?php echo $client['fullname']; ?></li></a>
                        <li>#<?php echo $bill['barcode'] ?></li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top">


                    <div class="card text-left">
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active show" id="home-basic-tab" data-toggle="tab" href="#homeInfo" role="tab" aria-controls="homeInfo" aria-selected="false">الفاتورة</a></li>
                                <li class="nav-item"><a class="nav-link" id="profile-basic-tab" data-toggle="tab" href="#profileBasic" role="tab" aria-controls="profileBasic" aria-selected="false">تعديل</a></li>
                                <li class="nav-item"><a class="nav-link" id="contact-basic-tab" data-toggle="tab" href="#contactBasic" role="tab" aria-controls="contactBasic" aria-selected="true">Contact</a></li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade  active show" id="homeInfo" role="tabpanel" aria-labelledby="home-basic-tab">
                                    <?php /* page #1 */ ?>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                                <div class="card-body text-center"><i class="i-Coins"></i>
                                                    <div class="content">
                                                        <p class="text-muted mt-2 mb-0">اجمالي الفاتورة</p>
                                                        <p class="text-primary text-24 line-height-1 mb-2"><?php echo $bill['total'] ?>ج.م</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                                <div class="card-body text-center"><i class="i-Empty-Box"></i>
                                                    <div class="content">
                                                        <p class="text-muted mt-2 mb-0">عدد المنتجات المباعة</p>
                                                        <p class="text-primary text-24 line-height-1 mb-2"><?php echo getDateInfo($db,"count(ID)","itembill","IDbill = " . $bill['ID']); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                                <div class="card-body text-center"><i class="i-Security-Settings"></i>
                                                    <div class="content">
                                                        <p class="text-muted mt-2 mb-0">حالة الفاتورة</p>
                                                        <?php arrowBillPaid($bill['paid']) ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                                <div class="card-body text-center"><i class="i-Calendar"></i>
                                                    <div class="content">
                                                        <p class="text-muted mt-2 mb-0">تاريخ الفاتورة</p>
                                                        <p class="text-primary text-24 line-height-1 mb-2"><?php dateFormat($bill['date'],"Y/m/d") ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class="col-lg-8 col-md-12">
                                            <div class="mb-3">
                                                <button class="btn btn-primary btn-icon m-1" ID='printBill' type="button"><span class="ul-btn__icon"><i class="i-Billing"></i></span><span class="ul-btn__text">طباعة & PDF</span></button>
                                                <button class="btn btn-primary btn-icon m-1" type="button"><span class="ul-btn__icon"><i class="i-Email"></i></span><span class="ul-btn__text"> ابلاغ العميل</span></button>
                                            </div>
                                            <div class="card mb-4">
                                               <iframe name='printBill' style="min-height: 650px;max-width: 800px;" src="<?php echo $config['site'] ?>/billPreview/<?php echo $bill['ID'] ?>" frameborder="0"></iframe>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card-title"> العميل </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="user-profile mb-4">
                                                        <div class="ul-widget-card__user-info border-bottom-gray-200 pb-3"><img class="profile-picture avatar-xl mb-2" src="<?php echo $config['cdnAvatarClient'] ?>/<?php echo $client['avatar'] ?>" alt="alt">
                                                            <p class="m-0 text-24"><?php echo $client['fullname'] ?></p>
                                                            <p class="text-muted m-0"><a href="Mailto:<?php echo $client['email'] ?>"><?php echo $client['email'] ?></a></p>
                                                            <div class="mt-3 ul-widget-app__skill-margin"><span class="text-15"><?php echo $client['address'] ?></span></div>
                                                        </div>
                                                        <!-- <div class="progress progress--height-2 mb-3">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div> -->
                                                        <div class="ul-widget-app__profile-footer mt-4">
                                                            <div class="ul-widget-app__profile-footer-font"><a href="href"><i class="i-Billing text-16 font-weight-600 mr-1"></i><span class="text-16 font-weight-600">عدد الفواتير : <?php echo getDateInfo($db,"count(ID)","bill","IDclient = " . $client['ID']); ?></span></a></div><br>
                                                            <div class="ul-widget-app__profile-footer-font"><a href="href"><i class="i-Coins text-16 font-weight-600 mr-1"></i><span class="text-16 font-weight-600"> المعاملات : <?php echo getDateInfo($db,"sum(total)","bill","IDclient = " . $client['ID']); ?>ج.م</span></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php /* page #1 */ ?>
                                </div>
                                <div class="tab-pane fade" id="profileBasic" role="tabpanel" aria-labelledby="profile-basic-tab">
                                    Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore.

                                </div>
                                <div class="tab-pane fade" id="contactBasic" role="tabpanel" aria-labelledby="contact-basic-tab">
                                    Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore.

                                </div>
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
    <script src="../../dist-assets/js/plugins/echarts.min.js"></script>
    <script src="../../dist-assets/js/scripts/echart.options.min.js"></script>
    <script src="../../dist-assets/js/script.js"></script>
</body>
</html>