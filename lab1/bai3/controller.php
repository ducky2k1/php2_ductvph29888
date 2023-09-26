<?php
include './model.php';

if(isset($_POST['add']) && ($_POST['add'])){
    $email = $_POST['email'];
    $user = get_user($email);
    $errer = [];
    if (empty($email)) {
    $errer['email'] = "Email không được để trống!";
    }

}


include './view.php';

?>