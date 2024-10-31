<?php 

if(!empty($user)) : ?>

  <h3><?php echo $user->username; ?></h3>
  <p><?php echo "<br>" . $user->mail; ?></p>
  <p><?php echo "<br>" . $user->bio; ?></p>
  
<?php endif; 

?>