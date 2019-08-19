<?php
//rutas generales
define("SERVIDOR", "localhost");
define("NOMBREAPP", "Dexx-VETERI");
define("RUTAAPP","http://".SERVIDOR."/".NOMBREAPP);

// RUTA RECURSOS
define("RUTACSS",RUTAAPP.'/assets/css');
define("RUTAJS",RUTAAPP.'/assets/js');

//header y pie
define('HEADER', 'view/plantillas/header.php');
define('FOOTER', 'view/plantillas/footer.php');

// RUTAS PARA BASE DE DATOS
define("SERVIDORBD", "localhost");
define("PUERTO", "3306");
define("NOMBREBD", "dexx-veteri");
define("USUARIO", "root");
define("PASSWORD", "");



