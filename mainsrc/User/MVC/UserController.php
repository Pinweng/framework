<?php 

namespace App\User\MVC;

use App\User\UserDatabase;

class UserController{
  private $userDatabase;

  public function __construct(UserDatabase $userDatabase){
    $this->userDatabase = $userDatabase;
  }

  public function userprofile($userid){
    $user = $this->userDatabase->getUser($userid);

    if(!empty($user)) : ?>

      <h3><?php echo $user->username; ?></h3>
      <p><?php echo "<br>" . $user["mail"]; ?></p>
      <p><?php echo "<br>" . $user->bio; ?></p>
      
    <?php endif; 
  }
  
}

?>