<?php

# Overriding , Early Binding, Late binding, Late Static Binding

/*
class Book{

    public $name= 'Nicholas Sparks';

    public function author(){
        return 'The author name is '.$this->name;
    }

    public function getAuthor(){
        return $this->author();
    }
}

class NewBook extends Book{
    public function author(){
        return 'The author changed to '.$this->name;
    }
}
*/

# $book = new NewBook;
# echo $book->author(); // The author changed to Nicholas Sparks
# echo $book->getAuthor(); // The author changed to Nicholas Sparks -> Early Binding

# $book = new Book;
# echo $book->getAuthor(); // The author name is Nicholas Sparks -> Late Binding

class Book{

    public static $name= 'Nicholas Sparks';

    public static function author(){
        return 'The author name is '.self::$name;
    }

    public static function getAuthor(){
        // return self::author();
        return static::author();
    }
}

class NewBook extends Book{
    public static function author(){
        return 'The author changed to '.self::$name;
    }
    
}

# echo Book::getAuthor(); // The author name is Nicholas Sparks
# echo NewBook::getAuthor(); // The author name is Nicholas Sparks
# echo NewBook::getAuthor(); // The author changed to Nicholas Sparks