<?php
/**
 * Template Name: Plantilla de Bolsa de trabajo Hospital
 */ 
?>
<!-- Archivo de cabecera gobal de Wordpress -->
<?php get_header(); ?>

<!-- Contenido de página de inicio -->
<?php if ( have_posts() ) : the_post(); ?>
<section>
<div class="modal">
  <div class="modal-dialog">
    <div class="modal-body">

    </div>
  </div>
</div>
<!--MODAL-->
<?

$headerVacantesHospital = get_field('imagen_encabezado_bolsa_de_trabajo');
$headerVacantesHospitalLogo = get_field('logo_encabezado_bolsa_de_trabajo');
$headerVacantesHospitalTexto1 = get_field('texto_parte_1_encabezado_bolsa_de_trabajo');
$headerVacantesHospitalTexto2 = get_field('texto_parte_2_encabezado_bolsa_de_trabajo');

$vacantesHospital = get_field('vacantes_hospital');



if($headerVacantesHospital){
?>
  <div class="row nomargin">
    <div class="col l12 s12 bg-bolsa" style="background-image: url(<?=($headerVacantesHospital['url'])?$headerVacantesHospital['url']:'';?>);">
      <div class="col l5 s12 hide-on-small-only">
        <div class="center logo-bolsa">
          <img src="<?=($headerVacantesHospitalLogo['url'])?$headerVacantesHospitalLogo['url']:'';?>" alt="Hospitales Mac">
        </div>
      </div>
      <div class="col l6 s12 titulo-bolsa hide-on-small-only">
        <p><?=($headerVacantesHospitalTexto1)?$headerVacantesHospitalTexto1:'';?><strong> <?=($headerVacantesHospitalTexto2)?$headerVacantesHospitalTexto2:'';?></strong>
        </p>
      </div>
    </div>
  </div>
<?
}


if ($vacantesHospital) {
	foreach ($vacantesHospital as $key => $hospitalVacante) {
	?>
		<div class="row nomargin">
		    <div class="col l10 offset-l1 m10 offset-m1 s12">
		      <div class="col l12 s12 hospital-bolsa">
		        <p><i class="fa fa-caret-right" aria-hidden="true"></i> <?=($hospitalVacante['nombre_del_hospital'])?$hospitalVacante['nombre_del_hospital']:'Hospital';?></p>
		      </div>

		      <?
		      	foreach ($hospitalVacante['vacante_hospital'] as $key => $vacante) {
		      	?>
		      		<div class="col l12 m12 s12">
				        <div class="col l3 m12 s12 texto-bolsa">
				          <p><i class="fa fa-circle" aria-hidden="true"></i> <strong><?=($vacante['titulo_vacante'])?$vacante['titulo_vacante']:'Hospital';?></strong></p>
				          <p class="nomargin"><span>DESCRIPCIÓN:</span></p>
				          <p><?=($vacante['descripcion_vacante'])?$vacante['descripcion_vacante']:'Hospital';?></p>
				        </div>
				        <div class="col l3 m4 s12  texto-bolsa">
				          <p style="visibility:hidden;"><i class="fa fa-circle" aria-hidden="true"></i> <strong><?=($vacante['titulo_vacante'])?$vacante['titulo_vacante']:'Hospital';?></strong></p>
				          <p>
				            <span>REQUISITOS</span>
				          </p>
				          <ul>
				          	<?
				          		foreach ($vacante['requisitos_vacante'] as $key => $requisito) {
				          		?>
				          			<li><i class="fa fa-circle" aria-hidden="true"></i><?=($requisito['requisito'])?$requisito['requisito']:'Hospital';?></li>
				          		<?
				          		}
				          	?>
				          </ul>
				        </div>
				        <div class="col l3 m4 s12 texto-bolsa">
				          <p style="visibility:hidden;"><i class="fa fa-circle" aria-hidden="true"></i> <strong><?=($vacante['titulo_vacante'])?$vacante['titulo_vacante']:'Hospital';?></strong></p>
				          <p>
				            <span>OFRECEMOS</span>
				          </p>
				          <ul>
				          	<?
				          		foreach ($vacante['ofrecemos_vacante'] as $key => $ofrecemos) {
				          		?>
				          			<li><i class="fa fa-circle" aria-hidden="true"></i><?=($ofrecemos['que_ofrecemos'])?$ofrecemos['que_ofrecemos']:'Hospital';?></li>
				          		<?
				          		}
				          	?>
				          </ul>
				        </div>
				        <div class="col l3 m4 s12 texto-bolsa">
				          <p style="visibility:hidden;"><i class="fa fa-circle" aria-hidden="true"></i> <strong><?=($vacante['titulo_vacante'])?$vacante['titulo_vacante']:'Hospital';?></strong></p>
				          <p>
				            <span>VALORES DESEADOS:</span>
				          </p>
				          <ul>
				          <?
				          		foreach ($vacante['valores_deseados'] as $key => $valores) {
				          		?>
				          			<li><i class="fa fa-circle" aria-hidden="true"></i><?=($valores['valor'])?$valores['valor']:'Hospital';?></li>
				          		<?
				          		}
				          	?>
				          </ul>
				        </div>
				      </div>
				      <div class="col l6 offset-l3 s8 offset-s2 center">
				        <a data-toggle="modal" data-effect="expand-vert" data-name="modal-vacante.php"><p class="boton-2">aplicar vacante</p></a>
				      </div>
		      	<?
		      	}
		      ?>
		      

		    </div>
		</div>
	<?
	}	
}

?>

</section>
<?php endif; ?>
<!-- Archivo de barra lateral por defecto -->
<?php //get_sidebar(); ?>
<!-- Archivo de pié global de Wordpress -->

<?php get_footer(); ?>