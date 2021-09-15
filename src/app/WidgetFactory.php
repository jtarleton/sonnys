<?php 
namespace Sonnys\Application;

class WidgetFactory {

	public static function Create($type = NULL) {
		switch ($type) {
			default: 
				return new \Sonnys\Application\Widget(); 
				break;
			case 'support': 
				return new \Sonnys\Application\Support\Widget();
				break;
		}
	}
}

