<?php 

    $stmt = $db->prepare("SELECT * FROM info");
    $stmt->execute();
    if($stmt->rowcount() > 0){
        $GW = $stmt->fetch();
    }else{
        header("location:logout.php");
    }

?>