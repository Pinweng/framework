<?php 

namespace App\User\MVC;

use App\App\AbstractMVC\AbstractController;
use App\App\AbstractMVC\AbstractModel;
use App\User\UserDatabase;

class UserController extends AbstractController{
  private $userDatabase;

  public function __construct(UserDatabase $userDatabase){
    $this->userDatabase = $userDatabase;
  }

  public function allUsers(){
    $user = $this->userDatabase->getUsers();

    $this->pageload("User", "usersview", [
      'users' => $user
    ]);
  }

  public function userprofile(){
    $userid =  $_GET["userid"];
    $user = $this->userDatabase->getUser($userid);

    $this->pageload("User", "user",[
      "user" => $user
    ]);
  }
  
}

?>