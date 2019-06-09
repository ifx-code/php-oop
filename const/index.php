<?php

class Circle{

    const PI = 3.1459;

    public function area($radius)
    {
        return $radius * $radius * self::PI;
    }

    public function perimeter($radius)
    {
        return 2 * self::PI * $radius;
    }
}

$circle = new Circle;
# echo $circle->area(5); // 78.6475
# echo '<br/>';
# echo $circle->perimeter(5); // 31.459
# echo $circle::PI; // 3.1459