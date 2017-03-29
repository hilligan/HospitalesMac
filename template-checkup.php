<?php
/**
 * Template Name: Plantilla de Checkup
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
      <div class="modal-body">

      </div>
    </div>
  </div>
  <!--MODAL-->

<?
$fondoTopCheckup = get_field('fondo_top_checkup');
$textoTopCheckup = get_field('texto_principal_checkup');
$fondoParalaxCheckup = get_field('fondo_paralax');
$imagenCentralInfGeneral = get_field('imagen_central_informacion_general');
$textoInfCheckup = get_field('texto_informacion_general');
$fondoGarantiaServicio = get_field('fondo_garantia_servicio');
$textoParte1Garantia = get_field('texto_parte_1_garantia');
$textoParte2Garantia = get_field('texto_parte_2_garantia');
$textoAzulGarantia = get_field('texto_azul');


?>
  <div class="row nomargin">
    <div class="col l12 m12 s12 bg-check2" style="background-image: url(<?=($fondoTopCheckup['url'])?$fondoTopCheckup['url']:'';?>);">
      <div class="col l5 m10 offset-m1 s12 left-check">
        <div class="col s12 bg-transparencia">
        <div class="col l12 m12 s12 titulo-asegurar top-100">
          <p class="nomargin">Evaluación Médica Integral</p>
          <p class="nomargin"><strong style="text-transform:none;">Check up</strong></p>
        </div>
        <div class="col l12 m12 s12 texto-mac2">
          <p><?=($textoTopCheckup)?$textoTopCheckup:'';?></p>
        </div>
        <div class="col l12 m12 s12 boton-check">
          <a href="#check-up"><p class="nomargin">Conoce más de </p>
          <p class="nomargin"><strong>nuestros check ups</strong></p></a>
        </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row nomargin">
    <div class="col l12 s12 parallax-check" id="check-up" style="background-image: url('<?=($fondoParalaxCheckup['url'])?$fondoParalaxCheckup['url']:'';?>');">
      <div class="mano-check">
        <img src="<?=($imagenCentralInfGeneral['url'])?$imagenCentralInfGeneral['url']:'';?>" alt="">
      </div>
      <div class="col l6 offset-l6 m10 offset-m1 s12">
        <div class="col l10 offset-l1 m12 s12">
          <div class="col l12 content-check">
            <p class="titulo-check">
              información <strong>general</strong>
            </p>
            <p class="texto-mac2"><?=($textoInfCheckup)?$textoInfCheckup:'';?></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row nomargin">
    <div class="col l12 s12 bg-doctor" style="background-image: url('<?=($fondoGarantiaServicio['url'])?$fondoGarantiaServicio['url']:'';?>');">
      <div class="col l4 offset-l1 m8 s12">
        <div class="col l12 s12">
          <p class="garantia-servicio">garantía <strong>servicio</strong></p>
          <p class="texto-mac2"><?=($textoParte1Garantia)?$textoParte1Garantia:'';?></p>
        </div>
        <div class="col l12 s12">
          <p class="texto-blue"><?=($textoAzulGarantia)?$textoAzulGarantia:'';?></p>
          <p class="texto-mac2"><?=($textoParte2Garantia)?$textoParte2Garantia:'';?></p>
          <a data-toggle="modal" data-effect="expand-vert" data-name="modal-check.php"><p class="contactanos-check">contáctanos</p></a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>