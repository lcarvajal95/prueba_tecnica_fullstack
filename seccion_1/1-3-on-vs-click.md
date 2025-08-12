3. ¿Qué hace .on('click', ...) comparado con .click() en jQuery?

.click(handler) se utiliza para manejar los eventos directamente a los elementos que ya existen en el DOM de evento click a los elementos existentes.

.on('click', selector, handler) es más flexible: permite manejar eventos no solo clicks sino selectores mas complejos para apuntar a elementos especificos del contexto del elemento padre.