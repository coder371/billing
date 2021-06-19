<?php 

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['ID'])){
            $ID = intval($_POST['ID']);
            require_once "../../conn/conn.php";
            require_once "../../init/config.php";
            $stmt = $db->prepare("SELECT * FROM client WHERE ID = ?");
            $stmt->execute(array($ID));
            if($stmt->rowcount() > 0){
                $client = $stmt->fetch();
            ?>  

                <div class="card-body">
                    <div class="ul-widget__head pb-20 v-margin">
                        <div class="ul-widget__head-label">
                            <h3 class="ul-widget__head-title">بيانات العميل</h3>
                        </div>
                        <button class="btn btn-info dropdown-toggle _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">اعدادت</button>
                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
                        </div>
                    </div>
                    <div class="ul-widget__body">
                        <div class="ul-widget1">
                            <div class="ul-widget4__item ul-widget4__users">
                                <div class="ul-widget4__img"><img id="userDropdown" src="<?php echo $config['cdnAvatarClient'] ?>/<?php echo $client['avatar'] ?>" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></div>
                                <div class="ul-widget2__info ul-widget4__users-info ml-3">
                                    <a class="ul-widget2__title" href="#"><?php echo $client['fullname'] ?></a>
                                    <span class="ul-widget2__username" href="#">كود العميل : <?php echo $client['ID'] ?></span>
                                    <span class="ul-widget2__username" href="#"><?php echo $client['address'] ?></span>
                                </div>
                                    <!-- <span class="ul-widget4__number t-font-boldest text-success">+500</span> -->
                            </div>
                        </div>
                    </div>
                </div>

            <?php
            }else{
            ?>  
                <div class="alert alert-warning">لم يتم العثور على هذا العميل</div>
            <?php
            }
        }
    }

?>