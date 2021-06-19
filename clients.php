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
                    <h1> العملاء</h1>
                    <ul>
                        <li><a href="">كل العملاء</a></li>
                        <li>Contacts</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <section class="contact-list">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="card text-left">
                                <div class="card-header text-right bg-transparent">
                                    <button class="btn btn-primary btn-md m-1" type="button" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="i-Add-User text-white mr-2"></i> عميل جديد </button>
                                </div>
                                <!-- begin::modal-->
                                <div class="ul-card-list__modal">
                                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <form class='formAddContant'>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label" for="fullname">الاسم : </label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" id="fullname" type="text" placeholder="اسم العميل" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label" for="email">البريد الالكتروني : </label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" id="email" type="email" placeholder="البريد الالكتروني" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-10">
                                                                <button class="btn btn-success btnAddContant" type="submit">اضافة</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end::modal-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="display table" id="ul-contact-list" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th class="sorting_desc">#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Joining Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $stmt = $db->prepare("SELECT * FROM client WHERE status = 1 ORDER BY ID DESC");
                                                    $stmt->execute();
                                                    if($stmt->rowcount() > 0){
                                                        $dataClients = $stmt->fetchall();
                                                        foreach($dataClients as $client){ ?>
                                                            <tr>
                                                                <td><?php echo $client['ID'] ?></td>
                                                                <td>
                                                                    <a href="/client/<?php echo $client['ID'] ?>">
                                                                        <div class="ul-widget-app__profile-pic"><?php echo $client['fullname'] ?></div>
                                                                    </a>
                                                                </td>
                                                                <td><a href="mailto:<?php echo $client['email'] ?>"><?php echo $client['email'] ?></a></td>
                                                                <td><?php dateFormat($client['date'],"M d, Y"); ?></td>
                                                                <td>
                                                                    <a class="ul-link-action text-danger mr-1 deleteContact" onclick='deleteContact(this)' href="javascript:void(0)" data-id='<?php echo $client['ID'] ?>' data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a>
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
                </section><!-- end of main-content -->
            </div><!-- Footer Start -->
            <div class="flex-grow-1"></div>
            
            <!-- fotter end -->
        </div>
    </div>
    <!-- ============ Search UI Start ============= -->
    <!-- ============ Search UI End ============= -->
    <script src="../../dist-assets/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="../../dist-assets/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="../../dist-assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../dist-assets/js/scripts/script.min.js"></script>
    <script src="../../dist-assets/js/scripts/sidebar.large.script.min.js"></script>
    <script src="../../dist-../../dist-assets/js/plugins/datatables.min.js"></script>
    <script src="../../dist-../../dist-assets/js/scripts/tooltip.script.min.js"></script>
    <script src="../../dist-assets/js/plugins/sweetalert2.min.js"></script>
    <script src="../../dist-assets/js/scripts/sweetalert.script.min.js"></script>
    <script>
        $('#ul-contact-list').DataTable();
    </script>
    <script src="../../dist-../../dist-assets/js/script.js"></script>

</body>

</html>