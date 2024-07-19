<?php
function sumOfDigits($number) {
    $sum = 0;
    for ($n = $number; $n > 0; $n = (int)($n / 10)) {
        $digit = $n % 10; // Get the last digit
        $sum += $digit;   // Add it to the sum
    }
    return $sum;
}

// Example usage
$number = 1234;
echo "The sum of the digits of $number is " . sumOfDigits($number) . "\n";
?>


