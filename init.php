<?php 
require_once "autoloader.php";
use App\App\Container;
use App\App\Router;

$Container = new Container();
$router = new Router($container);
?>