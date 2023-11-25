<?php

/**
 * Generates the Fibonacci sequence up to a specified number of terms.
 *
 * @param int $n The number of terms in the sequence.
 * @return array The Fibonacci sequence.
 */
function generateFibonacci($n) {
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

// Example usage:

// Specify the number of terms in the Fibonacci sequence
$numberOfTerms = 10;

// Generate the Fibonacci sequence
$fibonacciSequence = generateFibonacci($numberOfTerms);

// Display the Fibonacci sequence
echo "Fibonacci Sequence (first $numberOfTerms terms): ";
echo implode(", ", $fibonacciSequence) . "\n";


