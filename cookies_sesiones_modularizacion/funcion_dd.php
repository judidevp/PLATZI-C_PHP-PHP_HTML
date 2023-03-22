<?php
class perro
{
    protected $patas=[];
    protected $color;

    function __construct(string $color){
        $this->color=$color;
        for($i=0;$i<4;$i++){
            $this->patas[$i]=new PataDePerro;
        }
        
    }
}



