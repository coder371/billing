<?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        session_start();
        require_once "../../conn/conn.php";
        require_once "../../init/billFunction.php";
        require_once "../../init/GU.php";
        $client         = intval($_POST['client']);
        $barcode        = intval($_POST['barcode']);
        $date           = strval($_POST['date']);
        if($_POST['send']){$send = 1;}else{$send = 0;}
        if($_POST['paid']){$paid = 1;}else{$paid = 0;}
        $dataBill       = json_decode($_POST['dataBill']);
        $total          = strval($_POST['total']);
        $issetBill      = billisset($db,$barcode);
        $issetClient    = clientisset($db,$client);
        $err = [];
        if($issetClient){
            if(!$issetBill){
                $stmt = $db->prepare("INSERT INTO bill(IDclient,IDadmin,total,barcode,paid,date,Issuance)values(:IDc,:IDa,:t,:b,:paid,:dat,NOW())");
                if($stmt->execute(array(
                    "IDc"   => $client,
                    "IDa"   => $GU['ID'],
                    "t"     => $total,
                    "b"     => $barcode,
                    "paid"  => $paid,
                    "dat"   => $date,
                ))){
                    $IDbill = getIDbillWithBarcode($db,$barcode);
                    if($IDbill){
                        foreach($dataBill as $item){
                            $stmtItem = $db->prepare("INSERT INTO itembill(IDbill,IDproducer,amount,sell,total) values(:IDb,:IDp,:am,:s,:t)");
                            if($stmtItem->execute(array(
                                "IDb"       => $IDbill,
                                "IDp"       => $item->producer,
                                "am"        => $item->amount,
                                "s"         => $item->sell,
                                "t"         => $item->total,
                            ))){
                                pursuerProducer($db,$item,$IDbill,$GU['ID']);
                            }
                        }
                        echo '{"status":"success","IDBill":"' . $IDbill . '"}';
                    }
                }else{
                    echo '{"status":"error"}';
                }
            }else{
                echo '{"status":"isset"}';
            }
        }else{
            echo '{"status":"userisset"}';
        }
    }
?>