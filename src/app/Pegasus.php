<?php 

namespace Sonnys\Application;

use \Sonnys\Application\Bird;
use \Sonnys\Application\Horse;
use \Sonnys\Application\PegasusInterface;

/**
 * A Pegasus is a winged-horse creature than can gallop like a horse and fly like a bird.
 */
class Pegasus implements PegasusInterface {

	public function __construct(Bird $bird, Horse $horse) {
		$this->bird = $bird;
		$this->horse = $horse;
	}

	// A Pegasus flies in exactly the same way as a Bird.
	public function fly() {
		// Since galloping and flying are complicated operations, they are assumed to require several lines of non-trivial code.  
		// The details of these algorithms are irrelevant to this question. You may represent them in your code using comments.

		// flying code here
		$this->bird->fly();
		syslog(LOG_INFO, __CLASS__ . ' is flying.');		
	}

	// A Pegasus gallops in exactly the same way as a Horse.
	public function gallop() {
		// Since galloping and flying are complicated operations, they are assumed to require several lines of non-trivial code.  
		// The details of these algorithms are irrelevant to this question. You may represent them in your code using comments.

		// galloping code here
		$this->horse->gallop();
		syslog(LOG_INFO, __CLASS__ . ' is galloping.');			
	}
}