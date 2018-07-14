<?php
include __DIR__ .  "/../config/main.php";
include ENGINE_DIR .  "files.php";
include ENGINE_DIR .  "route.php";
include ENGINE_DIR .  "gallery.php";
include ENGINE_DIR .  "render.php";
require_once ENGINE_DIR .  "db.php";
include VENDOR_DIR .  "funcImgResize.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    uploadFile('img', ROOT_DIR . 'img', function($sourceDir, $sourceFile){
        $source = $sourceDir . "/" . $sourceFile;
        img_resize($source, ROOT_DIR . "img/small/" . $sourceFile, 100, 75);
        saveNewImage($sourceFile, $sourceFile);
    });
    redirect("/gallery.php");
}

//$files = getFilesInFolder(ROOT_DIR . "/img");
render('gallery', [
    'files' => getGallery()
]);
?>


