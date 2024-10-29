<?php 

namespace App\App;

use App\Connections\ConMYSql;
use App\User\MVC\UserController;
use App\User\UserDatabase;

class Container{

  private $classInstances = [];
  private $builds = [];

  public function __construct(){
    $this->builds = [
      'userController' => function(){
        return new UserController($this->build("userDatabase"));
      }, 
        
      
      'userDatabase' => function(){
        return new UserDatabase($this->build('pdo'));
      },
      'pdo' => function(){
        $connection = new ConMYSql();
        return $connection->conToMySql1();
      }
    ];
  }
  
    
  public function build($objekt) {
    if (isset($this->builds[$objekt])) {
        // check if a object allready exists
        if (!empty($this->classInstances[$objekt])) {
            return $this->classInstances[$objekt];
        }
        
        // create the object
        $this->classInstances[$objekt] = $this->builds[$objekt]();
        return $this->classInstances[$objekt];
    }
}

  

}

?>

