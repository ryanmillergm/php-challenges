<?php

namespace App;

class ArraySquaredSame {
    public function comp($arr1, $arr2) {
        // best solution
        if ( is_null($arr1) || is_null($arr2) ) return false;
        
        $squared_array = array_map(function($v) {
            return $v * $v;
        }, $arr1);
        
        sort($arr2);
        sort($squared_array);
        return $arr2 == $squared_array;

        // Go through each valeu in array 1, square the value and check if that value exists in array 2, if it exists, pop the value from the array. Then check if the array is empty after iteration is complete
        // my solution
        // if(empty($arr1) || empty($arr2)){
        //     return false;
        // }

        // if(empty($arr1) && !empty($arr2) || !empty($arr1) && empty($arr2) || !isset($arr1) || !isset($arr2)){
        //         return false;
        //     } else if (count($arr1) !== count($arr2)) {
        //     return false;
        // }

        // foreach ($arr1 as $value) {

        //     $squared_num = pow($value, 2);
  
        //     $position = array_search($squared_num, $arr2);
        //     if($position !== false) {
        //         unset($arr2[$position]);
        //     } else {
        //         return false;
        //     }
        // }

        // if(empty($arr2)) {
        //     return true;
        // } else {
        //     return false;
        // }
    }
}