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

    $Nombre = readline("Ingrese su Nombre: ");
    $salario = readline("Ingrese su Salario Actual: ");
    $antiguedad = readline("Ingrese su antiguedad: ");
    $aumento=0;

    if($antiguedad <= 5 ){
        $aumento = $salario + 25;
        echo 'Valor de aumento: $25 Dolares ' . "<br/>\n";
        echo 'Valor de sueldo a pagar a: ' . $Nombre . ' $ ' . $salario . "<br/>\n"; 
    }

    else if($antiguedad >= 6 && $antiguedad <= 10){
        $aumento = $sueldo + 50;
        echo 'Valor de aumento: $50 Dolares ' . "<br/>\n";
        echo 'Valor de sueldo a pagar a: ' . $Nombre . ' $ ' . $salario . "<br/>\n"; 
    }

    else if($antiguedad >= 11 && $antiguedad <= 20){
        $aumento = $sueldo + 100;
        echo 'Valor de aumento: $100 Dolares ' . "<br/>\n";
        echo 'Valor de sueldo a pagar a: ' . $Nombre . ' $ ' . $salario . "<br/>\n"; 
    }

    else{
        $aumento = $sueldo + 150;
        echo 'Valor de aumento: $150 Dolares ' . "<br/>\n";
        echo 'Valor de sueldo a pagar a: ' . $Nombre . ' $ ' . $salario . "<br/>\n"; 
    }

 
?>