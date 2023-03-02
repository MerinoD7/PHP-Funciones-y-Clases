<?php

/* Los 20 empleados de una fábrica trabajan en dos turnos: diurno o nocturno. Se 
desea calcular el salario diario de cada uno de los empleados de acuerdo con los 
siguientes puntos:
- La tarifa de horas diurnas es de $5
- La tarifa de horas nocturnas es de $10
- Caso de ser domingo, la tarifa se pagará en $10 en el turno diurno y $20 en el 
turno nocturno **/

$empleados = array(
    array( "nombre" => "Oscar", "turno" => "diurno", "domingo" => false),
    array( "nombre" => "Adonay", "turno" => "diurno", "domingo" => false),
    array( "nombre" => "Samuel", "turno" => "diurno", "domingo" => false),
    array( "nombre" => "daniel", "turno" => "nocturno", "domingo" => true),
    array( "nombre" => "Maria", "turno" => "nocturno", "domingo" => true),
    array( "nombre" => "Ana", "turno" => "nocturno", "domingo" => true),
);

foreach($empleados as $empleado){
    if ($empleado["turno"]){
        $tarifa = 10;
    } else {
        $tarifa = 20;
    }
} else{
    if ($empleado["turno"] == "diurno"){
        $tarifa = 5;
    } else {
        $tarifa = 10;
    }

}
$salario = 8 * $tarifa;

echo "Nombre:" . $empleados ["nombre"] . "\n";
echo "Turno:" . $empleado ["turno"] . "\n";
echo "Domingo" . ($empleado["domingo"] ? "si" : "no") . "\n";
echo "salario diario: $" .$salario . "\n";


?>