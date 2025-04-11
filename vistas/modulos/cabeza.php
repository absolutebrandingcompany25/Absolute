<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title(); ?></title>
<meta name='author' content='PlanB-RFF'>

  <!-- Mobile Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/ico" href="<?php echo SERVERURL; ?>vistas/assets/images/favicon.ico">
  <link href="localhost/blog/wp-content/themes/NewPlanB/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="localhost/blog/wp-content/themes/NewPlanB/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="localhost/blog/wp-content/themes/NewPlanB/animations.css" rel="stylesheet">
  <link href="localhost/blog/wp-content/themes/NewPlanB/style.css" rel="stylesheet">
</head>

	<body class="no-trans">

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
                    <li class="active"><a href="<?php echo SERVERURL; ?>inicio">INICIO</a></li>
                    <li><a href="<?php echo SERVERURL; ?>agencia-de-maketing">THINKING LAB</a></li>
                    <li><a href="<?php echo SERVERURL; ?>digitallab">DIGITAL LAB</a></li>
                    <li><a href="<?php echo SERVERURL; ?>eventos-formacion">EVENTS LAB</a></li>
                    <li><a href="<?php echo SERVERURL; ?>blog">BLOG</a></li>
                    <li><a href="<?php echo SERVERURL; ?>contacto">CONTACTO</a></li>
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


<section>
                <?php $etiqueta = (is_front_page() ?"h1":"h2"); ?>
  <<?php echo $etiqueta;?>><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></<?php echo $etiqueta;?>>

    <form action="<?php bloginfo('url');?>" method="get" style="text-align: center">
      <input type="text" name="s" id="search" value="<?php the_search_query(); ?>"
                               placeholder="Introducir término de búsqueda" style="width: 180px" required/>
      <button type="submit" class="btn btn-success">
        <i class="fa fa-search" aria-hidden="true"></i>
    </button>
    </form>

  <hr>
  <?//php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>
