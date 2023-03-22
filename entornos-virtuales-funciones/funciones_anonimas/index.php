<?php

$numbers=[1,2,3,4];

$numbers_by_2=array_map(function($current){
    return $current*2;
}, $numbers);

var_dump( $numbers_by_2);


$name="diego";
$changed_name=function()use (&$name2)
{   
    $name2="juan";
    echo "$name2 \n";
};

echo "$name \t";
$changed_name();