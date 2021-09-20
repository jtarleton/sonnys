<?php 

namespace App\Helpers\Sonnys;

use App\Helpers\Sonnys\Television;
use App\Helpers\Sonnys\CableBox;
use App\Helpers\Sonnys\RemoteControl;

/**
 * Represents a universal remote that can power-on cable boxes or televisions.
 */
class UniversalRemote implements RemoteControl {
	/**
	 * @param object
	 * @param object
	 */
	public function __construct(Television $tv, CableBox $cablebox) {
		$this->_tv = $tv;
		$this->_cablebox = $cablebox;
	}

	/**
	 * @return void
	 */
	public function powerOn() : void {
		$this->_tv->setPower(TRUE);
		syslog(LOG_INFO, 'Powering on Televison from ' . __CLASS__);
		echo 'Powering on Televison from ' . __CLASS__ . '<br />';	

		$this->_cablebox->setPower(TRUE);
		syslog(LOG_INFO, 'Powering on CableBox from ' . __CLASS__);
		echo 'Powering on CableBox from ' . __CLASS__ . '<br />';	
	}
}