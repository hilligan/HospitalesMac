<?php
/**
 * Template Name: Plantilla de Cunero
 */ 
?>
<!-- Archivo de cabecera gobal de Wordpress -->
<?php get_header(); ?>

<!-- Contenido de página de inicio -->
<?php if ( have_posts() ) : the_post(); ?>
<section>

<!--MODAL-->
<div class="modal">
  <div class="modal-dialog">
    <div class="modal-body nomargin">

    </div>
  </div>
</div>
<!--MODAL-->

  <div class="border-shadow"></div>

  <div class="row nomargin ">
    <div class="col l12 s12 bg-cunero">
      <div class="col l5 s12 fondo-asegurar">
        <div class="col l12 s12 center ">
          <img width="400px;" src="http://localhost/hospitalesmac/wp-content/themes/hospitalesmac/images/bebe-mac.png" alt="">
        </div>
        <div class="col l8 offset-l2 s12 soy-bebe">
          <p>
            ¡Únete a nuestra red de beneficios <strong>Soy Bebé MAC</strong> y recibe regalos, descuentos y mucho más!
          </p>
        </div>
        <div class="col l12 s12 center">
          <a data-toggle="modal" data-effect="expand-vert" data-name="modal-cesarea.php">
            <p class="boton-paquetes hvr-shutter-out-vertical">solicita más información</p>
          </a>
        </div>
        <div class="col l12 s12 center">
          <img class="ocultar hide-on-med-only" src="http://localhost/hospitalesmac/wp-content/themes/hospitalesmac/images/home/mamilas.png" alt="Hospitales Mac">
        </div>
      </div>
      <div class="col l3 s12 top-100 hide-on-med-only hide-on-small-only">
        <img width="300px;" src="http://localhost/hospitalesmac/wp-content/themes/hospitalesmac/images/bebe/bebesote.png" alt="">
      </div>
    </div>
  </div>

  <div class="row nomargin content-shadow">
    <div class="col l12" style="padding-bottom:20px"></div>
  </div>

  <div class="border-shadow"></div>
</section>
<?php endif; ?>

<?php get_footer(); ?>