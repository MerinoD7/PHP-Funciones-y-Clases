<?php

/**
 * clase abstracta: son clases que no pueden ser instanciadas solo se dedican a extenderse
 * metodos abstractos y metodos comunes
 */

abstract class Persona{
    public $nombre;
    public $apellido;
    public $correo;
    public $edad;

    public function __construct($nombre, $apellido, $correo, $edad)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->edad = $edad;
    }

    abstract function obtenerDatos();
}

class Usuario extends Persona{
    public $password;

    public function __construct($nombre, $apellido, $correo, $edad, $password)
    {
        /** llamando al constructor padre (Persona) */
        parent::__construct($nombre, $apellido, $correo, $edad);
        $this->password = $password;
    }

    public function obtenerDatos()
    {
        return "Usuario Final: <br>Nombre Completo: " . $this->nombre . " $this->apellido <br>Correo: " . $this->correo .
                "<br>Edad: " . $this->edad . "<br>Contraseña: " . $this->password;
    }
}

$usuario = new Usuario("Diana","Juarez","diana@gmail.com",20,"123");
$usuario->edad = 25;
echo $usuario->obtenerDatos();

?>