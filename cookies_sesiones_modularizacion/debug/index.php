<?php
require"vendor/autoload.php";

class Perro
{
    protected $patas=[];
    protected $color;

    function __construct(string $color){
        $this->color=$color;
        for($i=0;$i<4;$i++){
            $this->patas[$i]=new PataDePerro;
        }
        
    }
}

class PataDePerro
{
    protected $nails=4;
    protected $description="Tiene patas";

    public function get_descriptions(): string {
        return $this->description;
    }
    
}

$casa_de_perros=array(
    "nombre"=>"casa de perritos",
    "ubicacion"=>[
        "pais"=>"bolivia",
        "ciudad"=>"la paz",
        "numero"=>15
    ],
    "numero_de_perros"=>14,
    "perros"=>[
        new Perro("manchas"),
        new Perro("negras"),
        new Perro("blancas")
    ]
);

dd($casa_de_perros);