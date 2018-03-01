<?php
/**
 * Enrutador
 * 
 * Recoge las peticiones de los laberintos y almacena las puntuaciones
 */

if (isset($_GET['token']) ) {	//Petición de nueva entrada de datos
	include_once('code/inserta_datos.php');

} else {	//Petición para mostrar datos en pantalla
	include_once('code/muestra_tiempos.php');
}
