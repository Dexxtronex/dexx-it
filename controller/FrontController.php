<?php

class FrontController {

    public function __construct() {     
    }

    public function rutear() {
        $controller = (isset($_REQUEST['c'])) ? $_REQUEST['c'] : 'Index';
        $action = (isset($_REQUEST['a'])) ? $_REQUEST['a'] : 'consultar';

        $controller = strtolower($controller); // strtolower Make a string lowercase
        $controller = ucwords($controller) . "Controller"; //ucwords — Uppercase the first character of each word in a string   
        require_once "controller/" . $controller . ".php"; // require de la clase del controlador
        $controller = new $controller; // creacion del objeto controlador
        $controller->$action(); //llamada a la funcion del controlador (action) que se va a ejecutar
    }
}
