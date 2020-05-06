<?php
//variables del servidor
//Para ver la direccion ip
echo "<h1>". $_SERVER['SERVER_ADDR'] . "</h1>";
//Para ver el nombre del servidor
echo "<h1>". $_SERVER['SERVER_NAME'] . "</h1>";
//Para ver el software
echo "<h1>". $_SERVER['SERVER_SOFTWARE'] . "</h1>";
//Para que diga en que agentes se puede ejecutar en el servidor
echo "<h1>". $_SERVER['HTTP_USER AGENT'] . "</h1>";
//Para acceder de forma remota, para ssh, 
//aparece diferente si entro de forma remota
echo "<h1>". $_SERVER['REMOTE_ADDR'] . "</h1>";

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
