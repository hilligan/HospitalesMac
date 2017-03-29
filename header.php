<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <meta name="author" content="VELOSOFT"/>
      <meta name="description" content=""/>
      <meta name="Resource-type" content="Document"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="shortcut icon" href="images/favicon.ico"/>
      <link type="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/font-awesome.min.css">
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/font-awesome.min.css">
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/animate.css">
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/jquery.bxslider.css">
      <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/materialize.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" />
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/swiper.css">
      <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

      <!-- Definir viewport para dispositivos web móviles -->
      <meta name="viewport" content="width=device-width, minimum-scale=1">

      <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

      <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
      <?php wp_head(); ?>
   </head>

   <body>
     <!--div id="hola">
       <div id="preloader">
         <span></span>
         <span></span>
       </div>
     </div-->
     <nav class="hide-on-large-only">
      <div class="nav-wrapper" id="arriba">
        <div class="col s12 center">
          <a href="index.php" class="brand-logo">
            <img width="65px;" src="<?php bloginfo('stylesheet_directory');?>/images/slider/logo-slider.svg" alt="">
          </a>
        </div>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="index.php">INICIO</a></li>
          <li><a href="index.php#nosotros">NOSOTROS</a></li>
          <li><a href="index.php#hospitales">HOSPITALES</a></li>
          <li><a href="index.php#especialidades">ESPECIALIDADES</a></li>
          <li><a href="index.php#contacto">CONTACTO</a></li>
          <li><a href="buscar-especialista.php">BUSCAR ESPECIALISTA</a></li>
          <li><a href="bolsa.php">BOLSA DE TRABAJO</a></li>
          <li><a href="login-medico.php">PERFIL ESPECIALISTA</a></li>
          <li><a href="login-intrahealth.php">INTRAHEALTH</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="index.php">INICIO</a></li>
          <li><a href="index.php#nosotros">NOSOTROS</a></li>
          <li><a href="index.php#hospitales">HOSPITALES</a></li>
          <li><a href="index.php#especialidades">ESPECIALIDADES</a></li>
          <li><a href="index.php#contacto">CONTACTO</a></li>
          <li><a href="buscar-especialista.php">BUSCAR ESPECIALISTA</a></li>
          <li><a href="bolsa.php">BOLSA DE TRABAJO</a></li>
          <li><a href="login-medico.php">PERFIL ESPECIALISTA</a></li>
          <li><a href="login-intrahealth.php">INTRAHEALTH</a></li>
        </ul>
      </div>
    </nav>

    <header>
      <div class="row nomargin hide-on-small-only hide-on-med-only content-shadow">
        <div class="col l2 center logo-mac">
          <a href="index.php"><img src="<?php bloginfo('stylesheet_directory');?>/images/slider/logo-slider.svg" alt=""></a>
        </div>
        <div class="col l8">
          <div class="col l12 menu-mac-1">
            <?php 
                wp_nav_menu( array(
                    'theme_location' => 'header-menu-top',
                    'menu_class'     => 'nomargin'
                ) );
            ?>
            <!--ul class="nomargin">
              <a href="buscar-especialista.php">
                <li style="list-style-image: url(<?php bloginfo('stylesheet_directory');?>/images/recursos/rombo.png);">
                <img src="<?php bloginfo('stylesheet_directory');?>/images/recursos/1.png" alt="">
                buscar especialista
              </li></a>
              <a href="bolsa.php"><li>
                <img src="<?php bloginfo('stylesheet_directory');?>/images/recursos/2.png" alt="">
                <img src="<?php bloginfo('stylesheet_directory');?>/images/recursos/3.png" alt="">
                bolsa de trabajo
              </li></a>
              <a href="login-medico.php"><li>
                <img src="<?php bloginfo('stylesheet_directory');?>/images/recursos/4.png" alt="">
                perfil especialista
              </li></a>
              <a href="login-intrahealth.php"><li>
                <img src="<?php bloginfo('stylesheet_directory');?>/images/recursos/5.png" alt="">
                intrahealth
              </li></a>
              <a href="#"><li>
                buscar <i class="fa fa-search" aria-hidden="true"></i>
              </li></a>
            </ul-->
          </div>
          <div class="col l12 menu-mac-2">
            <?php 
                wp_nav_menu( array(
                    'theme_location' => 'header-menu',
                    'menu_class'     => 'nomargin'
                ) );
            ?>

            <!--ul class="nomargin">
              <a href="index.php"><li>incio</li></a>
              <a href="index.php#nosotros"><li><span>nosotros</span></li></a>
              <a class='dropdown-button' href='#' data-activates='dropdown1'>
                <li>
                  <span>hospitales <i style="color:#98c028;font-size:20px;" class="fa fa-angle-down" aria-hidden="true"></i>
                  </span>
                </li>
              </a>
              < Dropdown Structure >
              <ul id='dropdown1' class='dropdown-content'>
                <a href="aguascalientes.php"><li class="hvr-sweep-to-bottom">Aguascalientes</li></a>
                <a href="celaya.php"><li class="hvr-sweep-to-bottom">Celaya</li></a>
                <a href="guadalajara.php"><li class="hvr-sweep-to-bottom">Guadalajara</li></a>
                <a href="irapuato.php"><li class="hvr-sweep-to-bottom">Irapuato</li></a>
              </ul>
              <a href="index.php#especialidades"><li><span>especialidades</span></li></a>
              <a href="index.php#contacto"><li><span>contacto</span></li></a>
              <li>
                <select class="browser-default">
                  <option value="" disabled selected>Español</option>
                  <option value="1">Inglés</option>
                  <option value="2">Japones</option>
                </select>
              </li>
              <li>
                <a href="https://www.facebook.com/HospitalMAC" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://twitter.com/hospitalesmac" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="https://es.pinterest.com/" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
              </li>
            </ul-->
          </div>
        </div>
        <div class="col l2 logo-ambulancia">
          <a href="tel:+52 55 35219669"><img  src="<?php bloginfo('stylesheet_directory');?>/images/recursos/boton-ambulancia.png" alt=""></a>
        </div>
      </div>
    </header>

    <div class="row nomargin hide-on-large-only">
      <div class="col s12 barra-footer">
        <div class="col s10 center">
          <div class="col s3 center">
            <a href="index.php"><img width="35px;" src="<?php bloginfo('stylesheet_directory');?>/images/recursos/home.svg" alt=""></a>
          </div>
          <div class="col s3 center">
            <a href="index.php#especialidades"><img width="35px;" src="<?php bloginfo('stylesheet_directory');?>/images/recursos/especialidades.svg" alt=""></a>
          </div>
          <div class="col s3 center">
            <a href="index.php#hospitales"><img width="30px" src="<?php bloginfo('stylesheet_directory');?>/images/recursos/hospitales.svg" alt=""></a>
          </div>
          <div class="col s3 center">
            <a href="#"><img width="35px;" src="<?php bloginfo('stylesheet_directory');?>/images/recursos/especialista.svg" alt=""></a>
          </div>
        </div>
        <div class="col s2 center">
          <a href="#arriba"><img width="35px;" src="<?php bloginfo('stylesheet_directory');?>/images/recursos/flecha.svg" alt=""></a>
        </div>
      </div>
    </div>

    <div class="row nomargin">
      <div class="col l12 hide-on-large-only">
        <a href="tel:+52 55 35219669"><img width="60px;" style="position:fixed;top:0;right:0;z-index:20;" src="<?php bloginfo('stylesheet_directory');?>/images/recursos/ambulacia-responsiva.png" alt=""></a>
      </div>
    </div>
