<?php
//Condicionales IF, SWITCH (Dentro de esta puede haber un GOTO)
//Operadores: ==, != (diferente), <, >, <> (distinto),=== (Compara si son identicos con el tipo de daot)
goto condiciongoto;
condicionif:
    echo "Estas en las condicionales";
$pais = "México";
//IF
if($pais=="México"){
    echo "<h1>Hermano ya eres Mexicano</h1>";
}else{
    echo "Aún así te queremos";
}
echo"<hr>";
//EJEMPLO DE DÍAS DE LA SEMANA CON IF ANIDADOS
$dia = 1;
if($dia==1){
    echo "LUNES";
}else{
    if ($día==2){
        echo "MARTES";
    }else{
        if ($día==3) {
            echo "MIERCOLES";
        }
            
    }
}
echo "<br>";
    //En cambio con ELSE IF Es mucho más corto
if($dia==1){
    echo "LUNES";
}else if("dia==2"){
    echo "MARTES";
}
echo"<hr>";
condicionswitch:
    echo "Estas en el switch";
//SWITCH
$opcion = 6;
switch($opcion){
    case 1:
        //Instrucciones
        echo "LUNES";
        break;
    case 2:
        //Instrucciones
        echo "MARTES";
        break;
    case 3:
        //Instrucciones
        echo "MIERCOLES";
        break;
    case 4:
        //Instrucciones
        echo "JUEVES";
        break;
    default:
        echo "Revisa nuevamente la opción que has seleccionado";
        break;
}
echo "<hr>";
//GOTO
condiciongoto:
    echo "Estas en el GOTO";
    //goto marca == un segmento de código que quiero ejecutar el script completo
    //Se le pone marcas en cada segmento de código para ejecutar por partes

//PARTICIPACIÓN:
/*
 * Crear un programa en PHP que permita adquirir
 * 3 números en un formulario y dependiendo de la opción seleccionada
 * este ejecute una estructura condicional (if, switch, goto) e
 * imprima el segmento de código utilizado.
 */


?>

