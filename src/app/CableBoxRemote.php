<?php 

namespace Sonnys\Application;

/**
 * 
 */
class CableBoxRemote implements RemoteControl {

	private $_cablebox;

	public function __construct(Cablebox $cablebox) {
		$this->_cablebox = $cablebox;
	}

	public function powerOn() : void {
		$this->_cablebox->setPower();
		syslog(LOG_INFO, 'Powering on CableBox from ' . __CLASS__);
	}
}