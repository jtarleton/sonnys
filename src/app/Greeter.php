<?php 

namespace Sonnys\Application;

use \Sonnys\Application\GreeterTrait;
use \Sonnys\Application\GreeterInterface;

class Greeter implements GreeterInterface {

	/**
	 * @param string
	 * @return string
	 */
	function sayHello(string $punctuation = '|') : string {
		return sprintf('Hello, %s %s', $this->_target, $punctuation);
	}
}
