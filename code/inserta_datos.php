<?php
/**
 * Inserta un nuevo dato en base de datos
 */

include_once('config/config.php');

//Obtención de datos de la petición
$parsedBody = $_GET;

//Validar TOKEN
if (isset($parsedBody['token'])) {
    $token = $parsedBody['token'];

    if ( $secretToken == $token) {
        //Configuración de base de datos
        include_once('config/database.php');

        //Servicios
        include_once('services/tiempo.php');

        if ( isset($parsedBody['device']) && isset($parsedBody['tiempo']) ) {
            $laberinto = preg_replace('/[^-a-zA-Z0-9_]/', '', $parsedBody['device']);
            $tiempo = preg_replace('/[^-a-zA-Z0-9_]/', '', $parsedBody['tiempo']);

            if ($laberinto && $tiempo) {
                if (true == setTime($mysqli, $laberinto, $tiempo)) {
                    echo '1';
                } else {    //ERROR
                    echo '0';
                }
            }
        } else {
            echo '-1';
        }

    } else {    //Token no válido
        echo '-2';
    }
} else {
    echo '-3';
}
