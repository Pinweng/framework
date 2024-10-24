<?php 


// contection to database
try{
  $pdo = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'testus', '12345');
}

catch (Exception $e){
  echo "Etwas ist schiefgelauf";
}

//retrieving database

function infoUser(){

  global $pdo;

  if(!empty($pdo)){
    $user = $pdo->query("SELECT * FROM `user`");
    return $user;
  }

}

$user = infoUser();


//saving data in database

function neweUser(){

  global $pdo;

  if (!empty($pdo)){
    $pdo->query("INSERT INTO `user` (`username`, `mail`, `password`) VALUES ('Herbert', 'herbert@mail.de', 'derey67343')");
  }
  
}
neweUser();


//delete data from database

function deleteUser(){

  global $pdo;

  if(!empty($pdo)){
    $pdo->query("DELETE FROM `user` WHERE `username` = 'Herbert'");
  }

}
deleteUser();

//update Database
function updateUsers(){

  global $pdo;

  if(!empty($pdo)){
    $pdo->query("UPDATE `user` SET `password` = 'NeuesPassword' WHERE `userid` = 1");
  }

}
updateUsers();



function getUser($userid){
  global $pdo;
  if(!empty($pdo)){
    $user = $pdo->query("SELECT * FROM `user` WHERE `userid` = '$userid'");
    return $user;
  }
}


?>