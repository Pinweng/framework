<?php

namespace App\UserDashboard\MVC;

use App\App\AbstractMVC\AbstractController;

class UserDashboardController extends AbstractController 
{

    public function userDashboardMain()
    {

        if ($_SESSION["login"])
        {
            $this->pageload("UserDashboard", "userDashboardMain", 
            [

            ]);
        }
        else 
        {
            header("Location: /Login");
        }

    }
}