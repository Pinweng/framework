<?php 
require_once "./init.php";

$userController = $Container->build("userController");

$userController->userprofile($_GET["userid"]);

?>