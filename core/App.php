<?php
class App{
    protected static $datas=[
        // 'config'=>[
        //     "database"=>[
        //         "username"=>"root",
        //         "password"=>"",
        //         "dbName"=>"todo",
        //         "host"=>"mysql:host=localhost"
        //     ]
        // ]

    ];
   public static function bind($key,$value)
   {
       static::$datas[$key]=$value;
   }
   public static function get($key)
   {
       return static::$datas[$key];
   }
 
}