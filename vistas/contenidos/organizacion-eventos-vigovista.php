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
    height: 100% !important;
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
  @supports(object-fit: cover){
    .item img{
      height: 100%;
      object-fit: contain;
      object-position: center center;
    }
  }
  #frasefondo{
    background-color: #000000;
    color:#ffffff !important;
  }
  #frasefondo h2,#frasefondo p{
    color: #ffffff !important
  }

#mivideo{
  height:485px;
  width:auto;
}
@media (min-width: 1850px) {
  #mivideo{
    height:auto;
    width:100%;
  }
}
.orgevent{
  font-size: 8em;
  line-height: 110px;
}
@media (max-width: 630px) {
  .orgevent{
    font-size: 4.5em;
    line-height: 110px;
  }
  .enormeeventos{
    text-align: center;
  }
}
.saltogris{
  padding-top:37px !important;
}
@media (max-width: 768px) {
  .saltogris{
    padding-top:0px !important;
  }
  .padingextra{
    padding-top: 25px !important;
  }
  .imagen{
    right:30px !important;
    left: 30px !important;
  }
}
</style>
<?php include 'vistas/modulos/banner-events.php'; ?>

<!-- TITULO -->
<!-- <div class="row">
<div class='col-md-offset-2 col-md-8 text-center'>
<h2>Clients Testimonials</h2>
</div>
</div> -->


<?php include 'vistas/modulos/serviciosEVENTSLAB.php'; ?>

    <section class="hero-caption secPaddingcuadro1 quees nosombra">
      <div class="container gris">
       <div class="row " style="margin-top: 0px;">
          <div class="col-sm-5" style="padding-left:0px !important;padding-right:0px !important;">
              <h2 class="grande izda">Eventos que<br />hacen sentir<br />algo único</h2>
            </div>
            <div class="col-sm-7" style="padding-left:0px !important;">
              <p style="text-align: justify;font-size:14px;padding-bottom: 37px !important;" class="irresistible saltogris">
                Absolute Events es una agencia dedicada a la <strong>organización de eventos</strong> corporativos, comerciales y sociales inolvidables. Los eventos son oportunidades excepcionales para que una empresa se comunique con su público objetivo, fidelice clientes y difunda su imagen corporativa. Nuestros eventos son irrepetibles porque no existen dos empresas iguales. Nuestra propuesta de valor radica en la realización de eventos integrales y totalmente personalizados, ya que al contar con recursos humanos y técnicos propios todas las labores de producción y post producción las realizamos In House. Ya sea una pequeña presentación o un complejo acto institucional, en territorio nacional o extranjero, ponemos nuestra metodología y Expertise al servicio de nuestros clientes para cumplir sus objetivos.
            </p>
            </div>

        </div>
      </div>
    </section>
    <div class="col-sm-6 planb secPaddingcuadro2" style="background-color: #ED1A3B;height:485px;box-shadow: #000000a6 11px 0px 13px 3px!important; padding: 0px">
        <h2 class="enormeeventos orgevent" style="padding-top: 40px;">
          <span style="font-size: .8em;color:#fff;line-height: 90px">Creamos</span><br />
          <span style="color:#fff;line-height: 90px">Emociones</span><br />
          <span style="font-size: .82em;color:#fff;line-height: 90px">Construimos</span><br />
          <span style="font-size: 1.1em;color:#fff;line-height: 90px">Marca</span></h2>
    </div>
    <div class="col-sm-6 planb secPaddingcuadro1" style="padding:0px;background-color: white;max-height: 485px;box-shadow: #000000a6 11px 0px 13px 3px !important;overflow: hidden;">
      <video id="mivideo" loop autoplay muted>
        <source src="vistas/assets/video/absolute_events.mp4" type="video/mp4">
          Tu navegador no soporta HTML5 video.
      </video>
      </div>

      <section class="hero-caption secPaddingcuadro3 " style="padding-bottom:100px;">
        <div class="container" style="width: 100%">
          <div class="col-sm-12" style="padding-left:30px !important;padding-right:0px !important;">
            <h2 class="grande subra" style="text-align: center;padding-top: 100px;padding-bottom: 0px;">ASÍ CREAMOS EVENTOS INOLVIDABLES</h2>
          </div>
          <img src="vistas/assets/images/eventos/infografia/eventos.jpg" style="display: block;padding-top: 105px;" alt="eventos inolvidables" class="mapaimagen" usemap="#map" id="imagencambiante">

          <div class="dispositivomovil" id="accordionExample">
            <div class="panel panel-default">
    <div class="panel-heading" id="headingOne">
      <h2 class="panel-title">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          <img src="vistas/assets/images/eventos/infografia/reunion-previa.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="marketing con..." class="img-fluid">
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="panel-collapse collapse"aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="panel-body">
        El responsable de la cuenta y nuestro Event Planner se reúnen con el cliente para conocer los objetivos del evento, tras el cual se redacta el Briefing.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" id="headingTwo">
      <h2 class="panel-title">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <img src="vistas/assets/images/eventos/infografia/conceptualizacion-propuesta.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="marketing con..." class="img-fluid">
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse"aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="panel-body">
        Creamos un equipo de trabajo que desenvuelva la idea conceptual del evento, cree una propuesta que cumpla los objetivos marcados y desarrolle una conexión duradera con los invitados.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" id="headingThree">
      <h2 class="panel-title">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <img src="vistas/assets/images/eventos/infografia/localizacion.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="marketing con..." class="img-fluid">
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="panel-collapse collapse"aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="panel-body">
        Atendiendo a las necesidades del evento, buscamos el sitio perfecto para llevarlo a cabo y escogemos la mejor opción.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" id="headingFour">
      <h2 class="panel-title">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          <img src="vistas/assets/images/eventos/infografia/direccion-arte.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="marketing con..." class="img-fluid">
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="panel-collapse collapse"aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="panel-body">
        Construímos un mensaje creativo que sostenga la idea conceptual y sorprenda al asistente, sumergiéndolo en el mundo de la marca.
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" id="headingFive">
      <h2 class="panel-title">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          <img src="vistas/assets/images/eventos/infografia/produccion.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="marketing con..." class="img-fluid">
        </button>
      </h2>
    </div>
    <div id="collapseFive" class="panel-collapse collapse"aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="panel-body">
        El equipo de producción se encarga de las necesidades técnicas y humanas y la escenografía del evento según lo planeado.
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" id="headingSix">
      <h2 class="panel-title">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          <img src="vistas/assets/images/eventos/infografia/ejecucion.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="marketing con..." class="img-fluid">
        </button>
      </h2>
    </div>
    <div id="collapseSix" class="panel-collapse collapse"aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="panel-body">
        En el momento de la verdad nos encargamos de la coordinación y dirección global, de que todo salga aún mejor de lo previsto para que se superen las espectativas, consiguiendo que la marca sea la verdadera protagonista.
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" id="headingSeven">
      <h2 class="panel-title">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
          <img src="vistas/assets/images/eventos/infografia/comunicacion.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="marketing con..." class="img-fluid">
        </button>
      </h2>
    </div>
    <div id="collapseSeven" class="panel-collapse collapse"aria-labelledby="headingSeven" data-parent="#accordionExample">
      <div class="panel-body">
        Ejecutamos el Plan de Comunicación para transmitir el mensaje deseado de la marca de forma adecuada consiguiendo que llegue lo más lejos posible tanto online como offline y que el evento resulte transcendental.
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" id="headingEigth">
      <h2 class="panel-title">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEigth" aria-expanded="false" aria-controls="collapseEigth">
          <img src="vistas/assets/images/eventos/infografia/analitica-informes.png" style="display: block;padding-top: 10px; margin: 0 auto;" alt="marketing con..." class="img-fluid">
        </button>
      </h2>
    </div>
    <div id="collapseEigth" class="panel-collapse collapse"aria-labelledby="headingEigth" data-parent="#accordionExample">
      <div class="panel-body">
        Recogida de datos y análisis de los mismos para realizar los oportunos informes que resuman los resultados del evento que se entregarán al cliente con recomendaciones y Cálculo de ROI.
      </div>
    </div>
  </div>
          </div>
          <div class="col-sm-12 junto" style="margin-top: 50px;padding-bottom: 25px;font-size: 28px;font-weight: 800;">¿Quieres crear un evento inolvidable?</div>
          <div class="clear"></div>
          <div class="col-sm-12"><a href="/contacto" class="enlaceboton" >SI, QUIERO</a></div>
        </div>
    </section>


<section class="hero-caption secPaddingcuadro4 thinkingTEXTOIMAGEN">
  <div class="container">
   <div class="row " style="margin-top: 0px;">

      <div class="col-sm-4 col-xs-12 contenedor" style="min-height:150px;">
<!-- <img src="vistas/assets/images/bombilloTHINKING.png" class="imgcreative"> -->
<img class="imgcreative" src="vistas/assets/images/networking_on.png" alt="generamos engagement" />
<img class="top imgcreative" src="vistas/assets/images/networking.png" alt="generamos engagement" />
      </div>

      <div class="col-sm-1 fuerapeque">
      <img src="vistas/assets/images/LINEAvertical2white.png" style="display: block;margin-left: auto;margin-right: auto;">
      </div>
      <div class="clear dentropeque"></div>
      <div class="col-sm-7 col-xs-12">
        <div class="col-sm-10">
          <h2 style="font-size: 2em;">  GENERAMOS<br />ENGAGEMENT</h2>
          <p style="text-align: justify;padding-left: 0px;">
            Los eventos que diseñamos para empresas e instituciones pueden perseguir diferentes propósitos: construir branding, posicionarse en el mercado, lograr nuevos clientes, presentar un nuevo producto, captar la atención de prensa e influencers, etc. pero todos disponen de un común denominador: generar engagement para seducir al público objetivo.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<map name="map">
<area shape="rect" coords="377,89,1254,371" onmouseover="cambia('eventos/infografia/reunion-previa')"  style="cursor: pointer;" nohref="nohref" onmouseout="cambia('eventos/infografia/eventos')" />
<area shape="rect" coords="133,370,1011,662" onmouseover="cambia('eventos/infografia/conceptualizacion-propuesta')"  style="cursor: pointer;" nohref="nohref" onmouseout="cambia('eventos/infografia/eventos')" />
<area shape="rect" coords="185,663,1068,952" onmouseover="cambia('eventos/infografia/localizacion')"  style="cursor: pointer;" nohref="nohref" onmouseout="cambia('eventos/infografia/eventos')" />
<area shape="rect" coords="364,951,1258,1251" onmouseover="cambia('eventos/infografia/direccion-arte')"  style="cursor: pointer;" nohref="nohref" onmouseout="cambia('eventos/infografia/eventos')" />
<area shape="rect" coords="2429,93,3302,368" onmouseover="cambia('eventos/infografia/produccion')"  style="cursor: pointer;" nohref="nohref" onmouseout="cambia('eventos/infografia/eventos')" />
<area shape="rect" coords="2680,364,3572,660" onmouseover="cambia('eventos/infografia/ejecucion')"  style="cursor: pointer;" nohref="nohref" onmouseout="cambia('eventos/infografia/eventos')" />
<area shape="rect" coords="2602,659,3508,952" onmouseover="cambia('eventos/infografia/comunicacion')"  style="cursor: pointer;" nohref="nohref" onmouseout="cambia('eventos/infografia/eventos')" />
<area shape="rect" coords="2436,952,3319,1237" onmouseover="cambia('eventos/infografia/analitica-informes')"  style="cursor: pointer;" nohref="nohref" onmouseout="cambia('eventos/infografia/eventos')" />
</map>