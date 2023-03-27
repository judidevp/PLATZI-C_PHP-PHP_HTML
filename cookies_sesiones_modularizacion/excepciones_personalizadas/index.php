<?php

class DiegoException extends Exception
{
    public function getApellido(){
        return "gutierrez quintana ❤️";
    }       
}
class CarlitosException extends Exception
{
    public function getApellido(){
        return "quintana mamani 😊";
    }
}
try{
    $name=readline("escribe un nombre: ");
    if($name=="diego")
        throw new DiegoException("acertaste...🤩");
    else{
        throw new CarlitosException("fallaste...😴");
    }
}
catch(DiegoException $th){
    echo $th->getMessage()."\n";
    echo $th->getApellido()."\n";
}
catch(CarlitosException $th){
    echo $th->getMessage()."\n";
    echo $th->getApellido()."\n";
}



