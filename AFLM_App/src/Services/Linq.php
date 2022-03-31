<?php

namespace App\Services;

class Linq {

    public static function Where(array $array, $condition) : array {
        $arr = array();
        foreach($array as $item) {
            if ($condition($item)) {
                $arr[] = $item;
            }
        }
        return $arr;
    }

    public static function Contains(array $array, $condition) : bool {
        $exist = false;
        foreach($array as $item) {
            if ($condition($item)) {
                $exist = true;
            }
        }
        return $exist;
    }
}

?>