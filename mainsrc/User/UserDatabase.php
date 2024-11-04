<?php 

namespace App\User;

use App\App\AbstractMVC\AbstractDatabase;
use App\User\MVC\UserModel;
use PDO;

class UserDatabase extends AbstractDatabase {

  public function getTabel()
  {
    return "user";
  }

  public function getModel()
  {
    return UserModel::class;
  }


 // retrieving all users
  public function getUsers() {
    $table = $this->getTabel();
    $model = $this->getModel();
    if (!empty($this->pdo)) {
        $stmt = $this->pdo->query("SELECT * FROM $table");
        $stmt->setFetchMode(PDO::FETCH_CLASS, $model = $this->getModel());
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    return []; 
  }

  //saving data in database

  function newUser($firstname, $lastname, $username, $mail, $password)
  {
    $table = $this->getTabel();
    if (!empty($this->pdo))
    {
      $statement = $this->pdo->prepare("INSERT INTO `user` (`firstname`, `lastname`, `username`, `mail`, `password`) VALUES (:firstname, :lastname, :username, :mail, :password)");
      $statement->execute([
        'firstname' => $firstname,
        'lastname' => $lastname,
        'username' => $username,
        'mail' => $mail,
        'password' => $password
      ]);
    }
    
  }

  //delete data from database

  function deleteUser(){
    $table = $this->getTabel();
    if(!empty($this->pdo)){
      $this->pdo->query("DELETE FROM `user` WHERE `username` = 'Herbert'");
    }

  }


  //update Database
  function updateUsers(){
    $table = $this->getTabel();
    if(!empty($this->pdo)){
      $this->pdo->query("UPDATE `user` SET `password` = 'NeuesPassword' WHERE `userid` = 1");
    }

  }
  
  }
?>
