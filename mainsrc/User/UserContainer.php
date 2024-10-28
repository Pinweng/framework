<?php 

namespace App\User;


use App\User\UserDatabase; // Import UserDatabase (assuming it's in App\User namespace)
use App\Connections\ConMySql; // Correct class import for ConMySql

use PDO;

class UserContainer {

  // Function to get a PDO connection
  public function setPDO(){
      $connection = new ConMySql();
      return $connection->conToMySql1(); // Ensure `conToMySql1` method exists in ConMySql
  }

  // Function to create a UserDatabase instance
  public function setUserDatabase(){
    return new UserDatabase($this->setPDO()); // Ensure UserDatabase accepts PDO in its constructor
  }

}

?>
