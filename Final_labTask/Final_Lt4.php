<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LabTask 4 - Alternative</title>
</head>
<body>
    <?php
    
    function addNumbers($x, $y) {
        return $x + $y;
    }

    echo "Sum of 10 and 5: " . addNumbers(10, 5) . "<br>";
    echo "Sum of 20.2 and 30.3: " . addNumbers(20.2, 30.3) . "<br>";


    function computeFactorial($num) {
        $result = 1;
        for ($i = 2; $i <= $num; $i++) {
            $result *= $i;
        }
        return $result;
    }

    echo "Factorial of 0: " . computeFactorial(0) . "<br>";
    echo "Factorial of 1: " . computeFactorial(1) . "<br>";
    echo "Factorial of 4: " . computeFactorial(4) . "<br>";
    echo "Factorial of 5: " . computeFactorial(5) . "<br>";

  
    function checkPrime($number) {
        if ($number <= 1) {
            echo "$number is not a prime number<br>";
            return;
        }
        $isPrime = true;
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i === 0) {
                $isPrime = false;
                break;
            }
        }
        echo $number . ($isPrime ? " is a prime number<br>" : " is not a prime number<br>");
    }

    checkPrime(5);
    checkPrime(12);
    checkPrime(115);
    ?>
</body>
</html>
