<?php
function frecuenciaCaracteres($texto) {
    $frecuencia = [];
    $texto = strtolower($texto); // Convertir a minúsculas
    
    for ($i = 0; $i < strlen($texto); $i++) {
        $char = $texto[$i];
        
        // Solo contar letras
        if (ctype_alpha($char)) {
            if (isset($frecuencia[$char])) {
                $frecuencia[$char]++;
            } else {
                $frecuencia[$char] = 1;
            }
        }
    }
    
    // Ordenar por frecuencia descendente
    arsort($frecuencia);
    return $frecuencia;
}

// Prueba
$resultado = frecuenciaCaracteres("Este es un script de prueba.");
print_r($resultado);