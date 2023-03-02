<?php 
/* En una empresa de 20 trabajadores, se hará un aumento al salario de acuerdo con 
 el tiempo de servicio, para este aumento se tomará en cuenta lo siguiente:
 Tiempo de servicio Aumento
 1 a menos de 5 años $25
 De 5 y menos de 10 años $50
De 10 y menos de 20 años $100
 De 20 años a más $150
 Al final deberá imprimir el nombre, salario actual, el aumento y el nuevo sueldo de 
 cada trabajador. */

$data = [
    [
        'empleado' => 'Jonh',
        'salario_actual' => '800',
        'tiempo_servicio' => '1',
    ],
    [
        'empleado' => 'Antonio',
        'salario_actual' => '800',
        'tiempo_servicio' => '5',
    ],
    [
        'empleado' => 'José',
        'salario_actual' => '800',
        'tiempo_servicio' => '10',
    ],
    [
        'empleado' => 'Manuel',
        'salario_actual' => '800',
        'tiempo_servicio' => '20',
    ],
    [
        'empleado' => 'Miguel',
        'salario_actual' => '800',
        'tiempo_servicio' => '2',
    ],
    [
        'empleado' => 'Rafael',
        'salario_actual' => '800',
        'tiempo_servicio' => '6',
    ],
    [
        'empleado' => 'Pedro',
        'salario_actual' => '800',
        'tiempo_servicio' => '11',
    ],
    [
        'empleado' => 'María',
        'salario_actual' => '800',
        'tiempo_servicio' => '21',
    ],
    [
        'empleado' => 'Carmen',
        'salario_actual' => '800',
        'tiempo_servicio' => '3',
    ],
    [
        'empleado' => 'Daniel',
        'salario_actual' => '800',
        'tiempo_servicio' => '7',
    ],
    [
        'empleado' => 'Francisco',
        'salario_actual' => '800',
        'tiempo_servicio' => '12',
    ],
    [
        'empleado' => 'Carlos',
        'salario_actual' => '800',
        'tiempo_servicio' => '22',
    ],
    [
        'empleado' => 'Jesús',
        'salario_actual' => '800',
        'tiempo_servicio' => '4',
    ],
    [
        'empleado' => 'Cristina',
        'salario_actual' => '800',
        'tiempo_servicio' => '9',
    ],
    [
        'empleado' => 'Laura',
        'salario_actual' => '800',
        'tiempo_servicio' => '14',
    ],
    [
        'empleado' => 'Lucia',
        'salario_actual' => '800',
        'tiempo_servicio' => '19',
    ],
];

foreach ($data as $item) {
    if($item['tiempo_servicio'] >= 20){     
        $aumento_salario =  150;
    }
    else if($item['tiempo_servicio'] >= 10){     
        $aumento_salario = 100;
    }
    else if($item['tiempo_servicio'] >= 5){     
        $aumento_salario = 50;
    }
    else if($item['tiempo_servicio'] >= 1){     
        $aumento_salario = 25;
    }

    $nuevo_salario = $item['salario_actual'] + $aumento_salario;

    echo "########################" . "\n";
    echo "Empleado: " . $item['empleado'] . "\n";
    echo "Salario actual: $" . $item['salario_actual'] . "\n";
    echo "Tiempo de servicio: " . $item['tiempo_servicio'] . "\n";
    echo "Aumento salario: $" . $aumento_salario . "\n";
    echo "Nuevo salario: $" . $nuevo_salario . "\n";
    echo "########################" . "\n\n";
}

?>