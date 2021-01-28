<?php
//$router->register([
  //  "home"=>"controller/indexController.php",
    //"about"=>"controller/aboutController.php",
   // "contact"=>"controller/contactController.php",
    //"order"=>"controller/orderController.php",
   // "names"=>"controller/name-add.php"
//]) ;
//"PagesController@home"
$router->get("home","PagesController@home");
$router->get("about","PagesController@about");
$router->get("contact","PagesController@contact");
// $router->get("order","controller/orderController.php");
 $router->post("names","PagesController@createuser");
// $router->post("updates","controller/update-add.php");
// $router->post("deletes","controller/delete-add.php");
?>