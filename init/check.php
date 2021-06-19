<?php 
    if(isset($_COOKIE['code']) AND isset($_COOKIE['token'])){
        $stmt = $db->prepare("SELECT ID FROM users WHERE code = ? AND token = ? ");
        $stmt->execute(array($_COOKIE['code'],$_COOKIE['token']));
        if($stmt->rowcount() > 0){
            $_SESSION['code'] = $_COOKIE['code'];
        }else{
            header("Location:logout.php");
        }
    }else{
        if(isset($_SESSION['code']) AND isset($_SESSION['token'])){
            $stmt = $db->prepare("SELECT ID FROM users WHERE code = ? AND token = ? ");
            $stmt->execute(array($_SESSION['code'],$_SESSION['token']));
            if($stmt->rowcount() < 1){
                header("Location:logout.php");
            }
        }else{
            header("Location:logout.php");
        }
    }
?>