<?php 


require_once "User/UserContainer.php";
$userContainer = new \User\UserContainer();

$userDB = $userContainer->setUserDatabase();

$user = $userDB->getUser($_GET['userid']);


if(!empty($user)){
  echo $user["username"];
  echo "<br>" . $user["mail"];
  echo "<br>" . $user["bio"];
}

?>