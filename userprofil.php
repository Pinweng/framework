<?php 

require_once "pdo.php";

$userid = getUser($_GET["userid"]);
foreach($userid AS $userinformation){
  echo $userinformation["username"];
  echo "<br>" . $userinformation["mail"];
  echo "<br>" . $userinformation["bio"];
}

?>