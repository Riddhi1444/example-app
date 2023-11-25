<?php

/**
 * Calculates the factorial of a non-negative integer.
 *
 * @param int $n The non-negative integer for which to calculate the factorial.
 * @return int The factorial of the input number.
 */
function calculateFactorial($n) {
    if ($n < 0) {
        return "Invalid input. Factorial is not defined for negative numbers.";
    } elseif ($n == 0 || $n == 1) {
        return 1;
    } else {
        $factorial = 1;
        for ($i = 2; $i <= $n; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }
}

// Example usage:

// Specify the number for which to calculate the factorial
$number = 5;

// Calculate the factorial
$result = calculateFactorial($number);

// Display the result
echo "Factorial of $number is: $result\n";


