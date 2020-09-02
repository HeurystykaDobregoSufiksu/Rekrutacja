<?php

class Router
{

    public array $routes = [
        'GET' => [],
        'POST' => [],
        'PUT' => [],
        'DELETE' => []

    ];
    public static function load($file){
        $router=new static;
        require $file;
        return $router;
    }
    public function redirect($uri, $method){
        if(array_key_exists($uri,$this->routes[$method])) {
            return $this->getAction(explode('@', $this->routes[$method][$uri]));
        }else{
            throw new Exception("Undefined URI");
        }


    }
    protected function getAction($reaquest){
        $controller=explode('/',$reaquest[0])[2];
        $action=$reaquest[1];

        switch ($controller){
            case "UserController":
                $newController=new UserController();
                break;
            case "PanelController":
                $newController=new PanelController();
                break;
            case "CategoryController":
                $newController=new CategoryController();
                break;
            case "ArticleController":
                $newController=new ArticleController();
                break;
            default:
                return '';
        }
        if(!method_exists($newController,$action)){
            throw new Exception("Specified method doesnt exist in controller");
        }

        return $newController->$action();

    }

    public function get($uri, $controller){
        $this->routes['GET'][$uri]=$controller;
    }
    public function post($uri, $controller){
        $this->routes['POST'][$uri]=$controller;
    }
    public function put($uri, $controller){
        $this->routes['PUT'][$uri]=$controller;
    }
    public function delete($uri, $controller){
        $this->routes['DELETE'][$uri]=$controller;
    }
}