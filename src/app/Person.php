<?php 

namespace Sonnys\Application;

use Sonnys\Application\Nameable;
use Sonnys\Application\PersonInterface;
use Sonnys\Application\NameInfo;

/**
 * 
 */
class Person implements Nameable, PersonInterface {

	use NameInfo;

	public function __construct() {

	}
}