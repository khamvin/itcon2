<?php
$num1 = $num2 = $operator = $erro = "";

if (isset($_POST['equal'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['mum2'];
    $operator = $_POST['operator'];
    switch ($operator) {
        case"+":
            $result = $num1 + $num2;
            break;
        case"-":
            $result = $num1 - $num2;
            break;
        case"*":
            $result = $num1 * $num2;
            break;
        case"/":
            if ($num2 == 0) {
                $erro = "ບໍ່ສາມາດຫານໃຫ້ກັບສູນໄດ້";
            } else {
                $result = $num1 / $num2;
            }
            break;
        default :
            $erro = "ກະລຸນາເລືອກໃຊ້ເຄື່ອງໝາຍໃດຫນຶ່ງກ່ອນກົດ = " ;
                
            }
    }
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
        <style>
            body{
                font-family: Phetsarath OT;
                /*background-color: gray*/
            }
        </style>

    </head>
    <body>
        <h3>ໂປຮແກມຄິດໄລ່ເລກ</h3>
        <form action="" method="post">
            <input type="text" name="num1" value=""  required="">
            <input type="radio" name="operator" value="+">+
            <input type="radio" name="operator" value="-">-
            <input type="radio" name="operator" value="*">*
            <input type="radio" name="operator" value="/">/
            <input type="text" name="num2" value="" required="">
            <input type="submit" name="equal" value="=">
            <button onclick="window.location.reload(true)">Refresh</button>
        </form>

        <br><hr>
        <?php
        if (isset($_POST['equal'])) {
            if ($erro) {
                echo "$error";
            } else {
                echo "$num1 $operator $num2 = $result";
            }
        }
        }
        ?>
    </body>

</html>
