<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 14.09.2018
 * Time: 18:30
 */
define('ROOT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/../');
define('DS', DIRECTORY_SEPARATOR);
define('HOST', '127.0.0.1');
define('LOGIN', 'root');
define('CHARSET', 'utf8');
define('DRIVER', 'mysql');
define('DB', 'lesson5');
define('PORT', '3307');
define('PASSWORD', '');
define("TEMPLATES_DIR", ROOT_DIR . "views/");
define("DEFAULT_CONTROLLER", "product");
define("CONTROLLERS_NAMESPACE", "app\\controllers");