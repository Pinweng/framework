
<?php 
require_once "pdo.php";
require_once "User/UserDatabase.php";

$userDB = new \User\UserDatabase();

$user = $userDB->infoUsers();
?>


<div class="user-container">
  <?php foreach($user AS $user) : ?>
    <a href="./userprofil.php?userid=<?php echo $user["userid"]?>"><h3><?php echo $user["username"] ?></h3></a>
    
  <?php endforeach ?>
</div>

