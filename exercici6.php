/* Charlie em va mossegar el dit! 
Charlie et mossegarà el dit exactament el 50% del temps.
Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat 
i FALSE en cas contrari. */ 
<?php
function isBitten()
{
    // Generar un número aleatorio entre 0 y 100
    $x = rand(0, 100);
// Comparar con 50 para determinar la probabilidad
    if ($x <= 50) {
        return true; // Charlie te mordió el dedo
    } else {
        return false; // Charlie no te mordió el dedo
    }
}
 ?>
