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
                    <h1>الخامات</h1>
                    <ul>
                        <?php
                            if(isset($_GET['available'])){
                                $available = intval($_GET['available']);
                                if($available == 2){ ?>
                                    <li><a>غير متاح للبيع</a></li>
                            <?php }elseif($available == 0){ ?>
                                <li><a>الخامات المحذوفة</a></li>
                            <?php
                                }
                            }else{ ?>
                                <li><a> الخامات المتاحة</a></li>
                            <?php } ?>
                        <li></li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top">
                    <?php require_once "./inc/tmp/allproducer/countProducerstatus.php"; ?>
                    <div class="mb-3 text-left settingAllProducer" style="display: none;">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="card-title card-title--margin"><span class="card-subtitle mb-4 text-muted">احداث</span></div>
                                <div class="mb-3">
                                    <button class="btn btn-danger btnDeleteMultiEventAllProducer" type="button"> <i class="i-Close-Window"></i> حذف </button>                                    
                                    <button class="btn btn-info btn-icon m-1 btnNotSellMultiEventAllProducer" type="button"><span class="ul-btn__icon"><i class="i-Danger"></i> ايقاف البيع</span></button>
                                </div>
                            </div>
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
                                            <th>اسم المنتج</th>
                                            <th>الحالة</th>
                                            <th>الكمية</th>
                                            <th>سعر البيع</th>
                                            <th>الباركود</th>
                                            <th>تحكم</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            if(isset($_GET['available'])){$available = intval($_GET['available']);}else{$available = 1;}
                                            $stmt = $db->prepare("SELECT * FROM producer WHERE available = ? ORDER BY ID DESC");
                                            $stmt->execute(array($available));
                                            if($stmt->rowcount() > 0){
                                                $dataProducer = $stmt->fetchall();
                                                foreach($dataProducer as $producer){ ?>
                                                    <tr>
                                                        <th scope="row">
                                                            <label class="checkbox checkbox-outline-info">
                                                                <input class='checkboxeventallproducer' type="checkbox" value='<?php echo $producer['ID']; ?>'><span class="checkmark"></span>
                                                            </label>
                                                        </th>
                                                        <td><?php echo $producer['ID'] ?></td>
                                                        <td>
                                                            <a href="/producer/<?php echo $producer['ID'] ?>">
                                                                <div class="ul-widget-app__profile-pic"><?php echo $producer['title'] ?></div>
                                                            </a>
                                                        </td>
                                                        <td><a><?php arrowType($producer['status'],$producer['available']) ?></a></td>
                                                        <td><a><?php echo $producer['amount'] ?></a></td>
                                                        <td><a><?php echo $producer['sell'] ?> <small>ج.م</small></a></td>
                                                        <td><?php  echo $producer['barcode'] ?></td>
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
                <!-- end of main-content -->
            </div>
        </div>
    </div>
    <script src="../../dist-assets/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="../../dist-assets/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="../../dist-assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../dist-assets/js/scripts/script.min.js"></script>
    <script src="../../dist-assets/js/scripts/sidebar.large.script.min.js"></script>
    <script src="../../dist-../../dist-assets/js/plugins/datatables.min.js"></script>
    <script src="../../dist-../../dist-assets/js/scripts/tooltip.script.min.js"></script>
    <script src="../../dist-assets/js/plugins/sweetalert2.min.js"></script>
    <script src="../../dist-assets/js/scripts/sweetalert.script.min.js"></script>
    <script src="../../dist-assets/js/plugins/kendo.all.min.js"></script>
    <script>
        $('#ul-contact-list').DataTable();
    </script>
    <script src="../../dist-../../dist-assets/js/script.js"></script>
</body>

</html>