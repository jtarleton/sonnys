<?php 

namespace Sonnys\Application;

class Greeter {
	public function getTarget() {

	}
	/**
	 * @param string
	 * @return string
	 */
	function sayHello(string $punctuation = '|') : string {
		return sprintf('Hello, %s %s', $this->_target, $punctuation);
	}
}
