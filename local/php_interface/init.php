<?php

define("LOG_FILENAME", $_SERVER["DOCUMENT_ROOT"]."/ak-log.txt");
define('VUEJS_DEBUG', false);

// Константы
if(file_exists($_SERVER['DOCUMENT_ROOT']."/local/php_interface/include/constants.php"))
    require_once ($_SERVER['DOCUMENT_ROOT']."/local/php_interface/include/constants.php");

// ПОДКЛЮЧАЕМ ФУНКЦИИ
if(file_exists($_SERVER['DOCUMENT_ROOT']."/local/php_interface/include/functions.php"))
    require_once ($_SERVER['DOCUMENT_ROOT']."/local/php_interface/include/functions.php");


// ПОДКЛЮЧАЕМ АВТОЗАГРУЗЧИК "COMPOSER"
if(file_exists($_SERVER['DOCUMENT_ROOT']."/local/php_interface/vendor/autoload.php"))
    require_once ($_SERVER['DOCUMENT_ROOT']."/local/php_interface/vendor/autoload.php");