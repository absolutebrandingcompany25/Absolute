<?php
session_start();
  $resultado=$_SESSION['rdo'] ;
?><style type="text/css">
  /* Carousel base class */
  .carousel-caption {
      top: 42% !important;
  }
  .carousel2 {
    height: 100vh;
    margin-bottom: 60px;
  }
  .carousel-caption {
    z-index: 10; /* Since positioning the image, we need to help out the caption */
  }

/* Declare heights because of positioning of img element */
  .carousel2 .item {
    height:100vh;
    background-color: #E40F1A;
  }
  .carousel-inner > .item > img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    object-fit:cover;
    object-position: center center;
  }
  .sliderpeque{
    max-height: 485px;
  }
  .secPaddingcuadro2{
    margin-top: 510px !important;
  }
  .enormecontacto{
    color:#ffffff;
    margin-top:90px;
    font-size: 6em !important;
    font-weight: bold;
  }
  .mapa{
    width:100%;
  }
  #consultores{
    background-color: #000000;
  }
  #consultores h2, #ayudamos h2{
    color: #ffffff !important
  }
  #ayudamos{
    background-image: url('vistas/assets/images/fondonosotros.jpg') !important;
    color: #ffffff !important;
  }
  .linea{
    border-right: solid 1px #d3d3d3;
    height:55%;
  }
  @media (max-width: 767px) {
    .enormecontacto{
      font-size: 3.5em !important;
    }
    .secPaddingcuadro2{
      margin-top: 10px !important;
    }
    .linea{
      border-right: none;
      border-bottom: solid 1px #d3d3d3;
      height:5%;
    }
  }
</style><!-- banner start -->
<script src="https://www.google.com/recaptcha/api.js?render=6Ld9GhkaAAAAALtdcJqqWcTWMUgQEiYEceQvt0N7"></script>
<div id="banner" class="banner bannerP">
  <div class="banner-image4"></div>
  <div class="banner-caption">
    <div class="container">
     <div class="row ">
        <div class="col-sm-12">
          <img src="vistas/assets/images/contacto_blanco_grande.png" class="img_responsive" style="margin: auto;">
        </div>

      </div>
    </div>
  </div>
</div>
<!-- banner end -->
<section class="hero-caption secPaddingcuadro1" style="padding: 0;" id="resultado">
  <div class="col-sm-6 planb" style="background-color: #ed1a3b;height:485px;box-shadow: #000000a6 11px 0px 13px 3px!important;padding-top: 50px;padding-right:0px;">
    <h2 class="enormecontacto">¡Dinos hola!<br />
    <i class="fa fa-whatsapp" style="color:#ffffff;"></i> <a href="https://wa.me/986905000?text=Hola" style="color:#ffffff;">986 905000</a>
  </div>
  <div class="col-sm-6 fotofondo" style="background-color: white;height:485px;box-shadow: #000000a6 11px 0px 13px 3px!important;padding:0px; background-repeat: no-repeat;background-size: cover !important;background: url('vistas/assets/images/contacto.jpg');background-position: center;">

  </div>
</section>
    <section class="secPaddingcuadro2" style="padding-top: 20px;">
        <div class="container">
          <div class="row ">
            <div class="col-sm-12" style="padding-bottom: 30px;">
                <h2 style="margin-top:0px;text-align: center;font-size:32px !important;">Contacta con nosotros</h2>
              </div>
            <div class="col-sm-7">
<?php
//print_r($_REQUEST);
//echo $resultado;
    if($resultado != ''){
      if($resultado=='OK')
        echo "GRACIAS POR CONTACTAR CON NOSOTROS";
      if($resultado=='KO')
        echo "¡¡¡ ERROR AL ENVIAR EL FORMULARIO !!! <br/><br/>INTENTA DE NUEVO";
    }else{
?>

<form role="form" id="footer-form" action="/mail.php" method="post">
                  <div class="form-group has-feedback">
                    <label class="sr-only" for="name2">Nombre</label>
                    <input type="text" class="form-control" id="name2" placeholder="Nombre" name="name2" required>
                    <i class="fa fa-user form-control-feedback"></i>
                  </div>
                  <div class="form-group has-feedback">
                    <label class="sr-only" for="email2">Email</label>
                    <input type="email" class="form-control" id="email2" placeholder="Email" name="email2" required>
                    <i class="fa fa-envelope form-control-feedback"></i>
                  </div>
                  <div class="form-group has-feedback">
                    <label class="sr-only" for="phone2">Telefono</label>
                    <input type="phone" class="form-control" id="phone2" placeholder="Telefono" name="phone2" required>
                    <i class="fa fa-phone form-control-feedback"></i>
                  </div>
                  <div class="form-group has-feedback">
                    <label class="sr-only" for="message2">Mensaje</label>
                    <textarea class="form-control" rows="8" id="message2" placeholder="Mensaje" name="message2" required></textarea>
                    <i class="fa fa-pencil form-control-feedback"></i>
                  </div>
                  <!--input type="submit" value="Enviar" class="btn btn-default"!-->
                  <input type="submit" value="Enviar" />

</form>
<script>
    $('#footer-form').submit(function(event) {
        event.preventDefault();
        var name2 = $('#name2').val();
        var email2 = $('#email2').val();
        var phone2 = $('#phone2').val();
        var message2 = $('#message2').val();

        grecaptcha.ready(function() {
            grecaptcha.execute('6Ld9GhkaAAAAALtdcJqqWcTWMUgQEiYEceQvt0N7', {action: 'subscribe_newsletter'}).then(function(token) {
                $('#footer-form').prepend('<input type="hidden" name="token" value="' + token + '">');
                $('#footer-form').prepend('<input type="hidden" name="action" value="subscribe_newsletter">');
                $('#footer-form').unbind('submit').submit();
            });;
        });
  });
  </script>
<?php
    };
?>
            </div>

            <div class="col-sm-5">
              <div class="widget-content">
                <p style="font-size: 14px; text-align: justify;">
                  Contactar con nosotros es el primer paso para crear una gran marca. Seguro que será un pequeño paso para ti, pero significará un gran salto para tu empresa.<br />
                  En Absolute Co. estaremos encantados de escucharte y brindarte toda nuestra ayuda para llevar a cabo tu proyecto con éxito.
                </p>
                <p style="font-size: 14px; text-align: justify;;">
                  Puedes llamarnos por teléfono, envíanos un email o si lo prefieres…
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

    <section class="hero-caption secPaddingcuadro3 quees" id="consultores">
      <div class="container" style="width: 100% !important;">
       <div class="row" >
        <div class="col-sm-12" style="padding-left:0px !important;">
              <h2 class="grande">
                …¡VEN A VISITARNOS Y TE INVITAMOS A UN CAFÉ!
              </h2></div>
        </div>
      </div>
    </section>
        <!-- section start -->
      <section class="secPaddingcuadro4">
          <div class="container">
            <div class="row">
              <div class="col-sm-5" >
                <p style="font-size:14px;">
                  Absolute Madrid<br />
                  Paseo de la Castellana, 123<br />
                  28046 Madrid<br />
                  <i class="fa fa-phone" aria-hidden="true"></i> 917 379797
                </p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3035.772003017145!2d-3.693040084564204!3d40.458182979360345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42291c8e8e28b5%3A0x77e304beec1908e8!2sPaseo%20de%20la%20Castellana%2C%20123%2C%2028046%20Madrid!5e0!3m2!1ses!2ses!4v1609244007710!5m2!1ses!2ses" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
              <div class="col-sm-1 linea">&nbsp;</div>
              <div class="col-sm-1">&nbsp;  </div>
              <div class="col-sm-5">
                <p style="font-size:14px;">
                  Absolute Vigo<br />
                  Av. Gran Vía, 128<br />
                  Vigo 36203 Pontevedra<br />
                  <i class="fa fa-phone" aria-hidden="true"></i> 986 160451
                </p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2954.584841480962!2d-8.726991084310425!3d42.223316951718324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2f6274a2ed404d%3A0x84b5c460f3d578d0!2sAv.%20da%20Gran%20V%C3%ADa%2C%20128%2C%2036203%20Vigo%2C%20Pontevedra!5e0!3m2!1ses!2ses!4v1606473269896!5m2!1ses!2ses" class="mapa" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <p>

                </p>

              </div>
            </div>
          </div>
      </section>


      <section class="hero-caption secPaddingcuadro5 quees" id="ayudamos">
      <div class="container" style="width: 95% !important;">
       <div class="row">
        <div class="col-sm-5" style="padding-left:0px !important;">
              <h2 class="grande izda">
                ¿QUIERES FORMAR PARTE DE NUESTRO EQUIPO?
              </h2>
            </div>
            <div class="col-sm-7">
              <p style="text-align: justify;padding-top: 45px;font-size:14px;">
                En absolute nos gusta contar en todo momento con los mejores profesionales del mercado, atrayendo, cuidando y reteniendo el talento como única forma de garantizar el crecimiento de nuestra compañia.<br />
                Nuestra firma te abre sus puertas, siempre estamos dispuestos a recibir y desarrollar nuevos talentos, incluso mientras terminas tus estudios.<br />
                Envíanos tu curriculum a rrhh@absolutebrandingcompany.com
            </p>
            </div>
        </div>
      </div>
    </section>
</section>
        <!-- section end -->
<?php
session_destroy();
?>