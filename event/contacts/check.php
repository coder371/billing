<?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $email      = strval($_POST['email']);
        require_once "../../conn/conn.php";
        $stmt = $db->prepare("SELECT ID from client WHERE email = ?");
        $stmt->execute(array($email));
        if($stmt->rowcount() > 0){
            echo 1;
        }
    }