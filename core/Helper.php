<?php

class Helper{
    public static function dnd($data){
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
        die();
    }
    
    public static function sanitize($dirty){
        return htmlentities($dirty, ENT_QUOTES, 'UTF-8');
    }

    public static function posted_values($post){
        $clean_array = [];
        foreach($post as $key => $value){
            $clean_array[$key] = self::sanitize($value);
        }
        return $clean_array;
    }


}