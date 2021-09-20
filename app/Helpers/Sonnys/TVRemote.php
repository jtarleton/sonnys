<?php 

namespace App\Helpers\Sonnys;

use App\Helpers\Sonnys\RemoteControl;
use App\Helpers\Sonnys\Television;

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
		$this->_tv->setPower(TRUE);
		syslog(LOG_INFO, 'Powering on Televison from ' . __CLASS__);
		echo 'Powering on Televison from ' . __CLASS__ . '<br />';
	}

}

