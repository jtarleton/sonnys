<?php 

namespace Sonnys\Application;

interface GreeterInterface {

	public function getTarget() : string;
	
	public function sayHello(string $punctuation) : string;

}