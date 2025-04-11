<?php

    require_once "./modelos/modelvista.php";
    class controlvista extends modelvista{

        public function obtener_plantilla_control(){
          return require_once './vistas/plantilla.php';
        }

        public function obtener_vistas_controlador (){
          if(isset($_GET['views'])){
            $ruta=explode('/', $_GET['views']);
            $respuesta=modelvista::obtener_vistas_modelo($ruta[0]);
          }

          else{
                  $respuesta='inicio';
            }
            return $respuesta;
        }
    }
