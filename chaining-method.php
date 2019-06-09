<?php

class Billing
{
    public $dinner      = 20;
    public $dessert     = 5;
    public $coldDrink   = 3;
    public $bill;

    public function __call($name, $person)
    {
        $this->bill += $this->{$name} * $person[0];
        return $this;
    }
}


$billing = new Billing;
/*
    var_dump($billing->dinner(5));
    object(Billing)#1 (4) {
        ["dinner"]=>    int(20)
        ["dessert"]=>   int(5)
        ["coldDrink"]=> int(3)
        ["bill"]=>      int(100)
    }
*/
echo $billing->dinner(5)->dessert(6)->coldDrink(3)->bill;
# 5 * 20 = 100 ; 5 * 6 = 30 ; 3* 3 = 9
# 100 + 30 + 9 = 139