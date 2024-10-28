<?php 


// contection to database
try{
  $pdo = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'testus', '12345');
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}

catch (Exception $e){
  echo "Etwas ist schiefgelauf";
}



?>