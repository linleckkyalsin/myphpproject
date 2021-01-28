<?php
class Request{
    public static function uri()
    {
   //  dd($_SERVER);
       //dd($_SERVER ["PATH_INFO"]);
      return parse_url( trim($_SERVER["PATH_INFO"],"/"),PHP_URL_PATH);
     
       
    }
}
?>