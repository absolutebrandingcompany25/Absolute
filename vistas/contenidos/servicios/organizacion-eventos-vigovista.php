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
            <h2>Organización de Eventos</h2>
            <p>
              Gracias a nuestros expertos profesionales, con años de experiencia, nos encargamos de todos y cada uno de los diferentes aspectos del evento, con una exquisita coordinación, asegurándonos del correcto cumplimiento de los planning, el trabajo de los proveedores y solucionando si fuese necesario cualquier tipo de incidencia con la menor brevedad y sin alterar el funcionamiento del evento. Para que nuestros clientes sólo deban preocuparse de disfrutar junto a sus invitados
            </p>
          </div>
        </div>

        <div id="myCarousel" class="carousel slide col-md-6" data-ride="carousel">
          <div class="carousel-inner slidesvs" role="listbox">
            <div class="item active" style="background: url('vistas/assets/images/organizacion_eventos/1_2.jpg');">
              <!--img src="vistas/assets/images/organizacion_eventos/1_2.jpg" alt=""!-->
            </div>
            <div class="item" style="background: url('vistas/assets/images/organizacion_eventos/AC STUDIO (2).JPG');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/organizacion_eventos/casamiento_354.jpeg');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/organizacion_eventos/DSC_2856.JPG');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/organizacion_eventos/image_content_26953540_20190313221630.jpg');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/organizacion_eventos/IMG_7083.JPG');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/organizacion_eventos/IMG_8972.JPG');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/organizacion_eventos/PHOTO-2019-08-30-23-14-47-696x464.jpg');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/organizacion_eventos/_CP_7925etiqueta.JPG');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/organizacion_eventos/_CP_8934.JPG');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/organizacion_eventos/_DSC3751.jpg');">
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
<a href="javascript:history.back()" class=" btn-flotante"
  style="background-color:rgb(59, 59, 59); color:rgb(255, 255, 255);">
  <i class="fa fa-arrow-left"></i> Volver
</a>