<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello PHP</title>
</head>
<body>
    <?php
    define("MINSIZE" ,50);
    echo MINSIZE; /*แสดงค่าของตัวแปร MINSIZE คือ 50*/
    echo "<br>"; /*ขึ้นบรรทัดใหม่*/
    echo "this is value minsize => " ,constant("MINSIZE"); /*แสดงข้อความพร้อมค่าของตัวแปร*/
    ?>
</body>
</html>