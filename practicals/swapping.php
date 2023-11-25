<?php

// Function to swap two numbers
function swapNumbers(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

// Example usage
$number1 = 5;
$number2 = 10;

echo "Before swapping: \n";
echo "Number 1: " . $number1 . "\n";
echo "Number 2: " . $number2 . "\n";

// Call the swap function
swapNumbers($number1, $number2);

echo "After swapping: \n";
echo "Number 1: " . $number1 . "\n";
echo "Number 2: " . $number2 . "\n";

?>

