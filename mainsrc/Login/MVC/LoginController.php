<?php

namespace App\Login\MVC;

use App\App\AbstractMVC\AbstractController;

class LoginController extends AbstractController {
    
    private $loginAuth;

    public function __construct(LoginAuth $loginAuth)
    {
        $this->loginAuth = $loginAuth;
    }



    public function loginpage(){

        $error = null;
        if (!empty($_POST))
        {
            $mail = $_POST["mail"];
            $password = $_POST["password"];
            $login = $this->loginAuth->checklogin($mail, $password);
            if ($login){
                header("Location: /Dashboard");
            } 
            else 
            {
                $error = "Der Login ist fehlgeschlagen";
            }
        }

        if ($_SESSION["login"])
        {
            header("Location: /Dashboard");
        }
        else 
        {
            $this->pageload("Login", "loginpage", 
            [
                'error' => $error
            ]);
        }
    }

}