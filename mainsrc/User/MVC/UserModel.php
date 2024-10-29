<?php 

namespace App\User\MVC;

class UserModel implements \ArrayAccess{
  public $userid;
  public $username;
  public $mail;
  public $password;
  public $bio;

  public function offsetExists($offset){
    //TODO: Implement offset
    var_dump($offset);
  }

  public function offsetGet($offset){
    //TODO offsetGet
    var_dump("hall");
  }

  public function offsetSet($offset, $value){
    //TODO offsetSet
  }

  public function offsetUnset($offset){
    //TODO Unset
  }

  public function getStrlen($value){
    return strlen($value);
  }
}

?>