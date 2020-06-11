<?php

class Input{
    public static function get($input){
        if(isset($_POST[$input])){
            return Helper::sanitize($_POST[$input]);
        }else if(isset($_GET[$input])){
            return Helper::sanitize($_GET[$input]);
        }
    }
}