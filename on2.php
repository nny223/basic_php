<h1> Array</h1>
<?php
$name = ["นนทนันท์", "ไตรภพ", "วรรณพรรธน์", "ปัญญาวรรณ","ณัฐกานต์"];
$year = ["16", "17", "18", "19","20"];
echo "ชื่อ :" .$name[0]. " อายุ :"  .$year[0]."<br>";
echo "ชื่อ :" .$name[1]. " อายุ :"  .$year[1]."<br>";
echo "ชื่อ :" .$name[2]. " อายุ :"  .$year[2]."<br>";
echo "ชื่อ :" .$name[3]. " อายุ :"  .$year[3]."<br>";
echo "ชื่อ :" .$name[4]. " อายุ :"  .$year[4]."<br>";

echo"<h1>Array ใช้ foreach </h1>"."<br>";
$color =["black","white","gold","red","blue"];
$number =["100","300","401","900","500"];
foreach($color as $colors):
echo "สี :".$colors."<br>";
endforeach;
foreach($number as $numbers):
echo "รหัสสี :".$numbers."<br>";
endforeach;

echo"<h1>Array ใช้ foreach </h1>"."<br>";
$color =["black"=>"100","white"=>"300","gold"=>"400","red"=>"900","blue"=>"500"];
foreach($color as $colors => $number):
echo "สี :".$colors." => ";
echo "รหัสสี :".$number."<br>";
endforeach;

?>