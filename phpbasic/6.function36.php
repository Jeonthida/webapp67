<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP returning value</title>
</head>
<body>
    <?php
        function sayHello(){
            echo "this is PHP";
            echo "<br>"; /*html ใน php*/
            echo "say Hello";
        }
        $function_holder = "sayHello";
        $function_holder();
    ?>
</body>
</html>