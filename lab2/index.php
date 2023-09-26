<?php
require './Form.php';
require './Field.php';
// require './database.php';
// spl_autoload_register(function(){
//     require './database.php';
// });
require_once  __DIR__.'/vendor/autoload.php';

// use Core\Database as DB;
use Core\Database as DB;

$db = new DB();
use app\core\Form;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button{
            margin-top: 15px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Create an account</h1>
    <?php $form = Form::begin('','post');  ?>
    <div class="row">
        <div class="col">
            <?php echo $form->field('firstname'); ?>
        </div>
        <div class="col">
            <?php echo $form->field('lastname'); ?>
        </div>
    </div>
    <?php echo $form->field('email'); ?>
    <?php echo $form->field('password')->passwordField(); ?>
    <?php echo $form->field('confirmPassword')->passwordField(); ?>
    <button type="submit" class="btn btn-primary">Submit</button>
    <?php echo Form::end(); ?>
</div>

</body>
</html>