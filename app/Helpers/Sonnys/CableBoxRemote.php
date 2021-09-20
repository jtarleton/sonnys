<?php 

namespace App\Helpers\Sonnys;

use App\Helpers\Sonnys\CableBox;
/**
 * 
 */
class CableBoxRemote implements RemoteControl {

	private $_cablebox;

	public function __construct(CableBox $cablebox) {
		$this->_cablebox = $cablebox;
	}

	public function powerOn() : void {
		$this->_cablebox->setPower(TRUE);
		syslog(LOG_INFO, 'Powering on CableBox from ' . __CLASS__);
		echo 'Powering on CableBox from ' . __CLASS__ . '<br />';
	}
}
