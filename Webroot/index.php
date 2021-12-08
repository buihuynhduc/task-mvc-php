<?php
define('WEBROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_FILENAME"]));
require ('../vendor/autoload.php');
use MVC\Router;
use MVC\Request;
use MVC\Dispatcher;
$dispatch = new Dispatcher();
$dispatch->dispatch();

?>