<?php 

    require_once "./modelos/Vista_modelo.php";

    class PlantillaControlador extends Vista_modelo {

        public function get_plantilla_controlador() {
            require_once "./vista/plantillaweb.php";
        }

        public function get_vista_controlador() {
            if(isset($_GET['vistas'])) {
                $url = explode("/", $_GET['vistas']);
                $respuesta = Vista_modelo::get_vista_modelo($url[0]);
            }else {
                $respuesta = "login";
            }
            return $respuesta;
        }
    }

