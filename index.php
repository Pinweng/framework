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

#Users
elseif($request == "/User")
{
    $router->add("userController", "allUsers");
}

elseif ($request == "/User=user") 
{
    $router->add("userController", "userprofile");
}

#Login & Register
elseif($request == "/Register")
{
    $router->add("registerController", "register");
}
elseif($request == "/Login")
{
    $router->add("loginController", "loginpage");
}

#UserDashboard
elseif($request == "/UserDashboard")
{
    $router->add("userDashboardController", "userDashboardMain");
}

#404
else
{
    $router->add("errorController", "errorPage");
}



?>


