<?php

namespace practicals;

class Practical {
    //Prints "Hello, World!" to the standard output.
    public static function printHello() {
        echo "Hello, World!";
    }

 
    //Takes two numbers as arguments and returns their sum.
     
    public static function add($num1, $num2) {
        if (!is_numeric($num1) || !is_numeric($num2)) {
            throw new \InvalidArgumentException("Both inputs must be numeric.");
        }
        return $num1 + $num2;
    }

    
     //Takes an integer 'n' as an argument and returns an array of
    public static function generateFibonacciSequence($n) {
        if (!is_int($n)) {
            throw new \InvalidArgumentException("Inputs must be Integer.");
        }
        $fibSequence = array();
        if ($n > 0) {
            $a = 0;
            $b = 1;
            for ($i = 0; $i < $n; $i++) {
                $fibSequence[] = $a;
                $temp = $a;
                $a = $b;
                $b = $temp + $b;
            }
        }
        return $fibSequence;
    }
}


?>