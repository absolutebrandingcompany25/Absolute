<?php

    class modelvista{
      protected function obtener_vistas_modelo($vistas){
        $listapermitida=['inicio', 'digitallab',
                          'eventos-formacion', 'contacto', 'error',
                          'portafolio', 'contacto', 'leer-mas', 'terminos-marketing',
                          'index', 'marketing-vigo', 'diseno-web-vigo', 'agencia-branding-vigo', 'alojamiento-web-hosting-vigo', 'diseno-grafico-logotipo-vigo',
                         'diseno-grafico', 'gestion-redes-sociales-vigo', 'imagen-corporativa', 'diseno-packaging-vigo',
                          'posicionamiento-web-seo-marketing', 's-publicidad', 'agencia-marketing-digital-vigo', 'diseno-tienda-online-vigo', 'avisos-legales', 'consultora', 'filosofia','politica-privacidad', 'diseno-stand-vigo-madrid', 'decoracion-ambientacion-vigo', 'catering-eventos-galicia','fotografia-video-eventos-vigo', 'produccion-grafica-vigo', 'agencia-eventos-galicia-madrid','agencia-azafatas-promotoras-vigo', 'contratar-influencers-artistas-celebrieties', 'protocolo-eventos-vigo', 'personal-auxiliar-eventos-vigo', 'logistica-eventos-vigo', 'merchadising-empresas-vigo', 'identidad-corporativa', 'agencia-diseno-marketing-vigo', 'organizacion-eventos-vigo','contactar-agencia-marketing-vigo','agencia-publicidad-vigo','glosario-marketing-publicidad', 'imagen-marca-vigo','central-medios-publicitarios', 'gestion-publicidad-medios-vigo', 'absolute-branding-vigo','consultoria-marca-vigo', 'consultoria-estrategia-digital','organizacion-de-eventos-vigo', 'blog-marketing-diseno-seo', 'landing'];
              if(in_array($vistas, $listapermitida)){
                  if(is_file('./vistas/contenidos/'.$vistas.'vista.php')){
                    $contenido='./vistas/contenidos/'.$vistas.'vista.php';
                  }
                  elseif(is_file('./vistas/contenidos/servicios/'.$vistas.'vista.php')){
                    $contenido='./vistas/contenidos/servicios/'.$vistas.'vista.php';
                  }
                  else{
                      var_dump(http_response_code(404));
                      $contenido='error';
                  }
              }
              elseif($vistas=='index'){
                $contenido='inicio';
              }
                else{
                      var_dump(http_response_code(404));
                  $contenido='error';
              }

            return $contenido;

      }

    }
