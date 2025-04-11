<style type="text/css">
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
  .planb{
    height:485px;
  }
  #quote-carousel2{
    margin-top: 55px;
  }
  @media (max-width: 768px) {
    .infografia{
      padding: 0px 50px 0px 50px;
    }
  }
  @media (max-width: 630px) {
    .infografia{
      padding: 0px 10px 0px 10px;
    }
    .planb{
      height:300px;
    }
  }
  #frasesA {
    background-image: url('vistas/assets/images/fotonosotrosfrase.jpg') !important;
    background-position: center top !important;
  }

</style><!-- banner start -->
<div id="banner" class="banner bannerP">
  <div class="banner-image13"></div>
  <div class="banner-caption">
    <div class="container">
     <div class="row ">
        <div class="col-sm-12">
          <img src="vistas/assets/images/nosotros_blanco_grande.png" class="img_responsive" style="margin: auto;" alt="sobre absolute">
        </div>

      </div>
    </div>
  </div>
</div>
<!-- banner end -->
    <section class="hero-caption secPaddingcuadro1 quees" id="ayudamos">
      <div class="container">
       <div class="row"><div class="col-sm-5" style="padding-left:0px !important;">


        <h2 class="grande izda">
                THE<br />MARKETING<br />
                COMPANY
              </h2>
            </div>
            <div class="col-sm-7">
              <p style="text-align: justify;padding-top: 40px;font-size:14px;">Absolute Co. es una Consultora de Marketing Estratégico que dispone de una innovadora metodología de trabajo que fusiona diferentes disciplinas que dan como resultado un sistema transversal de desarrollo empresarial. Esto nos convierte en una consultoría de negocios con énfasis en un marketing de marca basado en soluciones y propuestas de valor. Nuestro modelo nace del talento de nuestros profesionales y la experiencia de los años en branding, marketing digital y organización de eventos, lo que nos ha permitido la instauración de una táctica operacional que ha ayudado a triunfar a marcas y empresas, start ups, industrias y pymes.
            </p>
            </div>
        </div>
      </div>
    </section>

<section class="hero-caption secPaddingcuadro2" style="padding: 0;">
  <div class="col-sm-6 planb" style="background-color: #ed1a3b;box-shadow: #000000a6 11px 0px 13px 3px!important;padding-top: 80px;padding-right:0px;">
    <img src="vistas/assets/images/marketing_100.png" style="display: block;margin:0 auto;" alt="100% marketing">
  </div>
  <div class="col-sm-6" style="background-color: white;max-height: 485px;box-shadow: #000000a6 11px 0px 13px 3px!important;padding:0px;">
  <!-- Carousel Start -->
    <div class="col-sm-12" style="padding: 0px;">
      <?php include 'vistas/modulos/quotenosotros.php'; ?>
    </div>
  <!-- Carousel End -->
  </div>
</section>
    <section class="secPaddingcuadro3" style="padding-top: 0px;" id="circulo">
          <img src="vistas/assets/images/nosotros/nosotros.jpg" class="infografia" alt="ayudamos a vender" usemap="#map" id="imagencambiante">
      </section>

    <section class="hero-caption secPaddingcuadro4 quees" id="consultores">
      <div class="container" >
       <div class="row" >
         <div class="col-sm-5" style="padding-left:0px !important;">
              <h2 class="grande izda">
                AYUDAMOS A<br />
                VENDER<br />
                DE VERDAD
              </h2>
            </div>
            <div class="col-sm-7">
              <p style="text-align: justify;padding-top: 35px;font-size:14px;">La misión que perseguimos es ofrecer nuestros servicios y forma de pensamiento para la construcción de soluciones que aporten valor al negocio de nuestros clientes. Las ideas creativas son el combustible con el que se enciende el motor de cualquier proyecto para impulsar cada marca y negocio, pero como nuestra filosofía se encuentra basada en el marketing de resultados, vamos más allá y buscamos la efectividad por encima de todo. Así, nuestras acciones se encuentran directamente orientadas al fortalecimiento del Plan de Marketing y Ventas, alineando la estrategia comercial con la de marketing y aportando además elementos que contribuyen de manera decisiva a la construcción de marca.
            </p>
            </div>
        </div>
      </div>
    </section>
        <!-- section start -->
      <section class="secPaddingcuadro5 frasesA" id="frasesA">
          <div class="container">
            <div class="row">
                <?php include 'vistas/modulos/quotefrasesnosotros.php'; ?>
            </div>
          </div>
      </section>
        <!-- section end -->
<map name="map">
<area shape="poly" coords="893,436,909,341,973,233,1103,358,1071,437" onmouseover="cambia('nosotros/ejecucion')"  style="cursor: pointer;" nohref="nohref" onmouseout="cambia('nosotros/nosotros')" />
<area shape="poly" coords="996,211,1128,338,1204,302,1199,123,1081,149" onmouseover="cambia('nosotros/evaluacion')"  style="cursor: pointer;" nohref="nohref" onmouseout="cambia('nosotros/nosotros')" />
<area shape="poly" coords="1230,124,1232,298,1314,332,1436,201,1343,144" onmouseover="cambia('nosotros/auditoria')"  style="cursor: pointer;" nohref="nohref" onmouseout="cambia('nosotros/nosotros')" />
<area shape="poly" coords="1338,355,1457,228,1519,305,1549,427,1371,433" onmouseover="cambia('nosotros/objetivos')"  style="cursor: pointer;" nohref="nohref" onmouseout="cambia('nosotros/nosotros')" />
<area shape="poly" coords="1371,461,1339,544,1466,666,1524,577,1548,458" onmouseover="cambia('nosotros/indicadores')"  style="cursor: pointer;" nohref="nohref" onmouseout="cambia('nosotros/nosotros')" />
<area shape="poly" coords="1237,601,1313,566,1442,686,1338,755,1239,778" onmouseover="cambia('nosotros/estrategias')"  style="cursor: pointer;" nohref="nohref" onmouseout="cambia('nosotros/nosotros')" />
<area shape="poly" coords="1131,568,1006,698,1096,757,1210,779,1210,603" onmouseover="cambia('nosotros/acciones')"  style="cursor: pointer;" nohref="nohref" onmouseout="cambia('nosotros/nosotros')" />
<area shape="poly" coords="893,476,1067,468,1103,544,981,674,918,583" onmouseover="cambia('nosotros/creatividad')"  style="cursor: pointer;" nohref="nohref" onmouseout="cambia('nosotros/nosotros')" />
</map>