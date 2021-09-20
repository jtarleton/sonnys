<?php 

namespace App\Helpers\Sonnys;

use App\Helpers\Sonnys\Widget;
use App\Helpers\Sonnys\Television;


class WidgetFactory {

	public static function Create($type = NULL) {
		switch ($type) {
			default: 
				return new Widget(); 
				break;
			case 'support': 
			case 'Support': 
				return new \Sonnys\Application\Support\Widget();
				break;
		}
	}
}

