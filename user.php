<?php require_once "./init/init.php"; ?>
<?php 
    if(isset($_GET['ID']) AND is_numeric($_GET['ID'])){
        $ID = intval($_GET['ID']);
        $stmt = $db->prepare("SELECT * FROM users WHERE ID = ?");
        $stmt->execute(array($ID));
        if($stmt->rowcount() > 0){
            $users = $stmt->fetch();
        }else{
            header("location:/users");
            exit();
        }
    }else{
        header("location:/users");
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
                    <h1>ملفات المشرفين والمدراء</h1>
                    <ul>
                        <li><a href=""><?php echo $users['fullname'] ?></a></li>
                        <li>الملف الشخصي</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top text-left">
                    <div class="card user-profile o-hidden mb-4">
                        <div class="card-body">
                            <ul class="nav nav-tabs profile-nav mb-4 " style='justify-content: right;' id="profileTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="homeInfo-tab" data-toggle="tab" href="#homeInfo" role="tab" aria-controls="homeInfo" aria-selected="false">الاحصائيات</a></li>
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
                                                        <p class="text-primary text-24 line-height-1 mb-2"><?php echo getDateInfo($db,"sum(total)","bill","IDadmin = " . $users['ID']); ?><small>ج.م</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                                <div class="card-body text-center"><i class="i-Billing"></i>
                                                    <div class="content">
                                                        <p class="text-muted mt-2 mb-0">الفواتير</p>
                                                        <p class="text-primary text-24 line-height-1 mb-2"><?php echo getDateInfo($db,"count(ID)","bill","IDadmin = " . $users['ID']); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                                <div class="card-body text-center"><i class="i-Check"></i>
                                                    <div class="content">
                                                        <p class="text-muted mt-2 mb-0">تم الدفع</p>
                                                        <p class="text-primary text-20 line-height-1 mb-0"><?php echo getDateInfo($db,"sum(total)","bill","paid = 1 AND IDadmin = " . $users['ID']); ?><small>ج.م</small> </p>
                                                        <small class="text-muted text-12 mb-0"><?php echo getDateInfo($db,"count(ID)","bill","paid = 1 AND IDadmin = " . $users['ID']); ?> فاتورة</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                                <div class="card-body text-center"><i class="i-Check"></i>
                                                    <div class="content">
                                                        <p class="text-muted mt-2 mb-0">لم يتم الدفع</p>
                                                        <p class="text-primary text-20 line-height-1 mb-0"><?php echo getDateInfo($db,"sum(total)","bill","paid = 0 AND IDadmin = " . $users['ID']); ?><small>ج.م</small> </p>
                                                        <small class="text-muted text-12 mb-0"><?php echo getDateInfo($db,"count(ID)","bill","paid = 0 AND IDadmin = " . $users['ID']); ?> فاتورة</small>
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
                                                            $stmt = $db->prepare("SELECT * FROM bill WHERE IDadmin = ? AND  status != 0 ORDER BY ID DESC Limit 10");
                                                            $stmt->execute(array($users['ID']));
                                                            if($stmt->rowcount() > 0){
                                                                $dataBill = $stmt->fetchall();
                                                                foreach($dataBill as $bill){ ?>
                                                                    <tr>
                                                                        <td><?php echo $bill['ID'] ?></td>
                                                                        <td>
                                                                            <a href="/client/<?php echo $bill['IDclient'] ?>">
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
                                                            <img class="profile-picture avatar-xl mb-2" src="<?php echo $config['cdnAvatarUsers'] ?>/<?php echo $users['avatar'] ?>" alt="alt">
                                                            <p class="m-0 text-24"><?php echo $users['fullname']; ?></p>
                                                            <p class="text-muted m-0"><a href="Mailto:<?php echo $users['email']; ?>"><?php echo $users['email']; ?></a></p>
                                                            <div class="mt-3 ul-widget-app__skill-margin">
                                                                <span class="text-15"><?php // echo $users['address']; ?></span>
                                                            </div>
                                                        </div>
                                                        <?php 
                                                            $paid = getDateInfo($db,"sum(total)","bill","paid = 1 AND IDadmin = " . $users['ID']);
                                                            $total = getDateInfo($db,"sum(total)","bill","IDadmin = " . $users['ID']);
                                                            if($total != 0){$per = ($paid/$total)*100;}else{$per = 100;   }
                                                        ?>
                                                        <div class="progress progress--height-2 mb-3 bg-danger">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo floor($per) ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <hr>
                                                        <div class="ul-widget-app__profile-footer mt-4">
                                                            <a href="mailto:<?php echo $users['email'] ?>"><button class="btn btn-primary btn-icon m-1" type="button"><span class="ul-btn__icon"><i class="i-Email"></i></span><span class="ul-btn__text"> <?php echo $users['email'] ?></span></button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
                                    <div class="row">
                                        <form class='fromUserContact' data-id='<?php echo $users['ID']; ?>'>
                                            <div class="row text-left">
                                                <div class="col-md-12 form-group mb-3">
                                                    <label for="fullname">أسم العميل</label>
                                                    <input class="form-control" id="fullname" type="text" placeholder="أسم العميل"  value='<?php echo $users['fullname'] ?>'>
                                                </div>
                                                <div class="col-md-12 form-group mb-3">
                                                    <label for="email">البريد الإلكتروني</label>
                                                    <input class="form-control" id="email" type="email" placeholder="البريد الإلكتروني" value='<?php echo $users['email'] ?>'>
                                                    <small id="emailHelp" class="form-text text-muted">يجب ان يكون هذا البريد مختلف عن باقي المشرفين</small>
                                                </div>
                                                <hr>
                                                <div class="input-group mb-3 col-md-12">
                                                    <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">رمز المرور</span></div>
                                                    <input class="form-control h50" ID='password' name='password' type="password" placeholder="رمز المرور" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3 col-md-12">
                                                    <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">تأكيد رمز المرور</span></div>
                                                    <input class="form-control h50" ID='actpassword' name='actpassword' type="password" placeholder="تأكيد رمز المرور" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3 col-md-12">
                                                    <small id="emailHelp" class="form-text text-muted">اذا كنت لا تريد تعديل رمز المرور اترك الحقلين بالاعلى فارغين</small>
                                                </div>
                                                <hr>
                                                
                                                <div class="col-md-12 form-group mb-3">
                                                    <label for="email">رمز المرور الحالي</label>
                                                    <input class="form-control h50" ID='oldpassword' name='oldpassword' type="password" placeholder="رمز المرور الحالي" aria-label="Username" aria-describedby="basic-addon1" required>
                                                    <small id="emailHelp" class="form-text text-muted">يجب كتابة رمز المرور الحالي لتتمكن من تعديل البيانات</small>
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
            history.pushState(0," " ,config['site'] + "/user/<?php echo $users['ID'] ?>/" + valTab );
        });
    });
</script>

    <script src="../../dist-../../dist-assets/js/script.js"></script>
</body>

</html>