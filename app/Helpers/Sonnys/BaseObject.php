<?php 

namespace App\Helpers\Sonnys;

class BaseObject extends Database {
  public function __construct() {
    $dsn = sprintf('mysql://%s:%s@%s/%s','wilecoyote', 'somesecretpasswd', 'localhost', 'sonny');

    $this->pdo = parent::PDOCreate($dsn , false);
  }
  public static function Connect() {
    $obj = new self;
    return $obj->pdo;
  }
}
