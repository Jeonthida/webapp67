<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5.exercise PHP</title>
</head>
<body>
    <?php
        function test($n){
            return $n % 3 == 0 || $n % 7 == 0;
        }

        echo "1.3 => " , var_dump(test(3));;
        echo "<br>";

        echo "2.14 => " , var_dump(test(14));;
        echo "<br>";

        echo "3.12 => " , var_dump(test(12));;
        echo "<br>";

        echo "4.37 => " , var_dump(test(37));;
        echo "<br>";
        
    ?>
</body>
</html>