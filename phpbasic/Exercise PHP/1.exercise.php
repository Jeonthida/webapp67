<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1.exercise PHP</title>
</head>
<body>
    <?php
        function test($str){
            $s = substr($str, strlen($str)-1);
            return $s.$str.$s;
        }

        echo test("Red"). "\n";
        echo test("Green"). "\n";
        echo test("1"). "\n";
    ?>
</body>
</html>