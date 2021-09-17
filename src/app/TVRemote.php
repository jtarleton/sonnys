<?php 
namespace Sonnys\Application;

use \Sonnys\Application\RemoteControl;
use \Sonnys\Application\Television;

class TVRemote implements RemoteControl {
	private $_tv;
	/**
	 * @param object
	 * @return void
	 */
	public function __construct(Television $tv) {
		$this->_tv = $tv;
	}
	/**
	 * @return void
	 */
	public function powerOn() : void {
		$this->_tv->setPower();
		syslog(LOG_INFO, 'Powering on Televison from ' . __CLASS__);
	}

}

