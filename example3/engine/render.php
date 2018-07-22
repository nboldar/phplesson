<?php

function displayHello(){
    echo "hello, World!";
}

function render($template, array $params = [], $useLayout = true){
    $content = renderTemplate($template, $params);
    if($useLayout){
        $content = renderTemplate('layouts/main', ['content' => $content]);
    }
    return $content;
}


function renderTemplate($template, array $params = []){
    extract($params);
    ob_start();
    include TEMPLATES_DIR . $template . ".php" ;
    return ob_get_clean();
}