
<?php 

require_once "./autoloader.php";
use App\User\UserContainer;

$userContainer = new UserContainer();

$userDB = $userContainer->setUserDatabase();

$user = $userDB->infoUsers();
?>


<div class="user-container">
  <?php foreach($user AS $user) : ?>
    <a href="./userprofil.php?userid=<?php echo $user["userid"]?>"><h3><?php echo $user["username"] ?></h3></a>
    
  <?php endforeach ?>
</div>

