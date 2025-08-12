<?php

function palabraMasLarga($texto) {
    // Limpiar y dividir en palabras
    $palabras = preg_split('/\s+/', trim($texto));
    $masLarga = "";
    
    foreach ($palabras as $palabra) {
        // Remover signos de puntuación
        $palabra = preg_replace('/[^\w]/', '', $palabra);
        
        if (strlen($palabra) > strlen($masLarga)) {
            $masLarga = $palabra;
        }
    }
    
    return $masLarga;
}

// Pruebas
echo palabraMasLarga("El desarrollo de software requiere práctica constante"); // "desarrollo"
echo palabraMasLarga("JavaScript es un lenguaje versátil"); // "JavaScript"
?>
