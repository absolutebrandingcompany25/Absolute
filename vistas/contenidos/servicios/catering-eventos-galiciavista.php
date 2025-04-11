<!-- section start -->
<style>
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

    .conten {
      display: flex;
      flex-flow: column;
      padding-right: 0px !important;
      padding-left: 0px !important;
    }

    .one {
      order: 1;
    }

    .two {
      order: 2;
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

  .carousel-control .icon-prev,
  .carousel-control .icon-next,
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .glyphicon-chevron-right {
    top: 56% !important;
  }

  @media (max-width:768px) {
    .altocompleto {
      min-height: 80vh !important;
    }

    .carousel .item {
      min-height: 49vh !important;
      background-size: contain !important;
      background-repeat: no-repeat !important;
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
<section class="hero-caption secPaddingcuadro1 quees">
  <div class="container gris parah1sv" style="width: 100%">
    <div class="row " style="margin-top: 0px;">
      <div class="col-sm-12 creativeM" style="margin-top: 0%">
        <h1 class="grande">Catering para eventos </h1>
      </div>

    </div>
  </div>
</section>
<section class="section clearfix no-view secPadding" data-animation-effect="fadeIn">
  <div class="container anchocompleto">
    <div class="row">
      <div class="col-md-12 conten" style="padding:0px !important">
        <div class="col-md-6 altocompleto col-xs-12 imagen two textosvc">
          <div class="texto">
            <img src="vistas/assets/images/catering/logococinagal.png" alt="cocina de Galicia" />
            <h2>Cocina creativa para eventos</h2>
            <p>
              El catering es un crucial en cualquier evento, por eso contamos con chefs creativos profesionales y también algunos de los cocineros más importantes de España y Portugal para ofrecer una experiencia gastronómica única. Nuestro equipo de restauración se encargará de la gestión integral del catering: localización de espacio, personal, decoración etc. para realizar una propuesta exclusiva acorde a cada ocasión, con platos y menús deliciosos e innovadores que ofrezcan distinción y diferenciación a cada evento.
            <div style="text-align: center;" class="salto">
              <ul style="text-align:left;display:inline-block;">
                <li>Desayuno de Trabajo</li>
                <li>Catering Coffee Break</li>
                <li>Catering Aperitivo</li>
                <li>Catering Brunch</li>
                <li>Catering Vernissage</li>
                <li>Catering Cocktail</li>
                <li>Catering Recepción Buffet</li>
                <li>Catering Recepción, Comida o Banquete</li>
              </ul>
            </div>
            </p>
          </div>
        </div>

        <div id="myCarousel" class="carousel slide col-md-6 one" data-ride="carousel">
          <div class="carousel-inner slidesvs" role="listbox">
            <div class="item active" style="background: url('vistas/assets/images/catering/s5G.jpg');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/catering/DSC_0552.jpg');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/catering/carne_mas_hecha.jpg');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/catering/DSC_0352.JPG');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/catering/s2G1.jpg');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/catering/ostras.jpg');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/catering/catering.jpg');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/catering/DSC_0139.jpg');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/catering/DSC_4453.JPG');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/catering/IMG_6645.jpg');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/catering/almejas.jpg');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/catering/s3G0.jpg');">
            </div>
            <div class="item" style="background: url('vistas/assets/images/catering/DSC_6046.JPG');">
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
<!-- section end -->
<a href="./agencia-eventos-galicia-madrid" class="btn-flotante" id="btn-flotante"
  style=" color:#e40f1a; border: 2px solid #e40f1a;">
  <i class="fa fa-arrow-left"></i> Volver
</a>
<script>
  window.addEventListener('scroll', function() {
    var button = document.getElementById('btn-flotante');
    var container = document.querySelector('.container');
    var red = document.querySelector('.redfooter');
    var negro = document.querySelector('.footer');

    var buttonRect = button.getBoundingClientRect();
    var containerRect = container.getBoundingClientRect();
    var redRect = red.getBoundingClientRect();
    var negroRect = negro.getBoundingClientRect();

    if (buttonRect.top >= containerRect.top && buttonRect.bottom <= containerRect.bottom) {
      button.style.backgroundColor = '#fefefe';
      button.style.color = '#e40f1a';
      button.style.border = '2px solid #e40f1a';
    } else if (buttonRect.top >= redRect.top && buttonRect.bottom <= redRect.bottom) {
      button.style.backgroundColor = 'transparent';
      button.style.color = '#fefefe';
      button.style.border = '2px solid #fefefe';
    } else if (buttonRect.top >= negroRect.top && buttonRect.bottom <= negroRect.bottom) {
      button.style.backgroundColor = 'transparent';
      button.style.color = '#fefefe';
      button.style.border = '2px solid #fefefe';
    } else {
      button.style.backgroundColor = 'transparent';
      button.style.color = '#e40f1a';
      button.style.border = '2px solid #e40f1a';
    }
  });
</script>