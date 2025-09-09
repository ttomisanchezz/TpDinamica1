<?php


class Archivo{

private $dir;

public function _construct(){
    $this->dir = "../Vista/Archivos";
}
public function getDir(){
    return $this->dir;
}
public function setDir(){
    $this->dir = $dir;
}


public function verificarTipo($archivo){

    $tiposValidos = ['application/msword', 'application/pdf'];
    $tamañomax= 2 * 1024 * 1024;

    //Verficiar archivo
    $tipoValido= in_array($archivo['type'],$tiposValidos);
    //Verificar tamaño
    $tamañoValido= $archivo['size'] <= $tamañomax;

    return $tipoValido && $tamañoValido;
}

public function subirArchivo($array){
    $rta= "";
// Verificar si el archivo fue subido sin errores
//isset devuelve true si la variable existe y el valor no es null
if(isset($array['miArchivo']) && $array['miArchivo']['error'] === UPLOAD_ERR_OK){
// Pasar solo el archivo a verificaTipo
if($this->verificarTipo($array['miArchivo'])){
// Mover el archivo a la ubicación deseada (basename obtiene el nombre base del archivo de una ruta)
if(move_uploaded_file($array['miArchivo']['tmp_name'], $this->getDir() . basename($array['miArchivo']['name']))){
$rta = 1;
}else{
$rta = 0;
}
}else{
    $rta = -2;
}
}else{
    $rta = -1;
}


return $rta;

}

} 