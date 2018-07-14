<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 14.07.2018
 * Time: 12:00
 */
function render($template, array $params = []){
    extract($params);
    include TEMPLATES_DIR . $template . ".php" ;
}