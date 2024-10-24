
<?php require_once "pdo.php"?>

<div class="user-container">
  <?php foreach($user AS $user) : ?>
    <a href="./userprofil.php?userid=<?php echo $user["userid"]?>"><h3><?php echo $user["username"] ?></h3></a>
    
  <?php endforeach ?>
</div>

