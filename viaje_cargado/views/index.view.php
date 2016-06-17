

<?php require 'header.php'; ?>

        <!-- Seccion central contenido -->
  <div class="tot-wrapper">      
        <section id="main" class="container-fluid">
            <div id="top-main" class="container-fluid">
                <div class="container text-center">
                    <img id="logo-cent" src="<?php echo RUTA; ?>img/logo-blanco.png" alt="LOGO">
                    <h2>Encontrá lo que buscas. Llevá lo que querés.</h2>
                    <a href="<?php echo RUTA; ?>camiones.php" class="bt bt-blanco"><i class="fa fa-truck"></i>Busco camiones</a>
                    <a href="<?php echo RUTA; ?>cargas.php" class="bt bt-blanco"><i class="fa fa-cubes"></i>Busco cargas</a>
                </div>
            </div>
            <!-- Información de la empresa -->
            <section id="info-wrap">
                <div class="container text-center">
                    <h3>Cuales son tus beneficios publicando en</h3>
                    <h1>Viaje<span class="rojo">Cargado</span>.com</h1>
                    <h4>No vuelvas a viajar sin cargas!</h4>
                </div>
                <div class="container-fluid row">
                    <div id="beneficios" class="container text-center">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <img src="<?php echo RUTA; ?>img/circulo-fletes.svg" alt="ICONO">
                            <h4>Fletes ya!</h4>
                            <div class="separador"></div>
                            <p>Mayor velocidad en el envío de tus cargas.</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <img src="<?php echo RUTA; ?>img/circulo-precio.svg" alt="ICONO">
                            <h4>Mejor precio</h4>
                            <div class="separador"></div>
                            <p>Compará tarifas y elegí la mejor opcion.</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <img src="<?php echo RUTA; ?>img/circulo-viajes.svg" alt="ICONO">
                            <h4>Mas viajes!</h4>
                            <div class="separador"></div>
                            <p>Hacé que tu camión no pare de viajar.</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <img src="<?php echo RUTA; ?>img/circulo-costo.svg" alt="ICONO">
                            <h4>Menor costo</h4>
                            <div class="separador"></div>
                            <p>Optimizá los viajes y hacelos mas rentables.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Buscador -->
            <section id="buscador" class="container-fluid">
                <div class="top-busc container-fluid">
                    <div class="container wrapper">
                        <div class="col-md-10 col-sm-12 text-center p-mobile">
                            <h3>Publicá <span class="rojo">GRATIS</span> tus cargas aca y consegí transportes</h3>
                            <p>Anunciá tus cargas y compartilas con una importante red de transportistas. Obtené respuestas al instante!</p>
                        </div>
                        <div class="col-md-2 col-sm-12 bt-mobile">
                            <a href="<?php echo RUTA; ?>admin/" class="bt bt-rojo">Publicá GRATIS</a>
                        </div>   
                    </div>
                </div>
                <!-- Formulario buscador -->
                <div id="busc-main" class="container-fluid">
                    <div class="container">
                        <h2>Buscador de <span class="rojo">CARGAS</span></h2>

                        <form id="formulario" role="form" action="" method="post">
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input class="form-basic" type="text" placeholder="Ciudad de origen">
                                </div>
                                <div class="col-sm-6">
                                    <input class="form-basic" type="text" placeholder="Ciudad de destino">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input class="form-basic" type="text" placeholder="Tipo de carga">
                                </div>
                                <div class="col-sm-6">
                                    
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
                <h1>Publicaciones <span class="rojo">DESTACADAS</span></h1>
                    <div class="separador"></div>
                    <div class="row" id="item-publi"><!-- Contenedor publicaciones destacadas -->

                    <?php foreach ($cargas as $carga): ?>
                        <div class="col-md-4 col-sm-6 col-xs-12 item-carga"><!-- Item carga -->
                            <div class="top-item text-left">
                                <p class="subt">Fecha</p>
                                <h4 class="tit-result"><?php echo fecha($carga['fecha_publi']); ?></h4>
                                <p class="subt">Origen y destino</p>
                                <h4 class="tit-result"><span class="verde light">desde ></span>
                                <?php echo $carga['ciudad_origen'] ?> (<?php echo $carga['prov_origen'] ?>)<br>
                                <span class="verde light">hasta ></span> 
                                <?php echo $carga['ciudad_destino'] ?> (<?php echo $carga['prov_destino'] ?>)</h4>
                                <p class="subt">Tipo de carga</p>
                                <h4 class="tit-result"><?php echo $carga['det_carga'] ?></h4>
                            </div>
                            <div class="bottom-item row">
                                <div class="col-xs-6 text-left">
                                    <p>Calificación</p>
                                    <div class="calif"></div>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <p>Tarifa ofrecida</p>
                                <h4 class="tit-result">$<?php echo $carga['tarifa'] ?></h4>
                                </div>
                            </div>  
                            <div class="item-base text-right">
                                <a data-toggle="tooltip" data-placement="top" title="Compartí este aviso!" class="bt-chico bt-blanco" href="">
                                <i class="fa fa-twitter"></i></a>
                                <a data-toggle="tooltip" data-placement="top" title="Compartí este aviso!" class="bt-chico bt-blanco" href="">
                                <i class="fa fa-facebook"></i></a>
                                <a class="bt-chico bt-blanco" href="cargas_single.php?id=<?php echo $carga['id'] ?>">Detalles<i class="fa fa-search"></i></a>
                            </div>
                        </div><!-- Fin Item carga -->

                   <?php endforeach; ?>     
            
                    </div><!-- Fin contenedor publicaciones destacadas -->
                    <div class="separador"></div>
                        <div class="base-public row">
                            <div class="col-xs-12">
                                <a href="#" class="bt bt-rojo">Ver mas</a>
                            </div>
                        </div>
            </section><!-- FIN Publicaciones destacadas -->

            <!-- Barra acción registro -->
            <div class="top-busc container-fluid">
                    <div class="container wrapper">
                        <div class="col-md-10 col-xs-12 text-center p-mobile">
                            <h3>Registrate y obtené <span class="rojo">+ BENEFICIOS</span></h3>
                            <p>Formá parte de la red <span class="resalte">ViajeCargado.com</span> y publicá tus cargas GRATIS. Suscribite a uno de nuestros planes PREMIUM para disfrutar de todos los beneficios!</p>
                        </div>
                        <div id="call-reg" class="col-md-2 col-xs-12 bt-mobile">
                            <a href="<?php echo RUTA; ?>registro.php" class="bt bt-rojo">Registrate</a>
                        </div>   
                    </div>
            </div><!-- Fin Barra acción registro -->

            <section id="camiones" class="container-fluid">
                <div class="container">
                    <h1>Camiones disponibles <span class="blanco">AHORA</span></h1>

                   <div class="lista-camiones"><!--Lista camiones-->
                   <?php foreach ($camiones as $camion): ?>
                    
                        <div class="row text-center fila"><!--Fila camion-->
                            <div class="col-xs-3 text-left">
                                <p class="result-bl"><span class="res-bl">UBICACIÓN: <br>
                                </span><?php echo $camion['ciudad'] ?> 
                                (<?php echo $camion['provincia'] ?>)
                                </p>
                            </div>
                            <div class="col-xs-4">
                                <p class="result-bl"><span class="res-bl">TIPO DE CAMIÓN:<br>
                                 </span><?php echo $camion['tipo_camion'] ?></p>
                            </div>
                            <div class="col-xs-3">
                                <p class="result-bl"><span class="res-bl">FECHA: <br>
                                </span><?php echo fecha($camion['fecha_publi']); ?></p>
                            </div>
                            <div class="col-xs-2">
                                <a class="bt-chico bt-blanco pull-right" href="camiones_single.php?id=<?php echo $camion['id'] ?>">Detalles<i class="fa fa-search"></i></a>
                            </div>
                        </div><!-- Final Fila camion-->
                    
                    <?php endforeach; ?>

                        <div id="mas-camiones" class="col-xs-12">
                                <a href="camiones.php" class="bt bt-blanco bt-mobile">Ver mas</a>
                        </div>
                    </div><!--Fin lista camiones-->
                </div> 
            </section><!--Fin camiones-->

            <section id="opinion" class="container-fluid"><!-- Slider opiniones-->

                <div class="carousel slide container text-center" data-ride="carousel" data-interval="4000">

                    <div class="carousel-inner" role="listbox">

                        <div class="item active">
                            <img class="img-responsive img-circle center-block" src="http://lorempixel.com/g/80/80/" alt="">
                            <h3>Excelente!</h3>
                            <div class="separador-blanco"></div>
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lobortis arcu ac tincidunt suscipit. Vestibulum sollicitudin felis id tellus fermentum dignissim. In et tortor orci. Duis malesuada dignissim est.” </p>
                            <h5>Nombre y Apellido <br>
                            <small>EMPRESA</small></h5>
                        </div>

                        <div class="item">
                            <img class="img-responsive img-circle center-block" src="http://lorempixel.com/g/80/80/" alt="">
                            <h3>Muy buen servicio!</h3>
                            <div class="separador-blanco"></div>
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lobortis arcu ac tincidunt suscipit. Vestibulum sollicitudin felis id tellus fermentum dignissim. In et tortor orci. Duis malesuada dignissim est.” </p>
                            <h5>Nombre y Apellido <br>
                            <small>EMPRESA</small></h5>
                        </div>

                        <div class="item">
                            <img class="img-responsive img-circle center-block" src="http://lorempixel.com/g/80/80/" alt="">
                            <h3>Cargas sin moverte</h3>
                            <div class="separador-blanco"></div>
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lobortis arcu ac tincidunt suscipit. Vestibulum sollicitudin felis id tellus fermentum dignissim. In et tortor orci. Duis malesuada dignissim est.” </p>
                            <h5>Nombre y Apellido <br>
                            <small>EMPRESA</small></h5>
                        </div>

                    </div>    
                </div>        
            </section><!--Fin Slider opiniones-->

        </section> <!-- Fin section main -->

<?php require 'footer.php'; ?>


