<?php
$fruits = ["apple", "banana", "mango"];

// Array Functions
array_push($fruits, "orange");
array_pop($fruits);
array_unshift($fruits, "grapes");
array_shift($fruits);
sort($fruits);
rsort($fruits);
$reversed = array_reverse($fruits);

echo "Fruits: ";
print_r($fruits);
echo "<br>Reversed: ";
print_r($reversed);
echo "<br><br>";
?>
