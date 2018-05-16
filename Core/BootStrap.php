<?php
  namespace Core;
  use Helpers\Connection;
  use Controllers\indexController;
  use Controllers\aboutController;
  use Controllers\noLocalizadoController;
  use Router\Router;
  use Router\Request;

  class BootStrap{
    public static $app=[];
    function __construct(){
      $this->app['config'] = require'Config/config.php';
      $this->app['database'] = Connection::make(
        $this->app['config']['database']);
    }

    function init(){
      $Controller= Router::load('routes.php')
      ->direct(Request::uri(), Request::getMethod());
      if($Controller === "indexController"){
        $contr = new indexController($this->app);
        $contr->getView();
      }
      if($Controller === "aboutController"){
        $contr = new aboutController($this->app);
        $contr->getView();
      }
      if($Controller === "noLocalizadoController"){
        $contr = new noLocalizadoController($this->app);
        $contr->getView();
      }



    }

  }
