<!-- section start -->
<style>
  .carousel-control .icon-prev,
  .carousel-control .icon-next,
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .glyphicon-chevron-right {
    top: 56% !important;
  }

  .col-md-2 {
    text-align: center;
    background-color: #af414a;
    padding-top: 150px;
    position: fixed;
    top: 0;
    min-height: 100vh;
  }

  .altocompleto {
    padding-top: 55px !important;
    min-height: 100vh;
  }

  .col-md-10 {
    float: right;
    padding-right: 0px;
    padding-left: 0px;

  }

  .secPadding {
    padding: 0px !important;
  }

  .row {
    margin: 0px !important;
  }

  .texto {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: justify;
    margin: auto 120px;
    height: calc(100vh - 55px);
  }

  .texto h2 {
    text-align: center;
    font-size: revert;
    font-weight: bold;
  }

  h2 {
    color: #e40f1a;
    text-transform: uppercase;
  }

  a {
    color: #ffffff;
    font-weight: bold;
  }

  .menusalta {
    padding-top: 10px;
  }

  .anchocompleto {
    width: 100%;
    padding: 0px;
  }

  .redfooter {
    z-index: 9999 !important;
  }

  .footer.section {
    position: relative;
    z-index: 9999;
  }

  .subfooter {
    position: relative;
    z-index: 9999;
  }

  .menuinterno {
    display: none;
  }

  @media (max-width:768px) {
    .altocompleto {
      min-height: 80vh !important;
    }

    .secPadding {
      margin-top: 94px;

    }

    .col-md-2 {
      display: none;
    }

    .menuinterno {
      display: block;
      z-index: 99;
      /*text-align:center;*/
      background-color: #af414a;
      padding-top: 95px;
      position: fixed;
      top: 0;
    }

    .menuinterno li {
      list-style-type: none;
      display: inline;
    }

    .menuinterno li:after {
      color: #ffffff;
      content: " | ";
    }

    .imagen1,
    .imagen2,
    .imagen3,
    .imagen4 {
      min-height: 50vh !important;
    }

    .texto {
      min-height: 50vh !important;
      margin: auto 20px;
    }
  }

  /* Carousel base class */

  @media (min-width:769px) {
    .carousel {
      min-height: 100vh !important;
      padding: 0px !important;
    }
  }

  .carousel-caption {
    z-index: 10;
    /* Since positioning the image, we need to help out the caption */
  }

  /* Declare heights because of positioning of img element */
  .carousel .item {
    min-height: 100vh !important;
    background-color: #777;
    background-size: cover !important;
    background-position: center center !important;
  }

  .carousel-inner>.item>img {
    position: absolute;
    top: 0;
    left: 0;
    min-height: 100vh !important;
  }

  @media (max-width:768px) {
    .altocompleto {
      min-height: 80vh !important;
    }

    .col-md-6 {
      padding-left: 0px !important;
    }

    .slidesvs {
      height: 49vh !important;
      width: 100vw !important;
    }
  }
</style>
<section class="section clearfix no-view secPadding" data-animation-effect="fadeIn">
  <div class="container anchocompleto">
    <div class="row">
      <div class="col-md-12 conten" style="padding:0px !important">
        <div class="col-md-6 altocompleto col-xs-12 imagen">
          <div class="texto">
            <h2>Producción audiovisual</h2>
            <p>
              Disponer de nuestra propia productora audiovisual nos permite contar con los mejores recursos del mercado para ofrecer un servicio original de fotografía, video y producción de contenidos que transmita emociones que impacten al espectador y de una factura impecable. Pero además, nos hacemos cargo de todo tipo de producciones realizando tanto el montaje, como la iluminación, sonorización y coordinación técnica. Abarcamos todo tipo de espacios, con los profesionales más cualificados del sector y los mejores materiales y calidades para convertir cualquier evento en un espectáculo inolvidable.
            </p>
          </div>
        </div>

        <div id="myCarousel" class="carousel slide col-md-6" data-ride="carousel">
          <div class="carousel-inner slidesvs" role="listbox">
            <div class="item active" style="background: url('vistas/assets/images/videos/s7G8.jpg');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/videos/DSC_4517.JPG');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/videos/s2Ga.jpg');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/videos/s2Gz.jpg');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/videos/s3Gu.jpg');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/videos/IA.jpg');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/videos/s4Ga.jpg');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/videos/s5Gw.jpg');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/videos/s6G4.jpg');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/videos/s8G3.jpg');">
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div><!-- /.carousel -->

        <!--fin filas-->
      </div>
    </div>
  </div>
</section>
<!-- section end -->
<a href="./organizacion-eventos-vigo" class="btn-flotante"><i class="fa fa-arrow-left"></i>
  Volver</a>