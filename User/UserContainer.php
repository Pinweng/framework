<?php 

namespace User;
require_once "UserDatabase.php";
use PDO;

class UserContainer{

  public function setPDO(){
       // contection to database
        $pdo = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'testus', '12345');
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  
        return $pdo;
  }

  public function setUserDatabase(){
    return new UserDatabase($this->setPDO());
  }
  
}

?>