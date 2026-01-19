<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LabTask 1 </title>
</head>
<body>

<?php

$person = [
    "name" => "Swarna",
    "age" => 24,
    "cgpa" => 3.43,
    "employed" => false
];

printf("Name: %s<br>", $person["name"]);
printf("Age: %d<br>", $person["age"]);
printf("CGPA: %.2f<br>", $person["cgpa"]);
echo "Is Employed: " . ($person["employed"] ? "Yes" : "No") . "<br><br>";


function calculate($n1, $n2) {
    return [
        "add" => $n1 + $n2,
        "sub" => $n1 - $n2,
        "mul" => $n1 * $n2,
        "div" => $n1 / $n2
    ];
}

$int1 = 10;
$int2 = 4;
$intResult = calculate($int1, $int2);

echo "Addition: {$intResult['add']}<br>";
echo "Subtraction: {$intResult['sub']}<br>";
echo "Multiplication: {$intResult['mul']}<br>";
echo "Division: {$intResult['div']}<br><br>";


$f1 = 12.23;
$f2 = 2.3;
$floatResult = calculate($f1, $f2);

echo "Float Addition: {$floatResult['add']}<br>";
echo "Float Subtraction: {$floatResult['sub']}<br>";
echo "Float Multiplication: {$floatResult['mul']}<br>";
echo "Float Division: {$floatResult['div']}<br><br>";


$sum = $f1 + $int1;
echo "Sum using echo: $sum<br>";
print "Sum using print: $sum<br><br>";


echo "Variable details using var_dump()<br>";
foreach ($person as $value) {
    var_dump($value);
    echo "<br>";
}
?>

</body>
</html>
