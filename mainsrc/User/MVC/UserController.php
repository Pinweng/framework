<?php 

namespace App\User\MVC;

use App\User\UserDatabase;

class UserController{
  private $userDatabase;

  public function __construct(UserDatabase $userDatabase){
    $this->userDatabase = $userDatabase;
  }

  public function pageload($variblen){
    extract($variblen);
    require_once "Views/user.php";
  }

  public function userprofile($userid){
    $user = $this->userDatabase->getUser($userid);

    $this->pageload([
      "user" =>$user
    ]);
  }
  
}

?>