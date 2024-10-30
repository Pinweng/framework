<?php 

require_once "./init.php";

$router = $Container->build("router");

if(isset($_SERVER["PATH_INFO"])){
    $request = $_SERVER["PATH_INFO"];
}
else{
    $request = $_SERVER["REQUEST_URI"];
}

if ($request == "/framework/") {
    $router->add("userController", "allUsers");
}
elseif ($request == "/User/user") {
    $router->add("userController", "userprofile");
}
else{
    echo "Diese Seite gibt es nicht";
}

var_dump($_SERVER);
echo "<br>";
var_dump($request);

?>


