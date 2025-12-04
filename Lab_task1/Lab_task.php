<?php

$name = "Swarna";     // String
$age = 22;            // Integer
$height = 5.6;        // Float
$is_student = true;   // Boolean

$num1 = 10;
$num2 = 4;

$addition = $num1 + $num2;
$subtraction = $num1 - $num2;
$multiplication = $num1 * $num2;
$division = $num1 / $num2;

// Output Results

echo "<h2>Variable Values</h2>";
echo "Name: $name <br>";
echo "Age: $age <br>";
echo "Height: $height <br>";
echo "Is Student: $is_student <br><br>";

echo "<h2>Arithmetic Results</h2>";
echo "Addition: $addition <br>";
echo "Subtraction: $subtraction <br>";
echo "Multiplication: $multiplication <br>";
echo "Division: $division <br><br>";

echo "<h3>Sum using echo = " . ($num1 + $num2) . "</h3>";
print "<h3>Sum using print = " . ($num1 + $num2) . "</h3><br><br>";


// Display Type & Value Using var_dump()

echo "<h2>Using var_dump()</h2>";
var_dump($name); echo "<br>";
var_dump($age); echo "<br>";
var_dump($height); echo "<br>";
var_dump($is_student); echo "<br>";
?>
