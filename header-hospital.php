<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <meta name="author" content="VELOSOFT"/>
      <meta name="description" content=""/>
      <meta name="Resource-type" content="Document"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link type="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/font-awesome.min.css">
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/font-awesome.min.css">
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/animate.css">
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/jquery.bxslider.css">
      <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/materialize.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" />
      <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900" rel="stylesheet">
      <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
   </head>
   <body>
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
      <div class="row nomargin hide-on-small-only hide-on-med-only">
        <div class="">
          <a href="tel:+52 55 35219669"><img style="position:absolute;z-index:100;width:180px;right:5%;top:0;" src="<?php bloginfo('stylesheet_directory');?>/images/recursos/boton-ambulancia.png" alt=""></a>
        </div>
        <div class="col l12 nomargin">
          <div class="col l12 nomargin" style="background:#f7f7f7;">
            <div class="col l3 center">
              <a href="buscar-especialista.php"><p class="directorio nomargin">directorio de especialistas</p></a>
            </div>
            <div class="col l7 sociales-hospitales">
              <p class="nomargin">
                <a href="<?=get_field('facebook', 196);?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="<?=get_field('twitter', 196);?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="<?=get_field('pinterest', 196);?>" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="<?=get_field('youtube', 196);?>" target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
              </p>
            </div>
          </div>
          <?
            if(get_field('direccion_hospital', 196)){
              $direccion = get_field('direccion_hospital', 196);
              $telefono = get_field('telefono_hospital', 196);
            }elseif(get_field('direccion_hospital', 81)){
              $direccion = get_field('direccion_hospital', 81);
              $telefono = get_field('telefono_hospital', 81);
            }else{
              $direccion = "Hospitales MAC";
              $telefono = "";
            }
          ?>
          <div class="col l12">
            <div class="col l2 center">
              <a href="index.php"><img width="110px;" src="<?php bloginfo('stylesheet_directory');?>/images/slider/logo-slider.svg" alt=""></a>
            </div>
            <div class="col l8" style="margin-top:10px;">
              <div class="col l12">
                <div class="col l4 sub-menu">
                  <p class="nomargin"><img src="<?php bloginfo('stylesheet_directory');?>/images/recursos/6.png" alt=""> <strong>dirección</strong></p>
                  <p class="nomargin"><?=$direccion?></p>
                </div>
                <div class="col l4 sub-menu">
                  <a href="tel:+52 4499106120"><p class="nomargin"><img src="<?php bloginfo('stylesheet_directory');?>/images/recursos/7.png" alt=""><?=$telefono?></p></a>
                  <p class="nomargin">LÍNEA DIRECTA Llámanos ahora</p>
                </div>
                <a href="#cunero"><div class="col l4 sub-menu">
                  <p class="nomargin"><img src="<?php bloginfo('stylesheet_directory');?>/images/recursos/8.png" alt=""> <strong>bebé mac</strong></p>
                  <p class="nomargin">Ve en directo EL CUNERO DE TU BEBÉ</p>
                </div></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col l12 nomargin">
          <div class="col l6 menu-mac-3 center">
          <?php 
                wp_nav_menu( array(
                    'theme_location' => 'header-hospital',
                ) );
            ?>
          </div>
          <div class="col l6 menu-mac-4 ">
            <?php 
                wp_nav_menu( array(
                    'theme_location' => 'header-hospital-secundario',
                ) );
            ?>
          </div>
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
        <a href="tel:+52 55 35219669"><img width="60px;" style="position:fixed;top:0;right:0;z-index:11;" src="<?php bloginfo('stylesheet_directory');?>/images/recursos/ambulacia-responsiva.png" alt=""></a>
      </div>
    </div>
