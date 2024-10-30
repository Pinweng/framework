<?php 

require_once "./init.php";

$router = $Container->build("router");

if(isset($_SERVER["PATH_INFO"])){
    $reqeuest = $_SERVER["PATH_INFO"];
}
else{
    $reqeuest = $_SERVER["REQUEST_URI"];
}

if ($reqeuest == "/framework/") {
    $router->add("userController", "allUsers");
}
elseif ($reqeuest == "/User/user") {
    $router->add("userController", "userprofile");
}
else{
    echo "Diese Seite gibt es nicht";
}


var_dump($reqeuest);


?>


