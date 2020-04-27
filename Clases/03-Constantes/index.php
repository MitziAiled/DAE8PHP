<?php
//constante -> Un valor constante que no cambia con el tiempo
$var1 = 10.23;
define('pimine', '3.1416');

$area = 0.0;
$radio = 10;
$area = (pimine*($radio*$radio));

echo '<h1>'.$area.'</h1>';

echo '<h1>'.(pimine*$radio*$radio).'</h1>';

define('cadena', 'archivo_');

//Constantes predefinidas (Sistemas)
echo __LINE__; //Muestra la linea del código en donde me encuentro
echo '<br>';
echo __FILE__; //Muestra el directorio en el que nos encontramos

?>