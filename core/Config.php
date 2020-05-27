<?php

session_start();
ob_start();

define('URL', 'http://localhost/celke/');
define('URLADM', 'http://localhost/celke/adm/');

define('CONTROLER', 'Home');
define('METODO', 'index');

//Credencias de acesso ao banco de dados
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'celke');
