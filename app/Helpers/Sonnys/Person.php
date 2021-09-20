<?php 

namespace App\Helpers\Sonnys;

use App\Helpers\Sonnys\Nameable;
use App\Helpers\Sonnys\PersonInterface;
use App\Helpers\Sonnys\NameInfo;

/**
 * 
 */
class Person implements Nameable, PersonInterface {

	use NameInfo;

	public function __construct() {

	}
}