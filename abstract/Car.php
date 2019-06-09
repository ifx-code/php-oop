<?php

abstract class Car{
	
	function getName(){
		return 'I am a car';
	}
	
	abstract public function getFuelLevel();
}