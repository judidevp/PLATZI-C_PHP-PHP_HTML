<?php

require ("vendor/autoload.php");
use App\classes\Suma;
use App\classes\Resta;




$suma=new Suma();
echo $suma->sumar($suma->value_a(), $suma->value_b())."\n";
$resta=new Resta();
echo $resta->restar($resta->value_a(), $resta->value_b())."\n";

