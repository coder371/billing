<?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $fullname   = strval($_POST['fullname']);
        $email      = strval($_POST['email']);
        require_once "../../conn/conn.php";
        $arr = [];

        $stmt = $db->prepare("SELECT ID from client WHERE email = ?");
        $stmt->execute(array($email));
        if($stmt->rowcount() > 0){
            $arr['status'] = 2;
        }else{

            $stmt = $db->prepare("INSERT INTO client(fullname,email,date)values(:f,:e,NOW())");
            if($stmt->execute(array(
                "f" => $fullname,
                "e" => $email,
            ))){
                $stmt = $db->prepare("SELECT ID FROM client ORDER BY ID DESC LIMIT 1");
                $stmt->execute();
                if($stmt->rowcount() > 0){
                    $data = $stmt->fetch();
                }
                $arr['ID'] = $data['ID'];
                $arr['status'] = 1;
            };

        }
        echo json_encode($arr);
    }