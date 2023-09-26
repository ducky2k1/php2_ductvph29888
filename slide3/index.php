<?php
include "Product.php";
include "Shoes.php";

$shoe = new Shoes( name: "Y", price: "44", color: "Red",
                brand: "Vans", size: "42",
                type: "hhh");
$shoe->sayHi();
$shoe->compare();
$shoe->test();
// goi tới test và trong test
// truy cập tới các biến thuộc lớp cha : Product !!!
?>