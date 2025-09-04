<?php



class control{



    public function decirquiensos($datos){

        $nombre = $datos['nombre'];
        $apellido = $datos['apellido'];
        $edad = $datos['edad'];
        $direccion= $datos['direccion'];

        $respuesta = "Mi nombre es ". $nombre . " " . $apellido. " tengo ". $edad. "años y vivo en ". $direccion;
        return $respuesta;
    }


}