
<?php include "pdo.php"?>

<div class="user-container">
  <?php foreach($user AS $singleUser) : ?>
    <h3><?php echo $singleUser["username"] ?></h3>
  <?php endforeach ?>
</div>

