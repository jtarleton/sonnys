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
				return new \App\Helpers\Sonnys\Support\Widget();
				break;
		}
	}
}

