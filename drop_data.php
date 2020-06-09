<?php
    include 'config.php';
    require 'db.php';

    if(isset($_POST['password'])){
        if($password == $_POST['password']){
            if(isset($_POST['task_id'])){
                $task_id = $_POST['task_id'];
                $error = false;

                $req  = "SELECT data_path FROM send_app WHERE send_app.id = \"".$task_id."\" LIMIT 1;";
                $erg = $db->query($req);

                if ($erg->num_rows>0){
                    $row = $erg->fetch_assoc();
                    $filename = $row["data_path"];
                    if(!unlink("files/".$filename)){
                        $error = true;
                    }
                }
                
                $req  = "UPDATE send_app SET received = \"1\" WHERE send_app.id = \"".$task_id."\" LIMIT 1;";
                //use that later for not storing data:
                //$req  = "DELETE FROM send_app WHERE send_app.id = \"".$task_id."\" LIMIT 1;";
                $erg = $db->query($req);
                //might check for success later
            }
        }else{
            echo "wrong password";
        }
    }
?>