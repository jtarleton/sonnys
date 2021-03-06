<?php 

namespace Sonnys\Application;

use \Sonnys\Application\GreeterTrait;
use \Sonnys\Application\GreeterInterface;

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