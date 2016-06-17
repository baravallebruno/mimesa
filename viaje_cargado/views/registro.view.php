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
        <link rel="stylesheet" href="<?php echo RUTA; ?>/main.css">

        <script src="<?php echo RUTA; ?>/js/vendor/modernizr-2.8.3.min.js"></script>
        <script>      
		    
  		</script> 
    </head>
    <body id="back-full">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
       
      <div class="container">
       <div id="regbox" class="col-md-4 col-xs-12 text-center">
           <a href="<?php echo RUTA; ?>"><img src="img/logo-login.png" alt="Logo"></a>
           <h4>Crear nueva cuenta</h4>
           <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="registro">
                <input class="form-basic" type="text" name="usuario" placeholder="Usuario">
                <input class="form-basic" type="email" name="email" placeholder="E-mail">
                <input class="form-basic" type="password" name="password" placeholder="Contraseña">
                <input class="form-basic" type="password" name="password2" placeholder="Confirmar contraseña">
                <div id="opciones" class="col-xs-12 text-left">
                <div class="checkbox"><label><input type="checkbox" name="si_camion" value="si">Tengo camión</label></div>
                <div class="checkbox"><label><input type="checkbox" name="si_carga" value="si">Tengo cargas</label></div>
                </div>
                  <?php if (!empty($errores)): ?>
                    <div class="col-xs-12 error">
                      <ul>
                        <?php echo $errores; ?>  
                      </ul>
                    </div>
                  <?php endif; ?>
                <button class="btn bt-rojo pull-right" type="submit">Registrarse</button>
           </form>
           <a href="<?php echo RUTA; ?>login.php">Ya tenes cuenta? Inicia Sesión ></a>
       </div> 
      </div>    
    
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script> 

        <script src="<?php echo RUTA; ?>/js/menu.js"></script>
        <script src="<?php echo RUTA; ?>/js/main.js"></script>
        <script src="<?php echo RUTA; ?>/js/plugins.js"></script>
        <script src="<?php echo RUTA; ?>/js/bootstrap.min.js"></script>
        

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
       <!-- <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script> -->
    </body>
</html>



