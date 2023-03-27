<?php
namespace App\traits;

trait Values{

    function value_a()
    {
        $a=readline("ingrese un vvalor para a: ");
        return $a;
    }
    function value_b()
    {
        $b=readline("ingrese un vvalor para b: ");
        return $b;
    }
   
}



