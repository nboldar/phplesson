<?php
include __DIR__ . "/../config/main.php";
include ENGINE_DIR . "gallery.php";
require_once ENGINE_DIR . "db.php";
require_once ENGINE_DIR . "render.php";
$id = (int)$_GET['id'];
$photo = getImageById($id);

execute("UPDATE images SET views = views + 1 WHERE id = {$id}");
render('photo', [
    'path' => $photo['path'],
    'count' => $photo['views'] + 1
]);


