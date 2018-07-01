<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 29.06.2018
 * Time: 20:13
 */
//задание 1
$getResult = function (int $a, int $b) {
    $result = null;
    if ($a >= 0 && $b >= 0) {
        return $result = $a - $b;
    } elseif ($a < 0 && $b < 0) {
        return $result = $a * $b;
    } else {
        return $result = $a + $b;
    }
};
echo "результат функции " . $getResult(13, 3) . "<br>";
echo "результат функции " . $getResult(-67, -34) . "<br>";
echo "результат функции " . $getResult(-21, 34) . "<br>";
echo "<hr>";
//--------------------------------------------------------------------------------------------------------------
//задание 2
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

function split($a, $b)
{
    return $a / $b;
}

echo plus(5, 7) . "<br>";
echo minus(345, 458) . "<br>";
echo multiply(-85, 7.5) . "<br>";
echo split(9, 7.1) . "<br>";
echo "<hr>";
//--------------------------------------------------------
//Задание 3
function mathOperation($arg1, $arg2, $operation)
{
    $result = null;
    switch ($operation) {
        case "сложение":
            $result = plus($arg1, $arg2);
            break;
        case "вычитание":
            $result = minus($arg1, $arg2);
            break;
        case "умножение":
            $result = multiply($arg1, $arg2);
            break;
        case "деление":
            $result = split($arg1, $arg2);
            break;
        default:
            $result = 'ошибка!!!<br>';
    }
    return $result;
}

echo "результат фунции mathOperation равен " . mathOperation(23, 56, "вычитание");
echo "<hr>";
//------------------------------------------------------------------------------------------------------
//Задание 4
function powFunc(int $val, int $pow)
{
    if ($val === 0) {
        return 0;
    }
    switch ($pow) {
        case $pow > 1:
            return $val * powFunc($val, $pow - 1);
        case $pow === 1:
            return $val;
        case $pow < (-1):
            return 1 / ($val * powFunc($val, abs($pow) - 1));
        case $pow === (-1):
            return 1 / $val;
        default:
            return 1;
    }
}

echo powFunc(5, -1) . "<br>";
echo 5 ** (-1);
echo "<hr>";
//------------------------------------------------------------------------------------------------------
//Задание 5
/*
 *
 * функция возвращает массив из 2 элементов -это десятки минут/часов и их еденицы
 * в аргумент передается формат представления времени часы или минуты
 * */
function arr(string $time)
{
    return str_split(date($time));
}
/*
 * функция возвращает вариант окончания слов час иминута
 * в качастве аргументов принимает
 * 1)массив з десятков и едениц часов\минут
 * 2)три варианта окончания слова
 * */
function endL($arr, string $one, string $two, string $three)
{
    if ($arr[0] == 1) {
        return $three;
    }
    switch ($arr[1]){
        case 1:
            return $one;
        case 2:
        case 3:
        case 4:
            return $two;
        default:
            return $three;
    }
}

$hour =date("H")." час" . endL(arr('H'), '', 'а', 'ов');
$minute = date('i') ." минут" . endL(arr('i'), 'а', 'ы', '');
$currentTime =  $hour . ' ' .  $minute;
echo $currentTime;


