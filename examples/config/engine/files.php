<?php
/*function getFilesInFolder($dir){
    $files = scandir($dir);
    foreach ($files as $key => $file){
        if(is_dir($dir . "/" . $file)){
            unset($files[$key]);
        }
    }
    return $files;
}*/

function uploadFile($uploadName, $distance, $callback = null){
    $destinationFile = false;
    if(isset($_FILES[$uploadName])){
        $uploadFile = $_FILES[$uploadName];
        $destinationFile = $distance . '/' . $uploadFile['name'];
        move_uploaded_file(
            $uploadFile['tmp_name'], $destinationFile
        );
//        if($callback){
//           $callback($distance, $uploadFile['name']);
//        }
    }
    return $destinationFile;
}