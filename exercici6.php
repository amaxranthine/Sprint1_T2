
<?php
function isBitten()
{
  // Generar un número aleatorio entre 0 y 100
    $x = rand(0, 100);
// Comparar con 50 para determinar la probabilidad
    if ($x <= 50) {
        echo "true;. Charlie te mordió el dedo";
       
    } else {
        echo "false. Charlie no te mordió el dedo";
    }
}
 // Llamar a la función y guardar el resultado en una variable
    $r = isBitten();
    echo $r . "<br>";
 ?>
