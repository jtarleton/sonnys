<?php 
namespace Sonnys\Application;
interface RemoteControl {
	public function powerOn() : void;
}

class Television {
	public function setPower(bool $state) : void {
		// truncated code	
	}
}

class CableBox {
	public function setPower(bool $state): void {
		// truncated code
	}
}

class TVRemote {
	private $_tv;

	public function __construct(Television $tv) {
		$this->_tv = $tv;
	}

	public function powerOn() : void {
		$this->_tv->setPower();
	}

}


