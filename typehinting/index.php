<?php

include 'person.php';

class Book{

    public $price;
    public $authors;

    public function price(int $price){
        return $this->price = $price;
    }

    public function authors(Person $person, array $getTheNames){
        return $this->authors = $person->getNames($getTheNames);
    }
}

$book = new Book;
# $book->price(20); // 20
# $book->price('sss'); // Error
# $book->authors(1); // Error
# $book->authors(array('John', 'Doe')); 
# print_r ($book->authors); // Array ( [0] => John [1] => Doe )

$authorsName = new Person;

# $book->authors($authorsName, array('John', 'Doe'));
# print_r ($book->authors); //Array ( [0] => John [1] => Doe )

