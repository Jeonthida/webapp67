<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.exercise PHP</title>
</head>
<body>
    <?php
        function test($x , $y){
            return ($x <= 20 || $y >= 50) || ($y <= 20 || $x >= 50);
        }

        echo "1.20 , 84 => " , var_dump(test(20, 84));
        echo "<br>";

        echo "2.11 , 45 => " , var_dump(test(11, 45));
        echo "<br>";

        echo "3.25 , 40 => " , var_dump(test(25, 40));
        echo "<br>";

    ?>
</body>
</html>