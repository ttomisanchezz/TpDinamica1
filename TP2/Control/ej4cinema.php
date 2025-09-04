<?php




class control{


    function retornarpeli($datos){


        $titulo = $datos['titulo'];
        $actores= $datos['actores'];
        $director= $datos['director'];
        $guion = $datos['guion'];
        $produccion= $datos['produccion'];
        $anio= $datos['anio'];
        $nacionalidad= $datos['nacionalidad'];
        $genero = $datos['genero'];
        $duracion= $datos['duracion'];
        $restriccion = $datos['restriccion'];
      

        $respuesta = "
        <h1> La pelicula introducida es </h1>
        <br>
        Titulo: $titulo <br>
        Actores: $actores <br>
        Director: $director <br>
        Guion: $guion  <br>
        Produccion: $produccion <br>
        Año: $anio <br>
        Nacionalidad: $nacionalidad <br>
        Genero: $genero <br>
        Duracion: $duracion  <br>
        Restricciones de edad: $restriccion <br>        
        ";

        return $respuesta;


    }




}