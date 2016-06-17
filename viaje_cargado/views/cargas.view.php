<?php require 'header.php'; ?>
	

    <div class="tot-wrapper"> 
            <!-- Buscador -->
            <section id="buscador" class="container-fluid">
                
                <!-- Formulario buscador -->
                <div id="busc-main" class="container-fluid">
                    <div class="container">
                        <h2>Buscador de <span class="rojo">CARGAS</span></h2>

                        <form id="formulario" role="form" action="" method="post">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input class="form-basic" type="text" placeholder="Ciudad de origen">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-basic" type="text" placeholder="Ciudad de destino">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input class="form-basic" type="text" placeholder="Tipo de carga">
                                </div>
                                <div class="col-md-6">
                                    
                                    <div class="input-group">
                                         <select name="" id="tipo-camion" class="form-basic col-xs-8">
                                            <option value="">Flete chico</option>
                                            <option value="">Chasis y acoplado</option>
                                            <option value="">Semirremolque con lona</option>
                                            <option value="">Cisterna</option>
                                            <option value="">Batea</option>
                                         </select>
                                            <span class="input-group-btn">
                                                <button class="btn bt-rojo" type="button">Buscar <i class="fa fa-search"></i></button>
                                            </span>
                                    </div>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>  

            </section> <!-- Fin section buscador -->

            <!-- Publicaciones destacadas -->
            <section id="publi-dest" class="container">
                <h1>Cargas <span class="rojo">PUBLICADAS</span></h1>
                    

                    <div class="row" id="item-publi"><!-- Contenedor publicaciones destacadas -->
                    <?php foreach ($cargas as $carga): ?>
                        <div class="carga-wrapper"> <!-- Fila carga -->
                            <div id="det-fecha" class="col-md-2">
                                <p class="subt">Fecha</p>
                                <h4 class="tit-result"><?php echo fecha($carga['fecha_publi']); ?></h4>
                                <p>Calificación</p>
                                <div class="calif"></div>
                            </div>
                            <div id="det-det" class="col-md-6">
                                <p class="subt">Origen y destino</p>
                                <h4 class="tit-result"><?php echo $carga['ciudad_origen'] ?> (<?php echo $carga['prov_origen'] ?>) >
                                <?php echo $carga['ciudad_destino'] ?> (<?php echo $carga['prov_destino'] ?>)</h4>
                                <p class="subt">Detalle de carga</p>
                                <h4 class="tit-result"><?php echo $carga['det_carga'] ?></h4>
                            </div>
                            <div id="det-tarifa" class="col-md-2">
                                <p class="subt">Tarifa ofrecida</p>
                                <h1 class="tit-result">$<?php echo $carga['tarifa'] ?></h1>
                            </div>
                            <div id="contacto" class="col-md-2">
                                <a href="cargas_single.php?id=<?php echo $carga['id'] ?>" class="bt bt-rojo pull-right">Contactar</a>
                            </div>
                        </div><!-- Fin fila carga -->
                    <?php endforeach; ?>
                     
    
                    </div><!-- Fin contenedor publicaciones destacadas -->
                    <div class="separador"></div>
                        <div class="base-public row">
                           <?php require 'paginacion_cargas.php'; ?>
                        </div>
            </section><!-- FIN Publicaciones destacadas -->

        </section> <!-- Fin section main -->

<?php require 'footer.php'; ?>
