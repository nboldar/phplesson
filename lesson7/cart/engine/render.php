<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 14.07.2018
 * Time: 12:00
 */
session_start();
function render($template, array $params = [], $useLayout = true){
    $content = renderTemplate($template, $params);
    if($useLayout){
        $content = renderTemplate('product', ['content' => $content]);
    }
    return $content;
}


function renderTemplate($template, array $params = []){
    extract($params);
    ob_start();
    include TEMPLATES_DIR . $template . ".php" ;
    return ob_get_clean();
}
function renderCart($template, array $params = [], $useLayout = true){
    $content = renderTemplate($template, $params);
    if($useLayout){
        $content = renderTemplate('shopping_cart', ['content' => $content]);
    }
    return $content;
}