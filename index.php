<?php
/**
 * Recoge las peticiones de los laberintos y almacena las puntuaciones
 */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {	//Petición de nueva entrada de datos
	include_once('code/inserta_datos.php');

} else if ($_SERVER['REQUEST_METHOD'] === 'GET') {	//Petición para mostrar datos en pantalla
	include_once('code/muestra_tiempos.php');
}
