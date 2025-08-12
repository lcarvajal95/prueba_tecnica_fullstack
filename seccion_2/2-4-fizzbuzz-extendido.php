<?php

function fizzBuzzExtendido() {
    // Iterar del 1 al 100 (solo números positivos)
    for ($i = 1; $i <= 100; $i++) {
        $salida = "";
        
        // Verificar múltiplos de 3
        if ($i % 3 === 0) {
            $salida .= "Fizz";
        }
        
        // Verificar múltiplos de 5
        if ($i % 5 === 0) {
            $salida .= "Buzz";
        }
        
        // Si no es múltiplo de 3 ni 5, usar el número
        if ($salida === "") {
            $salida = $i;
        }
        
        // Imprimir resultado
        echo $salida . PHP_EOL;
    }
}

// Ejecutar FizzBuzz
fizzBuzzExtendido();

?>