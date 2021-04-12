<?php

class EnlacesPaginas{

    public function enlacesPaginasModel($enlacesmodel){

        if($enlacesmodel == "nosotros" ||
           $enlacesmodel == "servicios" ||
           $enlacesmodel == "contactenos"){

               $modulo = "views/modules/".$enlacesmodel.".php";

           }

        else if($enlacesmodel == "index"){

            $modulo = "views/modules/inicio.php";

        }

        else{

            $modulo = "views/modules/inicio.php";

        }

        return $modulo;
    }
}
?>