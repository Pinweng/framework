<?php 


// contection to database
try{
  $pdo = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'testus', '12345');
}

catch (Exception $e){
  echo "Etwas ist schiefgelauf";
}

//retrieving database
if(!empty($pdo)){
  $user = $pdo->query("SELECT * FROM `user`");

}

//saving data in database
if (!empty($pdo)){
  $newUser = $pdo->query("INSERT INTO `user` (`username`, `mail`, `password`) VALUES ('Herbert', 'herbert@mail.de', 'derey67343')");
}

//delet data from database
if(!empty($pdo)){
  $deletuser = $pdo->query("DELETE FROM `user` WHERE `username` = 'Herbert'");
}

//update Database
if(!empty($pdo)){
  $updateUser = $pdo->query("UPDATE `user` SET `password` = 'NeuesPassword' WHERE `userid` = 1");
}

?>