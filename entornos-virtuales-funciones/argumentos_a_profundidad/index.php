<?php

function sumar_edades($edades=array(2,2,2))
{
    return array_sum($edades);
}


echo sumar_edades()."\n";
echo sumar_edades(array(1,1,1))."\n";



class UnaClaseRandom{}
class OtraClaseRandom{}


function recive_a_class($class= new UnaClaseRandom)
{
    echo $class::class."\n";
}
recive_a_class();
recive_a_class(new OtraClaseRandom);