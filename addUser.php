<?php require_once "./init/init.php"; ?>
<?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $err = [];
        $fullname       = strval($_POST['fullname']);
        $email          = strval($_POST['email']);
        $password       = strval($_POST['password']);
        $hash           = md5($password);
        $actpassword    = strval($_POST['actpassword']);
        $code           = code($db,"code","users","20");
        if(isset($_POST['level']) AND $_POST['level'] == "on"){$level = 1;}else{$level = 0;}
        if($_FILES['avatarUserInput']['name']){
            $imgname = $_FILES['avatarUserInput']['name'];
            $arrNameImg = explode(".",$imgname);
            $type =  $arrNameImg[count($arrNameImg) -1 ];
            $img_name = RAND(0,99999999).RAND(0,99999999)."_".RAND(0,99999999).RAND(0,99999999)."_".RAND(0,99999999).RAND(0,99999999)."_".RAND(0,99999999).RAND(0,99999999)."Majarah.".$type;
            $img_tmp = $_FILES['avatarUserInput']['tmp_name'];
            move_uploaded_file($img_tmp,"./dist-assets/images/users/" . $img_name);
        }

        $stmt = $db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute(array($email));
        if($stmt->rowcount() > 0){
            $err[] = "هذا البريد مسجل من قبل";
        }
        if($password != $actpassword){
            $err[] = "رمزي المرور غير متطابقي";
        }
        if(empty($err)){
            $stmt = $db->prepare("INSERT INTO users(fullname,email,password,code,avatar,level,date)
                                    VALUES(:full,:e,:pass,:code,:avatar,:level,NOW())");
            if($stmt->execute(array(
                "full"      => $fullname,
                "e"         => $email,
                "pass"      => $hash,
                "code"      => $code,
                "avatar"    => $img_name,
                "level"     => $level,
            ))){
                if($level == 1){
                    $success[] = "تم اضافة المدير " . $fullname . " بنجاح";
                }else{
                    $success[] = "تم اضافة المشرف " . $fullname . " بنجاح";
                }
                header("location:/users");
            }
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
                    <h1>المشرفين</h1>
                    <ul>
                        <li><a href="">اضافة مشرف</a></li>
                        <li></li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top text-left p-lg-5 p-md-0">
                <form action="" class='formAddUser' method="post" enctype="multipart/form-data" ID='formAddUser'>
                    <div class="col-xl-6 col-lg-6 col-md-12 m-auto">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title text-center">مشرف جديد</div>
                                <?php if(!empty($err)){
                                    foreach($err as $e){ ?>
                                        <div class='alert alert-danger'><?php echo $e ?></div>
                                <?php } } ?>
                                <div class="user-profile mb-4 m-auto">
                                    <div class="mb-3 text-center">
                                        <label for='avatarUserInput'><img class="profile-picture avatar-xl mb-2" id='avatarUser' src="<?php echo $config['cdnAvatarUsers'] ?>/support.png" alt="alt"></label>
                                        <div><input id='avatarUserInput' name='avatarUserInput' type="file" onchange="readURL(this,'#avatarUser')" multiple accept="image/x-png, image/gif, image/jpeg, image/jpg" required></div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">الاسم بالكامل</span></div>
                                    <input class="form-control h50" ID='fullname' name='fullname' type="text" placeholder="الاسم بالكامل" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">البريد الالكتروني</span></div>
                                    <input class="form-control h50" ID='email' name='email' type="text" placeholder="البريد الالكتروني" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <hr>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">رمز المرور</span></div>
                                    <input class="form-control h50" ID='password' name='password' type="password" placeholder="رمز المرور" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">تأكيد رمز المرور</span></div>
                                    <input class="form-control h50" ID='actpassword' name='actpassword' type="password" placeholder="تأكيد رمز المرور" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <hr>
                                <div class="input-group mb-3 text-center">
                                    <label class="switch pr-5 switch-success mr-3"><span>مدير</span>
                                        <input name='level' type="checkbox" /><span class="slider"></span>
                                    </label>
                                </div>
                                <div class="input-group text-center">
                                    <input class="btn btn-success" type="submit" value='اضافة'>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../../dist-assets/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="../../dist-assets/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="../../dist-assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="../../dist-assets/js/scripts/script.min.js"></script>
    <script src="../../dist-assets/js/scripts/sidebar.large.script.min.js"></script>
    <script src="../../dist-assets/js/plugins/sweetalert2.min.js"></script>
    <script src="../../dist-assets/js/scripts/sweetalert.script.min.js"></script>
    <script src="../../dist-assets/js/script.js"></script>
</body>
</html>