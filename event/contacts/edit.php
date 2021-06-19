<?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $ID   = intval($_POST['ID']);
        $fullname   = strval($_POST['fullname']);
        $email      = strval($_POST['email']);
        $address    = strval($_POST['address']);
        require_once "../../conn/conn.php";
        $stmt = $db->prepare("SELECT ID from client WHERE email = ? AND ID != ?");
        $stmt->execute(array($email,$ID));
        if($stmt->rowcount() > 0){
            echo 2;
        }else{

            $stmt = $db->prepare("UPDATE `client` SET `fullname`= '$fullname' ,`email`='$email',`address`='$address' WHERE ID = ?");
            if($stmt->execute(array($ID))){
                echo 1;
            };

        }
    
    }