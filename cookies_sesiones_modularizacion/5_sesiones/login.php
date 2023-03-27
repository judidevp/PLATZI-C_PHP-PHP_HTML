<?php
session_start();

$users=[
    array(
    "username"=>"diego",
    "email"=>"esteNoEsMiCorreo@YoNoFui.com"
    ),
    array(
    "username"=>"juan",
    "email"=>"esteSiEsMiCorreo@YoSiFui.com"
    ),
    ];

    $user=$_GET["user"] ?? "";

    $_SESSION["id"]=$user;
    $_SESSION["username"]=$users[$user]["username"];
    $_SESSION["email"]=$users[$user]["email"];

    echo "el usuario elegido es:". $users[$user]["username"];