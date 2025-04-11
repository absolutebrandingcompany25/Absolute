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
  @supports(object-fit: cover){
    .item img{
      height: 100%;
      object-fit: cover;
      object-position: center center;
    }
}
.pad40px{
  padding-top:40px !important;
}
.top50px{
 padding-top:40px !important;
}

@media (max-width: 630px) {
  .pad40px{
    padding-top:2px !important;
  }
  .top50px{
   padding-top:5px !important;
  }
  .frasescuatro{
    height:200px;
  }

}

</style>
<?php include 'vistas/modulos/banner-thinking.php'; ?>


<?php include 'vistas/modulos/serviciosTHINKINGLAB.php'; ?>

    <section class="hero-caption secPaddingcuadro1 quees">
      <div class="container" >
       <div class="row " style="margin-top: 0px;">
          <div class="col-sm-5" style="padding-left:0px !important;padding-right:0px !important;text-align: right !important;">
              <h2 class="grande izda">BRANDING PARA<br />
              LOS QUE QUIEREN<br />
              MARCAR LA DIFERENCIA</h2>
            </div>
            <div class="col-sm-7" style="padding-left:0px !important;">
              <p style="text-align: justify;padding: 80px 50px 50px 30px;font-size:14px;">Pensar diferente es la única manera de hacer cosas
                extraordinarias, porque lo importante no es ver lo que nadie ve, si no pensar lo que nadie ha pensado sobre lo que todos conocen.
                Hacer de lo simple, algo extraordinario.
            </p>
            </div>

        </div>
      </div>
    </section>
    <div class="col-sm-6 planb secPaddingcuadro2" style="background-color: #ED1A3B;height:485px;box-shadow: #000000a6 11px 0px 13px 3px!important; ">
        <h2 class="enormeeventos">
          <span style="font-size: 1.9em !important;color: #fff;">MARCAS</span><br />
          CON<br />
          PERSONALIDAD</h2>
    </div>
    <div class="col-sm-6 planb secPaddingcuadro1" style="padding:0px;background-color: white;max-height: 485px;box-shadow: #000000a6 11px 0px 13px 3px !important;">
<!--CARRUSEL 2 !-->
      <div id="myCarousel2" class="carousel slide sliderpeque" data-ride="carousel">
<!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel2" data-slide-to="1"></li>
          <li data-target="#myCarousel2" data-slide-to="2"></li>
          <li data-target="#myCarousel2" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active sliderpeque banner-nosotros1">
          <img src="vistas/assets/images/nosotros/2.jpg" alt="congresos">
            <div class="container"></div>
          </div>
          <div class="item sliderpeque banner-nosotros2">
          <img src="vistas/assets/images/nosotros/3.jpg" alt="congresos">
            <div class="container"></div>
          </div>
          <div class="item sliderpeque banner-nosotros3">
          <img src="vistas/assets/images/nosotros/4.jpg" alt="congresos">
            <div class="container"></div>
          </div>
          <div class="item sliderpeque banner-nosotros4">
          <img src="vistas/assets/images/nosotros/5.jpg" alt="congresos">
            <div class="container"></div>
          </div>
        </div>
<!-- /.carousel2 -->
        </div>
      </div>
      <section class="hero-caption secPaddingcuadro3 " style="padding-bottom:100px">
      <div class="container">
        <div class="row " style="margin-top: 0px;">
          <div class="col-sm-12" style="padding-left:30px !important;padding-right:0px !important;">
            <h2 class="enorme" style="text-align: left;padding-top: 100px;">Branding</h2>
            <hr style="border: solid 1px #ed1a3b;width: 10%;margin: 0" />
          </div>
<!--CUADRO FRASES 1 !-->
           <div class="col-sm-6 top50px" style="text-align: center;">
            <div class="col-sm-12" style="text-align:right;">
              <b class="titulocuadro"><br />Aumentar las ventas</b><br />
            </div>

            <div class="col-sm-12 frasescuatro">
              <div class="col-sm-4 col-xs-4 numero">
                1
              </div>
              <div class="col-sm-8 col-xs-8 pad40px">
                <p>Con las estrategias correctas
                  podemos alcanzar tus objetivos.</p>
              </div>
            </div>
           </div>
<!--CUADRO FRASES 2 !-->
           <div class="col-sm-6 top50px" style="text-align: center;">
            <div class="col-sm-12" style="text-align:right;">
              <b class="titulocuadro">¿No sabes cual debe<br />ser tu siguiente paso?</b><br />
            </div>

            <div class="col-sm-12 frasescuatro">
              <div class="col-sm-4 col-xs-4 numero">
                2
              </div>
              <div class="col-sm-8 col-xs-8 pad40px">
                <p>Nosotros te abrimos camino para que tú sigas creciendo.</p>
              </div>
            </div>
           </div>
<!--CUADRO FRASES 3 !-->
           <div class="col-sm-6 top50px" style="text-align: center;">
            <div class="col-sm-12" style="text-align:right;">
              <b class="titulocuadro">¿Demasiada<br />competencia?</b><br />
            </div>

            <div class="col-sm-12 frasescuatro">
              <div class="col-sm-4 col-xs-4 numero">
                3
              </div>
              <div class="col-sm-8 col-xs-8 pad40px">
                <p>Hacemos que tu marca destaque por encima del resto con nuestro marketing de resultados.</p>
              </div>
            </div>
           </div>
<!--CUADRO FRASES 4 !-->
           <div class="col-sm-6 top50px" style="text-align: center;">
            <div class="col-sm-12" style="text-align:right;">
              <b class="titulocuadro">Llega al corazón<br />de tus clientes</b><br />
            </div>

            <div class="col-sm-12 frasescuatro">
              <div class="col-sm-4 col-xs-4 numero">
                4
              </div>
              <div class="col-sm-8 col-xs-8 pad40px">
                <p>Gana clientes y fideliza los que ya tienes con el mejor marketing de emociones.</p>
              </div>
            </div>
           </div>




          <div class="clear"></div>

            <div class="col-sm-12" style="padding-top: 50px;">
              <a href="/contacto" class="enlaceboton">MEJORAR MI BRANDING</a>
            </div>
        </div>
      </div>
    </section>




<?php include 'vistas/modulos/secTEXTOIMAGENthinking.php'; ?>