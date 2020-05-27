<?php
require_once 'controllers/usuario.php';

$controlador = new UsuarioController();
//$controlador ->mostrarTodo();

$controlador -> crear();
/*Tarea: Segmentar por funcionalidades el sitio respecto MVC
 * Objetos -> usuarios, ventas, cobranza, etc...
 * Modelos
 * Vistas
 * Controlador
 * Diseñar la base de datos (Seleccionar 2 tablas)
 */