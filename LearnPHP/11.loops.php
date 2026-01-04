<?php

// While Loop
echo "<b>Using While Loop</b><br>";

$fact1 = 1;
$i = 5;
$num = $i;

while ($i >= 1) {
    $fact1 *= $i;
    $i--;
}

echo "Factorial, {$num}! = " . $fact1 . "<br>";
echo "<hr>";


// Do-While Loop
echo "<b>Using Do-While Loop</b><br>";

$fact2 = 1;
$j = 4;
$b = $j;

do {
    $fact2 *= $j;
    $j--;
} while ($j >= 1);

echo "Factorial, {$b}! = " . $fact2 . "<br>";
echo "<hr>";


// For Loop
echo "<b>Using For Loop</b><br>";

$num = 3;
$c = $num;
$fact3 = 1;

for ($k = $num; $k >= 1; $k--) {
    $fact3 *= $k;
}

echo "Factorial, {$c}! = " . $fact3 . "<br>";
echo "<hr>";


// foreach Loop
echo "<b>Using forEach Loop</b><br>";

$num2 = 2;
$d = $num2;
$fact4 = 1;

$valueRange = range(1, $num2);

foreach ($valueRange as $value) {
    $fact4 *= $value;
}

echo "Factorial, {$d}! = " . $fact4 . "<br>";

?>
