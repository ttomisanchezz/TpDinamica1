<?php



class control{


    public function retornarform($datos){

        
        $nombre = $datos['nombre'];
        $apellido = $datos['apellido'];
        $edad = $datos['edad'];
        $direccion= $datos['direccion'];
        $estudios= $datos['estudios'];
        $sexo = $datos['sexo'];


        $respuesta = "Mi nombre es ". $nombre . " " . 
        $apellido. " tengo ". $edad. "años y vivo en ". $direccion . " y mis estudios son: " .$estudios . " y soy ". $sexo;



        return $respuesta;

    }



}