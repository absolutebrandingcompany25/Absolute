<style type="text/css">
  h2{
    color:#fff;
    font-size: 4em;
    font-weight: bold;
  }
  h3{
    font-size: 17px;
    font-weight: bold;
  }
/* Carousel base class */
  .carousel-caption {
      top: 42% !important;
  }
  .carousel {
    height: 100vh;
    margin-bottom: 60px;
  }
  .carousel-caption {
    z-index: 10; /* Since positioning the image, we need to help out the caption */
  }

/* Declare heights because of positioning of img element */
  .carousel .item {
    height: 100vh;
    background-color: #E40F1A;
  }
  .carousel-inner > .item > img {
    position: absolute;
    top: 0;
    left: 0;
    /*min-width: 100%;*/
    /*height: 100vh;*/
    width: 100%;
    object-fit:cover;
    object-position: center center;
  }

  .carousel2 {
    position: relative;
    height: 485px;
    margin-bottom: 60px;
  }
  .sliderpeque{
    max-height: 485px;
  }
  .imgcreative3{
    margin: auto;
  }
  col-sm-7{
    padding-left:0px !important;
  }
  @supports(object-fit: cover){
    .item img{
      height: 100%;
      object-fit: cover;
      object-position: center center;
    }
}
.pad30px{
  padding-top:20px !important;
}
.pad40px{
  padding-top:40px !important;
}
.top50px{
 padding-top:40px !important;
}
.planb{
  height:485px;
}
#mivideo{
  height:100%;
  width:auto;
}
@media (min-width: 1850px) {
  #mivideo{
    height:auto;
    width:100%;
  }
}
.digitalgrande{
  font-size: 10em;
  line-height: 110px;
  padding-top: 80px;
}
@media (max-width: 630px) {
  .enormeeventos{
    text-align: center;
  }
  .planb{
    height:300px;
  }
  .pad30px{
    padding-top: 0px !important;
    margin-top: -18px !important;
  }
  .pad40px{
    padding-top:2px !important;
  }
  .top50px{
   padding-top:5px !important;
  }
  .frasescuatro{
    height:200px;
  }
  .frasescuatro{
    font-size: 12px !important;
  }
  .digitalgrande{
    font-size: 6em;
    line-height: 70px;
  }

}
.saltogris{
  padding-top:50px !important;
}
.medioenorme{
  font-size: .8em;
  color:#fff;
}
.pequeenorme{
  font-size: .6em;
  color:#fff;
  line-height: 65px
}
.subra{
  padding-top: 100px;
}
.problema{padding-top:40px !important;}
.solucion{padding-top: 62px !important;}
.secPaddingcuadro4{
  padding-bottom:100px;
}
@media (max-width: 768px) {
  .saltogris{
    padding-top:0px !important;
  }
  .medioenorme{
    font-size: 1.1em;
    line-height: 1.1em;
  }
  .pequeenorme{
    font-size: 1.1em;
  }
  .digitalgrande{
    padding-top: 35px;
  }
  h1{
    padding-top: 40px !important;
  }
.problema{padding-top:0px !important;}
.solucion{padding-top: 0px !important;}
.secPaddingcuadro4{
  padding-bottom:20px;
}
  h1.grande{
    margin-top: 46px !important;
  }
  col-sm-7{
    padding-left:15px !important;
  }
  .videoplanb{
    height: auto !important;
  }
}
@media (max-width: 453px) {
  .subra{
    font-size: 2em !important;
  }
}
</style>
<?php include 'vistas/modulos/banner-digitallab.php'; ?>

<?php include 'vistas/modulos/serviciosDIGITALLAB.php'; ?>

    <section class="hero-caption secPaddingcuadro1 quees">
      <div class="container gris parah1" style="width: 100%">
       <div class="row " >
          <div class="col-sm-12" >
            <h1 class="grande">Agencia de marketing digital Vigo</h1>
          </div>

        </div>
      </div>
    </section>

    <div class="col-sm-6 planb secPaddingcuadro2" style="background-color: #ED1A3B;box-shadow: #000000a6 11px 0px 13px 3px!important; padding: 0px;">
        <h2 class="enormeeventos digitalgrande">
          Imagina<br />
          <span class="medioenorme">cambia</span><br />
          <span class="pequeenorme">innova</span></h2>
    </div>
    <div class="col-sm-6 planb secPaddingcuadro1 videoplanb" style="padding:0px;background-color: white;max-height: 485px;box-shadow: #000000a6 11px 0px 13px 3px !important;overflow: hidden;">
      <video id="mivideo" loop autoplay muted>
      <source src="vistas/assets/video/video_digital.mp4" type="video/mp4">
      Tu navegador no soporta HTML5 video.
  </video>
      </div>
      <section class="hero-caption secPaddingcuadro3 quees nosombra">
      <div class="container gris">
       <div class="row " style="margin-top: 0px;">
          <div class="col-sm-5" style="padding-left:0px !important;padding-right:0px !important;text-align: right !important;">
              <h2 class="grande izda problema">DISEÑAMOS<br />EXPERIENCIAS<br />DIGITALES ÚNICAS</h2>
            </div>
            <div class="col-sm-7">
              <p class="irresistible saltogris solucion" style="text-align: justify;font-size:14px;">Internet ha irrumpido con fuerza en todo tipo de sectores volviendo del revés las convencionales estrategias corporativas, publicitarias y de comunicación de grandes, medianas y pequeñas empresas. En Absolute Digital fusionamos <b>los servicios de agencia digital y consultoría tecnológica</b> para conseguir que nuestros clientes se centren en la consecución de objetivos. La ventaja de ser un proveedor 360º nos permite estar en disposición de brindar todos los servicios precisos que permitan ayudar y acompañar a las empresas para que puedan adaptarse conectando la visión de negocio con la tecnología necesaria para crear procesos de cambio que permitan la transformación digital.
            </p>
            </div>

        </div>
      </div>
    </section>
      <section class="hero-caption secPaddingcuadro4 " >
        <div class="container" style="width: 100%">
          <div class="col-sm-12" style="padding-right:0px !important;">
            <h2 class="grande subra" style="text-align: center;padding-bottom: 0px; padding-left: 0px;">ASÍ DESARROLLAMOS PROYECTOS DIGITALES A MEDIDA</h2>
          </div>
          <img src="vistas/assets/images/digital/digital.jpg" style="display: block;padding-top: 10px;" alt="Agencia de Marketing digital" class="mapaimagen" usemap="#map" id="imagencambiante">

          <div class="dispositivomovil" id="accordionExample">
            <div class="panel panel-default">
    <div class="panel-heading" id="headingOne">
      <h2 class="panel-title">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          <img src="vistas/assets/images/digital/trafico.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="trafico" class="img-fluid">
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="panel-collapse collapse"aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="panel-body">
        Generar una estrategia efectiva de adquisición de tráfico de visitas
        <img src="vistas/assets/images/digital/blogging.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="blogging" class="img-fluid">
        <img src="vistas/assets/images/digital/seo.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="seo" class="img-fluid">
        <img src="vistas/assets/images/digital/publicidad.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="publicidad" class="img-fluid">
        <img src="vistas/assets/images/digital/video.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="video" class="img-fluid">
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" id="headingTwo">
      <h2 class="panel-title">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <img src="vistas/assets/images/digital/adquisicion.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="Agencia de Marketing digital" class="img-fluid">
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse"aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="panel-body">
        Lograr conversiones a registros o leads, ampliar el número de suscriptores, concretar una venta...
        <img src="vistas/assets/images/digital/ofertas.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="ofertas" class="img-fluid">
        <img src="vistas/assets/images/digital/landing.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="landing" class="img-fluid">
        <img src="vistas/assets/images/digital/call-to-action.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="call to action" class="img-fluid">
        <img src="vistas/assets/images/digital/social-media.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="social media" class="img-fluid">
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" id="headingThree">
      <h2 class="panel-title">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <img src="vistas/assets/images/digital/conversion.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="Agencia de Marketing digital" class="img-fluid">
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="panel-collapse collapse"aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="panel-body">
        Crear un embudo de conversión que termine con la fidelización del nuevo cliente.
        <img src="vistas/assets/images/digital/email.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="email" class="img-fluid">
        <img src="vistas/assets/images/digital/leads.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="conseguir leads" class="img-fluid">
        <img src="vistas/assets/images/digital/analisis-resultados.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="analisis de resultados" class="img-fluid">
        <img src="vistas/assets/images/digital/social-crm.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="CRM" class="img-fluid">
      </div>
    </div>
  </div>
          </div>
          <div class="col-sm-12 junto" style="margin-top: 50px;padding-bottom: 25px;font-size: 28px;font-weight: 800;"> ¿Quieres desarrollar un proyecto digital exitoso?</div>
          <div class="clear"></div>
          <div class="col-sm-12"><a href="/contacto" class="enlaceboton" >SI, QUIERO</a></div>
        </div>
    </section>




<?php include 'vistas/modulos/preciosDIGITALLAB.php'; ?>

<map name="map">
  <area shape="rect" coords="390,244,1343,544" onmouseover="cambia('digital/trafico')"  style="cursor: pointer;" nohref="nohref" onmouseout="cambia('digital/digital')" />
  <area shape="rect" coords="131,544,1073,864" onmouseover="cambia('digital/adquisicion')"  style="cursor: pointer;" nohref="nohref" onmouseout="cambia('digital/digital')" />
  <area shape="rect" coords="412,865,1356,1187" onmouseover="cambia('digital/conversion')"  style="cursor: pointer;" nohref="nohref" onmouseout="cambia('digital/digital')" />
</map>