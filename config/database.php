<?php
/**
 * Configuración de base de datos
 */
$database = [
    'user' => 'laberinto',
    'password' => 't3chfest.laberinto',
    'host' => 'localhost',
    'database' => 'laberinto'
];

//Creo la conexión a base de datos
$mysqli = new mysqli($database['host'], $database['user'], $database['password'], $database['database']);

//Control de error de conexión
if ($mysqli->connect_error) {
    echo "[ERROR DataBase] CONNECTION";
    die($mysqli->connect_errno);
}
