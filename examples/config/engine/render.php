<?php

function displayHello(){
    echo "hello, World!";
}

function render($template, array $params = []){
    extract($params);
    include TEMPLATES_DIR . $template . ".php" ;
}