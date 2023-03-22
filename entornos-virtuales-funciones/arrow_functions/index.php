<?php
$age=20;

$add_age=fn($add)=>$age+$add;

echo $add_age(3)."\n";

$ages=[16, 23, 17, 34, 70];

$ages_mayores=array_filter($ages, fn($mayores)=>$mayores>=18);

var_dump($ages_mayores);

$ages_mayores2=array_filter($ages, fn($menores)=> $menores<=18);

var_dump($ages_mayores2);


$ages_por_2=array_map(fn($multiplicado)=>$multiplicado*2, $ages);
var_dump($ages_por_2);