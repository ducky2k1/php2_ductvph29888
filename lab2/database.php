<?php

namespace Core;

use mysqli;

class Database {
    public function __construct()
    {
        $servername = "127.0.0.1";
        $username = "root";
        $password = "trinhduc2001";

        //$conn = mysqli_connect($servername,$username,$password);

        $conn = new mysqli($servername, $username, $password);

        if(!$conn){
            //die("COnnection failed: ". mysqli_connect_error());
            die("Connection failed: ". $conn->connect_error());
        }
        echo "Connected successfully";
    }

    public function HelloWorld(){
        echo "Hello World";
    }

}

?>