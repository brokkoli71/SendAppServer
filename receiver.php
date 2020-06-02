<?php
    include 'config.php';
    require 'db.php';
    
    if(isset($_POST['password'])){
        if($password == $_POST['password']){
            $postdata = file_get_contents("php://input");
    
    
            
            $filename = "default";
            if(isset($_POST['file_name'])){
                $filename = $_POST['file_name'];
            }
            $receiver = "default";
            if(isset($_POST['receiver'])){
                $receiver = $_POST['receiver'];
            }
                
            move_uploaded_file($_FILES["data"]["tmp_name"], $filename);
            
            $req = "INSERT INTO send_app(data_path, receiver) VALUES ('"+$filename+"','"+$receiver+"');";
            
            $erg = $db->query($req);
            
            
        }else{
            echo "wrong password";
        }
    }
    

?>


