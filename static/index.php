<?php

class User{

    static public $name = 'John';
    static public $number;

    static public function getName()
    {
        return self::$name = 'FX';
    }

    static public function incr(){
        return self::$number += 1;
    }
}

# echo User::$name; // John
# echo User::getName(); //FX

# User::incr();
# echo User::$number; // 1
# echo User::incr(); // 2
