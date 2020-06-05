<?php
    include 'config.php';
    require 'db.php';
    
    if(isset($_POST['password'])){
        if($password == $_POST['password']){
            if(isset($_POST['receiver'])){
                $receiver = $_POST['receiver'];
                
                $req  = "SELECT data_path FROM send_app WHERE \"".$receiver."\"=receiver LIMIT 1";
                $erg = $db->query($req);
                $row = $erg->fetch_assoc();
                echo $row["data_path"];
           }
        }else{
            echo "wrong password";
        }
    }
?>