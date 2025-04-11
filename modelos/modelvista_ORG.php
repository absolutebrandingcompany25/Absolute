<?php

    class modelvista{
      protected function obtener_vistas_modelo($vistas){
        $listapermitida=['inicio', 'agencia-de-maketing', 'digitallab',
                          'eventos-formacion', 'blog', 'contacto', 'error',
                          'portafolio', 'contacto', 'leer-mas', 'terminos-marketing',
                          'index', 'nosotros', 'diseno-web', 'branding', 'campanas-digitales', 'creatividad',
                         'diseno-grafico', 'dominios-hosting', 'imagen-corporativa', 'packaging',
                          'redes-sociales', 's-publicidad', 'seo-sem-smo', 'tienda-online', 'avisos-legales', 'consultora', 'filosofia','politica-privacidad'];
              if(in_array($vistas, $listapermitida)){
                  if(is_file('./vistas/contenidos/'.$vistas.'vista.php')){
                    $contenido='./vistas/contenidos/'.$vistas.'vista.php';
                  }
                  elseif(is_file('./vistas/contenidos/servicios/'.$vistas.'vista.php')){
                    $contenido='./vistas/contenidos/servicios/'.$vistas.'vista.php';
                  }
                  else{
                      $contenido='error';
                  }
              }
              elseif($vistas=='index'){
                $contenido='inicio';
              }
                else{
                  $contenido='error';
              }

            return $contenido;

      }

    }
