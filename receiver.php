<?php
    include 'config.php';
    require 'db.php';
    
    if(isset($_POST['password'])){
        if($password == $_POST['password']){
    
            $filename = "default";
            if(isset($_POST['file_name'])){
                $filename = $_POST['file_name'];
            }
            $receiver = "default";
            if(isset($_POST['receiver'])){
                $receiver = $_POST['receiver'];
            }
            $datatype = "0";
            if(isset($_POST['data_type'])){
                $datatype = $_POST['data_type'];
            }
                
            move_uploaded_file($_FILES["data"]["tmp_name"], "files/".$filename);
            
            $req = "INSERT INTO send_app(data_path, data_type, receiver) VALUES ('".$filename."','".$datatype."','".$receiver."');";
            
            $erg = $db->query($req);
            
            
        }else{
            echo "wrong password";
        }
    }
?>