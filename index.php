<?php 

require_once "./init.php";

$router = $Container->build("router");

if(isset($_SERVER["PATH_INFO"])){
    $request = $_SERVER["PATH_INFO"];
}
else{
    $request = $_SERVER["REQUEST_URI"];
}

if ($request == "/framework/") 
{
    $router->add("indexController", "home");
}
elseif($request == "/User")
{
    $router->add("userController", "allUsers");
}

elseif ($request == "/Users=user") 
{
    $router->add("userController", "userprofile");
}
else
{
    $router->add("errorController", "errorPage");
}



?>


