<?php 

namespace App\Helpers\Sonnys;

use \App\Helpers\Sonnys\GreeterTrait;
use \App\Helpers\Sonnys\GreeterInterface;

class Greeter implements GreeterInterface {
	
	use GreeterTrait;
	
	/**
	 * @param string
	 * @return string
	 */
	function sayHello(string $punctuation = '|') : string {
		return sprintf('Hello, %s %s', $this->_target, $punctuation);
	}
}
