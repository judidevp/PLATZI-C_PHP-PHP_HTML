<?php
require"Base.php";
require"Admin.php";
require"Guest.php";
require"User.php";

$guest=new Guest;
$admin= new Admin('juan');
$user=new User('diego');

echo $guest->login()."\n";
echo $admin->login("juan")."\n";
echo $user->login("diego")."\n";




