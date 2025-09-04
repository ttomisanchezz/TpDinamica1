

<?php




class control{

    function precioentrada($datos){


        $estudios= $datos['estudios'];
        $edad= $datos['edad'];
        $precio = 0;

        if($estudios == "si" && $edad >= 12 ){
            $precio = 180;  
        }elseif($estudios == "si" || $edad < 12){
            $precio = 160;
        }else{
            $precio = 300;
        }

        return $precio;

    }






}
