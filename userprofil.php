<?php 

require_once "pdo.php";
require_once "User/UserDatabase.php";
$userDB = new \User\UserDatabase();

$user = $userDB->getUser($_GET['userid']);


if(!empty($user)){
  echo $user["username"];
  echo "<br>" . $user["mail"];
  echo "<br>" . $user["bio"];
}

?>