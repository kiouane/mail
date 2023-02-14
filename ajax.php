<?php

    require 'main.php';

    if(isset($_POST['email']) && isset($_POST['msg'])){
        $email = $_POST['email'];
        $msg = $_POST['msg'];
        $obj = new main();
        $obj->sendEmail($email, $msg);
    }

?>