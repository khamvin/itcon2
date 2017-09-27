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
                background-color: beige
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
    </body>

</html>
