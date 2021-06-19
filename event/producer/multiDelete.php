<?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $IDval = json_decode($_POST['arrval']);
        $str = implode($IDval,",");
        require_once "../../conn/conn.php";
        $stmt = $db->prepare("UPDATE `producer` SET `available` = 0 WHERE ID IN ($str)");
        if($stmt->execute()){
            echo 1;
        }else{
            echo 0;
        }
    }