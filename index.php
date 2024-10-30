<?php 

require_once "./init.php";

$userController = $Container->build('userController');
$userController->allUsers();

$userDB = $Container->build('userDatabase');
$users = $userDB->getUsers();

?>


