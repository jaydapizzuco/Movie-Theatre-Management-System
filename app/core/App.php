<?php
namespace app\core;

class App{
    private $routes = [];

    public function addRoute($url,$handler){
        $url = preg_replace('/{([^\/]+)}/', '(?<$1>[^\/]+)', $url);
        $this->routes[$url] = $handler;
    }

    public function resolve($url){
        $matches = [];
        //one by one compare the url to resolve the route
        foreach ($this->routes as $routePattern => $controllerMethod) {
            if(preg_match("#^$routePattern$#", $url, $matches)){//match the route

                /*print_r($matches);
                echo "\n";*/

                // Filter named parameters
                $namedParams = array_filter($matches,
                    function($key) {
                        return !is_numeric($key);
                    }
                    , ARRAY_FILTER_USE_KEY);

                /*print_r($namedParams);
                echo "\n";*/

                return [$controllerMethod, $namedParams];
            }
        }
        return false;
    }

    function __construct(){
    	//call the appropriate controller class and method to handle the HTTP Request

        //Routing version 1.0
        //TODO: add PARAMETERS - later
        $url = $_GET['url'];

        //defined a few routes "url"=>"controller,method"
        //$this->addRoute('' , 'Main,index');
        $this->addRoute('User/login' , 'User,login');
        $this->addRoute('User/register' , 'User,register');
        $this->addRoute('User/logout' , 'User,logout');
        $this->addRoute('User/adminProfile' , 'User,adminProfile');
        $this->addRoute('User/profile' , 'User,profile');
        $this->addRoute('User/update' , 'User,modifyInfo');

        $this->addRoute('Movie/create' , 'Movie,create');
        $this->addRoute('Movie/modify' , 'Movie,update');
        $this->addRoute('Movie/delete' , 'Movie,delete');
        $this->addRoute('Movie/index' , 'Movie,index');
        $this->addRoute('Movie/individual' , 'Movie,individual');


        [$controllerMethod, $namedParams] = $this->resolve($url);

        if(!$controllerMethod){
            return;
        }

        [$controller,$method]=explode(',', $controllerMethod);

        $controller = '\app\controllers\\' . $controller;
        $controllerInstance = new $controller();

        //create an object that can get information about the controller
        $reflection = new \ReflectionClass($controllerInstance);
        //get the attributes from the controller
        $classAttributes = $reflection->getAttributes();
        $methodAttributes = $reflection->getMethod($method)->getAttributes();

        $attributes = array_merge($classAttributes,$methodAttributes);

        foreach ($attributes as $attribute) {
            //instantiate the filter
            $filter = $attribute->newInstance();
            //run the filter and test if redirected
            if($filter->redirected()){
                return;
            }
        }

        call_user_func_array([$controllerInstance, $method], $namedParams);

    }
}