<?php

require('Subject.php');

trait Book{
	
	use Subject;
	
	public $name = 'This is a public name: PAUL';
	
	public function name(){
		return 'Alibaba & the 40 thieves';
	}
	
	abstract function author();
}