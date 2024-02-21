//Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.
<?php
//crear la funcion 
function verificarGrado($nota){
    //usar un if?¿
    if($nota >= 60){
        echo "Primera division";
    } else if($nota >= 45 && $nota <= 59){
        echo "Segona divisio";
    } else if ($nota >= 33 && $nota <= 44) {
        echo "Tercera Divisió";
    } else{
        echo "L'estudiant reprova";
    }
  
}

// Ejemplo de uso
 $nota = 30; // Cambia esta nota para probar diferentes escenarios
 echo "La nota $nota corresponde a: ";
 verificarGrado($nota);
?>