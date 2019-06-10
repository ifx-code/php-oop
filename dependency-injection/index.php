<?php

include 'person.php';

class Book{

    public $price;
    public $authors;

    public function price(int $price){
        return $this->price = $price;
    }

    public function authors(Person $person){
        return $this->authors = $person->names();
    }
}

$book = new Book;
$authorsName = new Person;

$book->authors($authorsName);

print_r($book->authors);
