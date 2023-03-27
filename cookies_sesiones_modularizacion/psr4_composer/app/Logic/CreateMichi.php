<?php

use App\Clases\MichiDisponibles;
use App\Clases\MichiAdoptados;

function createMichis(){
    $mr_michi_disponible=new MichiDisponibles("chopper", "banco y verde", 11);
    $mr_michi_adoptado=new MichiAdoptados("chopper", new DateTime("2020-02-15"), "diego");

    echo $mr_michi_disponible->sayMeow()."me adoptó {$mr_michi_adoptado->getAdopted_by()}\n";
}











