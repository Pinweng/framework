<?php 

namespace App\Register\MVC;

use App\App\AbstractMVC\AbstractController;
use App\User\UserDatabase;

class RegisterController extends AbstractController
{
  private $userDatabase;

  public function __construct(UserDatabase $userDatabase)
  {
    $this->userDatabase = $userDatabase;
  }

public function register()
{
  $this->pageload("Register", "register",[]);
}


}

?>