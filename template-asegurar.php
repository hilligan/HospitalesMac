<?php
/**
 * Template Name: Plantilla de Asegurar
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
<?
$backgroundAsegurar = get_field('fondo_asegurar');
$textoAsegurar = get_field('texto_principal');
$sucursales = get_field('sucursal');


if ($backgroundAsegurar) {
?>
<div class="row nomargin">
    <div class="col l12 s12 bg-asegurar" style="background-image: url(<?=($backgroundAsegurar['url'])?$backgroundAsegurar['url']:'';?>);">
      <div class="col l5 m10 offset-m1 s12 fondo-asegurar">
        <div class="col l10 offset-l1 s12 titulo-asegurar top-100 center">
          <p class="nomargin">¿No encuentras tu aseguradora?</p>
          <p class="nomargin"><strong style="border-bottom: 3px solid #00aca8;">¡CONTÁCTANOS!</strong></p>
        </div>
        <div class="col l10 offset-l1 m12 s12 texto-mac2 top-20">
          <p><?=($textoAsegurar)?$textoAsegurar:'';?></p>
        </div>
        <div class="col l8 offset-l1 m10 offset-m1 s12 top-50">
          <div class="col l12 m12 s12 border-verde">
            <p class="llamanos nomargin center">¡LLÁMANOS!</p>
            <select class="browser-default content-select select-llamanos" id="phone">
            <?

            	foreach ($sucursales as $key => $sucursal) {
            		$idHospital = str_replace(" ", "_", $sucursal['nombre_hospital']);
            	?>
            		<option value="<?=$idHospital;?>"></i><?=($sucursal['nombre_hospital'])?$sucursal['nombre_hospital']:'';?></option>
            	<?
            	}

            ?>
            </select>
          </div>
          <div class="col l12 m12 s12 border-azul center" id="numeros">
          	<?

				foreach ($sucursales as $key => $sucursal) {
					$idHospital = str_replace(" ", "_", $sucursal['nombre_hospital']);
				?>
				<a href="tel:+<?=($sucursal['telefono'])?$sucursal['telefono']:'';?>"><p id="<?=$idHospital;?>" class="telefono-hospital nomargin">+<?=($sucursal['telefono'])?$sucursal['telefono']:'';?></p></a>
				<?
				}

			?>
          </div>
          <div class="col l10 offset-l1 m8 offset-m2 s12">
            <a data-toggle="modal" data-effect="expand-vert" data-name="modal-asegura.php" ><p class="boton-asegurar">¿cómo usar mi seguro en <strong>hospitales mac?</strong></p></a>
          </div>
        </div>
      </div>

      <div class="col l7 s12">
        <div class="col l12 m12 s12 formulario-aseguradora">
          <form class="col s12 m12 s12">
            <div class="row nomargin">
              <div class="input-field col l6 s12 m6">
                <select class="browser-default input-asegurar">
                 <option value="" disabled selected><i class="fa fa-globe" aria-hidden="true"></i>Hospital de interés</option>
                 <option value="1">Aguascalientes</option>
                 <option value="2">Celaya</option>
                 <option value="3">Guadalajara</option>
                 <option value="3">Irapuato</option>
                </select>
              </div>
              <div class="input-field col l6 m6 s12">
                <input id="email" type="email" class="validate input-asegurar">
                <label for="pasword">Nombre del paciente</label>
              </div>
            </div>
            <div class="row nomargin">
              <div class="input-field col l6 m6 s12">
                <input id="email" type="email" class="validate input-asegurar">
                <label for="pasword">Aseguradora solicitada</label>
              </div>
              <div class="input-field col l6 m6 s12">
                <input id="email" type="email" class="validate input-asegurar">
                <label for="pasword">Teléfono de contacto</label>
              </div>
            </div>
            <div class="row nomargin">
              <div class="input-field col l8 m8 s12">
                <textarea id="textarea1" class="materialize-textarea input-asegurar height-textarea margen-0"></textarea>
                <label for="textarea1">Mensaje</label>
              </div>
              <div class="input-field col l4 m4 s12 center top-20 abajo-check">
                <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
<?
}
?>

</section>
<?php endif; ?>
<!-- Archivo de barra lateral por defecto -->
<?php //get_sidebar(); ?>
<!-- Archivo de pié global de Wordpress -->

<?php get_footer(); ?>