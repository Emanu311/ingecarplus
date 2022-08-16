<?php
require 'system/config.php';
require CORE . 'autoload.php';

$router = new Router();
$controller = $router->getController();
$method = $router->getMethod();
$params = $router->getParam();

print_r($router->getUri());

?>