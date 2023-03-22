<?php

function suma( $a, $b):int {
    return  $a+$b;
}
echo suma(1,2),"\n";

function resta($a, $b) {
    echo $a-$b."\n";
}
resta(2,4);

class Message{
    public $value="hola diego!!!!";
}

function message(message $greet, $last_name):void{
    echo "$greet->value $last_name\n";
}

message(new message, "gutierres");


function multiplicar($a, $b=1)
{
    return $a*$b;
}

echo multiplicar(2,2)."\n";





