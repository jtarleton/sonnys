<?php 

namespace Sonnys\Application;

//
class InformalGreeter {
	public function sayHello(string $punctuation = '|') : string {
		return sprintf('Hi, %s !', $this->_target);
	}
}