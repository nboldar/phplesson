<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 17.07.2018
 * Time: 23:42
 */
function addQuantity(array $arr1, array $arr2)
{

    foreach ($arr2 as $key2 => $value) {
        foreach ($arr1 as $key1 => $val) {
            if ($arr1[$key1]['id'] ==  $key2) {
                $arr1[$key1]['quantity'] = $value;
            }
        }
    }
    return $arr1;
}