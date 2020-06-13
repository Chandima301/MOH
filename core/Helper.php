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
    
    public static function time_elapsed_string($datetime, $full = false) {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);
    
        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;
    
        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }
    
        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }


}