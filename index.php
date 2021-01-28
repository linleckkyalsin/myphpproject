<?php
require "core/function.php";
class MyPosts
{
    public function __construct($title,$IsPublish)
    {
        $this->title=$title;
        $this->IsPublish=$IsPublish;
    }
}
$posts=[
    new MyPosts("first post",true),
    new MyPosts("second post",false),
    new MyPosts("third post",false),
    new MyPosts("fourth post",true),
    
];

$UnpublishedPost=array_filter($posts,function($post){
    return !$post->IsPublish;

});
echo "<pre>";
var_dump($UnpublishedPost);
$Mytitle=array_map(function($posst){
    return $posst->title;
},$posts);
echo "<pre>";
var_dump($Mytitle);
$person=[
    "name"=>"La Yaung",
    "age"=>"21",
    "married"=>false
];

//$person["school"]="UIT";
//echo "<pre>";
//var_dump($person)
//print_r($person)
//die();
function name($name)
{
    echo "My name is $name ";
}
name("Blah Blah");




?>