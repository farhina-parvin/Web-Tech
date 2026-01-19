<!DOCTYPE html>
<html>
<head>
    <title>LabTask 3</title>
</head>
<body>

<?php
echo "Numbers from 1 to 20:<br>";
$numbers = range(1, 20);
foreach ($numbers as $num) {
    echo $num . " ";
}

echo "<br><br>";

echo "Even numbers using do-while loop:<br>";
$k = 2;
do {
    echo $k . " ";
    $k += 2;
} while ($k <= 20);

echo "<br><br>";

$fruits = [
    "apple"  => "red",
    "banana" => "yellow",
    "orange" => "orange"
];

foreach ($fruits as $fruit => $color) {
    echo "Fruit name: $fruit and color: $color<br>";
}

echo "<br><br>";

echo "Numbers from 1 to 20 (stops after 5 numbers):<br>";
$count = 1;
while ($count <= 20) {
    echo $count . " ";
    if ($count == 5) {
        break;
    }
    $count++;
}
?>

</body>
</html>
