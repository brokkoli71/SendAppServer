<?php
    include 'config.php';

    error_reporting(0);
    $db = new mysqli($db_url, $db_user, $db_pwd, $db_name);
    print_r ($db->connect_error);
    if ($db->connect_errno) {
        die('Sorry - gerade gibt es ein Problem');
    }
    $db->set_charset('utf8');
?>