<?php

namespace App;

class ArrayDynamic 
{
    // Hackerrank PrepareData Structures Arrays Dynamic Array
    function dynamicArray($n, $queries) {
        // Write your code here
        $arr = array_fill(0, $n, array());
    
        $lastAnswer = 0;
        $answers = [];
        
        foreach ($queries as $query){      
            if (!isset($query[0])) {
                $idx = (($query[1] xor $lastAnswer) % $n);
                $lastAnswer = $arr[$idx][$query[2] % count($arr[$idx])];
                array_push($answers, $lastAnswer);
            } else if ($query[0] === 1){
                $idx = (($query[1] xor $lastAnswer) % $n);
                array_push($arr[$idx], $query[2]);
            } else if ($query[0] === 2) {
                $idx = (($query[1] xor $lastAnswer) % $n);
                $lastAnswer = $arr[$idx][$query[2] % count($arr[$idx])];
                array_push($answers, $lastAnswer);
            }
        }
        return $answers;
    }
}