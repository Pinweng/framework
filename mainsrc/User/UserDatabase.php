<?php 

namespace App\User;

use App\User\MVC\UserModel;
use PDO;

class UserDatabase {


  // hands over pdo 
  private $pdo;
  public function __construct(PDO $pdo){
    $this->pdo = $pdo;
  }
  
    
  


  //retrieving database

  function getUsers() {
    $table = "user";
    if (!empty($this->pdo)) {
        $stmt = $this->pdo->query("SELECT * FROM $table");
        $stmt->setFetchMode(PDO::FETCH_CLASS, UserModel::class);
        return $stmt->fetchAll(PDO::FETCH_CLASS); // Rückgabe des Ergebnisses
    }
    return []; // Rückgabe eines leeren Arrays, wenn keine Verbindung besteht
}







  //saving data in database

  function newUser(){
    $table = "user";
    if (!empty($this->pdo)){
      $this->pdo->query("INSERT INTO `user` (`username`, `mail`, `password`) VALUES ('Herbert', 'herbert@mail.de', 'derey67343')");
    }
    
  }



  //delete data from database

  function deleteUser(){


    $table = "user";
    if(!empty($this->pdo)){
      $this->pdo->query("DELETE FROM `user` WHERE `username` = 'Herbert'");
    }

  }


  //update Database
  function updateUsers(){

    $table = "user";
    if(!empty($this->pdo)){
      $this->pdo->query("UPDATE `user` SET `password` = 'NeuesPassword' WHERE `userid` = 1");
    }

  }


  // get one speziel user
  function getUser($userid) {
    $table = "user";
    if (!empty($this->pdo)) {
        $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE userid = :userid");
        $stmt->execute(['userid' => $userid]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, UserModel::class);
        return $stmt->fetch(PDO::FETCH_CLASS); 
    }
    return null; 
}


  
}
?>