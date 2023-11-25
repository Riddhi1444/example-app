<?php

/**
 * Generates an inverted triangle pattern with '*' characters.
 *
 * @param int $rows The number of rows in the inverted triangle.
 * @return void
 */
function generateInvertedTriangle($rows) {
    for ($i = $rows; $i >= 1; --$i) {
        // Print spaces for indentation
        for ($j = 1; $j <= $rows - $i; ++$j) {
            echo "  ";
        }

        // Print '*' characters for the current row
        for ($j = 1; $j <= $i; ++$j) {
            echo "* ";
        }

        echo PHP_EOL; // Move to the next line
    }
}

// Example usage:

// Specify the number of rows in the inverted triangle
$numberOfRows = 5;

// Generate and display the inverted triangle
generateInvertedTriangle($numberOfRows);
