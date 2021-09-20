<?php 

namespace App\Helpers\Sonnys;

interface GreeterInterface {

	public function getTarget() : string;
	
	public function sayHello(string $punctuation) : string;

}