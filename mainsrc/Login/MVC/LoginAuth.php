<?php 

namespace App\Login\MVC;

use App\User\UserDatabase;

class LoginAuth
{
  private $userDatabase;

  public function __construct(UserDatabase $userDatabase)
  {
    $this->userDatabase = $userDatabase;
  }

  public function checkLogin($mail, $password)
  {
    $user = $this->userDatabase->getUser("", $mail);

    if($user)
    {
      if(password_verify($password, $user->password))
      {
          return true;
      }
      else
      {
        return false;
      }
    }
    return false;
  }
}

?>