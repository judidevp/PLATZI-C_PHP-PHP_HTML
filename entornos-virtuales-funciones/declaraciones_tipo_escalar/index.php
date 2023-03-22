<?php

function calcular_area_triangulo(int $base, int $altura, string $nombre)
{
    return "hola $nombre, el area de tu triangulo es ". ($base*$altura)/2 . "!!!\n";
}

echo calcular_area_triangulo(5, 15, "diego");



