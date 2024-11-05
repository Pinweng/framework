<?php

namespace App\Login\MVC;

use App\App\AbstractMVC\AbstractController;

class LoginController extends AbstractController 
{
    private $loginAuth;

    public function __construct(LoginAuth $loginAuth)
    {
        $this->loginAuth = $loginAuth;
    }

    public function loginpage()
    {
        $error = null;

        if (!empty($_POST))
        {
            $mail = isset($_POST["mail"]) ? $_POST["mail"] : null;
            $password = isset($_POST["password"]) ? $_POST["password"] : null;

            if ($mail && $password) 
            {
                $login = $this->loginAuth->checklogin($mail, $password);

                if ($login)
                {
                    header("Location: /UserDashboard"); 
                } 
                else 
                {
                    $error = "Der Login ist fehlgeschlagen";
                }
            }

            $this->pageload("Login", "loginpage", [
                'error' => $error
            ]);
        }
    }

}