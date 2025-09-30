<?php 
    session_start();
    
    $page = substr($_SERVER['REQUEST_URI'], 1);  
    $routes = explode('/', $page);
        
    $resource = empty($routes[0]) ? 'main-page' : $routes[0];//resources são os controllers

    $action = $routes[1] ?? 'list';//são as ações - CRUD

    $controller = "controllers/$resource.controller.php";

    if(file_exists($controller)){
        require($controller);
    } else {
        require("controllers/404.controller.php");
    }
?>