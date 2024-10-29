<?php 

namespace App\User;
use PDO;

class UserDatabase {


  // hands over pdo 
  private $pdo;
  public function __construct(PDO $pdo){
    $this->pdo = $pdo;
  }
  
    
  


//retrieving database

function getUsers(){
  
  if (!empty($this->pdo)){
      $user = $this->pdo->query("SELECT * FROM `user`");
  }
  return $user;
}




//saving data in database

function neweUser(){

  if (!empty($this->pdo)){
    $this->pdo->query("INSERT INTO `user` (`username`, `mail`, `password`) VALUES ('Herbert', 'herbert@mail.de', 'derey67343')");
  }
  
}



//delete data from database

function deleteUser(){



  if(!empty($this->pdo)){
    $this->pdo->query("DELETE FROM `user` WHERE `username` = 'Herbert'");
  }

}


//update Database
function updateUsers(){


  if(!empty($this->pdo)){
    $this->pdo->query("UPDATE `user` SET `password` = 'NeuesPassword' WHERE `userid` = 1");
  }

}


// get one speziel user
function getUser($userid){

  if(!empty($this->pdo)){
    $user = $this->pdo->query("SELECT * FROM `user` WHERE `userid` = '$userid'");
    return $user->fetch();
  }
}



}

?>