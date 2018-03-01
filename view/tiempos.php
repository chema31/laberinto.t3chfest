<?php
/**
 * Plantilla en la que se muestran los tiempos registrados en base de datos
 */
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Laberinto | T3chfest</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <h1>Laberinto 3D</h1>
        <span>(ventealiquid@accenture.com)</span>
        <h2>Últimos tiempos</h2>
        <?php
        if ($dispositivos):
            foreach ($dispositivos as $dispositivo => $tiempos): ?>
                <h3><?php echo $dispositivo ?></h3>
                <?php if ($tiempos): ?>
                    <ul>
                    <?php foreach ($tiempos as $tiempo): ?>
                        <li><?php echo $tiempo['recorrido'] ?></li>
                    <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <p>:_( Nadie ha jugado aún con nuestro laberinto.</p>
                    <p>¿A qué estás esperando para probar?</p>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php else: ?>
            <p>:_( Nadie ha jugado aún con nuestro laberinto.</p>
            <p>¡Coge uno ya!</p>
        <?php endif; ?>
    </body>
</html>
