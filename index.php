
<?php 

session_start(); 

function flash(){
    if(isset($_SESSION['flash'])) {
        $message = $_SESSION['flash'];
        unset($_SESSION['flash']);
        return $message ; 
    }
}

define("URL", "http://localhost/module6/index.php");

$page = ""; 
if(isset($_GET["page"]) && !empty($_GET["page"])){
    $page = $_GET["page"];
}else{
    $page = "/"; 
}

$routes = [
    "/" => ["home", "FrontController"],
    "/user" => ["user_index" , "BackController"],
    
];

require_once "Model/BDD.php";
 var_dump(BDD::getInstance()); 
require_once "Controller/AbstractController.php"; 
require_once "Controller/FrontController.php"; 



if(array_key_exists($page , $routes)){
    $class = $routes[$page][1];
    $method = $routes[$page][0];
    $p = new $class();
    $id = isset($_GET["id"]) ? $_GET["id"] : null;
    call_user_func([$p, $method] , $id);
    //$p->{$method}();
}else {
    $p = new ErreurController();
    $p->erreur(404 , "la page demandée n'existe pas");
}