<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.exercise PHP</title>
</head>
<body>
    <?php
        function test($temp1 , $temp2){
            return $temp1 <0 && $temp2 > 100 || $temp2 <0 && $temp1 > 100;
        }

        echo "1.120 , -1 => " , var_dump(test(120, -1));
        echo "<br>";

        echo "2.-1 , 120 => " , var_dump(test(-1, 120));
        echo "<br>";

        echo "3.2 , 120 => " , var_dump(test(2, 120));
        echo "<br>";
        
    ?>
</body>
</html>