<?php




use Ifba\Core\Router;

Router::add('/','HomeController','index');
Router::add('/login','LoginController','login');
Router::add('/eletricista','HomeController','eletricista');