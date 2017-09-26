<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $x = 5;
        $y = 10;
        echo"$x + $y = ", $x + $y; //ຫຼັງຈຸດຈະເຮັດວຽກບວກກັນຜົນລັບທີ່ໄດ້ = 15
        print("<br> $x + $y = " . ($x + $y));
        //print($x + $y);
        printf("<br>%.3f", $x + $y);
        
        
        $salary = 200000;
        echo "<hr>ເງິນເດືອນ: " ,number_format($salary);
        $password = "1234";
        echo "<hr>ພາດເວີດກ່ອນເຂົ້າລະຫັດ",$password;
        echo"<hr>ພາດເວີດກ່ອນເຂົ້າລະຫັດ", md5($password);
        
        ?>
    </body>
</html>
