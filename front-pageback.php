<!-- Archivo de cabecera gobal de Wordpress -->
<?php get_header(); ?>

<!-- Contenido de página de inicio -->
<?php if ( have_posts() ) : the_post(); ?>
<section>
<?php
$slidersHome = get_field('sliderhome');
$textoHospitalesMac = get_field('texto_hospitales_mac');
$linkHospitalesMac = get_field('hospitales_mac');
$botonera = get_field('nuevo_boton');
$nuevaAseguradora = get_field('nueva_aseguradora');
$nuevoHospital = get_field('nuevo_hospital');
$especialidades = get_field('nueva_especialidad');
$cunero_imagen = get_field('imagen_cunero');
$cunero_texto_principal_arriba = get_field('texto_principal_arriba');
$cunero_texto_principal_abajo = get_field('texto_principal_abajo');
$cunero_texto = get_field('texto_cunero');
$cunero_imagen_boton_1 = get_field('imagen_boton_ver_cunero');
$cunero_texto_boton_1 = get_field('texto_boton_ver_cunero');
$cunero_imagen_boton_2 = get_field('imagen_boton_bebe_mac');
$cunero_texto_boton_2 = get_field('texto_boton_bebe_mac');
$cunero_bebe_cunero_1= get_field('imagen_bebe_cunero');
$cunero_bebe_cunero_2 = get_field('imagen_bebe_cunero_2');
$cunero_link_boton_1 = get_field('link_boton_1');
$cunero_link_boton_2 = get_field('link_boton_2');
$checkImagen = get_field('imagen_checkup');
$checkTexto1 = get_field('texto_1');
$checkTexto2 = get_field('texto_2');
$checkTextoBoton = get_field('texto_boton');
$checkLinkBoton = get_field('link_boton');
$especialistaImagen = get_field('imagen_conoce_especialistas');
$especialistaTexto1 = get_field('texto_1_conoce_especialista');
$especialistaTexto2 = get_field('texto_2_conoce_especialista');
$especialistaTexto = get_field('texto_conoce_especialista');
$especialistaTextoBoton = get_field('texto_boton_conoce_especialista');
$especialistaLinkBoton = get_field('link_boton_conoce_especialista');
$mapas = get_field('nuevo_mapa');

?>

<!--MODAL-->
<div class="modal">
  <div class="modal-dialog">
    <div class="modal-body">

    </div>
  </div>
</div>
<!--MODAL-->


<?
if($slidersHome)
{
?>
	<div class="row nomargin">
	    <ul class="bxslider">
	    <?
		foreach($slidersHome as $key => $sliderHome)
		{
		?>
			<li>
				<img class="hide-on-small-only" style="margin-top:-30px;" width="100%" src="<?php echo $sliderHome['slider_grande']['url'];?>" />
	        	<img class="hide-on-large-only hide-on-med-only" style="margin-top:-20px;" width="100%" src="<?php echo $sliderHome['imagen_responsive']['url'];?>" />
	        	<div class="col l12 bg-slider2 nomargin">
					<div class="col l5 nomargin">
						<div class="center logo-slider">
						  <img src="<?=$sliderHome['logo_hospitales_mac']['url'];?>" alt="Hospitales Mac">
						</div>
						<div class="col l12 texto-slider" style="max-width:500px;">
						  <p class="nomargin"><?=($sliderHome['texto_slider_1'])?$sliderHome['texto_slider_1']:'';?><strong><?=($sliderHome['texto_slider_2'])?$sliderHome['texto_slider_2']:'';?></strong></p>
						</div>
						<div class="texto-slider2" style="max-width:500px;">
						  <p><?=($sliderHome['texto_slider_3'])?$sliderHome['texto_slider_3']:'';?><strong><?=($sliderHome['texto_slider_4'])?$sliderHome['texto_slider_4']:'';?></strong></p>
						</div>
					</div>
				</div>
			</li>
		<?
		}
		?>
		</ul>
  	</div>
	<?
}

if($linkHospitalesMac)
{?>

	<div class="row">
    <div class="col l12 m12 s12 padre-80">
      <div class="col l6 m6 s12">
        <div class="titulo-mac" id="nosotros">
          <p class="nomargin">hospitales <strong>mac</strong></p>
        </div>
        <div class="texto-mac">
          <p class="nomargin">
            Contamos con hospitales de las más alta tecnología en las siguientes ciudades:
          </p>
        </div>
        <div class="estados">
          <ul>
            <?
            foreach($linkHospitalesMac as $key => $links)
			{?>
				<a href="<?=($links['link_hospital'])?$links['link_hospital']:'#';?>"><li><?=($links['nombre_hospital'])?$links['nombre_hospital']:'Hospitales Mac';?></li></a>
			<?}
			?>
          </ul>
        </div>
      </div>
      <div class="col l5 offset-l1 m6 s12">
        <div class="col l12 s12">
          <div class="col l2 m3 line-mac"></div>
        </div>
        <div class="col l12 m12 s12 texto-mac2">
          <p><?=($textoHospitalesMac)?$textoHospitalesMac:'Hospitales Mac';?></p>
        </div>
      </div>
    </div>
  </div>
<?
}

if($botonera){
?>
	<div class="row nomargin botonera">
    	<div class="col l12 m12 s12">
    	<?
    		foreach($botonera as $key => $boton)
			{?>
	      		<div class="col l4 m4 s12">
					<div class="col l6 m6 s12 icono-modal">
						 <img src="<?=($boton['imagen_boton']['url'])?$boton['imagen_boton']['url']:'';?>" alt="Hospitales Mac">
					</div>
					<div class="col l6 m6 s12 texto-mac top-20">
					 	<p class="nomargin"><?=($boton['texto'])?$boton['texto']:'';?></p>
					</div>
					<div class="col l12 m12 s12">
					 	<a class="<?=($boton['link_boton'])?$boton['link_boton']:'';?>">
					 		<p class="boton-mac hvr-shutter-out-vertical"><?=($boton['texto_boton'])?$boton['texto_boton']:'';?></p>
					 	</a>
					</div>
				</div>
			<?}
			?>		
		</div>
  	</div>
  	<div class="border-shadow"></div>
<?
}

if($nuevaAseguradora){
?>
  <div class="row nomargin">
    <div class="col l12 s12 center seguros" id="aseguradoras">
      <p class="">
      Seguros Asociados
      </p>
    </div>
  </div>

  <div class="row nomargin contente-marcas">
    <div class="slider4">
	    <?
	    	foreach ($nuevaAseguradora as $key => $aseguradora) {
	    ?>
	    		<a href="#!">
	    			<div class="slide content-seguros center">
						<img src="<?=($aseguradora['imagen_aseguradora']['url'])?$aseguradora['imagen_aseguradora']['url']:'';?>" alt="">
						<p class="center titulo-seguros nomargin"><?=($aseguradora['texto_aseguradora'])?$aseguradora['texto_aseguradora']:'';?></p>
				    </div>
			    </a>
	    <?		
	    	}
	    ?>
    </div>
    <div class="outside">
      <p class="nomargin"><span id="slider-prev"></span><span id="slider-next"></span></p>
    </div>
  </div>
  <div class="row nomargin">
    <div class="col l6 offset-l3 m12 s12 top-50">
      <div class="col l6 m6 s12">
        <a href="asegurar/"><p class="boton-mac2 hvr-shutter-in-horizontal">
          contáctanos
        </p></a>
      </div>
      <div class="col l6 m6 s12">
        <div class="col l12 s12 nomargin aseguradora ">
          <p class="nomargin">
            trabajamos con casi
          </p>
          <p class="nomargin">
            <span>todas las aseguradores</span>
          </p>
          <p class="nomargin">
            <strong>del país</strong>
          </p>
        </div>
      </div>
    </div>
<?
}

if($nuevoHospital){
?>
	<div class="row nomargin">
		<div class="col l12 s12 center seguros" id="hospitales">
			<p>Nuestros Hospitales</p>
		</div>
	</div>
	<div class="row nomargin bg-hospitales">
	    <div class="slider5">
	    <?
		foreach ($nuevoHospital as $key => $hospital) {
		?>
			<a href="<?=($hospital['link_nuevo_hospital'])?$hospital['link_nuevo_hospital']:'';?>">
		        <div class="slide">
			        <img width="100%" src="<?=($hospital['imagen_nuevo_hospital']['url'])?$hospital['imagen_nuevo_hospital']['url']:'';?>">
			        <div class="col l12 s12 bg-slider2 nomargin center">
			          <p class="pleca-slider"><strong>Hospitales MAC </strong><?=($hospital['texto_nuevo_hospital'])?$hospital['texto_nuevo_hospital']:'';?></p>
			        </div>
		        </div>
	     	</a>
	    <?
		}
		?>
		</div>
	</div>
<?
}

if($especialidades){
?>
	<div class="row nomargin">
    	<div class="col l12 s12 center titulo-especialidades" id="especialidades">
			<p>Especialidades</p>
		</div>
	</div>
	<div class="row">
	    <!-- Swiper -->
	    <div class="swiper-container gallery-thumbs">
	        <div class="swiper-wrapper">
				<?
				foreach ($especialidades as $key => $especialidad) {
				?>
					<div class="swiper-slide">
		             	<p class="center titulo-cardiologia nomargin"><?=($especialidad['titulo_especialidad'])?$especialidad['titulo_especialidad']:'';?></p>
		            </div>
			    <?
				}
				?>
	        </div>
	        <!-- Add Arrows -->
	        <div class="swiper-button-next swiper-button-black"></div>
	        <div class="swiper-button-prev swiper-button-black"></div>
	    </div>
	    <div class="swiper-container gallery-top">
        	<div class="swiper-wrapper">
	        	<?
				foreach ($especialidades as $key => $especialidad) {
				?>
					<div class="swiper-slide col l12 nomargin">
						<div class="col l6 m12 s12 nomargin">
							<img width="100%" src="<?=($especialidad['imagen_especialidad']['url'])?$especialidad['imagen_especialidad']['url']:'';?>" alt="Hospitales Mac">
						</div>
						<div class="col l6 m12 s12 nomargin">
							<div class="col l10 offset-l1 m12  s12 info-especialidades top-100 padre-20">
								<p class="nomargin">
									<strong><?=($especialidad['titulo_especialidad'])?$especialidad['titulo_especialidad']:'';?></strong>
								</p>
								<img width="100%" src="images/recursos/line-home.png" alt="Hospitales Mac">
								<p><?=($especialidad['texto_especialidad'])?$especialidad['texto_especialidad']:'';?></p>
							</div>
						</div>
					</div>
			    <?
				}
				?>
        	</div>
		</div>
	</div>
<?
}

if($cunero_imagen){
?>
	<div class="row nomargin content-shadow">
    <div class="col l12 m12 s12 nomargin">
      <div class="col l4 m12 s12 nomargin line-0">
        <img width="100%" src="<?=($cunero_imagen['url'])?$cunero_imagen['url']:'';?>" alt="">
      </div>
      <div class="col l8 m12 s12 top-50">
        <div class="col l12 m12 s12 center mama">
          <p class="nomargin"><?=($cunero_texto_principal_arriba)?$cunero_texto_principal_arriba:'Hospitales Mac';?></p>
          <p class="nomargin">
            <strong><?=($cunero_texto_principal_abajo)?$cunero_texto_principal_abajo:'Hospitales Mac';?></strong>
          </p>
        </div>
        <div class="col l12 m12 s12 top-50">
          <div class="col l6 m12 s12 center logo-bebe">
            <img src="<?=($cunero_bebe_cunero_1['url'])?$cunero_bebe_cunero_1['url']:'';?>" alt="">
          </div>
          <div class="col l5 m12 s12 soy-bebe">
            <p><?=($cunero_texto)?$cunero_texto:'Hospitales Mac';?></p>
            <div style="text-align:right;">
              <img class="ocultar hide-on-med-only" src="<?=($cunero_bebe_cunero_2['url'])?$cunero_bebe_cunero_2['url']:'';?>" alt="Hospitales Mac">
            </div>
          </div>
        </div>
        <div class="col l12 m12 s12 top-20">
          <div class="col l6 m6 s10 offset-s1 center">
            <div class="col l12 m12 s12 boton-bb hvr-grow-shadow">
              <a href="<?=($cunero_link_boton_1)?$cunero_link_boton_1:'#';?>">
                <p class="nomargin "><img src="<?=($cunero_imagen_boton_1['url'])?$cunero_imagen_boton_1['url']:'';?>" alt=""><?=($cunero_texto_boton_1)?$cunero_texto_boton_1:'Hospitales Mac';?></p>
              </a>
            </div>
          </div>
          <div class="col l6 m6 s12 center">
            <div class="col l12 m12 s12 boton-bb2 hvr-grow-shadow">
              <a href="<?=($cunero_link_boton_2)?$cunero_link_boton_2:'#';?>">
                <p class="nomargin"><img style="20px;" src="<?=($cunero_imagen_boton_2['url'])?$cunero_imagen_boton_2['url']:'';?>" alt=""><?=($cunero_texto_boton_2)?$cunero_texto_boton_2:'Hospitales Mac';?></p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="border-shadow"></div>
<?
}

if($checkImagen){
?>
<div class="row nomargin responsive-50 bg-check">
	<div class="col l12 s12">
		<div class="col l12 s12 center top-50">
			<a href="<?=($checkLinkBoton)?$checkLinkBoton:'#';?>"><img src="<?=($checkImagen['url'])?$checkImagen['url']:'';?>" alt=""></a>
		</div>
		<div class="col l12 s12 center check-ups">
			<p class="nomargin"><?=($checkTexto1)?$checkTexto1:'Hospitales Mac';?></p>
			<p class="nomargin">
				<strong><?=($checkTexto2)?$checkTexto2:'Hospitales Mac';?></strong>
			</p>
			<div class="top-50">
				<a href="<?=($checkLinkBoton)?$checkLinkBoton:'#';?>"><span class="boton-mac3"><?=($checkTextoBoton)?$checkTextoBoton:'Hospitales Mac';?></span></a>
			</div>
		</div>
	</div>
</div>
<?
}

if($especialistaImagen){
?>
	<div class="row nomargin">
		<div class="col l12 s12 bg-confia" style="background-image: url(<?=($especialistaImagen['url'])?$especialistaImagen['url']:'';?>);">
			<div class="col l6 offset-l6 m12 s12">
				<div class="col l12 s12 confia center top-100">
					<p class="nomargin"><?=($especialistaTexto1)?$especialistaTexto1:'Hospitales Mac';?></p>
					<p class="nomargin">
					<strong><?=($especialistaTexto2)?$especialistaTexto2:'Hospitales Mac';?></strong>
					</p>
					</div>
					<div class="col l8 offset-l2 m12 s12 texto-mac2">
						<p><?=($especialistaTexto)?$especialistaTexto:'Hospitales Mac';?></p>
					</div>
					<div class="col l12 m12 s12 center">
						<a href="<?=($especialistaLinkBoton)?$especialistaLinkBoton:'Hospitales Mac';?>">
							<p class="boton-mac4 hvr-shutter-in-horizontal"><?=($especialistaTextoBoton)?$especialistaTextoBoton:'Hospitales Mac';?></p>
						</a>
				</div>
			</div>
		</div>
	</div>
<?
}

if($mapas){
?>

<div class="row nomargin content-shadow" id="contacto">
    <div class="col s12 nomargin" style="height:100%;">
	  <div id="bx-pager">
	    <div class="slider5">
	        <?
	        $i=0;
		    foreach ($mapas as $key => $mapa) {
		    ?>
				<a data-slide-index="<?=$i?>" href="">
					<div class="slide content-slide">
						<div class="col l8 offset-l2 m6 offset-m3 s12">
							<div class="border-slider">
								<p class="nomargin hospital-slider">HOSPITALES MAC<?=$i;?></p>
								<p class="nomargin hospital-slider"><?=($mapa['nombre_hospital'])?$mapa['nombre_hospital']:'Hospitales Mac';?></p>
								<p class="nomargin telefono-hospital"><?=($mapa['telefono_hospital'])?$mapa['telefono_hospital']:'Hospitales Mac';?></p>
							</div>
							<p class="nomargin direccion-slider nomargin"><?=($mapa['direccion_hospital'])?$mapa['direccion_hospital']:'Hospitales Mac';?></p>
						</div>
					</div>
				</a>
	    	<?
	    	$i++;		
	    	}
	    	?>
	    </div>
	  </div>
	  <ul class="bxslider2 content-shadow">
		<?
		$n=1;
		foreach ($mapas as $key => $mapa) {
		?>
			<li>
				<div class="col l12 s12 nomargin">
					<div class="col l7 s12 nomargin" style="position:relative;">
						<div class="hospital-mapa">
							<img src="<?=($mapa['imagen_mapa']['url'])?$mapa['imagen_mapa']['url']:'';?>" alt="" >
						</div>
						<div class="mapa2" id="mack-map<?=$n?>"></div>
					</div>
				</div>
			</li>
		<?
		$n++;	
		}
		?>
	  </ul>
	</div>
</div>
<div class="border-shadow"></div>


<?
}
?>
<?php the_content(); ?>
</section>
<?php endif; ?>
<!-- Archivo de barra lateral por defecto -->
<?php //get_sidebar(); ?>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>

