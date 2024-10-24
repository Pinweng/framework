
<?php require_once "pdo.php"?>

<div class="user-container">
  <?php foreach($user AS $singleUser) : ?>
    <a href="./userprofil.php?username=<?php echo $singleUser["username"]?>"><h3><?php echo $singleUser["username"] ?></h3></a>
    
  <?php endforeach ?>
</div>

