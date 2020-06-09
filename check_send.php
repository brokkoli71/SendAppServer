<?php
    include 'config.php';
    require 'db.php';

    if(isset($_POST['password'])){
        if($password == $_POST['password']){
            if(isset($_POST['task_id'])){
                $task_id = $_POST['task_id'];
                $error = false;

                $req  = "SELECT received FROM send_app WHERE send_app.id = \"".$task_id."\" LIMIT 1;";
                $erg = $db->query($req);

                if ($erg->num_rows>0){
                    $row = $erg->fetch_assoc();
                    $received = $row["received"];
                    if($received){
                        echo "true";
                    }else{
                        echo "false";
                    }
                }
            }
        }else{
            echo "wrong password";
        }
    }
?>