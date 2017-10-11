<?php
$text = "";

//ສ້າງຟັງຊັ້ນໃນການກອງຂໍ້ມູນ
function data_input($data) {
    $data = trim($data); //ນີ້ຄືສູດຕັດຍະຫວ່າງໜ້າຫຼັງອອກ
    $data = stripcslashes($data); //ນີ້ຄືສູດຕັດເຄື່ອງໝາຍອອກ
    $data = htmlspecialchars($data); // ບໍ່ໃຫ້ມີຜົນຂອງເເທັກ HTML
    return$data; //ສົ່ງຄ່າທັງໝົດນີ້ກັບຄືນຟັງຊັ້ນ
}

//ກ່ອນຈະຮັບຄ່າຕ້ອງໄປກວດສອບກ່ອນວ່າເຂົາກົດປູ່ມ submit ຫຼືບໍ່ ?
if (isset($_POST['submit'])) {
    $text = data_input($_POST['text']);
}
?>
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
        <form action="" method="psot">
            ຈົ່ງປ້ອນຂໍ້ຄວາມ<br>
            <textarea name="text" rows="5" cols="50"></textarea><br>
            <input type="submit" name="submit" value="Submit"
        </form>
        <?php
        ?>
    </body>
</html>
