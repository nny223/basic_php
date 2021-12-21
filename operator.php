<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,500&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'Lora', serif;
    }
    </style>
</head>

<body>
    <?php
    echo "<h1>ดำเนินการ</h1>";
       $x = 20;
       $y =3;
       echo "ผลลัพธ์ของ $x + $y เท่ากับ " . ($x + $y). "<br>";
       echo "ผลลัพธ์ของ $x - $y เท่ากับ " . ($x - $y). "<br>";
       echo "ผลลัพธ์ของ $x * $y เท่ากับ " . ($x * $y). "<br>";
       echo "ผลลัพธ์ของ $x / $y เท่ากับ " . ($x / $y). "<br>";
       echo "ผลลัพธ์ของ $x % $y เท่ากับ " . ($x % $y). "<br>";

       echo "<h1>ตัวดำเนินการเพิ่มค่า ลดค่า</h1>";
       $x = 10; $a=10;
       $b=++$a;
       $z=$x++;
       echo "ค่าของ x และ a (ก่อนประมวณผล) x=10 , a=10 <br>";
       echo "ค่าของz (จากสูตร z=++ นำค่า x ไปเก็บใน z จะไดค่าเดิมของ x)= $z ,<br>";
       echo "ค่าของ (จากสูตร b=++a เพิ่มค่าให้ a ก่อนแล้วนำไปเก็บใน b)= $b , <br>";
       echo "ค่าของ x และ a (หลังการประมวลผล) x= $x , a=$a <br>" ;
       
       
    ?>
</body>

</html>