<?php 

require_once "./init.php";

$userDB = $Container->build('userDatabase');
$users = $userDB->getUsers();

?>

<div class="user-container">
  <?php foreach ($users as $user) : ?>
    <a href="./userprofil.php?userid=<?php echo $user->userid; ?>"><h3><?php echo $user->username; ?></h3></a>
  <?php endforeach; ?>
</div>
