<?php
require "vendor/autoload.php";
require "core/Bootstrap.php";

$router=new Router;
require "routes.php";
//dd(trim($_SERVER["PATH_INFO"]),"/");

 $router->direct(Request::uri(),$_SERVER['REQUEST_METHOD']);
?>

