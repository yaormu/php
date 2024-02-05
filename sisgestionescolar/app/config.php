<?php

define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('PASSWORD', 'Nataly89');
define('BD', 'sisgestionescolar');

define('APP_NAME', 'SISTEMA DE GESTIÓN ESCOLAR');
define('APP_URL', 'http://localhost/sisgestionescolar');
define('KEY_API_MAPS', '');

$servidor = "mysql:host=" . SERVIDOR . ";dbname=" . BD;


try {
    $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    //echo "conexión exitosa a la base de datos";
} catch (PDOException $e) {
    print_r($e);
    echo "error no se puede conectar a la base de datos";
}

date_default_timezone_set("America/Bogota");
$fechaHora = date('Y-m-d H:i:s');

$fecha_actual = date('Y-m-d');
$dia_actual = date('d');
$mes_actual = date('m');
$ano_actual = date('Y');
