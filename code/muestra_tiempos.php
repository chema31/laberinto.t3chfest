<?php
/**
 * Muestra los tiempos en pantalla
 */

//Configuración de base de datos
include_once('config/database.php');

//Servicios
include_once('services/tiempo.php');

//Obtengo los tiempos de base de datos
$tiempos = getTimes($mysqli, 'recorrido DESC');

//Vista
include_once('view/tiempos.php');
