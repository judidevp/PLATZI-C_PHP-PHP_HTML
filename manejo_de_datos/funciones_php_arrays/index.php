<?php
/*$courses=[


10 =>'javascript',
100 => 'laravel'
];
krsort ($courses) ;
echo "<pre>";
var_dump($courses);
var_dump(array_slice($courses, 1));
var_dump(array_chunk($courses, 2));*/
#.-------------------------------------------------------
/*
$courses=[
    10 =>'javascript',
    100 => 'laravel',
    1000=>'php'
    ];
    //var_dump(array_slice($courses, 2)); #trabaja desde la posicion 2
//var_dump(array_chunk($courses, 3)); #dependiendo la cantidad de valores creara otros arrays dentro del array

//array_shift($courses); #muestra y elimina el primer elemento de un array
//array_pop($courses); #muestra y elimina el ultimo elemento de un array
//var_dump(array_unshift($courses)); #muestra y elimina el ultimo elemento de un array
//var_dump($courses);
var_dump(array_flip($courses));*/

#-----------------------------------------------------------------
/*
sort: Ordena un array.

rsort: Ordena un array en orden inverso.

ksort: Ordena un array por clave.

krsort: Ordena un array por clave en orden inverso.

array_slice: Extrae una parte de un array.

array_chunk: Divide un array en fragmentos.

array_shift: Quita un elemento del principio del array.

array_pop: Extrae el último elemento del final del array.

array_unshift: Añadir al inicio de un array uno a más elementos.

array_push: Inserta uno o más elementos al final de un array.

array_flip: Intercambia todas las claves de un array con sus valores asociados.

*/

    $courses=['javascript', 'php'];
    $wishes=['php', 'laravel', 'javascript', 'vuejs'];

    var_dump(array_diff($wishes, $courses));


    $array1=[1,2,3,4,5];
    $array2=[4,5,6,7,8];
    var_dump(array_diff($array1, $array2));
    var_dump(array_diff($array2, $array1));
    var_dump(array_diff_assoc($array2, $array1));
    $array3=[7,9,3,6,1];
    var_dump(sort($array3));
    var_dump($array3);

    var_dump(array_combine($array1, $array3));
 
    var_dump(array_merge(array_combine($array1, $array3), array_combine($array2, $array3)));

