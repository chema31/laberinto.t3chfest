<?php
/**
 * Plantilla en la que se muestran los tiempos registrados en base de datos
 */
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Laberinto | T3chfest</title>
        <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="static/vendors/materialize/css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style type="text/css">
      body{
          background: url("static/img/GAME_T3CHFEST.jpg") no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }
      small {
          font-size: 30px;
      }
      h1{
          margin-top: 120px;
      }
      li{
          font-size: 28px;
      }

      </style>
    </head>
    <body>
        <div class="container">
            <h1>Laberinto 3D <small class="blue-text">(ventealiquid@accenture.com)</small></h1>
            <h2>Últimos tiempos <small>(segundos)</small></h2>
            <div class="row">
                <?php
                $cols = 12 / count($dispositivos);
                if ($dispositivos):
                    foreach ($dispositivos as $dispositivo => $tiempos): ?>
                        <div class="col s<?php echo $cols ?>">
                            <h3><?php echo $dispositivo ?></h3>
                            <?php if ($tiempos):
                                $i = 0; ?>
                                <ul>
                                <?php foreach ($tiempos as $tiempo):
                                    if (0 == $i):?>
                                    <li class="red-text">
                                <?php else: ?>
                                    <li>
                                    <?php endif; $i++;?>
                                        <?php echo number_format(($tiempo['recorrido'] / 1000), 2, ',', '.') ?></li>
                                <?php
                            endforeach; ?>
                                </ul>
                            <?php else: ?>
                                <p>:_( Nadie ha jugado aún con nuestro laberinto.</p>
                                <p>¿A qué estás esperando para probar?</p>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>:_( Nadie ha jugado aún con nuestro laberinto.</p>
                    <p>¡Coge uno ya!</p>
                <?php endif; ?>
            </div>
        </div>

        <script type="text/javascript" src="static/js/mostrar_tiempos.js"></script>
    </body>
</html>
