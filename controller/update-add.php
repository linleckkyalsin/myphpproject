<?php
echo "<pre>";
//$database->insert([
  //  'name'=>$_POST['name'],
    
//],"myusers");
$where=$_POST['where'];
$database->updateAll([
    'id'=>$_POST['id'],
    'name'=>$_POST['name'],
  //  
] ,"myusers",$where);


header("Location: home");

?>