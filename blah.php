<?php

class Car
{
    protected $carname;
    public function __construct($carname)
    {
        echo "$this->carname=$carname";

    }
    protected function drive()
    {
        echo "$this->carname blahhhhh driving";
    }
    public function teest()
    {
        $this->drive();
    }
}
$car=new Car("llambo");
$car->teest();


?>