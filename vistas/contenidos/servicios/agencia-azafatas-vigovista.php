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
            <h2>Azafatas</h2>
            <p>
              Cada evento o acción promocional genera una experiencia donde el papel de las personas resulta fundamental. Brindamos un servicio completamente adaptado a cada cliente, con uniformidad personalizada, gran ﬂexibilidad y capacidad de respuesta, con cobertura en toda España y Portugal y una escucha activa a nuestros clientes en un proceso de mejora continua. Contamos con amplia experiencia y diversas opciones de azafatas y promotoras, todas altamente cualificadas para brindar el mejor servicio y conectar marcas y consumidores por medio de una perfecta atención al público y la adecuada información acerca de productos y servicios.
            <div style="text-align: center;" class="salto">
              <ul style="text-align:left;display:inline-block;">
                <li>Azafatas de Ferias y congresos</li>
                <li>Azafatas de protocolo</li>
                <li>Azafatas de Imagen</li>
                <li>Azafatas de Alta Imagen</li>
                <li>Azafatas Intérpretes</li>
                <li>Azafatas Transfer</li>
                <li>Promotoras comerciales</li>
              </ul>
            </div>
            </p>
          </div>
        </div>

        <div id="myCarousel" class="carousel slide col-md-6" data-ride="carousel">
          <div class="carousel-inner slidesvs" role="listbox">
            <div class="item active" style="background: url('vistas/assets/images/azafatas/s4Gt.jpg');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/azafatas/_CP_7667.JPG');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/azafatas/s2Gr.jpg');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/azafatas/_CP_8972.JPG');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/azafatas/s6Gr.jpg');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/azafatas/_DSC0083.jpg');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/azafatas/s5Gr.jpg');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/azafatas/s8Gr.jpg');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/azafatas/azafatas.jpg');">
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
<a href="./agencia-eventos-galicia-madrid" class="btn-flotante"
  style="background:#fefefe; color:#e40f1a; border: 2px solid #e40f1a;">
  <i class="fa fa-arrow-left"></i> Volver
</a>