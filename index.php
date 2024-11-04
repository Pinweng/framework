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

elseif ($request == "/User=user") 
{
    $router->add("userController", "userprofile");
}
elseif($request == "/Register")
{
    $router->add("registerController", "register");
}
elseif($request == "/Login")
{
    $router->add("loginController", "loginpage");
}
else
{
    $router->add("errorController", "errorPage");
}



?>


