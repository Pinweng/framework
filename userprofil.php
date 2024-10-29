<?php 
require_once "./init.php";

$userDB = $Container->build('userDatabse');

$user = $userDB->getUser($_GET['userid']);


if(!empty($user)){
  echo $user["username"];
  echo "<br>" . $user["mail"];
  echo "<br>" . $user["bio"];
}

?>