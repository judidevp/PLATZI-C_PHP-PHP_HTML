<?php



/*try{
    $resultado=3/0;
    echo "el resultado es: $resultado";
}catch(throwable $th)
{
    echo $th->getMessage();
    //echo "algo salio mal";
}*/

try {
    $nombre=readline("¿como te llamas?: ");
    if($nombre=="juan" || $nombre=="diego")
        echo "bienvenido $nombre";
    else
        throw new Exception("nombre incorrecto");
        
} catch (\Throwable $th) {
    echo $th->getMessage();
    
}
/*
$e->getMessage(); Obtiene el mensaje de Excepción
$e->getCode(); Obtiene el código de una excepción
$e->getFile(); Obtiene el fichero en el que se creó la excepción
$e->getLine(); Obtiene la línea en el que se creó la excepción
$e->getTrace() Obtiene la traza de la pila
$e->getTraceAsString() Obtiene la traza de la pila como una cadena de caracteres
*/

