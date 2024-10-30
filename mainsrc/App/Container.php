<?php 

namespace App\App;

use App\Connections\ConMySql;
use App\Error\MVC\ErrorController;
use App\User\MVC\UserController;
use App\User\UserDatabase;

class Container{

  private $classInstances = [];
  private $builds = [];

  public function __construct(){
    $this->builds = [
      'errorController' => function(){
        return new ErrorController();
      }, 
      'router' => function(){
        return new Router($this->build("container"));
      },

      'container' => function(){
        return new Container();
      },
      
      'userController' => function(){
        return new UserController($this->build("userDatabase"));
      }, 
        
      
      'userDatabase' => function(){
        return new UserDatabase($this->build('pdo'));
      },
      'pdo' => function(){
        $connection = new ConMySql();
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

