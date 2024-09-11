<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4.exercise PHP</title>
</head>
<body>
    <?php
        function test($s){
            $ctr_aa = 0;
            $i = 0;

            //วนลูปจนกว่าจะถึงตำแหน่งสุดท้ายที่สามารถตรวจสอบ aa ได้
            while ($i < (strlen($s) - 1)){ //เงื่อนไข
                //ตรวจสอบว่าตำแหน่งปจบและถัดไปเป็น aa หรือไม่
                if (substr($s, $i ,2) == "aa"){ //จริงเงื่อนไข 1
                    //เพิ่มตัวนับถ้าเจอ aa
                    $ctr_aa++; //จริง 2
                    //เลื่อนไปตำแหน่งถัดไปเพื่อค้นหา "aa" อีกครั้ง
                    $i++; //จริง 3
                }
                //เลื่อนไปตำแหน่งถัดไปว่าจะเจอ aa หรือไม่
                $i++; //ไม่จริง1
            }

            //คืนค่าตัวนับ aa
            return $ctr_aa; //ไม่จริง เงื่อนไข
        }

        echo "1.bbaaccaag => " , test("bbaaccaag");
        echo "<br>";

        echo "2.jjkiaasew => " , test("jjkiaasew");
        echo "<br>";

        echo "3.Jsaaakoiaa => " , test("Jsaaakoiaa");
        echo "<br>";
        
    ?>
</body>
</html>