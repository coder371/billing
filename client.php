<?php require_once "./init/init.php"; ?>
<?php 
    if(isset($_GET['ID']) AND is_numeric($_GET['ID'])){
        $ID = intval($_GET['ID']);
        $stmt = $db->prepare("SELECT * FROM client WHERE ID = ?");
        $stmt->execute(array($ID));
        if($stmt->rowcount() > 0){
            $client = $stmt->fetch();
        }else{
            header("location:/client");
            exit();
        }
    }else{
        header("location:/client");
        exit();
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
                    <h1>ملفات العملاء</h1>
                    <ul>
                        <li><a href=""><?php echo $client['fullname'] ?></a></li>
                        <li>الملف الشخصي</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top text-left">
                    <div class="card user-profile o-hidden mb-4">
                        <div class="card-body">
                            <ul class="nav nav-tabs profile-nav mb-4 " style='justify-content: right;' id="profileTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="homeInfo-tab" data-toggle="tab" href="#homeInfo" role="tab" aria-controls="homeInfo" aria-selected="false">الاحصائيات</a></li>
                                <li class="nav-item"><a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="true">About</a></li>
                                <li class="nav-item"><a class="nav-link" id="phone-tab" data-toggle="tab" href="#phone" role="tab" aria-controls="phone" aria-selected="false">الهواتف</a></li>
                                <li class="nav-item"><a class="nav-link" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">بيانات</a></li>
                            </ul>
                            <div class="tab-content" id="profileTabContent">
                                <div class="tab-pane fade active show" id="homeInfo" role="tabpanel" aria-labelledby="homeInfo-tab">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                                <div class="card-body text-center"><i class="i-Empty-Box"></i>
                                                    <div class="content">
                                                        <p class="text-muted mt-2 mb-0">اجمالي المعاملات</p>
                                                        <p class="text-primary text-24 line-height-1 mb-2"><?php echo getDateInfo($db,"sum(total)","bill","IDclient = " . $client['ID']); ?><small>ج.م</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                                <div class="card-body text-center"><i class="i-Billing"></i>
                                                    <div class="content">
                                                        <p class="text-muted mt-2 mb-0">الفواتير</p>
                                                        <p class="text-primary text-24 line-height-1 mb-2"><?php echo getDateInfo($db,"count(ID)","bill","IDclient = " . $client['ID']); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                                <div class="card-body text-center"><i class="i-Check"></i>
                                                    <div class="content">
                                                        <p class="text-muted mt-2 mb-0">تم الدفع</p>
                                                        <p class="text-primary text-20 line-height-1 mb-0"><?php echo getDateInfo($db,"sum(total)","bill","paid = 1 AND IDclient = " . $client['ID']); ?><small>ج.م</small> </p>
                                                        <small class="text-muted text-12 mb-0"><?php echo getDateInfo($db,"count(ID)","bill","paid = 1 AND IDclient = " . $client['ID']); ?> فاتورة</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                                <div class="card-body text-center"><i class="i-Check"></i>
                                                    <div class="content">
                                                        <p class="text-muted mt-2 mb-0">لم يتم الدفع</p>
                                                        <p class="text-primary text-20 line-height-1 mb-0"><?php echo getDateInfo($db,"sum(total)","bill","paid = 0 AND IDclient = " . $client['ID']); ?><small>ج.م</small> </p>
                                                        <small class="text-muted text-12 mb-0"><?php echo getDateInfo($db,"count(ID)","bill","paid = 0 AND IDclient = " . $client['ID']); ?> فاتورة</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class="card-body col-md-8">
                                            <div class="card-title">أخر 10 فواتير</div>
                                            <div class="table-responsive">
                                                <table class="display table" id="" style="width:100%">
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
                                                            $stmt = $db->prepare("SELECT * FROM bill WHERE IDclient = ? AND  status != 0 ORDER BY ID DESC Limit 10");
                                                            $stmt->execute(array($client['ID']));
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
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="user-profile mb-4">
                                                        <div class="ul-widget-card__user-info border-bottom-gray-200 pb-3">
                                                            <?php /* <img class="profile-picture avatar-xl mb-2" src="<?php echo $config['cdnAvatarUsers'] ?>/<?php echo $client['avatar'] ?>" alt="alt"> */ ?>
                                                            <p class="m-0 text-24"><?php echo $client['fullname']; ?></p>
                                                            <p class="text-muted m-0"><a href="Mailto:<?php echo $client['email']; ?>"><?php echo $client['email']; ?></a></p>
                                                            <div class="mt-3 ul-widget-app__skill-margin">
                                                                <span class="text-15"><?php // echo $client['address']; ?></span>
                                                            </div>
                                                        </div>
                                                        <?php 
                                                            $paid = getDateInfo($db,"sum(total)","bill","paid = 1 AND IDclient = " . $client['ID']);
                                                            $total = getDateInfo($db,"sum(total)","bill","IDclient = " . $client['ID']);
                                                            if($total != 0){$per = ($paid/$total)*100;}else{$per = 100;   }
                                                        ?>
                                                        <div class="progress progress--height-2 mb-3 bg-danger">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo floor($per) ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <hr>
                                                        <div class="ul-widget-app__profile-footer mt-4">
                                                            <a href="mailto:<?php echo $client['email'] ?>"><button class="btn btn-primary btn-icon m-1" type="button"><span class="ul-btn__icon"><i class="i-Email"></i></span><span class="ul-btn__text"> <?php echo $client['email'] ?></span></button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                                    <h4>Personal Information</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, commodi quam! Provident quis voluptate asperiores ullam, quidem odio pariatur. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem, nulla eos?
                                        Cum non ex voluptate corporis id asperiores doloribus dignissimos blanditiis iusto qui repellendus deleniti aliquam, vel quae eligendi explicabo.
                                    </p>
                                    <hr />
                                    <div class="row">
                                        <div class="col-md-4 col-6">
                                            <div class="mb-4">
                                                <p class="text-primary mb-1"><i class="i-Calendar text-16 mr-1"></i> Birth Date</p><span>1 Jan, 1994</span>
                                            </div>
                                            <div class="mb-4">
                                                <p class="text-primary mb-1"><i class="i-Edit-Map text-16 mr-1"></i> Birth Place</p><span>Dhaka, DB</span>
                                            </div>
                                            <div class="mb-4">
                                                <p class="text-primary mb-1"><i class="i-Globe text-16 mr-1"></i> Lives In</p><span>Dhaka, DB</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-6">
                                            <div class="mb-4">
                                                <p class="text-primary mb-1"><i class="i-MaleFemale text-16 mr-1"></i> Gender</p><span>1 Jan, 1994</span>
                                            </div>
                                            <div class="mb-4">
                                                <p class="text-primary mb-1"><i class="i-MaleFemale text-16 mr-1"></i> Email</p><span>example@ui-lib.com</span>
                                            </div>
                                            <div class="mb-4">
                                                <p class="text-primary mb-1"><i class="i-Cloud-Weather text-16 mr-1"></i> Website</p><span>www.ui-lib.com</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-6">
                                            <div class="mb-4">
                                                <p class="text-primary mb-1"><i class="i-Face-Style-4 text-16 mr-1"></i> Profession</p><span>Digital Marketer</span>
                                            </div>
                                            <div class="mb-4">
                                                <p class="text-primary mb-1"><i class="i-Professor text-16 mr-1"></i> Experience</p><span>8 Years</span>
                                            </div>
                                            <div class="mb-4">
                                                <p class="text-primary mb-1"><i class="i-Home1 text-16 mr-1"></i> School</p><span>School of Digital Marketing</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr />
                                    <h4>Other Info</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum dolore labore reiciendis ab quo ducimus reprehenderit natus debitis, provident ad iure sed aut animi dolor incidunt voluptatem. Blanditiis, nobis aut.</p>
                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 col-6 text-center"><i class="i-Plane text-32 text-primary"></i>
                                            <p class="text-16 mt-1">Travelling</p>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-6 text-center"><i class="i-Camera text-32 text-primary"></i>
                                            <p class="text-16 mt-1">Photography</p>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-6 text-center"><i class="i-Car-3 text-32 text-primary"></i>
                                            <p class="text-16 mt-1">Driving</p>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-6 text-center"><i class="i-Gamepad-2 text-32 text-primary"></i>
                                            <p class="text-16 mt-1">Gaming</p>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-6 text-center"><i class="i-Music-Note-2 text-32 text-primary"></i>
                                            <p class="text-16 mt-1">Music</p>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-6 text-center"><i class="i-Shopping-Bag text-32 text-primary"></i>
                                            <p class="text-16 mt-1">Shopping</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="phone" role="tabpanel" aria-labelledby="phone-tab">
                                    
                                    <div class="card-body text-left">
                                        <!-- begin::modal-->
                                        <div class="ul-card-list__modal">
                                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <?php 
                                                                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                                                                    if(isset($_POST['tel'])){
                                                                        $tel = strval($_POST['tel']);
                                                                        $titletel = strval($_POST['titletel']);

                                                                        // $stmt = $db->prepare("SELECT ID from client WHERE email = ?");
                                                                        // $stmt->execute(array($email));
                                                                        // if($stmt->rowcount() > 0){
                                                                        //     echo 2;
                                                                        // }else{
                                                                        // }

                                                                        $stmt = $db->prepare("INSERT INTO phone(title,tel,user,date) values(:t,:tel,:u,NOW())");
                                                                        if($stmt->execute(array(
                                                                            "t" => $titletel,
                                                                            "tel" => $tel,
                                                                            "u" => $client['ID'],
                                                                        ))){    
                                                                            $url = $config['site'] . "/client/" . $client['ID'] . "/phone";
                                                                            header("location:$url");
                                                                        }
                                                                    }
                                                                }
                                                            ?>
                                                            <form class='formAddTel' method="POST">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label" for="titletel">عنوان الهاتف : </label>
                                                                    <div class="col-sm-10">
                                                                        <input class="form-control" name="titletel" id="titletel" type="text" placeholder="عنوان الهاتف" />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label" for="tel">رقم الهاتف : </label>
                                                                    <div class="col-sm-10">
                                                                        <input class="form-control" name="tel" id="tel" type="number" placeholder="رقم الهاتف" />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-10">
                                                                        <button class="btn btn-success btnAddTel" type="submit">اضافة</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end::modal-->
                                        <div class="card-header text-right bg-transparent">
                                            <button class="btn btn-primary btn-md m-1" type="button" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="i-Telephone-2 text-white mr-2"></i> هاتف جديد </button>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="display table" id="ul-contact-list" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th class="sorting_desc">#</th>
                                                        <th>title</th>
                                                        <th>tel</th>
                                                        <th>Joining Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                        $stmt = $db->prepare("SELECT * FROM phone WHERE user = ?");
                                                        $stmt->execute(array($client['ID']));
                                                        if($stmt->rowcount() > 0){
                                                            $dataPhone = $stmt->fetchall();
                                                            foreach($dataPhone as $phone){ ?>
                                                                <tr>
                                                                    <td><?php echo $phone['ID'] ?></td>
                                                                    <td>
                                                                            <div class="ul-widget-app__profile-pic"><?php echo $phone['title'] ?></div>
                                                                    </td>
                                                                    <td><a href="tel:<?php echo $phone['tel'] ?>"><?php echo $phone['tel'] ?></a></td>
                                                                    <td><?php dateFormat($phone['date'],"M d, Y"); ?></td>
                                                                    <td>
                                                                        <a class="ul-link-action text-danger mr-1 deleteContactTel" onclick='deleteContactTel(this)' href="javascript:void(0)" data-id='<?php echo $phone['ID'] ?>' data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a>
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
                                <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
                                    <div class="row">
                                        <form class='fromEditContact' data-id='<?php echo $client['ID']; ?>'>
                                            <div class="row text-left">
                                                <div class="col-md-12 form-group mb-3">
                                                    <label for="fullname">أسم العميل</label>
                                                    <input class="form-control" id="fullname" type="text" placeholder="أسم العميل"  value='<?php echo $client['fullname'] ?>'>
                                                </div>
                                                <div class="col-md-12 form-group mb-3">
                                                    <label for="email">البريد الإلكتروني</label>
                                                    <input class="form-control" id="email" type="email" placeholder="البريد الإلكتروني" value='<?php echo $client['email'] ?>'>
                                                    <small id="emailHelp" class="form-text text-muted">يجب ان يكون هذا البريد مختلف عن باقي العملاء</small>
                                                </div>
                                                <div class="col-md-12 form-group mb-3">
                                                    <label for="address">العنوان او الملاحظات</label>
                                                    <textarea class="form-control" id="address" placeholder="العنوان او الملاحظات"><?php echo $client['address'] ?></textarea>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <button class="btn btn-primary">تعديل</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end of main-content -->
                </div>
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
    <script>
        $('#ul-contact-list').DataTable();
    </script>
    <?php 
        if(isset($_GET['tab'])){
            ?>
            <script>
                $(document).ready(function () {
                    $("[aria-controls='<?php echo $_GET['tab'] ?>']").click();
                });
            </script>
            <?php
        }
    ?>
<script>
    $(document).ready(function () {
        $(".nav-link").on("click",function(){
            valTab =  $(this).attr("aria-controls");
            history.pushState(0," " ,config['site'] + "/client/<?php echo $client['ID'] ?>/" + valTab );
        });
    });
</script>

    <script src="../../dist-../../dist-assets/js/script.js"></script>
</body>

</html>