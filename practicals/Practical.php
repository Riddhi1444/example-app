<?php

/**
 * Class Practical contains static functions for various practical tasks.
 */
class Practical {
    /**
     * Prints "Hello, World!" to the console.
     *
     * @return void
     */
    public static function printHello() {
        echo "Hello, World!\n";
    }

    /**
     * Takes two numbers as arguments and returns their sum.
     *
     * @param float|int $num1 The first number.
     * @param float|int $num2 The second number.
     * @return float|int The sum of the two numbers.
     */
    public static function add($num1, $num2) {
        return $num1 + $num2;
    }

    /**
     * Takes an integer 'n' as an argument and returns an array of the Fibonacci sequence containing 'n' integers.
     *
     * @param int $n The number of terms in the Fibonacci sequence.
     * @return array The Fibonacci sequence.
     */
    public static function generateFibonacciSequence($n) {
        $fibonacciSequence = array();

        // Handle the first two terms
        $fibonacciSequence[] = 0;
        if ($n > 1) {
            $fibonacciSequence[] = 1;
        }

        // Generate the rest of the sequence
        for ($i = 2; $i < $n; $i++) {
            $fibonacciSequence[$i] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
        }

        return $fibonacciSequence;
    }
}

// Example usage:

// Call the static function to print "Hello, World!"
Practical::printHello();

// Call the static function to add two numbers
$result = Practical::add(5, 3);
echo "Sum: $result\n";

// Call the static function to generate a Fibonacci sequence
$fibonacciSequence = Practical::generateFibonacciSequence(8);
echo "Fibonacci Sequence: " . implode(", ", $fibonacciSequence) . "\n";

