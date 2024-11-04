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
            $mail = $_POST["mail"];
            $password = $_POST["password"];
            $login = $this->loginAuth->checklogin($mail, $password);

                if ($login)
                {
                    //TODO Routing to User
                    header("Location: /User"); 
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