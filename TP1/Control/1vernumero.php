<?php

class control{


   public function darRespuesta($datos){

        if($datos['numero'] == 0){
            $rta = "0";
        }elseif($datos['numero'] > 0){
            $rta = "positivo";
        }else{
            $rta="negativo";
        }
        return $rta;
    }
}