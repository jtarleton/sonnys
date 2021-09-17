<?php 

namespace Sonnys\Application;

use \Sonnys\Application\Widget;
use \Sonnys\Application\Television;


class WidgetFactory {

	public static function Create($type = NULL) {
		switch ($type) {
			default: 
				return new Widget(); 
				break;
			case 'support': 
				return new \Sonnys\Application\Support\Widget();
				break;
		}
	}
}

