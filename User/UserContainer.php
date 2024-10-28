<?php 

namespace User;
require_once "UserDatabase.php";
require_once "Connections/ConMySql.php";

use Connections\ConMYSql;
use PDO;

class UserContainer{

  public function setPDO(){
      $connetion = new  ConMYSql();
      return $connetion->conToMySql1();
  }

  public function setUserDatabase(){
    return new UserDatabase($this->setPDO());
  }

}

?>