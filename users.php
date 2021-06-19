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
                    <h1>المشرفين</h1>
                    <ul>
                        <li><a href="">كل المشرفين</a></li>
                        <li></li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top text-left">
                    <div class="row p-1">
                        <?php 
                            $stmt = $db->prepare("SELECT * FROM users");
                            $stmt->execute();
                            if($stmt->rowcount() > 0){
                                $dataUsers = $stmt->fetchall();
                                foreach($dataUsers as $user){ ?>

                                    <div class="col-md-4 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="user-profile mb-4">
                                                    <div class="ul-widget-card__user-info border-bottom-gray-200 pb-3">
                                                        <a href="<?php echo $config['site'] ?>/user/<?php echo $user['ID'] ?>"><img class="profile-picture avatar-xl mb-2" src="<?php echo $config['cdnAvatarUsers'] ?>/<?php echo $user['avatar'] ?>" alt="alt"></a>
                                                        <a href="<?php echo $config['site'] ?>/user/<?php echo $user['ID'] ?>"><p class="text-18 badge-success" style="width: fit-content;text-align: center;margin: auto;padding: 1px 11px;border-radius: 6px;font-weight: 400;"><?php switch($user['level']){case 0;echo "مشرف";break;case 1;echo "مدير";break;}?></p></a>
                                                        <a href="<?php echo $config['site'] ?>/user/<?php echo $user['ID'] ?>"><p class="m-0 text-24"><?php echo $user['fullname']; ?></p></a>
                                                        <p class="text-muted m-0"><a href="Mailto:<?php echo $user['email']; ?>"><?php echo $user['email']; ?></a></p>
                                                        <div class="mt-3 ul-widget-app__skill-margin">
                                                            <span class="text-15"><?php // echo $user['address']; ?></span>
                                                        </div>
                                                    </div>
                                                    <?php 
                                                        $paid = getDateInfo($db,"sum(total)","bill","paid = 1 AND IDadmin = " . $user['ID']);
                                                        if(!is_numeric($paid)){$paid = 0;}
                                                        $total = getDateInfo($db,"sum(total)","bill","IDadmin = " . $user['ID']);
                                                        if(!is_numeric($total)){$total = 0;}
                                                        if($total > 0){
                                                            $per = ($paid/$total)*100;
                                                        }else{
                                                            $per = 100;
                                                        }
                                                    ?>
                                                    <div class="progress progress--height-2 mb-3 bg-danger">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo floor($per) ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="ul-widget-app__profile-footer mt-4">
                                                        <div class="ul-widget-app__profile-footer-font"><a href="href"><i class="i-Billing text-16 font-weight-600 mr-1"></i><span class="text-16 font-weight-600">عدد الفواتير :  <?php echo getDateInfo($db,"count(ID)","bill","IDadmin = " . $user['ID']); ?></span></a></div><br>
                                                        <div class="ul-widget-app__profile-footer-font"><a href="href"><i class="i-Coins text-16 font-weight-600 mr-1"></i><span class="text-16 font-weight-600"> المعاملات : <?php echo getDateInfo($db,"sum(total)","bill","IDadmin = " . $user['ID']); ?>ج.م</span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php 
                                }
                            }
                        ?>
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

</body>
</html>