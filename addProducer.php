<?php require_once "./init/init.php"; ?>
<?php 
    $newProducer = getNewProducer($db);
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        addProducer($db,$_POST);
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
                    <h1>إضافة خامات</h1>
                    <ul>
                        <li><a href="">منتج جديد</a></li>
                        <li></li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top">
                    <form action="" method="post" ID='form'>
                        <div class='row'>
                            <div class='col-lg-8 col-md-12 col-sm-12'>
                                <div class='row'>
                                    <div class='col-12 p-0'>
                                        <div class="card-body text-left">
                                            <div class="card-title">خامات جديدة</div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">اسم المنتج</span></div>
                                                <input class="form-control h50" name='title' type="text" placeholder="اسم المنتج" aria-label="اسم المنتج" aria-describedby="basic-addon1" required>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6 input-group  mb-3">
                                                    <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">كود المنتج</span></div>
                                                    <input class="form-control h50" type="text" placeholder="كود المنتج" aria-label="كود المنتج" aria-describedby="basic-addon1" value='<?php echo $newProducer['ID'] ?>' disabled required>
                                                </div>
                                                <div class="col-md-6 input-group  mb-3">
                                                    <div class="input-group-prepend reBar"><span class="input-group-text" id="basic-addon1"><i class="fas fa-sync-alt"></i></span></div>
                                                    <input class="form-control h50" id='barcode' name='barcode' type="text" placeholder="الباركود" aria-label="الباركود" aria-describedby="basic-addon1" data-bar='<?php echo $newProducer['barcode'] ?>' value='<?php echo $newProducer['barcode'] ?>' required>
                                                    <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="i-Bar-Code font24"></i></span></div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-12 input-group  mb-3">
                                                    <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="i-Tag-4 font24"></i></span></div>
                                                    <input id='categ' class="form-control h50" name='categ' type="text" placeholder="القسم" aria-label="القسم" style='border-radius: 0 !important;' aria-describedby="basic-addon1" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-12 p-0'>
                                        <div class="card-body text-left">
                                            <div class="card-title">الكمية</div>
                                            <div class="form-row">
                                                <div class="col-md-6 input-group  mb-3">
                                                    <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">الكمية</span></div>
                                                    <input class="form-control h50"  name='amount' type="text" placeholder="الكمية" aria-label="الكمية" aria-describedby="basic-addon1" required>
                                                </div>
                                                <div class="col-md-6 input-group  mb-3">
                                                    <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">تنبيه عند</span></div>
                                                    <input class="form-control h50" name='alert' type="text" placeholder="تنبية عن وصول المنتج لهذا الرقم" aria-label="تنبية عن وصول المنتج لهذا الرقم" aria-describedby="basic-addon1" required>
                                                    <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="i-Bell font24"></i></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='col-lg-4 col-md-12 col-sm-12'>
                               <div class="row">
                                    <div class="card-body text-left">
                                        <div class="card-title">سعر المنتج </div>
                                        <div class="input-group  mb-3">
                                            <div class="input-group-append"><span class="input-group-text" id="basic-addon2">شراء</span></div>
                                            <input id='buyAddProducer' class="form-control h50" name='buy' type="number" min="00.00" step='0.01' placeholder="السعر : 1,00" aria-label="شراء" aria-describedby="basic-addon1" required>
                                        </div>
                                        
                                        <div class="input-group  mb-3">
                                            <div class="input-group-append"><span class="input-group-text" id="basic-addon2">بيع</span></div>
                                            <input id='sellAddProducer' class="form-control h50" name='sell' type="number" min="00.00" step='0.01' placeholder="السعر : 1,00" aria-label="بيع" aria-describedby="basic-addon1" required>
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">فرق السعر</span></div>
                                            <input id='diffAddProducer' class="form-control h50" type="text" placeholder="اسم المنتج" aria-label="اسم المنتج" aria-describedby="basic-addon1" value='00,00' disabled>
                                            <div class="input-group-prepend"><span style='color:#fff' class="input-group-text bg-warning" id="diffStatus">لا تأثير</span></div>
                                        </div>
                                    </div>
                               </div>
                               <div class="row">
                                    <div class="card-body text-left">
                                        <div class="card-title">حالة المنتج</div>
                                        <div class="input-group  mb-3">
                                            <label class="switch pr-5 switch-success mr-3"><span>متاح للبيع</span>
                                                <input type="checkbox" name='available' checked="checked"><span class="slider"></span>
                                            </label>
                                        </div>
                                    
                                    </div>
                               </div>
                            </div>

                            <button class="btn btn-success btn-xl m-1" type="submit">اضافة</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../../dist-assets/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="../../dist-assets/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="../../dist-assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../dist-assets/js/plugins/kendo.all.min.js"></script>
    <script src="../../dist-assets/js/plugins/jquery-ui.js"></script>
    <script src="../../dist-assets/js/scripts/script.min.js"></script>
    <script src="../../dist-assets/js/scripts/sidebar.large.script.min.js"></script>
    <script src="../../dist-assets/js/plugins/sweetalert2.min.js"></script>
    <script src="../../dist-assets/js/scripts/sweetalert.script.min.js"></script>
    <?php 
        $JsonData = "";
        $stmt = $db->prepare("SELECT * FROM categ");
        $stmt->execute();
        if($stmt->rowcount() > 0){
            $datacateg = $stmt->fetchall();
            foreach($datacateg as $categ){ 
                $JsonData .= '{ text: "' .  $categ['title'] . '", value: "' . $categ['ID'] . '" },';
            }
        }
    ?>
    <script>
        fullDataJspn = <?php echo json_encode($JsonData); ?>;
        JsonData = [<?php echo $JsonData; ?>];
        $(document).ready(function() {
            // create ComboBox from input HTML element
           preparesuggest("#categ");
            var fabric = $("#categ").data("kendoComboBox"); 
        });
    </script>
    <script src="../../dist-../../dist-assets/js/script.js"></script>

</body>
</html>