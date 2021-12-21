<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>phpwork1</title>
</head>

<body>
    <form method="GET">
        กรุณาป้อนเลข : <input type="text" name="salary">
        <input type="submit" value="ส่งค่า" >
    </form>
    <hr>
    <?php 
        $salary= 25000;
        echo "เงินเดือน".$salary."บาท<br>";
        echo "---------------------------------<br>";
        if($salary<=9999){
        $bonus = $salary*0.8;
        $money = $salary+$bonus;
        $tax = $money*0.07;
        $taxded =$tax - $money;
        echo "ได้รับโบนัส = ".$bonus."บาท<br>";
        echo "ได้รับเงินสุทธิ = ".$money."บาท<br>";
        echo "คิดภาษี 7% จากรายรับสุทธิ =  ".$tax."บาท<br>";
        echo "รายรับหลังหักภาษี =  ".$taxded."บาท<br>";
        echo "---------------------------------<br>";
    }else if($salary<=49999){
        $bonus = $salary*0.5;
        $money =$salary + $bonus;
        $tax = $money*0.07;
        $taxded =$tax - $money;
        echo "ได้รับโบนัส = ".$bonus."บาท<br>";
        echo "ได้รับเงินสุทธิ = ".$money."บาท<br>";
        echo "คิดภาษี 7% จากรายรับสุทธิ =  ".$tax."บาท<br>";
        echo "รายรับหลังหักภาษี =  ".$taxded."บาท<br>";
        echo "---------------------------------<br>";
    }else if($salary>=50000){
        $bonus = $salary*0.3;
        $money = $salary + $bonus;
        $tax = $money*0.07;
        $taxded =$tax - $money;
        echo "ได้รับโบนัส = ".$bonus."บาท<br>";
        echo "ได้รับเงินสุทธิ = ".$money."บาท<br>";
        echo "คิดภาษี 7% จากรายรับสุทธิ =  ".$tax."บาท<br>";
        echo "รายรับหลังหักภาษี =  ".$taxded."บาท<br>";
        echo "---------------------------------<br>";
    }
    ?>
</body>


</html>