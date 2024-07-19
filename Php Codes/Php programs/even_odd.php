<?php
function checkEvenOdd($number) {
    if ($number % 2 == 0) {
        return "$number is even.";
    } else {
        return "$number is odd.";
    }
}

// Example usage
$number = 15;
echo checkEvenOdd($number) . "\n";

$number = 24;
echo checkEvenOdd($number) . "\n";
?>
