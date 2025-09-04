<?php


class control{

    public function mayoromenor($datos){


        $edad = $datos['edad'];


        if($edad >= 18){
            $rta = "Es mayor de edad";
        }else{
            $rta = "Es menor de edad";
            }   

        return $rta;

    }



}