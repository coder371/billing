<?php 
    ob_start();
    session_start();
    require_once "./conn/conn.php";
    require_once "./init/config.php";
    require_once "./init/function.php";
    require_once "./inc/static/head.php";
    $site = $config['site'];
    if(isset($_COOKIE['code']) AND isset($_COOKIE['token'])){
         header("location:$site"); 
    }elseif(isset($_SESSION['code']) AND isset($_SESSION['token'])){
        header("location:$site"); 
    }
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $err = [];
        $username = $_POST['username'];
        $password = MD5($_POST['password']) ;
        echo $password;
        $remmber = $_POST['remmber'];
        $stmt = $db->prepare("SELECT * FROM users WHERE email = ? AND password = ? ");
        $stmt->execute(array($username,$password));
        if($stmt->rowcount() > 0){
            $data = $stmt->fetch();
            $code = code($db,"token","users",25);
            $stmt = $db->prepare("UPDATE users SET token = ? WHERE ID = ?");
            $stmt->execute(array($code,$data['ID']));
            if($remmber == "on"){
                setcookie("code", $data['code'] , time() + (86400 * 30 * 30), "/");
                setcookie("token", $code , time() + (86400 * 30 * 30), "/");
            }else{
                $_SESSION['code'] = $data['code'];
                $_SESSION['token'] = $code;
            }
            header("Refresh:0");
        }else{
            $err[] = "ربما يكون اسم المستخدم أو رمز المرور غير صحيح";
        }
    }
?>
    <div class="auth-layout-wrap" style="background-image: url(../../dist-assets/images/photo-wide-4.jpg)">
        <div class="auth-content">
            <div class="card o-hidden">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <div class="p-4">
                            <div class="auth-logo text-center mb-4"><img src="../../dist-assets/images/logo.png" alt=""></div>
                            <h1 class="mb-3 text-18">دخول</h1>
                            <form method='POST'>
                            <?php if(!empty($err)){ foreach($err as $e){ ?>
                                    <div class="alert alert-danger"><?php echo $e; ?></div>
                            <?php } } ?>
                                <div class="form-group">
                                    <label for="email">البريد الالكتروني أو أسم المستخدم</label>
                                    <input class="form-control form-control-rounded" name='username' id="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">رمز المرور</label>
                                    <input class="form-control form-control-rounded" name="password" id="password" type="password" required>
                                </div>
                                <div class="form-group">
                                    <label class="switch pr-5 switch-success mr-3"><span>تذكرني لمدة شهر</span>
                                        <input type="checkbox" name='remmber' checked="checked"><span class="slider"></span>
                                    </label>
                                </div>
                                <button class="btn btn-rounded btn-primary btn-block mt-2">دخول</button>
                            </form>
                            <div class="mt-3 text-center"><a class="text-muted" href="forgot">
                                <u>نسيت رمز المرور ؟</u></a></div>
                        </div>
                    </div>
                    <div class="col-md-6 text-center p-0" style="background-size: cover;background-image: url(../../dist-assets/images/photo-long-3.jpg)">
                        <div class="pr-3 auth-right" style="background: #0000008c;color: #fff;">
                            Optics Online system
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>