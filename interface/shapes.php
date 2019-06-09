<?php

include 'autoload.php';

class Triangle implements ShapeInterface, GeometryInterface{
    public function getArea(){
        return 'Triangle Area';
    }

    public function calculateGeometry($v1,$v2){
        return $v1 * $v2;
    }
}

class Rectangle implements ShapeInterface{
    public function getArea(){
        return 'Rectangle Area';
    }
}

$tri = new Triangle;
echo $tri->getArea();
echo '<br/>';
echo $tri->calculateGeometry(5, 20);

echo '<br/>';

$tri = new Rectangle;
echo $tri->getArea();