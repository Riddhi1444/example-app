<?php
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

// Specify the number for which you want to calculate the factorial
$number = 5;

// Calculate and display the factorial
$result = calculateFactorial($number);
echo "Factorial of $number is: $result";
?>

