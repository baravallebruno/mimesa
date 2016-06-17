<?php require 'header.php'; ?>


<div class="tot-wrapper"> 
            
            <section id="map-wrapper" class="container-fluid center-block">
                <img src="img/map.png" alt="">
            </section>
            <section class="container">
                <div id="columna-der" class="col-md-8">
                     <div id="det-carga" class="col-xs-12">
                        <h3>Detalle de la <span class="rojo">PUBLICACIÓN</span></h3>
                        <div class="desc-wrap">
                            <div class="col-sm-3">
                                <p class="subt">Fecha</p>
                                <h4 class="tit-result"><?php echo fecha($post['fecha_publi']); ?></h4> 
                            </div>
                            <div class="col-sm-9">
                                <p class="subt">Ubicación del camión</p>
                                <h4 class="tit-result"><?php echo $post['ciudad'] ?> (<?php echo $post['provincia'] ?>)</h4>
                                <p class="subt">Pais</p>
                                <h4 class="tit-result"><?php echo $post['pais'] ?></h4>
                                <p class="subt">Tipo de camión</p>
                                <h4 class="tit-result"><?php echo $post['tipo_camion'] ?></h4>
                                <p class="subt">Próximo destino de viaje</p>
                                <h4 class="tit-result"><?php echo $post['prox_destino'] ?></h4>
                                <p class="subt">Tipo de carga</p>
                                <h4 class="tit-result"><?php echo $post['tipo_carga'] ?></h4>
                            </div>  
                            <div id="base-carga" class="col-xs-12">
                                <div class="col-sm-8">
                                    <h3>Disponible hasta</h3>
                                    <h2><span class="verde"><?php echo fecha($post['fecha_disponible']); ?></span></h2>
                                </div>
                                <div class="col-sm-4">
                                    <h3 class="txt-rojo">Contactar></h3>
                                </div>
                            </div>  
                        </div>
                    </div>

                    <div id="mensajes" class="col-xs-12">
                        <h3>Preguntar al <span class="rojo">USUARIO</span></h3>
                        <div class="desc-wrap">
                            <form action="">
                                <textarea class="form-basic" id="consulta" placeholder="Escribí tu consulta"></textarea>
                                <button class="btn bt-rojo pull-right" type="button">Enviar consulta</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div id="columna-izq" class="col-md-4">
                    <div class="col-xs-12">
                        <h3>Datos del <span class="rojo">USUARIO</span></h3>
                        <div class="desc-wrap">

                            <div id="det-usuario"> 
                                <div id="top-usuario" class="col-xs-12">
                                    <div id="nombre" class="col-xs-6">
                                        <p class="subt">Usuario</p>
                                        <h4 class="tit-result">Hugo Baravalle</h4>
                                    </div>
                                    <div class="col-xs-6">
                                        <img class="img-responsive img-circle center-block" src="http://lorempixel.com/g/80/80/" alt="">   
                                    </div>
                                </div>
                                <div class="bottom-usuario col-xs-12">
                                        <h5 class="tit_det">Empresa</h5>
                                        <p class="text_det">Nodocargas</p>
                                        <h5 class="tit_det">Telefono</h5>
                                        <p class="text_det">(03406) 480564</p>
                                        <h5 class="tit_det">Celular</h5>
                                        <p class="text_det">(03406) 15689945</p>
                                        <h5 class="tit_det">E-mail</h5>
                                        <p class="text_det">nodocargas@gmail.com</p>
                                        <h5 class="tit_det">Dirección</h5>
                                        <p class="text_det">Alem 1861 - Sastre (Sante Fe) <a href="#">Ver mapa</a> </p>
                                </div>
                                <div class="bottom-usuario col-xs-12">
                                        <a href="#">Ver mas publicaciones del usuario > </a>
                                </div> 
                            </div> 
                        </div>
                    </div>
                    <div id="comparti" class="col-xs-12">
                        <h3>Calificá al <span class="rojo">USUARIO</span></h3>
                        <div class="desc-wrap"> 
                            <a href="" class="social-circ"><i class="fa fa-facebook"></i></a>
                            <a href="" class="social-circ"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

            </section>






<?php require 'footer.php'; ?>