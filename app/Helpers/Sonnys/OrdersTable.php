<?php 

namespace App\Helpers\Sonnys;

class OrdersTable extends Baseorders{
    public static function get($id, $data=null) {
    return new Orders($id, $data);
    }


  public static function getCount(){
     $pdo = parent::Connect();
     $stmt=$pdo->prepare("SELECT count(*) as ct
    FROM Orders");
  $stmt->execute();
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
  return intval($row['ct']);
    }


    public static function getAll($offset=0,$limit=10) {


$pdo = parent::Connect();

  $stmt=$pdo->prepare("SELECT * FROM Orders  LIMIT $offset,$limit;");
  
  //$stmt->bindValue(':id', 'id', PDO::PARAM_STR);
  
  //$stmt->bindValue(':number', 'number', PDO::PARAM_STR);
  
  //$stmt->bindValue(':date', 'date', PDO::PARAM_STR);
  
  //$stmt->bindValue(':amount', 'amount', PDO::PARAM_STR);
    $stmt->execute();
  
   $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $rows;
  }







public static function Create() {


$pdo = parent::Connect();

  $stmt=$pdo->prepare('INSERT INTO Orders (id,number,date,amount) VALUES(:id,:number,:date,:amount)');


    $stmt->bindValue(':id', $row['id'], PDO::PARAM_STR);
    $stmt->bindValue(':number', $row['number'], PDO::PARAM_STR);
    $stmt->bindValue(':date', $row['date'], PDO::PARAM_STR);
    $stmt->bindValue(':amount', $row['amount'], PDO::PARAM_STR);
    $stmt->execute();
      return $stmt->rowCount();
  }


public static function Update(array $changes) {

$fields = explode(',', $in['csv_fields']);

$missing = array();
foreach($fields as $v){
  if(!isset($changes[$v])){
    $missing[] =  $v;
  }
}

if(count($missing))
  throw new Exception('Please provide a non-null value for the following fields: ' . implode(',',$missing) );

$pdo = parent::Connect();

  $stmt=$pdo->prepare('UPDATE Orders SET id=:id,number=:number,date=:date,amount=:amount');
    $stmt->bindValue(':id', $changes['id'], PDO::PARAM_STR);
    $stmt->bindValue(':number', $changes['number'], PDO::PARAM_STR);
    $stmt->bindValue(':date', $changes['date'], PDO::PARAM_STR);
    $stmt->bindValue(':amount', $changes['amount'], PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->rowCount();
  }
}