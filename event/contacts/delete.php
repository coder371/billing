<?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $ID = intval($_POST['ID']);
        require_once "../../conn/conn.php";
        $stmt = $db->prepare("DELETE FROM `client` WHERE ID = ?");
        if($stmt->execute(array($ID))){
            echo 1;
        }else{
            echo 0;
        }

    }