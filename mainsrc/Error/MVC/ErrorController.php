<?php 

namespace App\Error\MVC;

use App\App\AbstractMVC\AbstractController;

class ErrorController extends AbstractController
{
    public function errorPage()
    {
        $this->pageload("Error", "errorPage", []);
    }
}

?>