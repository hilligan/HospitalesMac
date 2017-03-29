<?php
/**
 * Template Name: Plantilla de Nuevo Hospital
 */ 
?>

<!-- Archivo de cabecera gobal de Wordpress -->
<?php get_header( 'hospital' ); ?>
<!-- Contenido de página de inicio -->
<?php if ( have_posts() ) : the_post(); ?>
<section>

<?
global $post;

$fondoTop = get_field('fondo_top');
$tituloTop = get_field('titulo_top');
$texto2Top = get_field('texto_2_top');
$texto3Top = get_field('texto_3_top');
$texto4Top = get_field('texto_4_top');

$bienvenidaTitulo = get_field('nombre_hospital');
$bienvenidaTexto = get_field('texto_bienvenida_hospital');
$bienvenidaNombre = get_field('nombre_personal');
$bienvenidaPuesto = get_field('puesto');
$serviciosBienvenida = get_field('servicios_bienvenida');

$mision = get_field('mision');
$vision = get_field('vision');
$valores = get_field('valores');
$imagen_mision = get_field('imagen_mision');
$imagen_vision = get_field('imagen_vision');
$imagen_valores = get_field('imagen_valores');
$fondoMyV = get_field('fondo_mision_y_vision');


$serviciosExtra = get_field('servicios_extra');
$textoServiciosBoton1 = get_field('texto_servicios_extra_boton_1');
$linkServiciosBoton1 = get_field('link_servicios_extra_boton_1');
$textoServiciosBoton2 = get_field('texto_servicios_extra_boton_2');
$linkServiciosBoton2 = get_field('link_servicios_extra_boton_2');

$nuevaAseguradora = get_field('nueva_aseguradora');

$galeria = get_field('galeria_hospital');

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

$fondoOpinion = get_field('background_opinion');
$galeriaOpinion = get_field('galeria_opinion');

$mapaHospital = get_field('imagen_hospital');

if($fondoTop){
?>

	<div class="row">
		<div class="col l12 s12 bg-aguascalientes nomargin" style="background-image: url(<?=($fondoTop['url'])?$fondoTop['url']:'';?>);">
			<div class="col l5 m12 s12 bg-transparencia">
				<div class="col l12 m12 s12 titulo-aguascalientes">
		          <p class="nomargin"><?=($tituloTop)?$tituloTop:'';?></p>
		        </div>
		        <div class="col l12 m12 subtitulo-aguascalientes hide-on-small-only">
		          <p><?=($texto2Top)?$texto2Top:'';?></p>
		        </div>
		        <div class="col l12 m12 s12 subtitulo-aguascalientes2">
		          <p class="nomargin"><?=($texto3Top)?$texto3Top:'';?></p>
		          <p class="nomargin">
		            <strong><?=($texto4Top)?$texto4Top:'';?></strong>
		          </p>
		        </div>
			</div>
		</div>
	</div>

<?
}

if($bienvenidaTitulo){
?>
<div class="row">
    <div class="col l12 s12 top-50" id="nosotros">
    	<div class="col l4 s12">
			<div class="col l12 s12 bienvenidos">
				<p class="nomargin">
					Bienvenido a <span>Hospitales</span>
				</p>
				<p class="nomargin">
					<strong><?=($bienvenidaTitulo)?$bienvenidaTitulo:'';?></strong>
				</p>
			</div>
			<div class="col l12 s12 informacion-hospital">
				<p><?=($bienvenidaTexto)?$bienvenidaTexto:'Hospitales MAC';?></p>
				<p class="nomargin">
					<strong><?=($bienvenidaNombre)?$bienvenidaNombre:'Nombre';?></strong>
				</p>
				<p class="nomargin"><?=($bienvenidaPuesto)?$bienvenidaPuesto:'Nombre';?></p>
				<p class="nomargin"><?=($bienvenidaTitulo)?$bienvenidaTitulo:'';?></p>
			</div>
			<?
			$cuentaServicios=1;
			$total = count($serviciosBienvenida);
			if ($total <= 8) {
		    	?>
		    		</div>
		    		<div class="col l4 s12">
		    	<?
		    }
			foreach ($serviciosBienvenida as $key => $servicios) {
			?>
				<div class="col l12 m6 top-20 iconos-servicios">
		          <div class="col l2 s12">
		            <a class="hvr-float-shadow <?=($servicios['link_servicio'])?$servicios['link_servicio']:'Servicios';?>"><img  src="<?=($servicios['imagen_servicio']['url'])?$servicios['imagen_servicio']['url']:'Servicios';?>" alt=""></a>
		          </div>
		          <div class="col l10 s12">
		            <p class="nomargin center-responsive">
		              <strong><?=($servicios['titulo_servico'])?$servicios['titulo_servico']:'Servicios';?></strong>
		            </p>
		            <p><?=($servicios['descripcion_servicio'])?$servicios['descripcion_servicio']:'';?>
		            	<a class="<?=($servicios['link_servicio'])?$servicios['link_servicio']:'';?>">
		            	<span>[LEER MÁS]</span></a>
		            </p>
		          </div>
		        </div>
		    <?
		    if ($total <= 8 && $cuentaServicios == 4) {
	    	?>
	    		</div>
	    		<div class="col l4 s12">
	    	<?
		    }
		    if(($cuentaServicios == 2 || $cuentaServicios == 7) && $total > 8){
		    ?>
		    	</div>
		    	<div class="col l4 s12">
		    <?	
		    }
		    $cuentaServicios++;
			}
			?>
		</div>
	</div>
</div>
<?
}

if($mision){
?>
<div class="row nomargin">
	<div class="col l12 s12 hospital-aguascalientes">
		<div class="col l3 m8 offset-m2 s12 center-responsive dr">
			<img src="<?=($fondoMyV['url'])?$fondoMyV['url']:'';?>" alt="Hospitales Mac">
		</div>
		<div class="col l4 m10 offset-m1 s12 bg-palabras">
			<div class="col l12 s12 top-100">
				<div class="col l12 s12 pocas-palabras nomargin">
					<p class="nomargin"><strong>Nuestro Hospital</strong> en pocas palabras</p>
				</div>
			</div>
			<div class="col l2 s12 icono-palabras center">
				<img width="40px" src="<?=($imagen_mision['url'])?$imagen_mision['url']:'';?>" alt="">
			</div>
			<div class="col l10 s12 informacion-hospital">
				<p>
					<strong>Nuestra Misión:</strong> <?=($mision)?$mision:'Misión';?>
				</p>
			</div>
			<div class="col l2 s12 icono-palabras center">
				<img width="60px;" src="<?=($imagen_vision['url'])?$imagen_vision['url']:'';?>" alt="">
			</div>
			<div class="col l10 s12 informacion-hospital">
				<p>
					<strong>Nuestra Visión:</strong> <?=($vision)?$vision:'Visión';?>
				</p>
			</div>
			<div class="col l2 s12 icono-palabras center">
				<img width="60px;" src="<?=($imagen_valores['url'])?$imagen_valores['url']:'';?>" alt="">
			</div>
			<div class="col l10 s12 informacion-hospital">
				<p class="nomargin">
					<strong>Valores:</strong>
				</p>
				<div class="col l6 m6 s6 informacion-hospital">
					<?
					$divide = count($valores)/2;
					$n=1;
					foreach ($valores as $key => $valor) {
					?>
						<p class="nomargin"><?=($valor['valor_hospital'])?$valor['valor_hospital']:'Valores';?></p>
					<?	
						if($n>=$divide && $divide!=0){
						?>	
							</div>
							<div class="col l6 m6 s6 informacion-hospital">
						<?
						$divide=0;
						}
						$n++;
					}
					?>
				</div>
			</div>
		</div>
		<div class="col l5 m10 offset-m1 s12 especialista-aguascalientes">
			<div class="col l12 s12 marco-palabras">
				<div class="col l12 s12 pocas-palabras center top-50">
					<p><strong>TAMBIÉN CONTAMOS CON</strong></p>
				</div>
				<div class="col l5 offset-l1 s12 areas">
					<ul class="margen-0">
						<?
						$divideSE = count($serviciosExtra)/2;
						$d=1;
						foreach ($serviciosExtra as $key => $servicio) {
						?>
							<li class="left-list"><i class="fa fa-check" aria-hidden="true"></i> <?=($servicio['servicio_extra'])?$servicio['servicio_extra']:'Valores';?></li>
						<?	
							if($d>=$divideSE && $divideSE!=0){
							?>	
								</ul>
							</div>
							<div class="col l6 s12 areas">
								<ul class="margen-0">
							<?
							$divideSE=0;
							}
							$d++;
						}
						?>
					</ul>
				</div>

				<div class="col l12 s12 center">
					<a href="<?=($linkServiciosBoton1)?$linkServiciosBoton1:'';?>"><p class="boton-1"><?=($textoServiciosBoton1)?$textoServiciosBoton1:'';?></p></a>
					<a href="<?=($linkServiciosBoton2)?$linkServiciosBoton2:'';?>"><p class="boton-2"><?=($textoServiciosBoton2)?$textoServiciosBoton2:'';?></p></a>
				</div>
			</div>
		</div>
	</div>
</div>
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
        <a href="asegurar.php"><p class="boton-mac2 hvr-shutter-in-horizontal">
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

if($galeria){
?>
  <div class="col l12 s12 center seguros">
      <p>Nuestros Hospitales</p>
    </div>
  <div class="row nomargin" id="galeria">
    <div class="col l12 s12 center bienvenidos">
      <p class="nomargin">
        Conoce el interior de
      </p>
      <p class="nomargin">
        <strong style="border:none;"><?=($bienvenidaTitulo)?$bienvenidaTitulo:'';?></strong>
      </p>
    </div>
    <div class="col l12 s12 center informacion-hospital">
      <p class="nomargin">
        En Hospitales MAC, te atenderemos en las mejores instalaciones,
      </p>
      <p class="nomargin">
        queremos que nos conozcas, recorre nuestro Hospital.
      </p>
    </div>
  </div>

  <div class="row nomargin hide-on-small-only">
    <div class="col l10 offset-l1 s12 center">
      <div class="col l10 offset-l2 s12">
        <div class="col l2 m6 s12">
          <a href="#"><p class="boton-select">
            Todas
          </p></a>
        </div>
        <div class="col l2 m6 s12">
          <a href="#"><p class="boton-select">
            Exteriores
          </p></a>
        </div>
        <div class="col l2 m6 s12">
          <a href="#"><p class="boton-select">
            Interiores
          </p></a>
        </div>
        <div class="col l2 m6 s12">
          <a href="#"><p class="boton-select">
            Habitaciones
          </p></a>
        </div>
        <div class="col l2 m6 offset-m3 s12">
          <a href="#"><p class="boton-select">
            Quirofanos / Salas
          </p></a>
        </div>
      </div>
    </div>
  </div>
  <div class="row nomargin top-50">
		<div class="col s10 offset-s1 hide-on-large-only hide-on-med-only">
			<select class="browser-default select-galeria">
			 <option value="" disabled selected><i class="fa fa-globe" aria-hidden="true"></i>Todas</option>
			 <option value="1">Exteriores</option>
			 <option value="2">Interiores</option>
			 <option value="3">Habitaciones</option>
			 <option value="3">Quirofanos / Salas</option>
		 </select>
		</div>
	</div>
	<div class="row nomargin">
	    <div class="col l12 s12 galeria center">

		<?
		// $divGale = count($galeria)/2;
		 $num = 1;

		foreach ($galeria as $key => $gale) {
		?>
				<div class="col l3 m6 s12">
					<div class="col l3 m6 s12 hover-galery left-0">
						<p class="center"><?=($gale['title'])?$gale['title']:'';?></p>
						<img class="lupa" src="<?php bloginfo('stylesheet_directory');?>/images/recursos/lupa.png" alt="Hospitales MAC">
					</div>
		        <img class="materialboxed" data-caption="<?=($gale['title'])?$gale['title']:'';?>" src="<?=($gale['url'])?$gale['url']:'';?>" alt="">
		    </div>
		<?
			if(($num % 4) == 0){
			?>
				</div>
    			<div class="col l12 s12 galeria top-50 center">
			<?
			}
		$num++;
		}
		?>
		</div>
	</div>
<?
}

if($cunero_imagen){
?>

	<div class="row nomargin">
		<div class="col l12 m12 s12 nomargin top-50">
			<div class="col l8 m12 s12 top-50" id="cunero">
				<div class="col l12 m12 s12 center mama">
					<p class="nomargin"><?=($cunero_texto_principal_arriba)?$cunero_texto_principal_arriba:'Hospitales Mac';?></p>
					<p class="nomargin">
						<strong><?=($cunero_texto_principal_abajo)?$cunero_texto_principal_abajo:'Hospitales Mac';?></strong>
					</p>
				</div>
				<div class="col l12 m12 s12 top-50">
					<div class="col l6 m6 s12 center logo-bebe">
						<img src="<?=($cunero_bebe_cunero_1['url'])?$cunero_bebe_cunero_1['url']:'';?>" alt="">
					</div>
					<div class="col l5 m6 s12 soy-bebe">
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
          <div class="col l6 m6 s10 offset-s1 center">
            <div class="col l12 m12 s12 boton-bb2 hvr-grow-shadow">
              <a href="<?=($cunero_link_boton_2)?$cunero_link_boton_2:'#';?>">
                <p class="nomargin"><img style="20px;" src="<?=($cunero_imagen_boton_2['url'])?$cunero_imagen_boton_2['url']:'';?>" alt=""><?=($cunero_texto_boton_2)?$cunero_texto_boton_2:'Hospitales Mac';?></p>
              </a>
            </div>
          </div>
        </div>
			</div>
			<div class="col l4 m12 s12 nomargin top-bebe">
				<img width="100%" src="<?=($cunero_imagen['url'])?$cunero_imagen['url']:'';?>" alt="">
			</div>
		</div>
	</div>
<?
}

$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1));

if($wpb_all_query->have_posts()){
?>

<div class="row nomargin top-100">
	<div class="col l12 s12 center bienvenidos" id="noticias">
		<p class="nomargin">Noticias Hospitales</p>
		<p class="nomargin"><strong style="border:none;"><?=($bienvenidaTitulo)?$bienvenidaTitulo:'Hospitales MAC';?></strong></p>
	</div>
</div>

<div class="row nomargin top-100">
	<div class="slider5">
	<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); 
	?>
		<div class="slide">
			<div class="col l12 s12 slider-aguascalientes">
				<div class="col l12 s12 center">
					<?php  
					$imagen = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
					$ruta_imagen = $imagen[0];
					?>
					<img src="<?=$ruta_imagen?>" alt="<?=($bienvenidaTitulo)?$bienvenidaTitulo:'Hospitales MAC';?>">
				</div>
				<div class="col l12 s12" style="padding-bottom:50px">
					<div class="col l5 s6 comentarios">
						<p><i class="fa fa-comment-o" aria-hidden="true"></i> Comentarios (<?=get_comments_number();?>)</p>
						<p><i class="fa fa-comment-o" aria-hidden="true"></i> Favorito (11)</p>
						<p><i class="fa fa-share-alt" aria-hidden="true"></i> Compartir(12)</p>
					</div>
					<a href="<?php the_permalink(); ?>" style="color:white;"><div class="col l7 slider-blog">
						<p>
						 <strong><?php the_title(); ?></strong>
						</p>
						<p><span><?php the_date(); ?></span></p>
						<p><? the_excerpt();?></p>
					</div></a>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
	</div>
</div>

<?
}

if($checkImagen){
?>
<div class="row nomargin responsive-50 top-50">
	<div class="col l12 s12 bg-check">
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

if($fondoOpinion){
?>

<div class="row nomargin content-shadow">
	<div class="col s12 bg-fb" style="background-image: url(<?=($fondoOpinion['url'])?$fondoOpinion['url']:'';?>);">
		<div class="col l12 s12 center bienvenidos">
			<p class="nomargin"><strong style="border:none;">¿Qué dicen los pacientes</strong></p>
	      <p class="nomargin">de nosotros?</p>
	    </div>
		<div class="carousel">
			<?
			$op=1;
			foreach ($galeriaOpinion as $key => $galeOp) {
			?>
				<a class="carousel-item" href="#<?=$op?>!"><img src="<?=($galeOp['url'])?$galeOp['url']:'';?>"></a>
			<?
			$op++;
			}
			?>
		</div>
	</div>
</div>
<div class="border-shadow"></div>
<?
}

if($mapaHospital){

	if($pos = strpos($bienvenidaTitulo, 'Aguascalientes')){
		$macMap = "mack-map1";
	}elseif ($pos = strpos($bienvenidaTitulo, 'Celaya')) {
		$macMap = "mack-map2";
	}elseif ($pos = strpos($bienvenidaTitulo, 'Guadalajara')) {
		$macMap = "mack-map3";
	}elseif ($pos = strpos($bienvenidaTitulo, 'Irapuato')) {
		$macMap = "mack-map4";
	}

?>
	<div class="row nomargin">
		<div class="col l12 s12 nomargin responsive-50" id="contacto" style="position:relative;">
			<!--div class="hospital-mapa" style="text-align:left;">
				<img src="<?=($mapaHospital['url'])?$mapaHospital['url']:'';?>" alt="">
			</div-->
			<div class="mapa2" id="<?=$macMap?>"></div>
		</div>
	</div>
<?
}

?>

	
<?php //the_content(); ?>

</section>
<?php endif; ?>
<!-- Archivo de barra lateral por defecto -->
<?php //get_sidebar(); ?>
<!-- Archivo de pié global de Wordpress -->

<?php get_footer('hospital'); ?>