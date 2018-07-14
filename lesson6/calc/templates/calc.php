<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 14.07.2018
 * Time: 11:25
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin: 2px 10px;
            padding: 0;
        }
        input{
            display: block;
        }
        .operation{
            display: inline-block;
            width: 20px;
            height: 20px;
            text-align: center;
            font-size: 15px;
            font-weight: bold;
        }
        form p{
            margin-left: 2px;
        }
    </style>
</head>
<body>
<form action="" method="GET">
   <p>аргумент №1:</p>
    <input type="text" name="arg1"/>
    <p>аргумент №2:</p>
    <input type="text" name="arg2"/>
    <input class="operation" name="operation" type="submit" value="+"/>
    <input class="operation" name="operation" type="submit" value="-"/>
    <input class="operation" name="operation" type="submit" value="*"/>
    <input class="operation" name="operation" type="submit" value="/"/>
</form>
<p>результат: <?=$result?></p>

</body>
</html>
