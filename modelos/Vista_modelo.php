<?php

    class Vista_modelo {
        protected static function get_vista_modelo($vista) {
            $VistaWeb =[];
            if(in_array($vista, $VistaWeb)) {
                if(is_file("./vista/contenido/" . $vista . "MiWeb.php")) {
                    $contenido = "./vista/contenido/" . $vista . "MiWeb.php";
                } else {
                    $contenido = "404";
                }
        } elseif($vista == "index" || $vista == "Login") {
            $vistasUrl = "Login";
        } else {
            $vistasUrl = "404";
        }
            return $vistasUrl;
            
        }
    }