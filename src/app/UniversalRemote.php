<?php 

namespace Sonnys\Application;

use \Sonnys\Application\Television;
use \Sonnys\Application\CableBox;
use \Sonnys\Application\RemoteControl;

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
		$this->_tv->setPower();
		syslog(LOG_INFO, 'Powering on TV from ' . __CLASS__);

		$this->_cablebox->setPower();
		syslog(LOG_INFO, 'Powering on CableBox from ' . __CLASS__);
	}
}



$universalRemote = new UniversalRemote();

$remoteControlUser = new RemoteControlUser(UniversalRemote);

$type = NULL;

switch ($type) {
	default:
	case 'Television':
		$remoteControl = new TVRemote();
		break;

	case 'CableBox':
		$remoteControl = new CableBoxRemote();
		break;

	case 'Universal':
		$remoteControl = new UniversalRemote();
		break;
}
$remoteControlUser->setRemoteControl($remoteControl)->pushButton();