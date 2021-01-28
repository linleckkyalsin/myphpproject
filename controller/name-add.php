<?php
echo "<pre>";
App::get('database')->insert([
    'name'=>$_POST['name'],
    
],"myusers");
header("Location: home");

?>