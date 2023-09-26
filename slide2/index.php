<?php
// 1. Class là gì , cách khai báo, sử dụng class trong php
    // Tính đóng gói

    include 'student.php';
    // sử dụng :
    // khai báo với từ khóa new để khởi tạo
    // khai báo 1 đối tượng sinh viên
    // $sv = new Student();
    // có thể có nhiều đối tượng cùng kiểu là Student
    $sv1 = new Student("qq","1222","1111");
    echo $sv1->name;

    // khai báo class ẩn danh (anonymous)
    //chỉ dùng php 7 trở lên
    $anonymousClass = new class{
        // không khai báo contruct cho class ẩn danh được
        //thay thế bằng phương thức set
        public $name ="đức";
        function setName($name){
            $this->name = $name;
        }
    };
    $anonymousClass->setName("kkkk");
    echo $anonymousClass->name;

    //pt ẩn danh
    $tinhTong  = function ($x, $y){
        return ($x + $y);
    };
    echo "<br>".$tinhTong(4,5);


    // $sv2 = new Student();

    // đọc giá trị biến name trong $sv, sử dụng cú pháp -> 
    // $name = $sv->name; // biến name dạng là public
    //sử dụng function 
    // $name = $sv->getName();
    // $mssv = $sv->mssv;

    // echo $name." với msvv là: ".$mssv;


// 2. Các kĩ thuật khai báo khác, xoay quanh class trong php

//bindTo của Closure Object !!!!
// dùng để đọc 1 biến private trong class
$closure = function(){
    return $this->stk;
};
// gán đối tượng sv1 và closure
// mà không làm ảnh hưởng tới đối tượng sv1
// tham số 1: là biến sẽ bind
// tham số 2 : phạm vi hàm bindTo đọc
$sv3 = $closure->bindTo($sv1,$sv1);

echo $sv3();

?>