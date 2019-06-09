<?php

class Fruits{
    public $name;

    public function setName($name){
        $this->name =  $name;
    }
}

class Apple extends Fruits{

    public function juice(){
        return "Apple Juice";
    }
}

class Mango extends Fruits{

}


$mango = new Mango;
$mango->setName('My Juicy Mango');
echo $mango->name;

echo "<br/>";

$apple = new Apple;
$apple->setName('My Big Apple');
echo $apple->name;

echo "<br/>";

echo $apple->juice();