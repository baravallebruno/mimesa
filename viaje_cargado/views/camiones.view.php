
<?php require 'header.php'; ?>

<div class="tot-wrapper"> 


            <section id="map-wrapper" class="container-fluid center-block">
                <img src="img/map.png" alt="">
            </section>

         <section id="camiones" class="container-fluid">
                <div class="container">
                    <h1>Camiones disponibles <span class="blanco">AHORA</span></h1>
                   
                        <div class="lista-camiones"><!--Lista camiones-->
                   <?php foreach ($camiones as $camion): ?>
                            <div class="row text-center fila"><!--Fila camion-->
                                <div class="col-xs-3 text-left">
                                    <p class="result-bl"><span class="res-bl">UBICACIÓN: <br>
                                    </span><?php echo $camion['ciudad'] ?> (<?php echo $camion['provincia'] ?>)
                                    </p>
                                </div>
                                <div class="col-xs-4">
                                    <p class="result-bl"><span class="res-bl">TIPO DE CAMIÓN: <br>
                                    </span><?php echo $camion['tipo_camion'] ?>
                                    </p>
                                </div>
                                <div class="col-xs-3">
                                    <p class="result-bl"><span class="res-bl">FECHA: <br>
                                    </span><?php echo fecha($camion['fecha_publi']); ?>
                                    </p>
                                </div>
                                <div class="col-xs-2">
                                    <a class="bt-chico bt-blanco pull-right" href="camiones_single.php?id=<?php echo $camion['id'] ?>">Detalles<i class="fa fa-search"></i></a>
                                </div>
                            </div><!-- Final Fila camion-->
                    <?php endforeach; ?>

                    </div><!--Fin lista camiones-->
                    <div id="pag-camiones" class="base-public row">
                        <?php require 'paginacion_camiones.php'; ?>
                    </div>   
                </div> 
                
            </section><!--Fin camiones-->
            
        </section> <!-- Fin section main -->

<?php require 'footer.php'; ?>
