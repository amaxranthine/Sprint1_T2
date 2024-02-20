/* Imprimeix per pantalla "Hello, World!" utilitzant una variable. 
En acabat: Transforma tots els caràcters de l'string a majúscules i imprimeix en pantalla.
Imprimeix per pantalla la mida (longitud) de la variable.
Imprimeix per pantalla l'string en ordre invers de caràcters.
Crea una nova variable amb el contingut “Aquest és el curs de PHP” 
i imprimeix per pantalla la concatenació de tots dos strings.*/
<?php
//paso 1
$mensaje = "hello, world ";
echo $mensaje;
//paso 2: Transforma tots els caràcters de l'string a majúscules i imprimeix en pantalla.
$mensajeMayusculas = strtoupper ($mensaje);
echo $mensajeMayusculas;

//paso 3: Imprimeix per pantalla la mida (longitud) de la variable.
$longitud = strlen($mensaje);
echo "La longitud del mensaje es: $longitud ";
//paso 4: Imprimeix per pantalla l'string en ordre invers de caràcters.
$mInvert = strrev($mensaje);
echo $mInvert;

?>