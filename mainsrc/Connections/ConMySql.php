<?php 

namespace App\Connections;
use PDO;

class ConMYSql{
  public function conToMySql1(){
     // contection to database
    $pdo = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'testus', '12345');
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    return $pdo;
  }
}

?>