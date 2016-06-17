<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Viaje Cargado</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

		<link rel="stylesheet" href="<?php echo RUTA; ?>/css/normalize.min.css">
		<link rel="stylesheet" href="<?php echo RUTA; ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700,300italic,100,500' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo RUTA; ?>/css/admin.css">
        <link rel="stylesheet" href="<?php echo RUTA; ?>main.css">

        <script src="<?php echo RUTA; ?>/js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="<?php echo RUTA; ?>/js/functionsAjax.js"></script>

        
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Barra superior fija -->
        <header class="header-wrapper">
            <div id="tophead" class="container-fluid navbar-fixed-top">
            	<div class="container-fluid">
            		<div id="logo-us" class="col-xs-3 text-center">
                		<a href="<?php echo RUTA; ?>">
                            <img src="<?php echo RUTA; ?>img/logo-chico.png" alt="">      
                        </a>
            		</div>
            		<div id="us-menu" class="col-xs-9 text-right">
            			<ul>
            				<li><a href="#"><i class="fa fa-user"></i><?php echo ucfirst($_SESSION['usuario']['usuario']); ?></a></li>
            				<li><a id="ini-sesion" href="../cerrar.php"><i class="fa fa-power-off"></i>Cerrar Sesión</a></li>
            			</ul>
            		</div>
            	</div>
            </div>
        </header>
        <div class="row">
            <nav class="menu-left col-xs-3">
                <div class="menu-left-top col-xs-12">
                    <div id="nombre" class="col-xs-8">
                        <p class="subt">Usuario</p>
                        <h4 class="tit-result"><?php echo $nombreApellido; ?></h4>
                        <h6>Cuenta <?php echo $tipo_usuario; ?></h6>
                    </div>
                    <div class="col-xs-4">
                        <img class="img-responsive img-circle center-block" src="../thumbs/<?php echo $thumb; ?>" alt="">   
                    </div>
                </div>
                <div class="bot-block col-xs-12 text-center">
                    <ul>
                        <li class="bot-admin"><a href="<?php echo RUTA; ?>admin/index.php?pagina=profile"><i class="fa fa-user"></i>Mi perfil</a></li>
                        <li class="bot-admin"><a href="#"><i class="fa fa-envelope"></i>Mensajes recibidos</a></li>
                        <li class="bot-admin"><a href="#"><i class="fa fa-envelope-o"></i>Mensajes enviados</a></li>
                        <li class="bot-admin"><a href="<?php echo RUTA; ?>admin/index.php?pagina=mis_publicaciones"><i class="fa fa-th-list"></i>Mis publicaciones</a></li>
                    </ul>
                </div>
                <div class="acciones col-xs-12">
                    <a href="<?php echo RUTA; ?>admin/index.php?pagina=nueva_carga" class="btn bt-verde">Publicar Carga</a>
                    <a href="" class="btn bt-verde">Publicar Camión</a>
                </div>
            </nav>
           
            <?php $recibe_pagina= isset ($_GET['pagina']) ? $_GET['pagina'] : null; ?>
             <?php
                 switch ($recibe_pagina){ 
                case "profile":
                include ("../admin/profile.php"); 
                break;
                case "nueva_carga":
                include ("../admin/publi_carga.php"); 
                break; 
                case "mis_publicaciones":
                include ("../admin/mis_publicaciones.php"); 
                break; 
                default:
                include ("bienvenido.php"); 
                }
                 ?>

        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

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



