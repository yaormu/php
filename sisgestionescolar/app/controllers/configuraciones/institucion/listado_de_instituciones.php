<?php
/**
 * Created by PhpStorm.
 * User: HILARIWEB
 * Date: 8/1/2024
 * Time: 09:23
 */
$sql_instituciones = "SELECT * FROM configuracion_instituciones where estado = '1' ";
$query_instituciones = $pdo->prepare($sql_instituciones);
$query_instituciones->execute();
$instituciones = $query_instituciones->fetchAll(PDO::FETCH_ASSOC);