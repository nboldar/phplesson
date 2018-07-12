<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 11.07.2018
 * Time: 19:40
 */
$id=$_GET['img-id'];
$connectSQL = mysqli_connect("127.0.0.1", "root", "", "lesson5", "3307");
$requestView= mysqli_query($connectSQL, "UPDATE image SET view=view+1 WHERE id=$id");
$requestImgResult = mysqli_query($connectSQL, "SELECT url_max,view FROM image WHERE id=$id");
mysqli_close($connectSQL);
$resultArray=mysqli_fetch_all($requestImgResult,MYSQLI_ASSOC);
if($resultArray[0]['url_max']===null){
    echo "<p>Картинки с таким id нет</p>";
}else{
    $imgSrc=$resultArray[0]['url_max'];
    $view=$resultArray[0]['view'];
    echo "<p>Количество просмотров:$view</p><img src=\"$imgSrc\">";
}






