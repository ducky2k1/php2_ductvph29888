<?php

    $connection = new mysqli('127.0.0.1','root','trinhduc2001','php2_lab1');
    if($connection == false){
        die("Error: ".$connection->connect_error);
    }
?>