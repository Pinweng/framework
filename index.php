<?php 

require_once "./autoloader.php";
use App\App\Container;

$Container = new Container();

$userDB = $Container->build('userDatabase');
$users = $userDB->getUsers();

var_dump($users); 
?>

<div class="user-container">
  <?php foreach ($users as $user) : ?>
    <a href="./userprofil.php?userid=<?php echo $user["userid"] ?>"><h3><?php echo $user["username"] ?></h3></a>
  <?php endforeach; ?>
</div>
