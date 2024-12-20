<?php 

namespace App\App;

use App\Connections\ConMySql;
use App\Error\MVC\ErrorController;
use App\Home\IndexDatabase;
use App\Home\MVC\IndexController;
use App\Login\MVC\LoginAuth;
use App\Login\MVC\LoginController;
use App\Register\MVC\RegisterController;
use App\User\MVC\UserController;
use App\User\UserDatabase;
use App\UserDashboard\MVC\UserDashboardController;

class Container{

  private $classInstances = [];
  private $builds = [];

  public function __construct(){
    $this->builds = [

      'userDashboardController' => function()
      {
        return new UserDashboardController();
      },

      'loginController' => function()
      {
        return new LoginController($this->build("loginAuth"));
      },

      'loginAuth' => function()
      {
        return new LoginAuth($this->build("userDatabase"));
      },

      'registerController' => function()
      {
        return new RegisterController($this->build("userDatabase"));
      },

      'indexController' => function()
      {
        return new IndexController($this->build("indexDatabase"));
      },

      'indexDatabase' => function()
      {
        return new IndexDatabase($this->build("pdo"));
      },

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

