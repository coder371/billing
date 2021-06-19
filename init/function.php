<?php
    function getData($db,$row,$table,$sp){
        $stmt = $db->prepare("SELECT `$row` FROM `$table` $sp");
        $stmt->execute();
        if($stmt->rowcount() > 0){
            $out = $stmt->fetch();
            echo $out[$row];
        }
    }
    function getCount($db,$row,$table,$sp){
        $stmt = $db->prepare("SELECT Count($row) As `$row` FROM `$table` $sp");
        $stmt->execute();
        if($stmt->rowcount() > 0){
            $out = $stmt->fetch();
            echo $out[$row];
        }
    }
    function getCountReturn($db,$row,$table,$sp){
        $stmt = $db->prepare("SELECT Count($row) As `$row` FROM `$table` $sp ");
        $stmt->execute();
        if($stmt->rowcount() > 0){
            $out = $stmt->fetch();
            return $out[$row];
        }
    }
    function arrowType($type,$available){
        if($type == 1){ ?>
            <span class="badge badge-pill badge-outline-success p-2 m-1">متوفر</span>
        <?php }elseif($type == 2){ ?>
            <span class="badge badge-pill badge-outline-warning p-2 m-1">على وشك النفاذ</span>
        <?php }else{ ?>
            <span class="badge badge-pill badge-outline-danger p-2 m-1">غير متوفر</span>
        <?php }

        if($available == 1){ ?>
            <span class="badge badge-pill badge-outline-success p-2 m-1">متاح للبيع</span>
        <?php }elseif($available == 2){ ?>
            <span class="badge badge-pill badge-outline-warning p-2 m-1">غير متاح للبيع</span>
        <?php }else{ ?>
            <span class="badge badge-pill badge-outline-danger p-2 m-1">محذوف</span>
        <?php }
    }
    function arrowBillType($type){
        if($type == 1){ ?>
            <span class="badge badge-pill badge-outline-success p-2 m-1">تم الدفع</span>
        <?php }elseif($type == 2){ ?>
            <span class="badge badge-pill badge-outline-warning p-2 m-1">لم يتم الدفع</span>
        <?php }elseif($type == 0){ ?>
            <span class="badge badge-pill badge-outline-warning p-2 m-1">لم الحذف</span>
        <?php }else{ ?>
            <span class="badge badge-pill badge-outline-danger p-2 m-1">متأخرة الدفع</span>
        <?php }
    }
    function arrowBillPaid($paid){
        if($paid == 1){ ?>
            <span class="badge badge-pill badge-outline-success p-2 m-1">تم الدفع</span>
        <?php }elseif($paid == 0){ ?>
            <span class="badge badge-pill badge-outline-danger p-2 m-1">لم يتم الدفع</span>
    <?php }
    }
    function dateFormat($textDate,$format){
        $date = date_create($textDate);
        echo date_format($date,$format);
    }
    
    function getval($db,$categ = 0,$type,$format = 0){
        if($categ > 0){
            $stmt = $db->prepare("SELECT SUM(value) as sumvalue FROM `procedure` WHERE categ = ? AND type = ? AND status > 0");
            $stmt->execute(array($categ,$type));
        }else{
            $stmt = $db->prepare("SELECT SUM(value) as sumvalue FROM `procedure` WHERE type = ? AND status > 0");
            $stmt->execute(array($type));
        }
        if($stmt->rowcount() > 0){
            $dateSum = $stmt->fetch();
            
            if($format > 0){
                return number_format($dateSum['sumvalue']);
            }else{
                return $dateSum['sumvalue'];
            }
        }
    }
    function getValUser($db,$client,$type,$categ = 0,$format = 0){
        if($categ == 0){
            $stmt = $db->prepare("SELECT SUM(value) as sumvalue FROM `procedure` WHERE client = ? AND type = ? AND status > 0");
            $stmt->execute(array($client,$type));
        }else{
            $stmt = $db->prepare("SELECT SUM(value) as sumvalue FROM `procedure` WHERE client = ? AND categ = ? AND type = ? AND status > 0");
            $stmt->execute(array($client,$categ,$type));
        }
        

        if($stmt->rowcount() > 0){
            $dateSum = $stmt->fetch();
            
            if($format > 0){
                return number_format($dateSum['sumvalue']);
            }else{
                return $dateSum['sumvalue'];
            }
        }
    }
    function code($db,$row,$table,$num = 10){
        $code = '';
        $arrStr = str_split(str_shuffle("QWERTYUIOPASDFGHJKLMNBVCXZ0123456789"));
        for($i=0;$i<$num;$i++){
            $code .= $arrStr[$i];
        }
        $stmt = $db->prepare("SELECT `$row` FROM `$table` WHERE `$row` = ?");
        $stmt->execute(array($code));
        if($stmt->rowcount() > 0){
            code();
        }else{
            return $code;
        }
    }
    function expireEmailRest($date){
        date_default_timezone_set('Africa/Cairo');
        $strStart = $date;
        $dteStart = new DateTime($strStart);
        $dteEnd   = new DateTime("NOW");
        $dteDiff  = $dteStart->diff($dteEnd);
        $status = 1;
        if($dteDiff->format("%Y") > 0){
            $status = 0;
        }else{
            if($dteDiff->format("%m") > 0){
                $status = 0;
            }else{
                if($dteDiff->format("%d") > 0){
                    $status = 0;
                }else{
                    if($dteDiff->format("%h") > 0){
                        $status = 0;
                    }else{
                        if($dteDiff->format("%I") > 30){
                            $status = 0;
                        }
                    }
                }
            }
        }
        return $status;
    }
    function getNewProducer($db){
        $IDbarCode = 100000000;
        $arrNewInfo = [];
        $stmt = $db->prepare("SELECT * FROM producer ORDER BY ID DESC limit 1");
        $stmt->execute();

        if($stmt->rowcount() > 0){
            $dateNewProducer = $stmt->fetch();
            $ID = ($dateNewProducer['ID'] + 1);
            $Barcode = ($ID + $IDbarCode);
        }else{
            $ID = 1;
            $Barcode = ($ID + $IDbarCode);
        }

        $arrNewInfo['ID'] = $ID;
        $arrNewInfo['barcode'] = $Barcode;
        return $arrNewInfo;
    }
    function getNewBill($db){
        $IDbarCode = 100000000;
        $arrNewInfo = [];
        $stmt = $db->prepare("SELECT * FROM bill ORDER BY ID DESC limit 1");
        $stmt->execute();

        if($stmt->rowcount() > 0){
            $dateNewProducer = $stmt->fetch();
            $ID = ($dateNewProducer['ID'] + 1);
            $Barcode = ($ID + $IDbarCode);
        }else{
            $ID = 1;
            $Barcode = ($ID + $IDbarCode);
        }

        $arrNewInfo['ID'] = $ID;
        $arrNewInfo['barcode'] = $Barcode;
        return $arrNewInfo;
    }
    function gotopage($page){
        
        switch($page){
            case "home";
            header("location:/");
            break;
            case "allproducer";
            header("location:/allproducer.php");
            break;
            case "billing";
            header("location:/Billing.php");
            break;
        }
        
    }
    function addProducer($db,$producer){
        $title = strval($producer['title']);
        $barcode = intval($producer['barcode']);
        if(is_numeric($producer['categ'])){
            $categ = intval($producer['categ']);
        }else{
            $stmt = $db->prepare("INSERT INTO categ(title,date) Values(:t,NOW())");
            $stmt->execute(array( "t" => $_POST['categ'], ));

            $stmt = $db->prepare("SELECT ID FROM categ ORDER BY ID DESC LIMIT 1");
            $stmt->execute();
            if($stmt->rowcount() > 0){
                $categ = $stmt->fetch()['ID'];
            }
        }
        $buy = strval($producer['buy']);
        $sell = strval($producer['sell']);
        $amount = intval($producer['amount']);
        $alert = intval($producer['alert']);
        if(isset($producer['available'])){if($producer['available'] == "on"){$available = 1;}else{$available = 0;}}else{$available = 0;}
        if($amount > 0){if($alert >= $amount){$status = 2;}else{$status = 1;}}else{$status = 0;}

        $stmt = $db->prepare("INSERT INTO producer(title,barcode,categ,buy,sell,amount,alert,available,status,date)
                                values(:t,:b,:c,:buy,:sell,:amount,:alert,:av,:s,NOW())");
        $stmt->execute(array(
            "t" => $title,
            "b" => $barcode,
            "c" => $categ,
            "buy" => $buy,
            "sell" => $sell,
            "amount" => $amount,
            "alert" => $alert,
            "av" => $available,
            "s" => $status,
        ));
    }
    function getDateInfo($db,$select,$from,$sp){
        $stmt = $db->prepare("SELECT $select FROM `$from` WHERE $sp");
        $stmt->execute();
        if($stmt->rowcount() > 0){
            $data = $stmt->fetch();
            if($data[$select]){
                return $data[$select];
            }else{
                return 0;
            }
        }else{
            return "غير معروف";
        }
    }

    function fetchArray($db,$from,$sp){
        $stmt = $db->prepare("SELECT * FROM `$from` WHERE ID = ?");
        $stmt->execute(array($sp));
        if($stmt->rowcount() > 0){
            $data = $stmt->fetch();
            return $data;
        }else{
            return false;
        }
    }

    function lineTime($db,$IDp,$site,$GU){
        $stmt = $db->prepare("SELECT * FROM movements WHERE IDproducer = ?");
        $stmt->execute(array($IDp));
        if($stmt->rowcount() > 0){
            $data = $stmt->fetchall();
            foreach($data as $line){ 
                $user =  fetchArray($db,"users",$line['IDadmin']);
                ?>
                <li>
                    
                        <?php if($line['type'] == "bill"){
                            echo '<div class="timeline-badge bg-danger">-' . $line['amount'] . "</div>";
                        }elseif($line['type'] == 1){
                            echo '<div class="timeline-badge bg-success">+' . $line['amount'] . "</div>";
                        }elseif($line['type'] == 2){
                            echo '<div class="timeline-badge bg-danger">-' . $line['amount'] . "</div>";
                        } ?>
                    
                    <div class="timeline-panel">
                        <div class="timeline-heading">

                        <?php if($line['type'] == "bill"){ ?>
                            <h4 class="timeline-title">فاتورة</h4> 
                            <h4><small class="text-muted">رقم العميلة : <strtong>#<?php echo $line['ID']; ?></strtong></h5>
                        <?php }elseif($line['type'] == 1){ ?>
                            <h4 class="timeline-title">عملية اضافة</h4> 
                            <h4><small class="text-muted">رقم العميلة : <strtong>#<?php echo $line['ID']; ?></strtong></h5>
                        <?php }elseif($line['type'] == 2){ ?>
                            <h4 class="timeline-title">عملية انقاص</h4> 
                            <h4><small class="text-muted">رقم العميلة : <strtong>#<?php echo $line['ID']; ?></strtong></h5>
                        <?php } ?>
                            <h5>تاريخ : <i class="i-time"></i><?php echo dateFormat($line['date'],"Y/m/d H:i"); ?> </small> </h5>
                        </div>
                        <div class="timeline-body">
                            <p>
                            <?php if($GU['ID'] == $user['ID']){
                                echo "قمت <strong>انت</strong> ";
                            }else{
                                echo "<a href='" . $site ."/". $user['ID']  . "'>قام " . $user['fullname'] . "</a>";
                            } ?>

                            <?php if($line['type'] == "bill"){ ?>
                                    ببيع  
                                    <?php echo "<strong> عدد : " . $line['amount'] . "</strong> "; ?>
                                    في 
                                    <a href="<?php echo $site; ?>/bill/<?php echo $line['IDbill'] ?>"><strong> الفاتورة رقم : <?php echo $line['IDbill'] ?></strong></a> ,
                                    وكان سعر الوحدة يساوي  :
                                    <?php echo "<strong>" . $line['sell'] . " جنيه </strong> "; ?>
                                    حيث أصبح اجمالي المبلغ يساوي :
                                    <?php echo "<strong>" . $line['total'] . " جنيه </strong> "; ?>
                            <?php }elseif($line['type'] == 1){ ?>

                                    بإضافة  
                                    <?php echo "<strong> عدد : " . $line['amount'] . "</strong> "; ?>
                                    للمخزن وكان سعر الوحدة يساوي  :
                                    <?php echo "<strong>" . $line['sell'] . " جنيه </strong> "; ?>
                                    حيث أصبح اجمالي المبلغ يساوي :
                                    <?php echo "<strong>" . $line['total'] . " جنيه </strong> "; ?>

                            <?php }elseif($line['type'] == 2){ ?>

                                    بإنقاص  
                                    <?php echo "<strong> عدد : " . $line['amount'] . "</strong> "; ?>
                                    من المخزن وكان سعر الوحدة يساوي  :
                                    <?php echo "<strong>" . $line['sell'] . " جنيه </strong> "; ?>
                                    حيث أصبح اجمالي المبلغ يساوي :
                                    <?php echo "<strong>" . $line['total'] . " جنيه </strong> "; ?>

                            <?php } ?>
                            </p>
                        </div>
                    </div>
                </li>
            <?php
            }
        }else{
            ?>
                <div class="alert alert-warning">لا توجد اي حركات لهذا المنتج</div>
            <?php
        }
    }