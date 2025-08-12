1. ¿Cuál es la diferencia entre '==' y '===' en PHP?

== (Comparación débil): Compara valores después de hacer conversión de tipos automática.

=== (Comparación estricta): Compara valores Y tipos de datos sin conversión

Ejemplo:

"5" == 5   // true (convierte string a int)
"5" === 5  // false (diferentes tipos)
true == 1  // true (convierte boolean a int)
true === 1 // false (diferentes tipos)