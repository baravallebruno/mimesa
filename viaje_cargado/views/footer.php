        <footer id="footer-wrapper" class="container-fluid">
            <div class="foot-wrap container">

                <div class="col-md-4">
                    <h4>Sobre nosotros</h4>
                    <div class="separador-blanco"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia natus blanditiis ipsam. Doloribus quaerat, quisquam voluptatum? Laboriosam deleniti odit adipisci eos illum iusto possimus laudantium reiciendis vero nesciunt id quos dicta, vitae, perferendis voluptatem saepe. Quae provident temporibus obcaecati nulla.</p>
                        <div class="row">
                            <div class="col-xs-6">
                                <img src="img/logo-chico.png" alt="LOGO">
                                <h6>© Viajecargado.com | 2016 Todos los derechos reservados.</h6>
                            </div>
                            <div class="col-xs-6">
                                <img class="pull-right" src="<?php echo RUTA; ?>/img/data.png" alt="LOGO">
                            </div> 
                        </div>  
                </div>

                <div class="col-md-4">
                    <h4>Secciones</h4>
                    <div class="separador-blanco"></div>
                    <ul>
                        <li><a href="<?php echo RUTA; ?>camiones.php">Tenes cargas?</a></li>
                        <li><a href="<?php echo RUTA; ?>cargas.php">Tenes camión?</a></li>
                        <li><a href="">Planes y Beneficios</a></li>
                        <li><a href="">Como funciona?</a></li>
                        <br>
                        <li><a href="<?php echo RUTA; ?>registro.php"><span class="txt-rojo">Registrate</span></a></li>
                        <li><a href="<?php echo RUTA; ?>login.php"><span class="txt-rojo">Iniciar Sesión</span></a></li>
                    </ul>
                    <h4>Contactanos</h4>
                    <div class="separador-blanco"></div>
                    <p><i class="fa fa-envelope-o"></i><a href="mailto:contacto@viajecargado.com">contacto@viajecargado.com</a></p>
                    <p><i class="fa fa-phone"></i>+54 9 03406 15698456</p>
                    <a href="" class="social-circ"><i class="fa fa-facebook"></i></a>
                    <a href="" class="social-circ"><i class="fa fa-twitter"></i></a>
                </div>

                <div class="col-md-4">
                    <h4>Dejanos un mensaje</h4>
                    <div class="separador-blanco"></div>
                    <form action="">
                        <input class="form-basic" type="text" name="email" placeholder="E-mail">
                        <input class="form-basic" type="text" name="telefono" placeholder="Telefono">
                        <textarea class="form-basic" id="mensaje" placeholder="Mensaje"></textarea>
                        <button class="btn bt-rojo pull-right" type="button">Enviar mensaje</button>
                    </form>
                </div>

            </div>
            <div class="foot container-fluid"> 
                <div class="container">
                    <div class="col-xs-6">
                        <div><button id="ir-arriba" class="btn bt-rojo" type="button"><i class="fa fa-chevron-up"></i></button><span>SUBIR</span></div>
                    </div>
                    <div class="col-xs-6 text-right">
                        <div class="marca">
                            <p>Desarrollado por</p><a href=""><img src="img/doblebe.png" alt=""></a>
                        </div>
                    </div>
                </div> 
            </div>
        </footer>
</div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="<?php echo RUTA; ?>/js/menu.js"></script>
        <script src="<?php echo RUTA; ?>/js/main.js"></script>
        <script src="<?php echo RUTA; ?>/js/plugins.js"></script>
        <script src="<?php echo RUTA; ?>/js/bootstrap.min.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
