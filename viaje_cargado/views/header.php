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
        <link rel="stylesheet" href="<?php echo RUTA; ?>main.css">

        <script src="<?php echo RUTA; ?>/js/vendor/modernizr-2.8.3.min.js"></script>
        
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Barra superior fija -->
        <header class="header-wrapper">
            <div id="tophead" class="container-fluid navbar-fixed-top">
            	<div class="container">
            		<div id="sociales" class="col-xs-2">
                		<ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
            		</div>
            		<div id="menu-sup" class="col-xs-10 text-right">
            			<ul>
                            <li>
                                <form action="completar con PHP" name="busqueda" class="buscar" method="get">
                                    <input type="search" name="busqueda" placeholder="Buscar...">
                                    <a id="lupa" href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </li>
                            <?php if (isset($_SESSION['usuario'])): ?>
                            <li><a href="<?php echo RUTA; ?>admin"><?php echo ucfirst($_SESSION['usuario']['nombre']); ?></a></li>
                            <li><a id="ini-sesion" href="<?php echo RUTA; ?>cerrar.php">Cerrar Sesion</a></li>
                            <?php else: ?>
            				<li><a href="<?php echo RUTA; ?>registro.php">Registrate</a></li>
            				<li><a id="ini-sesion" href="<?php echo RUTA; ?>login.php">Iniciar Sesion</a></li>
                            <?php endif; ?>
            			</ul>
            		</div>
            	</div>
            </div>

          <!-- Barra de navegacion -->
            <div id="topnav" class="container-fluid">
                <div id="nav-wrapper" class="container">
                    <div id="logo-viaje" class="col-md-4 col-xs-4">
                        <a href="<?php echo RUTA; ?>">
                           <img src="<?php echo RUTA; ?>/img/logo-nav.png" alt="LOGO">
                        </a>
                    </div>
                    <nav id="menu-nav" class="col-md-8 col-sm-12 text-right">
                        <ul> 
                            <li><a href="<?php echo RUTA; ?>camiones.php">TENES CARGAS?</a></li>
                            <li><a href="<?php echo RUTA; ?>cargas.php">TENES CAMION?</a></li>
                            <li><a href="#">PLANES Y BENEFICIOS</a></li>
                            <li><a href="#">COMO FUNCIONA?</a></li>   
                        </ul>
                    </nav>

                    <div class="menu-bar col-xs-8">
                        <a href="#" class="bt-menu"><i class="fa fa-bars"></i></a>
                    </div>

                </div>
            </div>

        </header>