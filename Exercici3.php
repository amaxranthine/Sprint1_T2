<?php
/* Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i assigna a cadascuna un valor. 
A continuació, mostra per pantalla per a X i Y:
El valor de cada variable.
La suma.
La resta.
El producte.
El mòdul.
*/
//paso 1
$x = 8;
$y = 12;
$m = 1.24;
$n = 2.30;
//paso 2
echo "Estos son los valores de todas las variables : $x , $y , $m , $n ";
//variables x - y
echo "Suma: " . ($x + $y);
echo "Resta: " . ($x - $y);
echo "Multiplicacion(producte): " . ($x * $y);
echo "El modul: " . ($x % $y);
//Variables n -m
echo "Suma:" . ($m + $n);
echo "Resta:" . ($m - $n);
echo "Multiplicacion(producte): " . ($m * $n);
echo "El modul: " . ($m % $n);
//Para todas las variables 
//el doble de cada una
echo "Doble de X: " . ($x * 2) . "\n";
echo "Doble de Y: " . ($y * 2) . "\n";
echo "Doble de M: " . ($m * 2) . "\n";
echo "Doble de N: " . ($n * 2) . "\n";
//Suma de todas y el producte de totes les variables.
echo "La suma de todas las variables es: " . ($x + $y + $n + $m) . "\n";
echo "El producto de todas las variables es: " . ($x * $y * $n * $m) . "\n";

//Calculadora (esta mal ,fijo)
function Calculadora ($num1, $num2, $operacion) {
    switch ($operacion){
        case 'suma':
            return $num1 + $num2;
        case 'resta':
            return $num1 - $num2;
        case 'multiplicacion' :
            return  $num1 * $num2; 
        case 'division' :
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "No se puede dividir por cero";
            }
        default:
            return "Operación no válida";
              //llamar a la funcion
    }

}
// Ejemplo de uso de la función calculadora
echo "Suma: " . calculadora(8, 12, 'suma') . "\n";
echo "Resta: " . calculadora(8, 12, 'resta') . "\n";
echo "Multiplicación: " . calculadora(8, 12, 'multiplicacion') . "\n";
echo "División: " . calculadora(8, 12, 'division') . "\n";
echo "Intento de división por cero: " . calculadora(8, 0, 'division') . "\n";

?>