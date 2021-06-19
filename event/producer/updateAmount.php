<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        session_start();
        require_once "../../conn/conn.php";
        require_once "../../init/GU.php";

        $MIDP        = $_POST['MIDP'];
        $Mamount     = $_POST['Mamount'];
        $Mtype       = $_POST['Mtype'];
        $Msell       = $_POST['Msell'];
        $McurentDate = $_POST['McurentDate'];
        $Mdate       = $_POST['Mdate'];
        $Mtime       = $_POST['Mtime'];
        $Mnote       = $_POST['Mnote'];
        $Mtotal      = $_POST['Mtotal'];
        if($McurentDate == true){$fulldate = date("Y-m-d H:i");}else{$fulldate = $Mdate ." ". $Mtime;}
        $stmt = $db->prepare("INSERT INTO movements(IDproducer,amount,sell,total,IDbill,type,date,IDadmin)
        values(:IDP,:am,:s,:t,:IDb,:ty,:date,:IDadmin)");
        if($stmt->execute(array(
            "IDP"       => $MIDP,
            "am"        => $Mamount,
            "s"         => $Msell,
            "t"         => $Mtotal,
            "IDb"       => "0",
            "ty"        => $Mtype,
            "date"      => $fulldate,
            "IDadmin"   => $GU['ID'],
        ))){
            if($Mtype == 1){
                $stmt = $db->prepare("UPDATE producer SET `amount` = `amount` + $Mamount WHERE ID = ? ");
            }elseif($Mtype == 2){
                $stmt = $db->prepare("UPDATE producer SET `amount` = `amount` - $Mamount WHERE ID = ? ");
            }
            if($stmt->execute(array($MIDP))){
                echo "{'status':'success'}";
            }else{
                echo "{'status':'faild'}";
            }
        }else{
            echo "{'status':'faild'}";
        }
    }