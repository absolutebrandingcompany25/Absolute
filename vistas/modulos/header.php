<!-- scrollToTop -->
<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

<!-- header start -->
<header class="header fixed clearfix navbar navbar-fixed-top">
  <div class="container menucabecera">
    <div class="row">
      <div class="col-md-4 col-xs-6">
        <!-- header-left start -->
        <div class="header-left">
          <!-- logo -->
          <div class="logo smooth-scroll">
            <a href="<?php echo SERVERURL; ?>"><img id="logo" src="<?php echo SERVERURL; ?> vistas/assets/images/logo_absolute.png" alt="absolute branding company"></a>
          </div>
        </div>
      </div>

      <div class="col-md-8 col-xs-6">

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
                    if($_GET["views"] === "absolute-branding-vigo"){
                      echo "active";
                            }
                    else{
                      echo " ";
                            }
                    ?>
                    "><a href="<?php echo SERVERURL; ?>absolute-branding-vigo">MANIFESTO</a></li>


                    <li class="nav-item dropdown
                    <?php
                    if(($_GET["views"] === "imagen-de-marca") OR ($_GET["views"] === "marketing-digital-vigo") OR ($_GET["views"] === "organizacion-eventos-vigo")  ){
                      echo "active";
                            }
                    else{
                      echo " ";
                            }
                    ?>
                    ">
                  <a href="#" class="dropdown-toggle textomenu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-hover="dropdown">SERVICIOS <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li class="
                    <?php
                    if($_GET["views"] === "agencia-branding-vigo"){
                      echo "active";
                            }
                    else{
                      echo " ";
                            }
                    ?>
                    "><a href="<?php echo SERVERURL; ?>agencia-branding-vigo">Absolute Branding</a></li>

                    <li class="
                    <?php
                    if($_GET["views"] === "agencia-marketing-digital-vigo"){
                      echo "active";
                            }
                    else{
                      echo " ";
                            }
                    ?>
                    "><a href="<?php echo SERVERURL; ?>agencia-marketing-digital-vigo">Absolute Digital</a></li>

                    <li class="
                    <?php
                    if($_GET["views"] === "agencia-eventos-galicia-madrid"){
                      echo "active";
                            }
                    else{
                      echo " ";
                            }
                    ?>
                    "><a href="<?php echo SERVERURL; ?>agencia-eventos-galicia-madrid">Absolute Events</a></li>
                  </ul>
                </li>

                    <li class="
                    <?php
                    if($_GET["views"] === "blog"){
                      echo "active";
                            }
                    else{
                      echo " ";
                            }
                    ?>
                    "><a href="<?php echo SERVERURL; ?>blog-marketing-diseno-seo/">REDPAPERS</a></li>

                    <li class="
                    <?php
                    if($_GET["views"] === "contactar-agencia-marketing-vigo"){
                      echo "active";
                            }
                    else{
                      echo " ";
                            }
                    ?>
                    "><a href="<?php echo SERVERURL; ?>contactar-agencia-marketing-vigo">CONTACTO</a></li>

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
  <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '369041092063959');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=369041092063959&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
</header>
<!-- header end -->
