<?php

if(!isset($_COOKIE["example_cookie"])){
    setcookie(
        name:"example_cookie",
        value:"diego",
        expires_or_options:0,
        path:"/",
        domain:"localhost",
        secure:false, #cuando esta en true significa de esta web esta con https...
        httponly:false #si es true “será accesible por lenguajes de scripting, como JavaScrip
    );

    echo "cookie creada...";
}

echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";

