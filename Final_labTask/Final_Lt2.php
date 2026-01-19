<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LabTask 2</title>
</head>
<body>

<?php
// Temperature check
$temperature = 35;

if (is_numeric($temperature)) {
    if ($temperature < 10) {
        $status = "It's cold!!";
    } elseif ($temperature < 25) {
        $status = "It's warm";
    } else {
        $status = "It's hot!";
    }
    echo $status . "<br><br>";
} else {
    echo "Error! Temperature must be a number<br><br>";
}

// Day check
$day = 7;

$days = [
    1 => "Monday",
    2 => "Tuesday",
    3 => "Wednesday",
    4 => "Thursday",
    5 => "Friday",
    6 => "Saturday",
    7 => "Sunday"
];

if (array_key_exists($day, $days)) {
    echo $days[$day];
} else {
    echo "Error!  Day must be an integer between 1 and 7";
}
?>

</body>
</html>
