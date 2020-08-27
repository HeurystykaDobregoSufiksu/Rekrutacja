<?php
class Router
{
    public static function redirect($uri){
        $routes= require('routes.php');
        if(array_key_exists($uri,$routes)){
            return $routes[$uri];
        }else{
            return $routes[''];
        }
    }
}