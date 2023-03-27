<?php
// Por procedimientos / estructurada / funciones
/* $interval = date_interval_create_from_date_string("5 days");
$date = date_create();
date_add($date, $interval);
echo date_format($date, "d-m-y\n"); */
// POO
/* $interval= DateInterval:: createFromDateString("5 days") ;
$date= new DateTime();
$date->add($interval) ;
echo $date->format("d-m-y\n"); */

//date_default_timezone_get("America/Caracas");
//date_default_timezone_set("America/Mexico_City");
// Obtener la fecha actual
//$now = date("Y-m—d H:i:s\n");
// $now = date_create();
// strtotime
/* echo $now;
echo strtotime("2020-08-25");


$unix_time=strtotime("tomorow");
echo date("y-m-d H:i:s", $unix_time);
 */

/* $today = new DateTime();
$mrmichi_birth= new DateTime("2020-03-25");
$interval = $mrmichi_birth->diff($today) ;
echo $interval->format("%y años con %d días"); */

// Crear desde un formato dado
/* $date = DateTime::createFromFormat("l j F Y", "Sunday 17 April 2022") ;
echo $date->format("Y-m—d H:i:s\n"); */




$date= new DateTime();
$date->modify("—1 year") ;
echo $date->format("Y-m-d\n") ;