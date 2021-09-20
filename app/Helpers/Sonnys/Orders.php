<?php 
namespace App\Helpers\Sonnys;

class Orders extends Baseorders{
public $id;
  public $number;
  public $date;
  public $amount;
    /**
   * Constructor
   */
    public function __construct($id, $data=null){
      if(!isset($data)) {
        //$data = lookup data by id
      }
      $this->load($data);
    }

    /**
     * Load data
     */
     public function load(array $data) {
foreach($data as $prop=>$value) {
      $this->$prop = $value;
    }
       }

    public function getId() {
        return $this->id;
    }    public function getNumber() {
        return $this->number;
    }    public function getDate() {
        return $this->date;
    }    public function getAmount() {
        return $this->amount;
    }    private function setId($id) {
        $this->id = $id;
    }    private function setNumber($number) {
        $this->number = $number;
    }    private function setDate($date) {
        $this->date = $date;
    }    private function setAmount($amount) {
        $this->amount = $amount;
    }

public function getTableHeading() {
    $html = '%s';
    $closure = function($fields){
      foreach ($fields as $k => &$value)
        $fields[$k]=ucwords(str_replace('_',' ',$value));
      return $fields;
    };

    return sprintf($html, implode('',
        call_user_func($closure, array_keys(get_object_vars($this)))
      )
    );
  }

}