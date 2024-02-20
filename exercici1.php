/* Defineix una variable de cada tipus: integer, double, string i boolean. 
Imprimeix-les per pantalla.Després crea una constant que inclogui el teu nom 
i mostra-ho en format títol per pantalla. */

<?php
$edad = 28;
$nombre = "Laura";
$precio = 19.99;
$esta = true;

echo "Mi nombre es $nombre y tengo $edad años. El precio de la mochila es de $precio . ";

define("NOMBRE" , "Laura");
echo "Mi nombre es " . NOMBRE; 
?>