<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 07.07.2018
 * Time: 10:12
 */
function renderImg($dir = './img/min/')
{
    $imgArray = scandir($dir);

    foreach ($imgArray as $key=>$val) {
        if ($val <> '.' and $val <> '..') {
            $num=$key-1;
            echo "<a href='http://img.loc/img/max/$num.jpg' class='img' target='_blank'><img src='$dir$val' alt='image'></a>";
        }
    }
}

function nextImgNumber($pathDir = './img/min/')
{
    $imgArray = scandir($pathDir);
    $lastImg = count($imgArray) - 1;
    return $lastImg;
}

function setBigImgName($idImg)
{
    return $idImg . ".jpg";
}

function setMinImgName($idImg)
{
    return $idImg . ".min.jpg";
}

function getNextImg($img)
{
    if (isset($img)) {
        if ($img['type'] <> 'image/jpeg') {
            echo "Только картинки с расширением .jpg";
            unlink($_FILES['name']);
//            echo "<script>setTimeout(window.location.href='index.php',5000)</script>";
            return;
        }
        if ($img['size'] > 100000) {
            echo "превышен размер загружаемого файла";
            unlink($_FILES['name']);
//            echo "<script>setTimeout(window.location.href='index.php',5000)</script>";
            return;
        }
        $path = UPLOADS_DIR . setBigImgName(nextImgNumber());
        move_uploaded_file(
            $img['tmp_name'],
            $path
        );
        img_resize($path, ROOT_DIR . "img/min/" . setMinImgName(nextImgNumber()), 100, 70);
    }

    echo "<script>window.location.href='index.php'</script>";


}