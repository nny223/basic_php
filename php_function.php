<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Function</title>
</head>
<body>
    <?php
    echo"==============is_numeric============<br>";
      $num1 = 1545000;
      $num2 = "125000";
      $num3= "nonthanan010";
      echo "num1 =".is_numeric($num1)."<br>";
      echo "num2 =".is_numeric($num2)."<br>";
      echo "num3 =".is_numeric($num3)."<br>";
    echo"===============round===============<br>";
      echo "round = ".round(4.7)."<br>";
      echo "ceil = ".ceil(4.7)."<br>";
      echo "floor = ".floor(4.7)."<br>";
    echo"===============min max===============<br>";
      echo "ค่าที่น้อยที่สุด(4,5,3,8,9) =".min(4,5,3,8,9)."<br>";
      echo "ค่าที่มากที่สุด(4,5,3,8,9) =".max(4,5,3,8,9)."<br>";
    echo"===============rand===============<br>";
      echo "(rand 1-48)สุ่ม =",rand(1, 48)."<br>";
    echo"===============is_null===============<br>";
      echo "is_null =".is_null(null)."<br>";
    echo"===============number_formate===============<br>";
      $mumber = 500000;
      echo "number_formate =".number_format($mumber,2)."บาท<br>";
    echo"===============trim(ตัดช่องว่าง)===============<br>";
      echo "trim = ".trim(" non ")."<br>";
      echo "ltrim = ".ltrim(" non")."<br>";
      echo "rtrim = ".rtrim("non ")."<br>";
    echo"===============strtolower strtoupper===============<br>";
      echo "strtilower =".strtolower("NON")."<br>";
      echo "strtoupper =".strtoupper("non")."<br>";
    echo"===============substr===============<br>";
      $text = "Nonthanan Simpree";
      echo "(Nonthanan Simpree)substr =".substr($text,9,9)."<br>";
    echo"===============substr_count===============<br>";
      $text1 = "Nonthanan Simpree";
      echo "(Nonthanan Simpree)substr_count =".substr_count($text1,"n")."<br>";
    echo"===============strlen===============<br>";
      $text3 = "Nonthanan Simpree";
      echo "(Nonthanan Simpree)นับมีกี่ตัว =".strlen($text3)."<br>";
    echo"===============MD5===============<br>";
      $password = 1234;
      echo "(md5)รหัสจริง 1234 =".md5($password)."<br>";
    echo"===============date===============<br>";
      echo "(d-m-y)date =".date("d-m-y")."<br>";
      echo "(d-M-Y)date =".date("d-M-Y")."<br>";
      echo "(j-M-y)date =".date("j-M-y")."<br>";
      echo "(D-M-Y)date =".date("D-M-Y")."<br>";
      echo "date(d) =".date("d")."<br>";
      echo "date(m) =".date("m")."<br>";
      echo "date(y) =".date("y")."<br>";
      echo "date(y) =".date("Y")+543,"<br>";

    

    ?>
</body>
</html>