<?php
/**
 * Created by PhpStorm.
 * User: HILARIWEB
 * Date: 4/1/2024
 * Time: 15:40
 */
$sql_roles = "SELECT * FROM roles where estado = '1' and id_rol = '$id_rol' ";
$query_roles = $pdo->prepare($sql_roles);
$query_roles->execute();
$datos_roles = $query_roles->fetchAll(PDO::FETCH_ASSOC);

foreach ($datos_roles as $datos_role){
    $nombre_rol = $datos_role['nombre_rol'];
}