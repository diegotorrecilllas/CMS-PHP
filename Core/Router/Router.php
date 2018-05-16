<?php
namespace Router;
  class Router
  {
      protected $routes =[
        'GET'=>[],
        'POST'=>[]
      ];

      public static function load($file)
      {
        $router = new static;
        require $file;
        return $router;
      }

      public function get($uri, $controller)
      {
        $this->routes['GET'][$uri]=$controller;
      }


      public function define($routes){
        $this->routes =$routes;
      }

      public function direct($uri, $requestType)
      {
        if(array_key_exists($uri, $this->routes[$requestType])){
          //echo $this->router[$uri];
          return $this->routes[$requestType][$uri];
        }
         return "noLocalizadoController";
        //throw new Exception('La ruta no esta definida');
      }

  }
