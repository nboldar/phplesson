<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 14.07.2018
 * Time: 11:31
 */
function plus($a, $b)
{
    return $a + $b;
}

function minus($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function division($a, $b)
{
    return $a / $b;
}

function mathOperation($arg1, $arg2, $operation)
{
    $result = null;
    switch ($operation) {
        case "+":
            $result = plus($arg1, $arg2);
            break;
        case "-":
            $result = minus($arg1, $arg2);
            break;
        case "*":
            $result = multiply($arg1, $arg2);
            break;
        case "/":
            $result = division($arg1, $arg2);
            break;
        default:
            $result = '<br>';
    }
    return $result;
}

function validate(array $argArray)
{
    foreach ($argArray as $val) {
        if (!is_numeric($val) and !preg_match("/[\*\+\-\/]/", $val) ) {
            return false;
        }
    }
    return true;
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $dataArray = $_GET;
    if(validate($dataArray)==true){
        $result=mathOperation($dataArray['arg1'], $dataArray['arg2'], $dataArray['operation']);
    }else{
        $result="Ошибка вычисления, введены не верные аргументы!!";
    };
}