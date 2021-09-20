<?php 

namespace App\Helpers\Sonnys;

/**
 * Methods to re-use/copy into concrete Greeter classes.
 */
trait GreeterTrait {

	private $_target = 'World';

	/** 
	 * @return string
	 */
	public function getTarget(): string {
		return $this->_target;
	}
}