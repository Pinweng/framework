<?php 
require_once "autoloader.php";
use App\App\Container;

$Container = new Container();

$userDB = $Container->build('userDatabse');

$user = $userDB->getUser($_GET['userid']);


if(!empty($user)){
  echo $user["username"];
  echo "<br>" . $user["mail"];
  echo "<br>" . $user["bio"];
}

?>