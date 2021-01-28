<?php
class PagesController
{
    public function home()
    {
        
$users=App::get('database')->selectAll("myusers");

//view('index',[
  //  "users"=>$users
//]);
require "view/index.view.php";

    }
    public function about()
    {
       //view("about");
require "view/about.view.php";
    }
    public function contact()
    {
        
require "view/contact.php";
    }
    public static function createuser()
    {
        App::get('database')->insert([
            'name'=>$_POST['name'],
            
        ],"myusers");
        header("Location: home");
        
    }
}