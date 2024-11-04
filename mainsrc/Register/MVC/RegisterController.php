<?php

namespace App\Register\MVC;
use App\App\AbstractMVC\AbstractController;
use App\User\UserDatabase;

class RegisterController extends AbstractController 
{

    private $userDatabase;

    public function __construct(UserDatabase $userDatabase)
    {
        $this->userDatabase = $userDatabase;
    }

    public function register()
    {

        $fail = null;
        if (!empty($_POST))
        {
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $submit = $_POST["submit"];

            if (empty($firstname AND $lastname AND $username AND $email AND $password))
            {
                $fail = "Bitte fülle alle Felder aus.";
            }
            else 
            {
                $user = $this->userDatabase->getUserByEmail($email);

                if (empty($user))
                {
                    $password_hash = password_hash($password, PASSWORD_DEFAULT);
                    $this->userDatabase->newUser($firstname, $lastname, $username,$email,$password_hash);
                }
                else 
                {
                    $fail = "Ein Account mit dieser E-Mail existiert bereits";
                }
            }
        }


        $this->pageload("Register", "register",[
            'fail' => $fail
        ]);
    }

}
