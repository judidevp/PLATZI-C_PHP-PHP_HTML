<?php
function greet(Closure $lang, $name)
{
    return $lang($name);

}

$es=function($name)
{
    return "hola, $name";
};
$en=function($name)
{
    return "hi, $name";
};

echo greet($en, 'Lynda');