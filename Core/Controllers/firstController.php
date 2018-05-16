<?php
 namespace Controllers;
 use Models\usersModel;
 use Core\BootStrap;

  abstract class firstController{
    private $app = [];
    function __construct($app){
      $this->app= $app;
    }
    abstract public function getView();
  }
