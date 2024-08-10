<?php

namespace App;

class ArrayDifferentiator {

    public function arrayDiff($a, $b)
    {
        // best answer:
        return array_values(array_diff($a, $b));

        // My Answer:
        // $diff = array_diff($a, $b);
        // $result = [];
        // foreach ($diff as $value) {
        //     array_push($result, $value);
        // }
        // return $result;
    }
}