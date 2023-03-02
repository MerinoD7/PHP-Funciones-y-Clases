<?php

/* Un obrero necesita calcular su salario semanal, el cual se obtiene de la siguiente manera: Si trabaja 
40 horas o menos se le paga $4 por hora. Si trabaja más de 40 horas se le paga $4 por cada una de
las primeras 40 horas y $6 por cada hora extra. */ 

function calcularsalario($numHE){
    $salarioBase = 40*4;
    $horaE = $numHE-40;
    $salarioextra = $salarioBase +($horaE*6); 
    
    if ($numHE <= 40){
        return $salarioBase*$numHE;
    }
    else if ($numHE > 40){
        return $horaE+6;
    }
}

?>