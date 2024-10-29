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

    require_once "Views/user.php";

  }
  
}

?>