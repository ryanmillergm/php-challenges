<?php

namespace App;

class ArrayOddInt 
{
    public function findIt(array $seq) :int
    {
        
        //Best Answer 
        $nums = array_count_values($seq);
        foreach ($nums as $key => $val) {
            if ($val % 2) {
                return $key;
            }
        }

        // My Answer
        // $num_of_appearances = [];

        // foreach ($seq as $value) {
        //     if( array_key_exists($value, $num_of_appearances)) {
        //         $num_of_appearances[$value] += 1;
        //     } else {
        //         $num_of_appearances[$value] = 1;
        //     }
        // }

        // foreach ($num_of_appearances as $key => $value) {
        //     if( $value % 2 === 1) {
        //         return $key;
        //     }
        // }
    }
}