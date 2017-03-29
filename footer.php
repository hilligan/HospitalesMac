  <footer>
    <div class="row nomargin">
      <div class="col l12 s12 top-20">
        <div class="col l4 s12 m6 footer-menu hide-on-small-only">
          <div class="col l12 s12 center">
            <p><strong>hospitales mac</strong></p>
          </div>
          <?php 
            wp_nav_menu( array(
                'theme_location' => 'menu-hos-mac',
                'menu_class'     => 'col l12 s12 top-20'
            ) );
          ?>
        </div>
        <div class="col l5 s12 m6 footer-menu2">
          <div class="col l12 s12 center">
            <p><strong>NUESTROS HOSPITALES</strong></p>
          </div>

            <?php 
            wp_nav_menu( array(
                'theme_location' => 'menu-nuestros-hos',
                'menu_class'     => 'col l12 s12 menu-footer center top-20'
            ) );
            ?>
        </div>
        <div class="col l3 s12 m8 offset-m2">
          <div class="col l12 s12 footer-menu2 center">
            <p><strong>SUSCRÍBETE A NUESTRO NEWSLETTER</strong></p>
          </div>
          <div class="col l12 s12 nomargin">
            <div class="row">
              <form class="col s12 nomargin">
                <div class="row top-20">
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
        </div>
      </div>
    </div>
    <div class="row nomargin sociales-footer">
      <div class="col l4 s12 center correo">
        <p>contacto@hospitalesmac.com </p>
      </div>

      <?php 
        wp_nav_menu( array(
            'theme_location' => 'footerRedes',
            'menu_class'     => 'col l4 s12 center'
        ) );
      ?>
      <div class="col l4 s12 center">
        <p>
          <a href="https://www.facebook.com/HospitalMAC" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="https://twitter.com/hospitalesmac" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href="https://es.pinterest.com/" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
          <a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
        </p>
      </div>
      <div class="col l4 s12 center correo">
          <p>© 2017 Todos Los Derechos Reservados.</p>
      </div>
    </div>
  </footer>

  <!--Import jQuery before materialize.js-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNTSMEOij97Zpc3vSSkP1pXOIWg8tH-gA&sensor=false"></script>
  <script src="<?php bloginfo('stylesheet_directory');?>/js/jquery2.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/js/materialize.min.js"></script>
  <script src="<?php bloginfo('stylesheet_directory');?>/js/wow.min.js"></script>
  <script src="<?php bloginfo('stylesheet_directory');?>/js/jquery.bxslider.js"></script>
  <!-- <script src="js/maps.js"></script> -->
  <script src="<?php bloginfo('stylesheet_directory');?>/js/maps-aguascalientes.js"></script>
  <script src="<?php bloginfo('stylesheet_directory');?>/js/maps-irapuato.js"></script>
  <script src="<?php bloginfo('stylesheet_directory');?>/js/maps-guadalajara.js"></script>
  <script src="<?php bloginfo('stylesheet_directory');?>/js/maps-celaya.js"></script>
  <script src="<?php bloginfo('stylesheet_directory');?>/js/velocity.ui.min.js"></script>
  <script src="<?php bloginfo('stylesheet_directory');?>/js/velocity.min.js"></script>
  <script src="<?php bloginfo('stylesheet_directory');?>/js/swiper.js"></script>

  <script>
  $(document).ready(function() {
    $('select').material_select();
    });
  </script>
  <script>
  $(document).ready(function() {
    Modal.init();
    });

    var Modal = {
    effects : [
      'expand-vert',
    ],

    init: function() {
    $('a[data-toggle=modal]').on('click', function(e) {
      e.stopPropagation();
      e.preventDefault();
      var nombre= $(this).attr("data-name");

      $( ".modal-body" ).load( nombre );

      $('#effect-name').html($(this).text());

      var effect = $(this).attr('data-effect');
      $('.modal').addClass(effect).addClass('show').removeClass('hiding');
      $('body').addClass('modal-open');
      $('body').addClass('modal-' + effect);

      var h = $('.modal-dialog').height();
      $('.modal-dialog').css({
        'margin-top': '-' + parseInt(h / 2) + 'px'
      });
    });

    $(document).on('click',".cierrate-porfavor", function(e) {
      $('.modal').removeClass('show').addClass('hiding');

      setTimeout(function() {
        for(var i = 0; i < Modal.effects.length; i++) {
          $('.modal').removeClass(Modal.effects[i]);
          $('body').removeClass('modal-' + Modal.effects[i]);
        }

        $('.modal').removeClass('hiding');
        $('body').removeClass('modal-open');
      }, 250);
    });
  }
  };
  </script>

  <script>
  $(window).load(function() {
  setTimeout(function() {
  $('#preloader').velocity({
    opacity: 0.1,
    translateY: "0px"
  }, {
    duration: 300,
    complete: function() {
      $('#hola').velocity({
        translateY: "-100%"
      }, {
        duration: 800,
        easing: [0.7, 0, 0.3, 1],
        complete: function() {
          $('.home').addClass('animate-border divide');
        }
      })
    }
  })
  }, 1000)
  })
  </script>

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
    auto:true,
    responsive:true
    });
  </script>

  <script>
      $(document).ready(function(){
      $('.slider4').bxSlider({
        auto:true,
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
      var size= $( window ).width();
      var mac = 450;
      if( size <= 600){
        mac = 310;
      }
      $('.slider5').bxSlider({
        slideWidth: mac,
        minSlides: 1,
        maxSlides: 4,
        moveSlides: 1,
        slideMargin: 10,
        pager:false,
        auto:true,
        responsive:true
      });
    });
  </script>

  <!-- THUMBS -->

  <script>
  $(document).ready(function(){
    $('.bxslider2').bxSlider({
      pagerCustom: '#bx-pager',
      auto:false,
      controls:false,
      slideMargin: 0,
      moveSlides: 1
    });
  });
  </script>

  <script>
  $( document ).ready(function() {
    telefonos();
    $("#phone").change(function() {
      telefonos();
    });

    function telefonos() {
      $("#numeros p").hide();
      var seleccion = $("#phone option:selected").val();
      $("#numeros #"+seleccion).show();
    }

  });
  </script>

  <script>
  $( document ).ready(function() {
    doctor();
    $(".directorio-hospital").change(function() {
      doctor();
    });

    function doctor() {
      var seleccion = $(".directorio-hospital option:selected").val();
      if(seleccion != "hospital"){
        $(".perfiles > div").hide();
        $(".perfiles ."+seleccion).show();
      }
    }

  });
  </script>

  <script>
  $( document ).ready(function() {
    horario();
    $(".directorio-horario").change(function() {
      horario();
    });

    function horario() {
      var seleccion = $(".directorio-horario option:selected").val();
      if(seleccion != "horario"){
        $(".perfiles > div").hide();
        $(".perfiles ."+seleccion).show();
      }
    }

  });
  </script>

  <script>
  $( document ).ready(function() {
    especialidad();
    $(".directorio-especialidad").change(function() {
      especialidad();
    });

    function especialidad() {
      var seleccion = $(".directorio-especialidad option:selected").val();
      if(seleccion != "especialidad"){
        $(".perfiles > div").hide();
        $(".perfiles ."+seleccion).show();
      }
    }

  });
  </script>


  <script>
      var galleryTop = new Swiper('.gallery-top', {
          nextButton: '.swiper-button-next',
          prevButton: '.swiper-button-prev',
          spaceBetween: 0,
          loop:true,
          loopedSlides: 10, //looped slides should be the same
      });
      var galleryThumbs = new Swiper('.gallery-thumbs', {
          spaceBetween: 0,
          slidesPerView: 4,
          touchRatio: 0.2,
          loop:true,
          loopedSlides: 10, //looped slides should be the same
          slideToClickedSlide: true,
          breakpoints: {
           640: {
             slidesPerView: 1,
             spaceBetween: 0,
           }
         }
      });
      galleryTop.params.control = galleryThumbs;
      galleryThumbs.params.control = galleryTop;

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

    <?php wp_footer(); ?>
  </body>
</html>