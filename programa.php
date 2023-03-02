<?php

/* Elaborar un programa, que permita el ingreso de 100 números enteros. El programa 
debe sumar todos los números que sean múltiplos de 3 */


echo "Ingrese 100 números enteros:\n";
$nums = readline();
$nums = explode(" ", $nums);

$suma_multiplos_3 = 0;


foreach ($nums as $num) {


    if ($num % 3 == 0) {
        $suma_multiplos_3 += $num;
    }
}


echo "La suma de los números que son múltiplos de 3 es: " . $suma_multiplos_3 . "\n";

?>

