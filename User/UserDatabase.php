<?php 

namespace User;

class UserDatabase {


//retrieving database

function infoUsers(){
  global $pdo;
  $table = "users";
  if (!empty($pdo)){
      $users = $pdo->prepare("SELECT * FROM `$table`");
      $users->execute();
  }
  return $users->fetchAll();
}




//saving data in database

function neweUser(){

  global $pdo;

  if (!empty($pdo)){
    $pdo->query("INSERT INTO `user` (`username`, `mail`, `password`) VALUES ('Herbert', 'herbert@mail.de', 'derey67343')");
  }
  
}



//delete data from database

function deleteUser(){

  global $pdo;

  if(!empty($pdo)){
    $pdo->query("DELETE FROM `user` WHERE `username` = 'Herbert'");
  }

}


//update Database
function updateUsers(){

  global $pdo;

  if(!empty($pdo)){
    $pdo->query("UPDATE `user` SET `password` = 'NeuesPassword' WHERE `userid` = 1");
  }

}


// get one speziel user
function getUser($userid){
  global $pdo;
  if(!empty($pdo)){
    $user = $pdo->query("SELECT * FROM `user` WHERE `userid` = '$userid'");
    return $user->fetch();
  }
}



}

?>