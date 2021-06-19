<?php 

    function billisset($db,$barcode){
        $stmt = $db->prepare("SELECT ID FROM bill WHERE barcode = ?");
        $stmt->execute(array($barcode));
        if($stmt->rowcount() > 0){
            return true;
        }else{
            return false;
        }
    }
    function clientisset($db,$ID){
        $stmt = $db->prepare("SELECT ID FROM client WHERE ID = ?");
        $stmt->execute(array($ID));
        if($stmt->rowcount() > 0){
            return true;
        }else{
            return false;
        }
    }
    function producerisset($db,$ID){
        $stmt = $db->prepare("SELECT ID FROM client WHERE ID = ?");
        $stmt->execute(array($ID));
        if($stmt->rowcount() > 0){
            return true;
        }else{
            return false;
        }
    }
    function getIDbillWithBarcode($db,$barcode){
        $stmt = $db->prepare("SELECT ID FROM bill WHERE barcode = ?");
        $stmt->execute(array($barcode));
        if($stmt->rowcount() > 0){
            $data = $stmt->fetch();
            return $data["ID"];
        }else{
            return false;
        }
    }
    function updateAmount($db,$producer,$type,$amount){
        if($type == "up"){
            $stmt = $db->prepare("UPDATE producer SET `amount` = `amount` + $amount WHERE ID = ? ");
        }elseif($type =="down"){
            $stmt = $db->prepare("UPDATE producer SET `amount` = `amount` - $amount WHERE ID = ? ");
        }
        $stmt->execute(array($producer));
    }
    function pursuerProducerIsset($db,$producer,$bill){
        $stmt = $db->prepare("SELECT ID,amount FROM movements WHERE IDproducer = ? AND IDbill = ?");
        $stmt->execute(array($producer,$bill));
        if($stmt->rowcount() > 0){
            return true;
        }else{
            return false;
        }
    }
    function insertIntoPursuerProducer($db,$itemInfo,$bill,$IDadmin){

        $stmt = $db->prepare("INSERT INTO movements(IDproducer,amount,sell,total,IDbill,date,IDadmin,type)
        values(:IDP,:am,:s,:t,:IDB,NOW(),:IDadmin,:type)");
        $stmt->execute(array(
            "IDP"   => $itemInfo->producer,
            "am"    => $itemInfo->amount,
            "s"     => $itemInfo->sell,
            "t"     => $itemInfo->total,
            "IDB"   => $bill,
            "IDadmin" => $IDadmin,
            "type"  => "bill",
        ));

    }
    function updatePursuerProducer($db,$itemInfo,$bill){
        $stmt = $db->prepare("UPDATE movements SET 
            `amount` = `amount` + '$itemInfo->amount',
            `total` = `total` + '$itemInfo->total'
            WHERE IDbill = ? AND IDproducer = ?
        ");
        $stmt->execute(array($bill,$itemInfo->producer));
    }

    function pursuerProducer($db,$itemInfo,$bill,$IDadmin){
        $amountStatus = pursuerProducerIsset($db,$itemInfo->producer,$bill);
        if(!$amountStatus){
            insertIntoPursuerProducer($db,$itemInfo,$bill,$IDadmin);
        }else{
            updatePursuerProducer($db,$itemInfo,$bill);
        }
        updateAmount($db,$itemInfo->producer,"down",$itemInfo->amount);
        checkStatus($db);
    }

    function checkStatus($db){
        $stmt = $db->prepare('UPDATE producer  SET `status` = "2" WHERE `alert` >= `amount` AND `amount` > 0;UPDATE producer  SET `status` = "0" WHERE `amount` = 0');
        $stmt->execute();
    }