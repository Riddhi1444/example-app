<?php
// Specify the number of rows in the inverted triangle
$rows = 5;

for ($i = $rows; $i >= 1; --$i) {
    for ($j = 1; $j <= $i; ++$j) {
        echo "* ";
    }

    echo PHP_EOL; // Move to the next line
}
?>

