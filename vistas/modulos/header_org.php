<!-- scrollToTop -->
<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

<!-- header start -->
<header class="header fixed clearfix navbar navbar-fixed-top">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <!-- header-left start -->
       <div class="header-left">
          <!-- logo -->
          <div class="logo smooth-scroll">
            <a href="#banner"><img id="logo" src="<?php echo SERVERURL; ?>vistas/assets/images/logo.png" alt="Worthy"></a>
          </div>
       </div>
      </div>

      <div class="col-md-8">

        <!-- header-right start -->
        <div class="header-right">

          <!-- main-navigation start -->
          <div class="main-navigation animated">

            <!-- navbar start -->
            <nav class="navbar navbar-default" role="navigation">
              <div class="container-fluid">

                <!-- Toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">

                    <li class="
                    <?php
                    if($_GET["views"] === "inicio"){
                      echo "active";
                            }
                    else{
                      echo " ";
                            }
                    ?>
                    "><a href="<?php echo SERVERURL; ?>inicio">INICIO</a></li>

                    <li class="
                    <?php
                    if($_GET["views"] === "agencia-de-maketing"){
                      echo "active";
                            }
                    else{
                      echo " ";
                            }
                    ?>
                    "><a href="<?php echo SERVERURL; ?>agencia-de-maketing">THINKING LAB</a></li>

                    <li class="
                    <?php
                    if($_GET["views"] === "digitallab"){
                      echo "active";
                            }
                    else{
                      echo " ";
                            }
                    ?>
                    "><a href="<?php echo SERVERURL; ?>digitallab">DIGITAL LAB</a></li>

                    <li class="
                    <?php
                    if($_GET["views"] === "eventos-formacion"){
                      echo "active";
                            }
                    else{
                      echo " ";
                            }
                    ?>
                    "><a href="<?php echo SERVERURL; ?>eventos-formacion">EVENTS LAB</a></li>

                    <li class="
                    <?php
                    if($_GET["views"] === "blog"){
                      echo "active";
                            }
                    else{
                      echo " ";
                            }
                    ?>
                    "><a href="<?php echo SERVERURL; ?>blog">BLOG</a></li>

                    <li class="
                    <?php
                    if($_GET["views"] === "contacto"){
                      echo "active";
                            }
                    else{
                      echo " ";
                            }
                    ?>
                    "><a href="<?php echo SERVERURL; ?>contacto">CONTACTO</a></li>

                  </ul>
                </div>
              </div>
            </nav>
            <!-- navbar end -->

          </div>
          <!-- main-navigation end -->

        </div>
        <!-- header-right end -->

      </div>
    </div>
  </div>
</header>
<!-- header end -->
