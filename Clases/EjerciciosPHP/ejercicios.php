<?php
//Ejercicio 1: Calcular el valor IMC
echo '<h3>Ejercicio 1: Calcular el valor IMC </h3>';
$peso = 75; //El peso debe de estar el kg
$altura = 1.66; //La altura debe de estar en metros

echo 'Peso: '.$peso.' kg';
echo '<br>';
echo 'Altura'.$altura.' m';
echo '<br>';
echo '<br>';

$imc = ($peso/($altura*$altura));
echo 'IMC: '.$imc.'<br>';

//Ejercicio 2: Convertir °C a °F
echo '<h3>Ejercicio 2: Convertir °C a °F </h3>';
$c = 10; //°C
 
echo '°C: '.$c;
echo '<br>';
echo '<br>';
echo '°C a °F son: <br>';
$f = (($c*1.8)+32);
echo '°F: '.$f.'<br>';

//Ejercicio 3: Calcular el área de un circulo implementando constantes
echo '<h3>Ejercicio 3: Calcular el área de un circulo implementando constantes </h3>';
define('pimine', '3.1416');
$radio = 2;

echo 'Radio del circulo: '.$radio.'<br>';
echo 'PI: '.pimine.'<br>';
echo 'Área del Circulo: '.(pimine*($radio*$radio));
?>

