<?php
/**
 * Inserta un nuevo dato en base de datos
 */

include_once('config/config.php');

//Validar TOKEN
if (isset($_POST['token'])) {
    $token = $_POST['token'];

    if ( $secretToken == $token) {
        //Configuración de base de datos
        include_once('config/database.php');

        //Servicios
        include_once('services/tiempo.php');

        if ( isset($_POST['device']) && isset($_POST['tiempo']) ) {
        $laberinto = preg_replace('/[^-a-zA-Z0-9_]/', '', $_POST['device']);
        $tiempo = preg_replace('/[^-a-zA-Z0-9_]/', '', $_POST['tiempo']);

        if ($laberinto && $tiempo) {
            if (true == setTime($mysqli, $laberinto, $tiempo)) {
                echo 'OK';
            } else {    //ERROR
                echo 'ERROR';
            }
        }
    } else {
        echo 'Ains... Si no envías los parámetros adecuados, ¿como quieres que los añada?';
    }

    } else {    //Token no válido
        echo 'Acceso no permitido. ¡He dicho que tiene que ser un token chulo!';
    }
} else {
    echo 'Acceso no permitido. ¡Prueba a enviarnos un token chulo!';
}
