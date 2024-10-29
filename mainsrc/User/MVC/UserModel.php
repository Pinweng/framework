<?php 

namespace App\User\MVC;

class UserModel{
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