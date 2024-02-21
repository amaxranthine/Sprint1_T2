
<?php

function contar ( $numero= 10, $pasos = 1){
    $contador = 1;
    while ($contador<= $numero){
        echo $contador . "+" . $pasos . "\n";
        $contador += $pasos;
        echo  "=" . $contador; 
    }
}
echo contar ();
?>