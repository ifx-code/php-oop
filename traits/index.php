<?php

require('Student.php');
require('Book.php');
require('School.php');
	
class Boy extends Student{
	
	use Book, School{
		
		Book::name insteadof School;
		
		School::name as Schname;
	}
	
	
	public function name(){
		return 'I am a boy';
	}
	
	public function author(){
		return 'Hamzaboo';
	}
}

$obj = new Boy;

# echo $obj->age(); // 12
# echo $obj->address(); // 1435 Street, London, UK

# echo $obj->name(); // Read from => name() @ index.php, name() @ Book.php, name() @ Subject.php
# echo $obj->Schname(); // The World Best School

# echo $obj->name; // This is a public name: PAUL
# echo $obj->author(); // Hamzaboo

?>