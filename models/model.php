<?php
    class EnlacesPaginas {
        public static function enlacesPaginasModel($enlacesModel) {
            if ($enlacesModel == "nosotros" || $enlacesModel == "servicios" || $enlacesModel == "contacto") {
                $module = "views/interfaces/".$enlacesModel.".php";
            } else {
                $module = "views/interfaces/inicio.php";
            }
            
            return $module;
        }
    }