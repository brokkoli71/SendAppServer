<?php
    include 'config.php';

    if(isset($_POST['password'])){
        if($password == $_POST['password']){
            $result="true";
        }else{
            $result="false";
        }
    }
    echo $result;
?>