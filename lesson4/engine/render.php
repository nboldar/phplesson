<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 07.07.2018
 * Time: 10:12
 */
function renderImg()
{
    $connectSQL = mysqli_connect("127.0.0.1", "root", "", "lesson5", "3307");
    $requestImgResult = mysqli_query($connectSQL, "SELECT url_min FROM image ORDER BY view DESC ");
    mysqli_close($connectSQL);
    $imgUrlArray = mysqli_fetch_all($requestImgResult, MYSQLI_ASSOC);
    $imgUrlArrayLength = count($imgUrlArray);
    for ($i = 0; $i < $imgUrlArrayLength; $i++) {
        $minImgUrl = $imgUrlArray[$i]['url_min'];
        echo "<a href='#' class='img' ><img src='$minImgUrl' alt='image'></a>";
    }
}
function trans($str)
{
    $transliteration = [" "=>"_","а" => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d", "е" => "e", "ё" => "e", "ж" => "zh",
        "з" => "z", "и" => "i", "й" => "y", "к" => "k", "л" => "l", "м" => "m", "н" => "n", "о" => "o", "п" => "p",
        "р" => "r", "с" => "s", "т" => "t", "у" => "u", "ф" => "f", "х" => "kh", "ц" => "ts", "ч" => "ch", "ш" => "sh",
        "щ" => "sch", "ъ" => "", "ы" => "i", "ь" => "", "э" => "e", "ю" => "yu", "я" => "ya"];

    $str = mb_strtolower($str);
    $strArray = [];
    $strLen=mb_strlen($str);
    for ($i = 0; $i <= $strLen; $i++) {
        array_push($strArray, mb_substr($str, $i, 1));
    }
    $newStrArray = [];
    foreach ($strArray as $item => $val) {
        if (mb_ereg_match("\W", mb_substr($val, 0))) {
            array_push($newStrArray, $val);
        }
        if (mb_ereg_match("[a-z]", mb_substr($val, 0))) {
            array_push($newStrArray, $val);
        }
        foreach ($transliteration as $key => $value) {
            if ($val === $key) {
                array_push($newStrArray, $value);
            }
        }
    }

    $newStr = implode($newStrArray);
    return $newStr;
}
function uploadImg($img)
{
    if (isset($img)) {

        $name = trans($img['name']);
        var_dump($name);
        $path = UPLOADS_DIR . $name;
        $relativeMaxPath = RELATIVE_MAXIMG_DIR . $name;
        $relativeMinPath = RELATIVE_MINIMG_DIR . $name;
        $size_max = $img['size'];
        $minImgPath = ROOT_DIR . "img/min/" . $name;

        move_uploaded_file($img['tmp_name'], $path);
        img_resize($path, $minImgPath, 100, 70);
        $size_min = filesize($minImgPath);
        $query = "INSERT INTO image (url_min,url_max, name,size_min, size_max,view) VALUE ('$relativeMinPath','$relativeMaxPath','$name','$size_min','$size_max',0)";
        $connectSQL = mysqli_connect("127.0.0.1", "root", "", "lesson5", "3307");
        $requestResult = mysqli_query($connectSQL, $query);
        mysqli_close($connectSQL);
    }
}