<?php

namespace app\core;

use app\core\Field;

class Form {
    public static function begin($action,$method){
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }
    public static function end(){
        return '</form>';
    }
    public function field($attribute){
        return new Field($attribute);
    }
}

?>