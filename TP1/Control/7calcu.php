<?php


class control{



    public function operacion($datos){


        $operando1 = $datos['operando1'];
        $operando2 = $datos['operando2'];
        $instruccion= $datos['instruccion'];


        if($instruccion == "sumar"){
            $rta= $operando1 + $operando2;
        }elseif($instruccion == "restar"){
            $rta= $operando1 - $operando2;
        }elseif($instruccion == "multiplicar"){
            $rta= $operando1 * $operando2;
        }

        $retorno = "La respuesta es $rta y sus Operando1 = $operando1, Operando2 = $operando2";
        return $retorno;
    }




}