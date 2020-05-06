<!DOCTYPE HTML>
<html lang ="esp">
    <head>
        <meta charset= "utf-8"/>
        <title> Formulario en PHP</title>
    </head>
    <body>
        <h1>Formulario en PHP</h1>
        <form method="GET" action="recibir.php">
            <p>
                <label name="nombre">Nombre</label>
                <input type ="text" name="nombre"/>
            </p>
            <p>
                <label name="apellidos">Apellidos</label>
                <input type ="text" name="apellidos"/>
            </p>
            <input type="submit" value="Enviar datos"/>
        </form>
    </body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

