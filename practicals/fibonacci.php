<?php
function generateFibonacci($n) {
    $fibonacciSequence = array();
    $fibonacciSequence[0] = 0;
    $fibonacciSequence[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fibonacciSequence[$i] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
    }

    return $fibonacciSequence;
}

// Specify the number of terms you want in the sequence
$numberOfTerms = 10;

// Generate and display the Fibonacci sequence
$fibonacciSequence = generateFibonacci($numberOfTerms);

echo "Fibonacci Sequence (first $numberOfTerms terms): ";
echo implode(", ", $fibonacciSequence);
?>

