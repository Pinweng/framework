<?php 

namespace App\User\MVC;
use App\App\AbstractMVC\AbstractModel;

class UserModel extends AbstractModel{
  public $userid;
  public $username;
  public $mail;
  public $password;
  public $bio;


  public function getStrlen($value){
    return strlen($value);
  }
}

?>