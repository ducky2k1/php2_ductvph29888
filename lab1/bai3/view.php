
<h3>Tìm kiếm họ tên người dùng qua email</h3>

<?php
if(isset($_POST['add']) && ($_POST['add'])){
    if (empty($errer)){
        echo "Họ tên: ".$user['firstname']." ".$user['lastname'];
        }
} else {
    echo "Mời nhập email.";
}
?>
<span class="" style="color:red;"><?= $errer['email'] ?? "" ?></span>
<form action="" method="post">
    <input type="email" name="email">
    <input type="submit" name="add">
</form>