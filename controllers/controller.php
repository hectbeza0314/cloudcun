<?php

class MvcController{

    #Bloque para llamar plantilla del sitio.

    public function plantilla(){

        include "views/template.php";

    }

    #Bloque de interaccion de usuario y navegacion.

    public function enlacesPaginasController(){
        
        if(isset($_GET["action"])){

            $enlacescontroller = $_GET["action"];

        }
        else{

            $enlacescontroller = "index";

        }

        $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacescontroller);

        include $respuesta;
    }
}

?>