<?php
echo "<pre>";
//$database->insert([
  //  'name'=>$_POST['name'],
    
//],"myusers");

$where=$_POST['where'];
//dd($where);
App::get('database')->deleteAll($where,"myusers");
header("Location: home");

?>