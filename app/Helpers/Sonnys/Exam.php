<?php 

namespace App\Helpers\Sonnys;

/**
 * 
 */
class Exam {
	static $defaultText = 'unknown';

	protected $_score;

	public $place;

	private $_attributes = [];

	/**
	 * Constructor
	 */
	public function __construct() {

	}

	public function setAttributes(array $attributes): void {
		$this->_attributes = (array) $attributes;
	}

	/**
	 * Custom implementation of magic method: __get
	 */
	public function __get(string $name): string {
		if (array_key_exists($name, $this->attributes)) {
			return $this->_attributes[$name];
		}

		return static::$defaultText;
	}
}
