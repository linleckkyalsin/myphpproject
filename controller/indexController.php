<?php



$users=App::get('database')->selectAll("myusers");

//view('index',[
  //  "users"=>$users
//]);
require "view/index.view.php";


?>
