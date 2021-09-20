<?php 

namespace App\Helpers\Sonnys;

use \App\Helpers\Sonnys\GreeterTrait;
use \App\Helpers\Sonnys\GreeterInterface;

//
class InformalGreeter implements GreeterInterface {

	use GreeterTrait;
	
	/**
	 * @param string
	 * @return string
	 */
	public function sayHello(string $punctuation = '|') : string {
		return sprintf('Hi, %s !', $this->_target);
	}
}