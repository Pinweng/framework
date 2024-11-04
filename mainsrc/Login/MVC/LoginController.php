<?php 

namespace App\Login\MVC;

use App\App\AbstractMVC\AbstractController;

class LoginController extends AbstractController
{
  private $loginAuth;

  public function __construct(LoginAuth $loginAuth)
  {
    $this->loginAuth = $loginAuth;
  }


  public function loginpage()
  {
    $this->pageload("Login", "loginpage",[

    ]);
  }
}

?>