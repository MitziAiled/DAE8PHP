<?php
//OPERADOR -> Es un caracter que nos permite modificar el contenido 
//            de una o más variables

//Declaración de variables
$num1 = 55;
$num2 = 33;

//ARITMETICOS
$resultado = ($num1+$num2);
echo 'Suma: '.$resultado.'<br>';
echo 'Resta: '.($num1-$num2).'<br>';
echo 'Multiplicación: '.($num1*$num2).'<br>';
echo 'Division: '.($num1/$num2).'<br>';
echo 'Módulo: '.($num1%$num2).'<br>';

//INCREMENTO Y DECREMENTO
$stock = 10000;
//++$var,$var++,$--var,$var--
$stock++;
echo '<h1>'.$stock.'</h1>';
$stock--;
echo '<h1>'.$stock.'</h1>';

//ASIGNACIÓN
$edad = 60;
echo ($edad).'<br>';
echo ($edad+=5).'<br>'; //Es lo mismo que edad = edad + 5
echo ($edad-=5).'<br>';
echo ($edad*=5).'<br>';
?>

