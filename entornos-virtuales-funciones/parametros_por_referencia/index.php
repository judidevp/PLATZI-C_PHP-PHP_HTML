<?php
$numero=1;

function sum(&$a, $b)
{
    $a=2;
    return $a+$b;

}



echo $numero."\n";
echo sum($numero,2 )."\n";


