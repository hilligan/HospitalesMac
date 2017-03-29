<?php

/**
 * Crear nuestros menús gestionables desde el 
 * administrador de Wordpress.
 */

function menus() {
  register_nav_menus(
    array(
      'header-menu-top' => 'Header Menu Top',
      'header-menu' => 'Header Menu',
      'footer-menu' => 'Footer Menu',
      'menu-hos-mac' => 'Menu Hospitales Footer',
      'menu-nuestros-hos' => 'Menu Nuestros Hospitales',
      'footerRedes' => 'Redes Sociales Footer',
      'header-hospital' => 'Menu Header Hospital',
      'header-hospital-secundario' => 'Menu Header Hospital Secundario',
      'footer-hospital' => 'Menu Footer Hospital',
      'footer-hospital-secundario' => 'Menu Footer Hospital Secundario'
    )
  );
}
add_action( 'init', 'menus' );

/**
 * Crear una zonan de widgets que podremos gestionar
 * fácilmente desde administrador de Wordpress.
 */
 
function widgets(){
  register_sidebar(
    array(
    	'name'          => __( 'Sidebar' ),
    	'id'            => 'sidebar',
    	'before_widget' => '<div class="widget">',
    	'after_widget'  => '</div>',
    	'before_title'  => '<h3>',
    	'after_title'   => '</h3>',
    )
  );
}
add_action('init','widgets');

/**
 * Filtrar resultados de búsqueda para que solo muestre 
 * posts en el listado
 */

function buscar_solo_posts($query) {
  if($query->is_search) {
    $query->set('post_type','post');
  }
  return $query;
}
add_filter('pre_get_posts','buscar_solo_posts');

add_theme_support( 'post-thumbnails' );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return '[...]';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );