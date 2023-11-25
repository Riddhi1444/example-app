<?php

/**
 * Swaps the values of two variables.
 *
 * @param mixed $a The first variable.
 * @param mixed $b The second variable.
 * @return void
 */
function swapNumbers(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

// Example usage:

// Initial values
$number1 = 5;
$number2 = 10;

echo "Before swapping: Number 1 = $number1, Number 2 = $number2\n";

// Swap the numbers
swapNumbers($number1, $number2);

echo "After swapping: Number 1 = $number1, Number 2 = $number2\n";


