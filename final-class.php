<?php

#  Final Method and Final class

class Book{

    public static $name= 'Nicholas Sparks';

    final public static function author(){
        return 'The author name is '.self::$name;
    }

    public static function getAuthor(){
        return static::author();
    }
}

class NewBook extends Book{
    /*
    public static function author(){
        return 'The author changed to '.self::$name;
    }
    */
}

# echo Book::getAuthor(); // The author name is Nicholas Sparks
# echo "<br/>";
# echo NewBook::getAuthor(); // The author name is Nicholas Sparks

final class Livre{

    public static $name= 'Nicholas Sparks';

    final public static function author(){
        return 'The author name is '.self::$name;
    }

    public static function getAuthor(){
        return static::author();
    }
}
/*
class NouveauLivre extends Livre{
    
    public static function author(){
        return 'The author changed to '.self::$name;
    }
}
*/
# echo Livre::getAuthor(); // The author name is Nicholas Sparks
# echo "<br/>";
# echo NouveauLivre::getAuthor(); // Error