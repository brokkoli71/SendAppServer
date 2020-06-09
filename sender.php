<?php
    include 'config.php';
    require 'db.php';
    
    if(isset($_POST['password'])){
        if($password == $_POST['password']){
            if(isset($_POST['receiver'])){
                $receiver = $_POST['receiver'];
                
                $req  = "SELECT id, data_path, data_type FROM send_app WHERE \"".$receiver."\"=receiver LIMIT 1";
                $erg = $db->query($req);
                if ($erg->num_rows>0){
                    $row = $erg->fetch_assoc();
                    echo $row["data_path"];
                    echo "?";
                    echo $row["data_type"];
                    echo "?";
                    echo $row["id"];
                }else{
                    echo "no result";
                }
           }
        }else{
            echo "wrong password";
        }
    }
?>