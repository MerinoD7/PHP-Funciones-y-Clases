<?php

/**
 * Pilar de encapsulamiento
 * 
 * modificadores de acceso: public, private, protected
 */

class CarroChocon{
    /** asignacion de atributos */
    public $nombre;
    private $color; //get y set
    protected $vida;

    /**
     * Metodo constructor podemos inicializar un objeto al momento de instanciar
     */
    public function __construct($nombre, $vida, $color)
    {
        $this->nombre = $nombre;
        $this->vida = $vida;
        $this->color = $color;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function getColor(){
        return "El color del carrito chocon es $this->color";
    }

}

class Barco extends CarroChocon{

    
}

$carro = new CarroChocon("panchito",3, "morado");
//$carro->nombre = "gabyto";
//$carro->setColor("Verde");
//echo $carro->getColor();
print_r($carro);



?>