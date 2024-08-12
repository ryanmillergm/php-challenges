<?php

namespace App;

class ArrayOutlier
{
    public function find($array)
    {
        
        // if (count($array) < 3) {
        //     throw new \Exception('The array passed to find function must contain at least 3 elements.');
        // }
        $even_array = [];
        $odd_array = [];
        foreach ($array as $value) {
            if ($value % 2) {
                array_push($even_array, $value);
            } else {
                array_push($odd_array, $value);
            }

            if (count($even_array) >= 2 && count($odd_array) > 0) {
                return $odd_array[0];
            } else if (count($odd_array) >= 2 && count($even_array) > 0) {
                return $even_array[0];
            }
        }
    }
}