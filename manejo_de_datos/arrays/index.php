<?php
#           listas simplexml_load_string

/*$lista=['laravel', 'javascrip', 'php'];
var_dump($lista);
$lista2=[
    2 =>'juan',
    3=>'pedro',
    0=>'elvis'
];
var_dump($lista2);*/


#           lista complejas


$courses=[
    'frontend'=>'javascript',
    'framework'=>'laravel',
    'backend'=>'php'

];
//var_dump($courses);
/*foreach ($courses as $course=>$value){
    echo "$course : $value<br>";
}*/

function upper($courses, $values)
{
    echo strtoupper($courses)." : $values <br>";
}

array_walk($courses, 'upper');

var_dump(array_key_exists   ('frontend', $courses));
var_dump(in_array   ('php', $courses)); #solo para los values
var_dump(in_array   ('backend', $courses)); #solo para los values
var_dump(array_keys    ($courses)); 
var_dump(array_values    ($courses)); 

