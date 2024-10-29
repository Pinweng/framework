<?php 
require_once "./init.php";

$userController = $Container->build("userController");

$userController->userprofil($_GET["userid"]);

?>