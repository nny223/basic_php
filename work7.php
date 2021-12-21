<?php 
        $price1 = product(1000);     
        $price2 = product(5000);
       function product($price)
       {
        if($price<5000){
            $product1 =($price * 0.03); 
            $product2 =($price * 0.05);
            $money =( $price - $product1 );
            echo "ราคาสินค้า = ".$price."บาท<br>";
            echo "ส่วนลด3% = ".$product1."บาท<br>";
            echo "ราคาสุทธิ =  ".$money."บาท<br>";
            echo "---------------------------------<br>";
            
        }else if($price>=5000){
            $product1 =($price * 0.03); 
            $product2 =($price * 0.05);
            $money =( $price - $product2 );
            echo "ราคาสินค้า = ".$price."บาท<br>";
            echo "ส่วนลด5% = ".$product2."บาท<br>";
            echo "ราคาสุทธิ =  ".$money."บาท<br>";
            echo "---------------------------------<br>";
            
        }
    }
    
    
    
    
?>