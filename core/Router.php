<?php
class Router{
    public $routes=[
        "GET"=>[],
        "POST"=>[]
    ];
    public static function Load($filenmae)
    {
        $router=new Router;
        require $filenmae;
        return $router;
    }
    public function register($routes)
    {
        $this->routes=$routes;

    }
    public function show()
    {
        var_dump($this->routes);
    }
   public function get($uri,$controller)
   {
       $this->routes['GET'][$uri]=$controller;

   }
   public function post($uri,$controller)
   {
       $this->routes['POST'][$uri]=$controller;
   }
    public function direct($uri,$method)
    {
     // die( var_dump( explode("@",$this->routes[$method][$uri])));
       if(!array_key_exists($uri,$this->routes[$method]))
       {
        die("Error 404 Page");
        }
     
      $explosion= explode("@",$this->routes[$method][$uri]);
     
      $this->callAction($explosion[0],$explosion[1]);
   // var_dump($this->routes[$method][$uri]);

    }
    public function callAction($class,$method)
    {
        
       $Class= new $class;
       //die(var_dump($Class));
       $Class->$method();
      //die(var_dump($Class));

    }
}
?>