<?php
require_once ENGINE_DIR . "db.php";

function getGallery(){
    return queryAll("SELECT * FROM images ORDER BY views DESC");
}

function saveNewImage($path, $name){
    execute("INSERT INTO images (name, path)
                    VALUES ('{$name}', '{$path}')");
}

function getImageById($id){
    return queryOne("SELECT * FROM images WHERE id = {$id}");
}