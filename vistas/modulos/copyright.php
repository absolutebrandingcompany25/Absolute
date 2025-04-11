<!-- footer start -->
<section id="contacto">
<footer id="footer">


   <?php
  if ($vistasr=="agencia-branding-vigovista" || $vistasr=="imagen-marca-vigovista" || $vistasr=="diseno-grafico-logotipo-vigovista" || $vistasr=="diseno-packaging-vigovista" || $vistasr=="central-medios-publicitariosvista" || $vistasr=="gestion-publicidad-medios-vigovista" || $vistasr=="consultoria-marca-vigovista" ) {
    include './vistas/modulos/newsletterBRANDING.php'; /* Para el Lead magnet se muestre las difentes imagenes en cada página */
   }
   elseif ($vistasr=="absolutebrandingcompany.com/agencia-marketing-digital-vigo" || $vistasr=="agencia-marketing-digital-vigovista.php" || $vistasr=="diseno-web-vigovista" || $vistasr=="consultoria-estrategia-digitalvista" || $vistasr=="posicionamiento-web-seo-marketingvista" || $vistasr=="alojamiento-web-hosting-vigovista" || $vistasr=="gestion-redes-sociales-vigovista" || $vistasr=="diseno-tienda-online-vigovista") {
     include './vistas/modulos/newsletterDIGITAL.php';
   }
   elseif ($vistasr=="agencia-eventos-galicia-madridvista" || $vistasr=="diseno-stand-vigo-madridvista" || $vistasr=="decoracion-ambientacion-vigovista" || $vistasr=="catering-eventos-galiciavista" || $vistasr=="fotografia-video-eventos-vigovista" || $vistasr=="produccion-grafica-vigovista" || $vistasr=="organizacion-de-eventos-vigovista" || $vistasr=="agencia-azafatas-promotoras-vigovista" || $vistasr=="contratar-influencers-artistas-celebrietiesvista" || $vistasr=="protocolo-eventos-vigovista" || $vistasr=="personal-auxiliar-eventos-vigovista" || $vistasr=="logistica-eventos-vigovista" || $vistasr=="merchadising-empresas-vigovista") {
     include './vistas/modulos/newsletterEVENTS.php';
   }
   elseif ($vistasr=="agencia-azafatas-promotoras-vigo") {
     include './vistas/modulos/newsletterEVENTS.php';
   }
   else{
    include './vistas/modulos/newsletterINICIO.php'; /* Para el Lead magnet se muestre las difentes imagenes en cada página */
   }

   ?>

  <?php include 'vistas/modulos/sitemap.php'; ?>

  <!-- .subfooter start -->
  <div class="subfooter">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="text-center">
            <a href="<?php echo SERVERURL; ?>avisos-legales" style="color: #c7c5c5;">Avisos Legales</a> |
            <a target="_blank" href="politica-privacidad" style="color: #c7c5c5;">Política de privacidad</a> |
            <a target="_blank" href="politica-privacidad#cookies" style="color: #c7c5c5;">Uso de cookies</a> |
            Copyright © <?php echo date('Y');?> <img src='vistas/assets/images/absolute_blanco_pequeno.png' alt="Absolute" style="width:50px; display: initial;"> Todos los derechos reservados. www.absolutebrandingcompany.com  JOB WELL DONE!</p>
        </div>
      </div>
    </div>
  </div>
  <!-- .subfooter end -->

</footer>
<section>


<!-- footer end -->
