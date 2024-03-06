//Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.
<?php
//crear la funcion 
function verificarGrado($nota){
    //usar un if?¿
    if($nota >= 60){
        $resposta = "El grau assolit correspon a primera divisio";
    }else if ($nota >= 45){
        $resposta = "El grau assolit correspon a segona divisio";
    }else if ($nota >= 33){
        $resposta = "El grau assolit correspon a tercera divisio";
    }else if ($nota < 33) {
        $resposta = "L'estudiant ha de reprovar";
    }
    return $resposta;
}
  


// Ejemplo de uso
 $nota = 30; // Cambia esta nota para probar diferentes escenarios
 echo "La nota $nota corresponde a: ";
 verificarGrado($nota);
?>