<?php

require"Persona.php";
require"User.php";
class Administrador extends Persona
{
    public $name="Administrador";
}
$user=new User;
$user->type=new Administrador;
echo $user->type->greet();


