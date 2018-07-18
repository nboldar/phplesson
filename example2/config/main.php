<?php
session_start();
define('ROOT_DIR', $_SERVER['DOCUMENT_ROOT'] ."/");
define('CONFIG_DIR', ROOT_DIR ."../config/");
define('ENGINE_DIR', ROOT_DIR . "../engine/");
define('UPLOADS_DIR', ROOT_DIR . "../uploads/");
define('TEMPLATES_DIR', ROOT_DIR . "../templates/");
define('VENDOR_DIR', ROOT_DIR . "../vendor/");