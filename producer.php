<?php require_once "./init/init.php"; ?>
<?php 
    if(isset($_GET['ID']) AND is_numeric($_GET['ID'])){
        $ID = intval($_GET['ID']);
        $stmt = $db->prepare("SELECT * FROM producer WHERE ID = ?");
        $stmt->execute(array($ID));
        if($stmt->rowcount() > 0){
            $producer = $stmt->fetch();
        }else{
            gotopage("allproducer");
        }
    }else{
        gotopage("allproducer");
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
                    <h1>المخزن</h1>
                    <ul>
                        <li><a href="">منتج</a></li>
                        <li><?php echo $producer['title'] ?></li>
                        <li>#<?php echo $producer['barcode'] ?></li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top">
                    <div class="card text-left">
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active show" id="home-basic-tab" data-toggle="tab" href="#homeInfo" role="tab" aria-controls="homeInfo" aria-selected="false">إحصائيات</a></li>
                                <li class="nav-item"><a class="nav-link" id="profile-basic-tab" data-toggle="tab" href="#barCode" role="tab" aria-controls="barCode" aria-selected="false">ملصق (BarCode)</a></li>
                                <li class="nav-item"><a class="nav-link" id="contact-basic-tab" data-toggle="tab" href="#UpdataAmount" role="tab" aria-controls="UpdataAmount" aria-selected="true">اضافة او حذف كمية</a></li>
                                <li class="nav-item"><a class="nav-link" id="contact-basic-tab" data-toggle="tab" href="#TimeLime" role="tab" aria-controls="TimeLime" aria-selected="true">حركة المخزن</a></li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade  active show" id="homeInfo" role="tabpanel" aria-labelledby="home-basic-tab">
                                    <?php /* page #1 */ ?>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                                <div class="card-body text-center"><i class="i-Empty-Box"></i>
                                                    <div class="content">
                                                        <p class="text-muted mt-2 mb-0">متوفر</p>
                                                        <p class="text-primary text-24 line-height-1 mb-2"><?php echo $producer['amount'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                                <div class="card-body text-center"><i class="i-Checkout"></i>
                                                    <div class="content">
                                                        <p class="text-muted mt-2 mb-0">اجمالي المباع</p>
                                                        <p class="text-primary text-24 line-height-1 mb-2"><?php echo getDateInfo($db,"sum(amount)","movements","IDproducer = " . $producer['ID'] . " AND type='bill'"); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                                <div class="card-body text-center"><i class="i-Checkout"></i>
                                                    <div class="content">
                                                        <p class="text-muted mt-2 mb-0">خلال 7 أيام</p>
                                                        <p class="text-primary text-24 line-height-1 mb-2"><?php echo getDateInfo($db,"sum(amount)","movements","IDproducer = " . $producer['ID'] . " AND type='bill' AND TIMESTAMPDIFF(week,date, now()) = 0 "); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                                <div class="card-body text-center"><i class="i-Checkout"></i>
                                                    <div class="content">
                                                        <p class="text-muted mt-2 mb-0">خلال هذا الشهر</p>
                                                        <p class="text-primary text-24 line-height-1 mb-2"><?php echo getDateInfo($db,"sum(amount)","movements","IDproducer = " . $producer['ID'] . " AND type='bill' AND month(date) = month(CURRENT_DATE)"); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                                <div class="card-body text-center"><i class="i-Coins"></i>
                                                    <div class="content">
                                                        <p class="text-muted mt-2 mb-0">سعر الشراء</p>
                                                        <p class="text-primary text-24 line-height-1 mb-2"><?php echo $producer['buy'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                                <div class="card-body text-center"><i class="i-Coins"></i>
                                                    <div class="content">
                                                        <p class="text-muted mt-2 mb-0">سعر البيع</p>
                                                        <p class="text-primary text-24 line-height-1 mb-2"><?php echo $producer['sell'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class="col-lg-8 col-md-12">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="card-title">ما تم بيعه خلال العام (<?php echo DATE("Y") ?>)</div>
                                                    <div id="echartBar" style="height: 300px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card-title"> حركة البيع </div>
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <h6 class="mb-1">أخر 7 أيام</h6>
                                                    <p class="text-22 text-success font-weight-light mb-1"><?php $num = getDateInfo($db,"sum(amount)","movements","IDproducer = " . $producer['ID'] . " AND type='bill' AND DATEDIFF(CURRENT_DATE,date) <= 6 ");if($num){echo $num;}else{echo 0;};?></p>
                                                    <div id="echart1" style="height: 65px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php /* page #1 */ ?>
                                </div>
                                <div class="tab-pane fade" id="barCode" role="tabpanel" aria-labelledby="barCode">
                                    <div class="mb-3">
                                        <button class="btn btn-primary btn-icon m-1" ID='printBarCodeProducuer' type="button"><span class="ul-btn__icon"><i class="i-Billing"></i></span><span class="ul-btn__text">طباعة & PDF</span></button>
                                    </div>
                                    <div class="card mb-4">
                                        <iframe name='BarCodeProducuer' frameborder="0" src="<?php echo $config['site'] ?>/barcodeP/<?php echo $ID; ?>" style='webkit-overflow-scrolling: touch;overflow: scroll;width: 100%;position: relative;background: none repeat scroll 0 0 #c3c3c3;' width="100%" height="800"></iframe>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="UpdataAmount" role="tabpanel" aria-labelledby="UpdataAmount">
                                    <form action="" method="post" id="FormAddMovements">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-12 p-0">
                                                        <div class="pl-2 pr-2 text-left">
                                                            <div class="card-title">الكمية</div>
                                                            <div class="form-row">
                                                                <div class="col-md-6 input-group  mb-3">
                                                                    <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">الكمية</span></div>
                                                                    <input class="form-control h50 inputAmount" name="amount" type="number" placeholder="الكمية" aria-label="الكمية" aria-describedby="basic-addon1" required="">
                                                                </div>
                                                                <div class="col-md-6 input-group  mb-3">
                                                                    <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">نوع العملية</span></div>
                                                                    <select class="form-control h50"  name="" id='typeUpdataAmount'>
                                                                        <option value="1">اضافة</option>
                                                                        <option value="2">انقاص</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="col-md-6 input-group  mb-3">
                                                                    <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">المخزن قبل</span></div>
                                                                    <input class="form-control h50 beforeAmount" name="amount" type="number" placeholder="المخزن قبل" aria-label="المخزن قبل" value='<?php echo $producer['amount'] ?>' aria-describedby="basic-addon1" disabled>
                                                                </div>
                                                                <div class="col-md-6 input-group  mb-3">
                                                                    <div class="input-group-prepend "><span class="input-group-text" id="basic-addon1">المخزن بعد</span></div>
                                                                    <input class="form-control h50 afterAmount" name="amount" type="number" placeholder="المخزن بعد" aria-label="المخزن بعد" aria-describedby="basic-addon1" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <textarea class="form-control" name="" id="note" cols="30" rows="10" placeholder='ملاحظات'></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="card-title"> معلومات اضافية </div>
                                                    <div class="input-group  mb-3">
                                                        <div class="input-group-append"><span class="input-group-text" id="basic-addon2">سعر الوحدة</span></div>
                                                        <input id="sell" class="form-control h50" name="buy" type="number" min="00.00" step="0.01" placeholder="السعر : 1,00" aria-label="سعر الوحدة" aria-describedby="basic-addon1" required>
                                                    </div>
                                                    <div class="input-group  mb-3">
                                                        <label class="switch pr-5 switch-success mr-3"><span>التاريخ الفعلي</span>
                                                            <input type="checkbox" name="available" ID='liveDate' checked="checked"><span class="slider"></span>
                                                        </label>
                                                    </div>
                                                    <div class='input-group' ID='GroubDate' style='display:none'>
                                                        <div class="input-group  mb-3">
                                                            <div class="input-group-append"><span class="input-group-text" id="basic-addon2">تاريخ العملية</span></div>
                                                            <input type="date" ID='date' class="form-control h50" value="<?php echo date("Y-m-d") ?>">
                                                        </div>
                                                        <div class="input-group  mb-3">
                                                            <div class="input-group-append"><span class="input-group-text" id="basic-addon2">وقت العملية</span></div>
                                                            <input type="time" ID='time' class="form-control h50" value="<?php echo date("H:i") ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
            
                                        </div>
                                        <button class="btn btn-success btn-xl m-1 addMovements" type="submit">اضافة</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="TimeLime" role="tabpanel" aria-labelledby="TimeLime">
                                    <ul class="timeline">
                                        <?php lineTime($db,$ID,$config['site'],$GU); ?>
                                    </ul>
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
    <script src="../../dist-assets/js/plugins/sweetalert2.min.js"></script>
    <script src="../../dist-assets/js/scripts/sweetalert.script.min.js"></script>
    <script>

        JsonProducer = <?php echo json_encode($producer); ?>;
        analytics = [];
        <?php for($x=0;$x<=6;$x++){ ?>
            analytics["day<?php echo $x ?>"] = <?php $num = getDateInfo($db,"sum(amount)","movements","IDproducer = " . $producer['ID'] . " AND type='bill' AND DATEDIFF(CURRENT_DATE,date) = $x ");if($num){echo $num;}else{echo 0;};?>;
        <?php } ?>
        <?php for($m=1;$m<=12;$m++){ ?>
            analytics["month<?php echo $m ?>"] = <?php $num = getDateInfo($db,"sum(amount)","movements","IDproducer = " . $producer['ID'] . " AND type='bill' AND YEAR(date) = YEAR(CURRENT_DATE) AND MONTH(date) = $m ");if($num){echo $num;}else{echo 0;};?>;
        <?php } ?>
        
    </script>
    <script src="../../dist-assets/js/script.js"></script>
    <script src="../../dist-assets/js/custom/producer.js"></script>
</body>
</html>