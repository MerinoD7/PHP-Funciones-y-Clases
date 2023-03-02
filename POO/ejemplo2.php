<?php

class Empleado{
    public $nombre;
    public $direccion;
    public $telefono;
    protected $sueldo;

    public function __construct($nombre, $direccion, $telefono, $dinero)
    {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->sueldo = $dinero; //800
    }

    public function calcularSueldo(){

        /** descontar a los empleados que ganan mas de $660, renta = 10% */
        $total_sueldo = 0;
        if($this->sueldo > 660){
            $total_sueldo = abs(($this->sueldo * 0.10) - $this->sueldo);
            return "Tu salario total es " . $total_sueldo . " porque se te desconto el 10% de la renta";
        }else{
            return "Tu salario es " . $this->sueldo . "no aplica renta";
        }
    }

    public function imprimirDatos(){
        return "Informacion Empleado: <br>Nombre Completo: " . $this->nombre . "<br>Direccion: " . $this->direccion .
                "<br>Telefono: " . $this->telefono;
    }
}


?>