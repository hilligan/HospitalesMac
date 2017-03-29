<footer>
  <div class="row nomargin shadow-footer">
    <div class="col l12 s12">
      <div class="col l8 offset-l2 s12">
        <div class="col l12 s12 pleca-direccion nomargin">
          <div class="col l4 s12 nomargin">
            <div class="col l2 s2 nomargin top-20">
              <img src="<?php bloginfo('stylesheet_directory');?>/images/recursos/direccion-footer.png" alt="">
            </div>

            <?
            if(get_field('direccion_hospital', 196)){
              $direccion = get_field('direccion_hospital', 196);
              $telefono = get_field('telefono_hospital', 196);
              $email = get_field('email_hospital', 196);
            }elseif(get_field('direccion_hospital', 81)){
              $direccion = get_field('direccion_hospital', 81);
              $telefono = get_field('telefono_hospital', 81);
              $email = get_field('email_hospital', 81);
            }else{
              $direccion = "Hospitales MAC";
              $telefono = "";
            }
          ?>
            <div class="col l8 s10">
              <p class="direccion-footer"><?=$direccion?></p>
            </div>
          </div>
          <div class="col l4 s12 nomargin">
            <div class="col l2 s2 nomargin top-20">
              <img src="<?php bloginfo('stylesheet_directory');?>/images/recursos/telefono-footer.png" alt="">
            </div>
            <div class="col l8 s10">
              <a href="tel:<?=$telefono?>"><p class="telefono-footer">
                <?=$telefono?><br>
                  URGENCIAS (24/7)</strong>
              </p></a>
            </div>
          </div>
          <div class="col l4 s12 nomargin">
            <div class="col l2 s2 nomargin top-20">
              <img src="<?php bloginfo('stylesheet_directory');?>/images/recursos/correo-footer.png" alt="">
            </div>
            <div class="col l8 s10">
              <p class="correo-footer">
                <?=$email?><br>
                <strong>CORREO ELECTRÓNICO</strong>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col l12 s12 top-50">
      <div class="col l3 s12">
        <div class="col l12 s12 logo-footer center">
          <img class="hide-on-small-only" width="200px;" src="<?php bloginfo('stylesheet_directory');?>/images/slider/logo-slider.svg" alt="">
          <p class="nomargin">
            Hospitales <?=get_field('nombre_hospital', 4);?></p>
        </div>
      </div>
      <div class="col l3 s12 lista-footer hide-on-small-only">
        <div class="col l12 s12">
          <p><span>H</span>ospitales <?=get_field('nombre_hospital', 4);?></p>
        </div>
        <div class="col l6">
          <?php 
            wp_nav_menu( array(
                'theme_location' => 'footer-hospital',
                'link_before' => '<i class="fa fa-angle-right" aria-hidden="true"></i> '
            ) );
          ?>
        </div>
        <div class="col l6">
          <?php 
            wp_nav_menu( array(
                'theme_location' => 'footer-hospital-secundario',
                'menu_class'     => 'margen-0',
                'link_before' => '<i class="fa fa-angle-right" aria-hidden="true"></i> '
            ) );
          ?>
        </div>
      </div>
      <div class="col l3 s12 lista-footer">
        <div class="col l12 s12 center-responsive">
          <p><span>h</span>ospitales</p>
        </div>
        <div class="col l12 s12">
          <?php 
            wp_nav_menu( array(
                'theme_location' => 'menu-nuestros-hos',
                'menu_class'     => 'margen-0',
                'link_before' => '<i style="font-size:5px;" class="fa fa-circle" aria-hidden="true"></i> '
            ) );
          ?>
        </div>
      </div>
      <div class="col l3 s12">
        <div class="col l12 s12 lista-footer center-responsive hide-on-small-only hide-on-med-only oculto">
          <p><span>n</span>ewsletter</p>
        </div>
        <div class="col l12 s12 nomargin ">
          <div class="row center margen-0 nomargin">
            <form class="col s12 nomargin">
              <div class="row top-20 margen-0">
                <div class="input-field col l6 m9 s6 nomargin">
                  <input id="email" type="email" class="validate">
                  <label for="email">Correo electrónico</label>
                </div>
                <div class="col l4 m3 s2 nomargin">
                  <a data-toggle="modal" data-effect="expand-vert" data-name="newsletter.php"><button style="height:3.1em;" class="btn waves-effect waves-light" type="submit" name="action">SUSCRIBETE</button></a>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col l12 s12 lista-footer center-responsive">
          <p style="text-transform:capitalize">Mantente Conectado</p>
        </div>
        <div class="col l12 s12 center-responsive">
          <div class="footer-sociales">
            <a href="<?=get_field('facebook', 196);?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/images/recursos/face.png" alt=""></a>
            <a href="<?=get_field('twitter', 196);?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/images/recursos/twitter.png" alt=""></a>
            <a href="<?=get_field('pinterest', 196);?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/images/recursos/print.png" alt=""></a>
            <a href="<?=get_field('youtube', 196);?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/images/recursos/you.png" alt=""></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col l12 s12 center copy-footer responsive-20">
      <p><strong>Hospitales MAC ©</strong>2017. Todos los derechos reservados ®</p>
    </div>
  </div>
</footer>

  <!--Import jQuery before materialize.js-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNTSMEOij97Zpc3vSSkP1pXOIWg8tH-gA"></script>
  <script src="<?php bloginfo('stylesheet_directory');?>/js/jquery2.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/js/materialize.min.js"></script>
  <script src="<?php bloginfo('stylesheet_directory');?>/js/wow.min.js"></script>
  <script src="<?php bloginfo('stylesheet_directory');?>/js/jquery.bxslider.js"></script>
  <!-- <script src="js/maps.js"></script> -->
  <script src="<?php bloginfo('stylesheet_directory');?>/js/maps-aguascalientes.js"></script>

  <script src="<?php bloginfo('stylesheet_directory');?>/js/velocity.ui.min.js"></script>
  <script src="<?php bloginfo('stylesheet_directory');?>/js/velocity.min.js"></script>
  <script src="<?php bloginfo('stylesheet_directory');?>/js/swiper.js"></script>



<script>
  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
    });
</script>

<script>
  new WOW().init();
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $(".button-collapse").sideNav();
  });
</script>

<script>
$('.bxslider').bxSlider({
  mode: 'horizontal',
  });
</script>

<script>
  $(document).ready(function(){
    $('.slider5').bxSlider({
      slideWidth: 550,
      minSlides: 1,
      maxSlides: 3,
      moveSlides: 3,
      slideMargin: 10,
      pager:false,
    });
  });
</script>

<script>
    $(document).ready(function(){
    $('.slider4').bxSlider({
      auto:false,
      slideWidth: 400,
      minSlides: 1,
      maxSlides: 5,
      slideMargin: 0,
      pager:false,
      nextSelector: '#slider-next',
      prevSelector: '#slider-prev',
      nextText: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
      prevText: '<i class="fa fa-angle-left" aria-hidden="true"></i>'
    });
  });
</script>

<script>
$(document).ready(function(){
  $('.collapsible').collapsible();
});
</script>

<script>
  $(document).ready(function(){
      $('.carousel').carousel();
    });
</script>

</body>
</html>