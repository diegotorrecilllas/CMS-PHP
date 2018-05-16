<?php
 namespace Controllers;
 use Models\usersModel;
 use Core\BootStrap;

  class aboutController extends firstController{
    public function getView(){
        require'Views/about.view.php';
    }
}
