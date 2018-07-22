<?php
$string = "shddfhshsdhjsfhjshjsdghjsdghjs";
$size = strlen($string);
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=test.txt');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . $size);
exit;


