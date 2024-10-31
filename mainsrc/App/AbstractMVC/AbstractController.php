<?php 

namespace App\App\AbstractMVC;

abstract class AbstractController{

public function pageload($dir, $view, $variblen){
    extract($variblen);
    require_once __DIR__ . "/../../$dir/MVC/Views/$view.php";
    }

}


?>