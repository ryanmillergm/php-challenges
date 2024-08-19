<?php

namespace App;

class SparseArrays
{
    function matchingStrings($stringList, $queries) {
        $results = [];
        foreach ($queries as $query ) {
            $sum = 0;
            
            foreach ($stringList as $list) {
                if (str_contains($list, $query)) {
                    $sum += 1;
                }
            }
            
            array_push($results, $sum);
        }
        
        return $results;
    }
}
