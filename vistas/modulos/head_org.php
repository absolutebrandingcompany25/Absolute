<head>
  <meta charset="utf-8">


  <?php
$url= $_SERVER["REQUEST_URI"];

switch ($url) {

case "/NewPlanB/inicio":
  echo COMPANY;
  break;

case "/NewPlanB/thinkinglab":
  echo COMPANYthinking;
  break;

case "/NewPlanB/digitallab":
  echo COMPANYdigital;
  break;

case "/NewPlanB/eventslab":
  echo COMPANYevents;
  break;

  /*case "/NewPlanB/blog":
    echo COMPANYblog;
    break;*/

    case "/NewPlanB/contacto":
      echo COMPANYcontacto;
      break;

  case "/NewPlanB/error":
    echo COMPANYerror;
    break;

default:
  echo COMPANY;
}
?>

<meta name='author' content='PlanB'>

  <!-- Mobile Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/ico" href="<?php echo SERVERURL; ?>vistas/assets/images/favicon.ico">
  <link href="<?php echo SERVERURL; ?>vistas/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo SERVERURL; ?>vistas/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="<?php echo SERVERURL; ?>vistas/css/animations.css" rel="stylesheet">
  <link href="<?php echo SERVERURL; ?>vistas/css/style.css" rel="stylesheet">
  <link href="<?php echo SERVERURL; ?>vistas/css/custom.css" rel="stylesheet">
  <link href="<?php echo SERVERURL; ?>vistas/css/hover.css" rel="stylesheet">
</head>
