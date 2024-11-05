
<?php require_once __DIR__ . "/../../../App/Design/header.php";?>

<?php 

if(!empty($user)) : ?>

  <h3><?php echo $user->firstname; ?></h3>
  <h3><?php echo $user->lastname; ?></h3>
  <p><?php echo "<br>" . $user->mail; ?></p>
  <p><?php echo "<br>" . $user->bio; ?></p>
  
<?php endif; 

?>



<?php require_once __DIR__ . "/../../../App/Design/footer.php"; ?>