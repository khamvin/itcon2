<?php
$num1 = $num2 = $operator = $result = $error = "";
if(isset($_POST['equal'])){
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
    $operator = $_POST['operator'];
    switch ($operator){
    case "+";
        $result = $num1 + $num2;
        break;
    case "-";
        $result = $num1 - $num2;
        break;
    case "*";
        $result = $num1 * $num2;
        break;
    case "/";
        if ($num2 == 0){
            $error = "ບໍ່ສາມາດຫານໃຫ້ກັບສູນໄດ້";
        }else{
        $result = $num1 / $num2;
        }
        break;
    default:
            $error = "ກະລຸນາເລືອກເຄື່ອງໝາຍ";
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
    </head>
    <body>
        <h3 style="font-family: Phetsarath OT; color: blue"> ໂປຣແກຣມຄິດໄລ່ເລກ</h3>
        <form action="" method="post">
            <input type="text" name="number1" value="" required="">
            <input type="radio" name="operator" value="+">+
            <input type="radio" name="operator" value="-">-
            <input type="radio" name="operator" value="*">*
            <input type="radio" name="operator" value="/">/
            <input type="text" name="number2" value="" required="">
            <input type="submit" name="equal" value="=">
            <button onclick="window.location.reload(true)">Refresh</button>
            <br><hr>
            <?php
            if(isset($_POST['equal'])){
                if($error){
                    echo "$error";
                } else {
                    echo "$num1 $operator $num2 = $result";             
                }
                }
            ?>
        </form>
    </body>
</html>
