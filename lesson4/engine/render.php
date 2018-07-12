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

function uploadImg($img)
{
    if (isset($img)) {
        if ($img['type'] <> 'image/jpeg') {
            echo "Только картинки с расширением .jpg";
            return;
        }
        if ($img['size'] > 100000) {
            echo "превышен размер загружаемого файла";
            return;
        }
        $path = UPLOADS_DIR . $img['name'];
        $relativeMaxPath = RELATIVE_MAXIMG_DIR . $img['name'];
        $relativeMinPath = RELATIVE_MINIMG_DIR . $img['name'];
        $name = $img['name'];
        $size_max = $img['size'];
        $minImgPath = ROOT_DIR . "img/min/" . $img['name'];
        move_uploaded_file($img['tmp_name'], $path);
        img_resize($path, $minImgPath, 100, 70);
        $size_min = filesize($minImgPath);
        $query = "INSERT INTO image (url_min,url_max, name,size_min, size_max,view) VALUE ('$relativeMinPath','$relativeMaxPath','$name','$size_min','$size_max',0)";
        $connectSQL = mysqli_connect("127.0.0.1", "root", "", "lesson5", "3307");
        $requestResult = mysqli_query($connectSQL, $query);
        mysqli_close($connectSQL);

    }

    echo "<script>window.location.href='index.php'</script>";
}