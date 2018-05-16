<?php
// $router->define([
//   'home'=>'indexController',
//   'about'=>'aboutController'
// ]);
$router->get('home','indexController');
$router->get('about','aboutController');
