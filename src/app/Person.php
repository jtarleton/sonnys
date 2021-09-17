<?php 

namespace Sonnys\Application;

/**
 * 
 */
class Person implements Nameable, PersonInterface {

	use NameInfo;

	public function __construct() {

	}
}