<?php 

namespace App\User\MVC;

class UserModel implements \ArrayAccess{
  public $userid;
  public $username;
  public $mail;
  public $password;
  public $bio;

  public function offsetExists( $offset): bool {
    return isset($this->$offset);
  }

  public function offsetGet(mixed $offset): mixed {
    return $this->$offset ?? null;
  }

  public function offsetSet(mixed $offset, mixed $value): void {
    $this->$offset = $value;
  }

  public function offsetUnset(mixed $offset): void {
    unset($this->offset);
  }

  public function getStrlen($value){
    return strlen($value);
  }
}

?>