<?php



class control{


    function verificarpass($datos){

        $arrayUser= [
        [
         "usuario" => "tomisanchez",
         "contrasena" => "tomi2004"
        ],
        [
        "usuario" => "axelost",
         "contrasena" => "axel2005"
        ]

    ];

    $rta = "Verifique los datos ingresados no son correctos";
    foreach($arrayUser as $user){
        if($datos["usuario"] === $user["usuario"] && $datos["contrasena"] === $user["contrasena"] ){
            $rta = "!Los datos de sesion son correctos! Que disfrutes";
        }
    }

    return $rta;

    }



}