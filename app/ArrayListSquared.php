<?php

namespace App;

class ArrayListSquared
{
    function listSquared($m, $n) {
        $results = [];

        for ($i = $m; $i <= $n; $i++) {

//             $squared_divisors = [];
          
            $sum = 0;
            $max = sqrt($i);
              
            for ($num = 1; $num <= $max; $num++) {
                if ($i % $num === 0) {
                    
                    $sum += $num * $num;
                    $quot = $i / $num;
                    // echo ' $sum: ' . $quot;
                  
                  if ($quot > $num) {
                      $sum += $quot * $quot;
                  }
                }
            }

            $sqrt_sum = sqrt($sum);
            
            if ((int)$sqrt_sum == $sqrt_sum) {
                // echo ' sum :' . $sum;
                array_push($results, [$i, $sum]);
            }
        }

        return $results;
    }
}




// My Original
// function listSquared($m, $n) {
//     $results = [];

//     for ($i = 1 <= $m ? $m : 1 ; $i <= $n; $i++) {

//         $squared_divisors = $this->getDivisors($i);

//         $sum = array_sum($squared_divisors);
//         $sqrt_sum = sqrt($sum);
        
//         if ((int)$sqrt_sum == $sqrt_sum) {
//             array_push($results, [$i, $sum]);
//         }
//     }

//     return $results;
// }

// function getDivisors($i) {
//     $squared_divisors = [];
                
//     for ($num = 1; $num <= $i; $num++) {
//         if ($i % $num === 0) {
//             array_push($squared_divisors, ($num * $num));
//         }
//     }

//     return $squared_divisors;
// }
