<?php
/**
 * Servicio para implementar el CRUD de tiempos de base de datos
 */

/**
 * Obtiene los tiempos de base de datos
 * @param  object $connextion Conexión a Mysql
 * @param  string $order
 * @param  string $limit
 * @return array
 */
function getTimes($connextion, $order = "", $limit = "")
{
    $sql = "SELECT * FROM tiempo";
    if ("" != $order) {
        $sql .= " ORDER BY " . $order;
    }
    if ("" != $limit) {
        $sql .= " LIMIT " . $limit;
    }

    //Control de error de conexión
    if (!$resultado = $connextion->query($sql)) {
        echo "[ERROR DataBase] CONNECTION";
        die($connextion->connect_errno);
    }

    $tiempos = array();

    while ($tiempo = $resultado->fetch_assoc()){
        $tiempos[] = $tiempo;
    }

    $resultado->free();
    $connextion->close();

    return $tiempos;
}

/**
 * Añade un tiempo a la base de datos
 * @param  object $connextion Conexión a Mysql
 * @param  string $laberinto
 * @param  string $time
 * @return array
 */
function setTime($connextion, $laberinto, $time)
{
    $sql = "INSERT INTO tiempo(laberinto, recorrido) VALUES('$laberinto', '$time')";

    //Control de error de conexión
    try{
        $resultado = $connextion->query($sql);

    } catch (Exception $e) {
        echo '-10';
        die($e->message);
    }
    if (false === $resultado) {
        echo '-11';
    }

    $connextion->close();

    return $resultado;
}
