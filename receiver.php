<?php
    include 'config.php';

    if(isset($_POST['password'])){
        if($password == $_POST['password']){
            if($_POST['test']=="testreq"){
                $result='testresp';
            }else{
                $result="true";
            }
        }else{
            $result="false";
        }
    }
    foreach ($_POST as $key => $value) {
        echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."\n";
    }

    echo $result;
?>