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
        $x = 5; //ຕົວປ່ຽນແບບ global(globlaແມ່ນໂຕປ່ຽນພາຍນອກເອີ້ນໃຊ້ໄດ້ໃນທຸກຟັ່ງຊັ້ນ)
        //ສ້າງຟັງຊັ້ນຊື່ mytest()

        function mytest() {
            global $x; //ເປັນການເອີ້ນໂຕປ່ຽນພາຍນອກເຂົ້າໃຊ້ໃນຟັ່ງຊັ້ນ
            $y = 10;
            echo "x = $x <br>";
            echo"y = $y";
        }

        //ເອີ້ນໃຊ້ຟັ່ງຊັ້ນ mytest
        mytest();
        echo'<hr>'; //ຂີດເສັ້ນຂັ້ນ
        echo"x = $x <br>";
        echo"y = $y";


        echo '<hr>';

        function mytest1() {
            static $x = 1;//ຮູບແບບຂອງ static ເອີ້ນໃຊ້ຄັ້ງດຽວ ຄັ້ງຕໍ່ໄປຈະຂ້າມເລີຍ
            echo" $x <br> ";

            $x++;
        }

        mytest1();
        mytest1();
        mytest1();
        ?>
    </body>
</html>
