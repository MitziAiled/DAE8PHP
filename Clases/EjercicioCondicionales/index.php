<?php
//PARTICIPACIÓN:
/*
 * Crear un programa en PHP que permita adquirir
 * 3 números en un formulario y dependiendo de la opción seleccionada
 * este ejecute una estructura condicional (if, switch, goto) e
 * imprima el segmento de código utilizado.
 */
$variable = $_GET["opcion"];
switch ($variable){
    case 1:
        goto condicionif;
    break;
    case 2:
        goto condicionswitch;
    break;
    case 3:
        goto condiciongoto;
    break;
    default:
        echo "<h1>Opción no válida, intentalo nuevamente</h1>";
        goto fin;
        break;
}

condicionif:
    echo "<h1>Estas en la Función IF</h1>";
$pais = "México";
//IF
if($pais=="México"){
    echo " RESULTADO: Hermano ya eres Mexicano";
}else{
    echo "RESULTADO: Aún así te queremos";
}
echo "<hr>";
echo "<h3>Codigo usado:</h3>";
echo '$pais = "México";';
echo "<br>";
echo 'if($pais=="México"){';
echo "<br>";
echo 'echo " RESULTADO: Hermano ya eres Mexicano"';
echo "<br>";
echo '}else{';
echo "<br>";
echo 'RESULTADO: Aún así te queremos}';
goto fin;

condicionswitch:
echo "<h1>Estas en el switch</h1>";
//SWITCH
$opcion = 3;
switch($opcion){
    case 1:
        //Instrucciones
        echo "RESULTADO: LUNES";
        break;
    case 2:
        //Instrucciones
        echo "RESULTADO: MARTES";
        break;
    case 3:
        //Instrucciones
        echo "RESULTADO: MIERCOLES";
        break;
    case 4:
        //Instrucciones
        echo "RESULTADO: JUEVES";
        break;
    default:
        echo "Revisa nuevamente la opción que has seleccionado";
        break;
}
echo "<hr>";
echo "<h3>Codigo usado:</h3>";
echo '$opcion = 3;';
echo "<br>";
echo 'switch($opcion){';
echo "<br>";
echo 'case 1:';
echo "<br>";
echo 'echo "LUNES"; break;';
echo "<br>";
echo 'case 2:';
echo "<br>";
echo 'echo "MARTES"; break;';
echo "<br>";
echo 'case 3:';
echo "<br>";
echo 'echo "MIERCOLES"; break;';
echo "<br>";
echo 'case 4:';
echo "<br>";
echo 'echo "JUEVES"; break;';
echo "<br>";
echo 'default:';
echo "<br>";
echo 'echo "Revisa nuevamente la opción que has seleccionado";
        break;';
echo "<br>";
echo '}';
goto fin;

//GOTO
condiciongoto:
    echo "<h1>Estas en el GOTO</h1>";
echo "<hr>";
echo "<h3>Codigo usado:</h3>";
echo 'echo "Estas en el GOTO";';
goto fin;

fin:
?>
