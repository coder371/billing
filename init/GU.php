<?php 

    if(isset($_SESSION['code'])){
        $stmt = $db->prepare("SELECT * FROM users WHERE code = ? ");
        $stmt->execute(array($_SESSION['code']));
        if($stmt->rowcount() > 0){
            $GU = $stmt->fetch();
        }else{
            header("location:logout.php");
        }
    }

?>