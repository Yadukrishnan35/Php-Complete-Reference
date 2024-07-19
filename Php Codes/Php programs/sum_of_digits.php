<?php
function sumOfDigits($number) {
    $sum = 0;
    while ($number > 0) {
        $digit = $number % 10; // Get the last digit
        $sum += $digit;        // Add it to the sum
        $number = (int)($number / 10); // Remove the last digit
    }
    return $sum;
}
$number = 1234;
echo "The sum of the digits of $number is " . sumOfDigits($number) . "\n";
?>
