<?php
// Add three numbers
$a = 10; $b = 20; $c = 30;
$sum = $a + $b + $c;
echo "Sum: $sum <br>";

// Factorial
function factorial($n) {
    return ($n <= 1) ? 1 : $n * factorial($n - 1);
}
echo "Factorial of 5: " . factorial(5) . "<br>";

// Greatest number
$x = 25; $y = 45; $z = 15;
$max = max($x, $y, $z);
echo "Greatest: $max <br>";

// Conditional Statement
$score = 80;
if ($score >= 75) echo "Distinction<br><br>";
elseif ($score >= 60) echo "First Class<br><br>";
else echo "Needs Improvement<br><br>";
?>
