<?php
    include 'config.php';
    require 'db.php';
    
    if(isset($_POST['password'])){
        if($password == $_POST['password']){
            if(isset($_POST['file_name'])){
                $filename = $_POST['file_name'];
            }
        }else{
            echo "wrong password";
        }
    }
?>