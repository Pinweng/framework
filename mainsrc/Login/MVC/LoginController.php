<?php

namespace App\Login\MVC;

use App\App\AbstractMVC\AbstractController;

class LoginController extends AbstractController {
    
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
            // Check if 'mail' and 'password' are set in $_POST
            $mail = isset($_POST["mail"]) ? $_POST["mail"] : null;
            $password = isset($_POST["password"]) ? $_POST["password"] : null;
    
            if ($mail && $password) 
            {
                $login = $this->loginAuth->checklogin($mail, $password);
                if ($login) 
                {
                    header("Location: /UserDashboard");
                    exit(); // Ensure no further code runs after redirection
                } 
                else 
                {
                    $error = "Der Login ist fehlgeschlagen";
                }
            } 
            else 
            {
                $error = "Bitte geben Sie sowohl die E-Mail als auch das Passwort ein.";
            }
        }
    
        // Check if 'login' is set in $_SESSION before accessing it
        if (isset($_SESSION["login"]) && $_SESSION["login"]) 
        {
            header("Location: /UserDashboard");
            exit();
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