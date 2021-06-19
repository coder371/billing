<?php require_once "./init/init.php"; ?>
<?php $newBill = getNewBill($db); ?>
<?php require_once "./inc/static/head.php"; ?>
    <div id="loaderProgres" class="swal2-fade swal2-in text-center" style="overflow-y: auto;display:none">
        <div class="col-md-6 col-12 m-auto">
            <div class="card text-left">
                <div class="card-body">
                    <h4 class="card-title mb-3 text-center">جاري انشاء الفاتورة</h4>
                    <div class="progress mb-3" style="direction: ltr;">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="app-admin-wrap layout-sidebar-large">
    <?php require_once "./inc/tmp/header.php"; ?>
        <?php require_once "./inc/tmp/menu.php"; ?>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>فواتير</h1>
                    <ul>
                        <li><a href="">انشاء فاتورة</a></li>
                        <li></li>
                    </ul>
                </div>
                <form action="" method="post">
                


                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="card-body text-left">
                                    <div class="card-title">بيانات العميل</div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">اسم او كود العميل</span></div>
                                        <input class="form-control h50" ID='client' name="title" type="text" placeholder="اسم او كود العميل" aria-label="اسم او كود العميل" aria-describedby="basic-addon1" required="">
                                    </div>

                                    <div class="card"  style=''>
                                        <div id="loaderContClient" class="swal2-fade swal2-in text-center p-5" style="overflow-y: auto;display: none;">
                                            <span class="spinner-glow spinner-glow-primary"></span>
                                        </div>
                                        <div ID='contClient'>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="card-body text-left">
                                            <div class="card-title"> تنبيه العميل </div>
                                            <div class="input-group  mb-3">
                                                <label class="switch pr-5 switch-success mr-3"><span>سيقوم النظام بإستخدام كل بيانات الاتصال المتاحة</span>
                                                    <input type="checkbox" name="available" ID='send' checked="checked"><span class="slider"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="card-body text-left">
                                <div class="card-title"> بيانات الفاتورة </div>
                                <div class="input-group  mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">كودالفاتورة</span></div>
                                    <input class="form-control h50" type="text" placeholder="كودالفاتورة" aria-label="كودالفاتورة" aria-describedby="basic-addon1" value='<?php echo $newBill['ID'] ?>'  disabled="" required="">
                                </div>
                                <div class="input-group  mb-3">
                                    <div class="input-group-prepend reBar"><span class="input-group-text" id="basic-addon1"><i class="fas fa-sync-alt"></i></span></div>
                                    <input class="form-control h50" id="barcode" name="barcode" type="text" placeholder="الباركود" aria-label="الباركود" aria-describedby="basic-addon1" data-bar="<?php echo $newBill['barcode'] ?>" value="<?php echo $newBill['barcode'] ?>" required="">
                                    <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="i-Bar-Code font24"></i></span></div>
                                </div>
                                <div class="input-group  mb-3">
                                    <div class="input-group-append"><span class="input-group-text" id="basic-addon2">تاريخ الاصدار</span></div>
                                    <input type="date"ID='date' class="form-control h50" value="<?php echo date("Y-m-d") ?>">
                                </div>
                                <div class="input-group  mb-3">
                                    <label class="switch pr-5 switch-success mr-3"><span>مدفوع</span>
                                        <input type="checkbox" name="paid" ID='paid' checked="checked"><span class="slider"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="separator-breadcrumb border-top">
                    <table class="display table table-striped table-bordered dataTable text-left" id="language_option_table" style="width: 100%;" role="grid" aria-describedby="language_option_table_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc toggleDelete" tabindex="0" aria-controls="language_option_table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 20px;min-width: 20px;max-width: 20px;"style="width: 20px;">  </th>
                                <th class="sorting_asc toggleMove" tabindex="0" aria-controls="language_option_table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 20px;min-width: 20px;max-width: 20px;"style="width: 20px;">  </th>
                                <th class="sorting_asc" tabindex="0" aria-controls="language_option_table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 102px;">المنتج</th>
                                <th class="sorting" tabindex="0" aria-controls="language_option_table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 158px;">الكمية</th>
                                <th class="sorting" tabindex="0" aria-controls="language_option_table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 79px;">سعر الوحدة</th>
                                <th class="sorting" tabindex="0" aria-controls="language_option_table" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 21px;">الاجمالي</th>
                            </tr>
                        </thead>
                        <tbody style="direction: rtl;" ID='bodyBill'>
                            <tr role="row" class="odd itemBill" id='row-1' data-row='1'>
                                <td class='p-0  text-center toggleDelete'><span onclick="deleteRow(this)" style="font-size: 21px;cursor: move;"><i class='i-Close-Window'></i></span></td>
                                <td class='p-0  text-center toggleMove'><span style="font-size: 21px;cursor: move;"><i class='i-Drag'></i></span></td>
                                <td class='p-0'><input ID='title-1' style="border-radius: 0;" type="text" class='form-control title p-0'> </td>
                                <td class='p-0' style="position: relative;">    
                                    <div ID='pop-1' class="pops"></div>
                                    <input type="number" ID='amount-1' min="0" lang="de-DE" class='form-control amount' onchange="clcAmount(this)" disabled>
                                </td>
                                <td class='p-0'><input type="text" ID='sell-1' class='form-control sell' disabled> </td>
                                <td class='p-0'><input type="text" ID='total-1' class='form-control total' disabled> </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <tr role="row">
                                    <th class="sorting_asc toggleDelete" tabindex="0" aria-controls="language_option_table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 20px;min-width: 20px;max-width: 20px;"style="width: 20px;">  </th>
                                    <th class="sorting_asc toggleMove" tabindex="0" aria-controls="language_option_table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 20px;min-width: 20px;max-width: 20px;"></th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="language_option_table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 102px;">المنتج</th>
                                    <th class="sorting" tabindex="0" aria-controls="language_option_table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 158px;">الكمية</th>
                                    <th class="sorting" tabindex="0" aria-controls="language_option_table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 79px;">سعر الوحدة</th>
                                    <th class="sorting allTotal" tabindex="0" aria-controls="language_option_table " rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 21px;">0</th>
                                </tr>
                            </tr>
                        </tfoot>
                    </table>
                    <div class='float-left'>
                        <button class='btn btn-success addRow' type='button'> <i class='i-Add'></i> حقل جديد </button>
                        <button class='btn btn-warning btnSort' type='button'> <i class='i-Cursor-Select'></i> تحريك </button>
                        <button class='btn btn-danger btnDeleteRow' type='button'> <i class='i-Close-Window'></i> حذف </button>
                        
                    </div>
                    <div class='float-right'>
                        <button class='btn btn-primary' type='button' onclick='saveBill()'> <i class='i-Disk'></i> حفظ </button>
                        <button class='btn btn-success addRow' type='button'> <i class='i-Billing'></i> حفظ وطباعة </button>
                    </div>
                </div>
                </form>
                <!-- end of main-content -->
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
        $JsonDataClient = "";
        $stmt = $db->prepare("SELECT * FROM client");
        $stmt->execute();
        if($stmt->rowcount() > 0){
            $dataClient = $stmt->fetchall();
            foreach($dataClient as $client){ 
                $JsonDataClient .= '{ text: "' .  $client['fullname'] . '", value: "' . $client['ID'] . '" },';
            }
        }
    ?>

    <script>
        JsonDataClient = [<?php echo $JsonDataClient; ?>];
        $(document).ready(function() {
            // create ComboBox from input HTML element
            $("#client").kendoComboBox({
                dataTextField: "text",
                dataValueField: "value",
                dataSource: JsonDataClient,
                filter: "contains",
                suggest: true,
                index: "",
            });            
            var fabric = $("#client").data("kendoComboBox"); 
        });
    </script>


    <?php 
        $JsonData = "";
        $stmt = $db->prepare("SELECT * FROM producer WHERE status > 0 ORDER BY ID DESC");
        $stmt->execute();
        if($stmt->rowcount() > 0){
            $dataProducer = $stmt->fetchall();
            foreach($dataProducer as $producer){ 
                $JsonData .= '{ text: "' .  $producer['title'] . '", value: "' . $producer['ID'] . '" },';
            }
        }
    ?>

    <script>
        fullDataJspn = <?php echo json_encode($dataProducer); ?>;
        JsonData = [<?php echo $JsonData; ?>];
        $(document).ready(function() {
            // create ComboBox from input HTML element
           preparesuggest("#title-1");
            var fabric = $("#title-1").data("kendoComboBox");
            addEventBill("#title-1");
 
        });
    </script>
    <script src="../../dist-assets/js/script.js"></script>
    <script src="../../dist-assets/js/saveBill.js"></script>


</body>

</html>