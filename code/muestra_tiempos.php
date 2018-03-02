<?php
/**
 * Muestra los tiempos en pantalla
 */

//Configuración de base de datos
include_once('config/database.php');

//Servicios
include_once('services/tiempo.php');

//Obtengo los tiempos de base de datos
$tiempos = getTimes($mysqli, 'id DESC');

//Filtro los dispositivos
$dispositivos = array();

foreach ($tiempos as $tiempo) {
    if (!array_key_exists($tiempo['laberinto'], $dispositivos)) {
        $dispositivos[$tiempo['laberinto']] = array();
    }
    $dispositivos[$tiempo['laberinto']][] = $tiempo;
}

//Vista
include_once('view/tiempos.php');
