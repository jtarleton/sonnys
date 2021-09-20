<?php 

namespace App\Helpers\Sonnys;

use App\Helpers\Sonnys\RemoteControl;
use App\Helpers\Sonnys\Television;
use App\Helpers\Sonnys\TVRemote;

/**
 * 
 */
class RemoteControlUser {
	private $remoteControl;
	/**
	 * TVRemote is the default remote type.
	 */
	public function __construct(){
		if (!isset($this->remoteControl)) {
			$tv = new Television();
			$this->remoteControl = new TVRemote($tv); 
		}
	}

	/** 
	 * Allow changing the type of Remote, but still allow powerOn.
	 */
	public function setRemoteControl(RemoteControl $remoteControl) {
		$this->remoteControl = $remoteControl;
		return $this;
	}

	public function pushButton(){
		$this->remoteControl->powerOn();
		return $this;
	}
}