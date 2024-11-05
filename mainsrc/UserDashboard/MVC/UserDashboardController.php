<?php 

namespace App\UserDashboard\MVC;

use App\App\AbstractMVC\AbstractController;

class UserDashboardController extends AbstractController
{
  public function userDashboardMain()
  {
    $this->pageload("UserDashboard", "userDashboardMain",
    [
      
    ]);
  }
}

?>