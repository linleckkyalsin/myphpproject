<?php

//require "core/function.php";
//require "core/Router.php";
//require "core/Request.php";
//require "core/dataBase/Connecton.php";
//require "core/dataBase/QueryBuilder.php";


//$config=require "config.php";
//$database=new QueryBuilder(Connection::make($config['database']));

App::bind("config",require "config.php");
App::bind("database", new QueryBuilder(Connection::make(App::get('config')['database'])))
?>