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
.saltogris{
  padding-top:50px !important;
}

.problema{padding-top: 40px !important;}
.solucion{padding-top: 64px !important;}
  @media (max-width: 768px) {
    .infografia{
      padding: 0px 50px 0px 50px;
    }
.saltogris{
  padding-top:0px !important;
}

.problema{padding-top: 0px !important;}
.solucion{padding-top: 0px !important;}
#quote-carousel2{margin-top: 20px !important;}
  }
  @media (max-width: 630px) {
    .infografia{
      padding: 0px 10px 0px 10px;
    }
    .planb{
      /*height:300px;*/
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
<section class="hero-caption secPaddingcuadro1 quees">
      <div class="container gris parah1" style="width: 100%">
       <div class="row " >
          <div class="col-sm-12" >
            <h1 class="grande">Consultora de marketing y publicidad Vigo Madrid</h1>
          </div>

        </div>
      </div>
    </section>

<section class="hero-caption secPaddingcuadro2" style="padding: 0;">
  <div class="col-sm-6 planb" style="background-color: #ed1a3b;box-shadow: #000000a6 11px 0px 13px 3px!important;padding-top: 80px;padding-right:0px;">
    <img src="vistas/assets/images/marketing_100.png" style="display: block;margin:0 auto;" alt="Tu Agencia de Marketing Digital en Vigo y Madrid">
  </div>
  <div class="col-sm-6" style="background-color: white;max-height: 485px;box-shadow: #000000a6 11px 0px 13px 3px!important;padding:0px;">
  <!-- Carousel Start -->
    <div class="col-sm-12" style="padding: 0px;">
      <?php include 'vistas/modulos/quotenosotros.php'; ?>
    </div>
  <!-- Carousel End -->
  </div>
</section>
    <section class="hero-caption secPaddingcuadro3 quees" id="ayudamos">
      <div class="container gris">
       <div class="row"><div class="col-sm-5" style="padding-left:0px !important;">


        <h2 class="grande izda" >
                THE<br />MARKETING<br />
                COMPANY
              </h2>
            </div>
            <div class="col-sm-7">
              <p style="text-align: justify;font-size:14px;padding-bottom: 50px !important;" class="saltogris">Absolute Co. es una Consultora de Marketing Estratégico que dispone de una innovadora metodología de trabajo que fusiona diferentes disciplinas que dan como resultado un sistema transversal de desarrollo empresarial. Esto nos convierte en una consultoría de negocios con énfasis en un marketing de marca basado en soluciones y propuestas de valor. Nuestro modelo nace del talento de nuestros profesionales y la experiencia de los años en branding, marketing digital y organización de eventos, lo que nos ha permitido la instauración de una táctica operacional que ha ayudado a triunfar a marcas y empresas, start ups, industrias y pymes.
            </p>
            </div>
        </div>
      </div>
    </section>
    <section class="secPaddingcuadro3" style="padding-top: 0px;" id="circulo">
      <img src="vistas/assets/images/nosotros/nosotros.jpg" class="infografia mapaimagen" alt="Consultora de Marketing en Vigo" usemap="#map" id="imagencambiante">


      <div class="dispositivomovil" id="accordionExample" style="padding-bottom: 50px;">
            <div class="col-sm-12" style="padding-right:0px !important;">
            <h2 class="grande subra" style="text-align: center;padding-top: 100px;padding-bottom: 0px;">PLAN DE MARKETING CON RESULTADOS</h2>
          </div>
            <div class="panel panel-default">
              <div class="panel-heading" id="headingOne">
                <h2 class="panel-title">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <img src="vistas/assets/images/nosotros/movil/acciones.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="Consultora de Marketing" class="img-fluid">
                  </button>
                </h2>
              </div>
              <div id="collapseOne" class="panel-collapse collapse"aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="panel-body">
                  <img src="vistas/assets/images/nosotros/movil/acciones-interna.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="Consultora de Marketing" class="img-fluid">
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading" id="headingTwo">
                <h2 class="panel-title">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <img src="vistas/assets/images/nosotros/movil/auditoria.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="Consultora de Marketing" class="img-fluid">
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse"aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="panel-body">
                  <img src="vistas/assets/images/nosotros/movil/auditoria-interna.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="Consultora de Marketing" class="img-fluid">
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading" id="headingThree">
                <h2 class="panel-title">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <img src="vistas/assets/images/nosotros/movil/creatividad.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="Consultora de Marketing" class="img-fluid">
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="panel-collapse collapse"aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="panel-body">
                  <img src="vistas/assets/images/nosotros/movil/creatividad-interna.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="Consultora de Marketing" class="img-fluid">
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading" id="headingFour">
                <h2 class="panel-title">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <img src="vistas/assets/images/nosotros/movil/ejecucion.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="Consultora de Marketing" class="img-fluid">
                  </button>
                </h2>
              </div>
              <div id="collapseFour" class="panel-collapse collapse"aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="panel-body">
                  <img src="vistas/assets/images/nosotros/movil/ejecucion-interna.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="Consultora de Marketing" class="img-fluid">
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading" id="headingFive">
                <h2 class="panel-title">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <img src="vistas/assets/images/nosotros/movil/estrategias.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="Consultora de Marketing" class="img-fluid">
                  </button>
                </h2>
              </div>
              <div id="collapseFive" class="panel-collapse collapse"aria-labelledby="headingFive" data-parent="#accordionExample">
                <div class="panel-body">
                  <img src="vistas/assets/images/nosotros/movil/estrategias-interna.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="Consultora de Marketing" class="img-fluid">
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading" id="headingSix">
                <h2 class="panel-title">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    <img src="vistas/assets/images/nosotros/movil/evaluacion.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="Consultora de Marketing" class="img-fluid">
                  </button>
                </h2>
              </div>
              <div id="collapseSix" class="panel-collapse collapse"aria-labelledby="headingSix" data-parent="#accordionExample">
                <div class="panel-body">
                  <img src="vistas/assets/images/nosotros/movil/evaluacion-interna.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="Consultora de Marketing" class="img-fluid">
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading" id="headingSeven">
                <h2 class="panel-title">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    <img src="vistas/assets/images/nosotros/movil/indicadores.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="Consultora de Marketing" class="img-fluid">
                  </button>
                </h2>
              </div>
              <div id="collapseSeven" class="panel-collapse collapse"aria-labelledby="headingSeven" data-parent="#accordionExample">
                <div class="panel-body">
                  <img src="vistas/assets/images/nosotros/movil/indicadores-interna.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="v" class="img-fluid">
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading" id="headingEight">
                <h2 class="panel-title">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    <img src="vistas/assets/images/nosotros/movil/objetivos.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="Consultora de Marketing" class="img-fluid">
                  </button>
                </h2>
              </div>
              <div id="collapseEight" class="panel-collapse collapse"aria-labelledby="headingEight" data-parent="#accordionExample">
                <div class="panel-body">
                  <img src="vistas/assets/images/nosotros/movil/objetivos-interna.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="Consultora de Marketing" class="img-fluid">
                </div>
              </div>
            </div>

          </div>
      </section>
    <section class="hero-caption secPaddingcuadro4 quees" id="consultores">
      <div class="container gris" >
       <div class="row" >
         <div class="col-sm-5" style="padding-left:0px !important;">
              <h2 class="grande izda problema">
                AYUDAMOS A<br />
                VENDER<br />
                DE VERDAD
              </h2>
            </div>
            <div class="col-sm-7">
              <p class="saltogris solucion" style="text-align: justify;font-size:14px;" >La misión que perseguimos es ofrecer nuestros servicios y forma de pensamiento para la construcción de soluciones que aporten valor al negocio de nuestros clientes. Las ideas creativas son el combustible con el que se enciende el motor de cualquier proyecto para impulsar cada marca y negocio, pero como nuestra filosofía se encuentra basada en el marketing de resultados, vamos más allá y buscamos la efectividad por encima de todo. Así, nuestras acciones se encuentran directamente orientadas al fortalecimiento del Plan de Marketing y Ventas, alineando la estrategia comercial con la de marketing y aportando además elementos que contribuyen de manera decisiva a la construcción de marca.
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
  <area shape="poly" coords="970,234,913,319,889,460,1077,459,1117,349,980,223" onmouseover="cambia('nosotros/ejecucion')"  style="cursor: pointer;" nohref="nohref" onmouseout="cambia('nosotros/nosotros')" />
<area shape="poly" coords="980,224,1070,156,1193,122,1218,125,1225,310,1117,350" onmouseover="cambia('nosotros/evaluacion')"  style="cursor: pointer;" nohref="nohref" onmouseout="cambia('nosotros/nosotros')" />
<area shape="poly" coords="1218,117,1346,143,1452,210,1316,352,1224,311" onmouseover="cambia('nosotros/auditoria')"  style="cursor: pointer;" nohref="nohref" onmouseout="cambia('nosotros/nosotros')" />
<area shape="poly" coords="1453,210,1522,317,1546,449,1354,448,1315,353" onmouseover="cambia('nosotros/objetivos')"  style="cursor: pointer;" nohref="nohref" onmouseout="cambia('nosotros/nosotros')"  />
<area shape="poly" coords="1545,448,1537,545,1466,664,1457,675,1316,548,1353,448" onmouseover="cambia('nosotros/indicadores')"  style="cursor: pointer;" nohref="nohref" onmouseout="cambia('nosotros/nosotros')" />
<area shape="poly" coords="1458,674,1363,746,1225,786,1223,581,1315,547,1316,547" onmouseover="cambia('nosotros/estrategias')" style="cursor: pointer;" nohref="nohref" onmouseout="cambia('nosotros/nosotros')" />
<area shape="poly" coords="1225,787,1097,759,989,690,1134,546,1223,579" onmouseover="cambia('nosotros/acciones')"  style="cursor: pointer;" nohref="nohref" onmouseout="cambia('nosotros/nosotros')" />
<area shape="poly" coords="1076,459,1134,546,989,691,913,580,888,460" onmouseover="cambia('nosotros/creatividad')"  style="cursor: pointer;" nohref="nohref" onmouseout="cambia('nosotros/nosotros')" />
</map>