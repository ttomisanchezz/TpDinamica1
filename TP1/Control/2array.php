<?php

class control{

    public function cantidadHoras($datos){

        $respuesta = array_sum($datos);
        return $respuesta;

    }


}