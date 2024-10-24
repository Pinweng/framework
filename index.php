<?php 

try{
  $pdo = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'testus', '12345');
}

catch (Exception $e){
  echo "Etwas ist schiefgelauf";
}


?>