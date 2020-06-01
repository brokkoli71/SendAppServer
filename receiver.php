<?php
    include 'config.php';

    if(isset($_POST['password'])){
        if($password == $_POST['password']){
            $postdata = file_get_contents("php://input");
    
            echo strlen($postdata);
            foreach ($_POST as $key => $value) {
                echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."\n";
            }
        
            echo "\n\$_POST\n";
            var_dump($_POST);
            echo "\n\$_FILES\n";
            var_dump($_FILES["data"]);
            
            $filename = "default";
            if(isset($_POST['file_name'])){
                $filename = $_POST['file_name'];
            }
                
            move_uploaded_file($_FILES["data"]["tmp_name"], $filename);
            
        }else{
            echo "wrong password";
        }
    }
    

?>