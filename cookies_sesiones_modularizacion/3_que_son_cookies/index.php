<?php

setcookie(
    name:"letter_color",
    value:"#12373d"
);
$color=$_COOKIE["letter_color"] ?? "#123f3d"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies</title>
</head>
<body>  
   <h1 style="color:<?=$color?>;" >DIEGO</h1>    
</body>
</html>