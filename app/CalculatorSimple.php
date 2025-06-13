<?php 

namespace App;

class CalculatorSimple {
    public function calculator($num1, $num2, $operator)
    {        
        if (!is_numeric($num1) || !is_numeric($num2) || is_string($num1) || is_string($num2)) {
            return "unknown value";
        }

        switch ($operator) {
            case "+":
                $calculation = ($num1 + $num2);
                return $calculation;
                break;
            case "-":
                $calculation = ($num1 - $num2);
                return $calculation;
                break;
            case "*":
                $calculation = ($num1 * $num2);
                return $calculation;
                break;
            case "/":
                $calculation = ($num1 / $num2);
                return $calculation;
                break;
            default:
                return "unknown value";
            }
    }
}

?>