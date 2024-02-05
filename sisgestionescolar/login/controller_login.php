<?php

include('../app/config.php');

// Capturamos datos enviados por el formulario
$email = $_POST['email'];
$password = $_POST['password'];

// Creamos query obtener datos usuario, de acuerdo email
$sql = "SELECT * FROM usuarios WHERE email = '$email' AND estado = '1' ";

// $pdo var de conexión a BD en config.php
$query = $pdo->prepare($sql);
$query->execute();

// Obtener los datos del array pdo
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

// Imprimir resultado de la query en un array 
//print_r($usuarios);

// Bandera para verificación correo existente
$contador = 0;

// Buscar que la clave existe, aumenta contador
foreach ($usuarios as $usuario) {
    $password_tabla = $usuario['password'];
    $contador = $contador + 1;
}



// Utilizamos verify php para validar que la contraseña recibida es igual que la registrada en BD
if (($contador > 0) && ($password === $password_tabla)) {
    echo "los datos son correctos";
    header('Location:' . APP_URL . "/admin");
} else {
    echo "los datos son incorrectos";
    session_start();
    $_SESSION['mensaje'] = "Los datos introducidos son incorrectos, vuelva a intentarlo";
    header('Location:' . APP_URL . "/login");
}
