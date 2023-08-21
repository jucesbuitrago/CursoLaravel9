<?php
include 'includes/header.php';

//Instanciar una clase
class Empleado{

}

// Multiples instancias:

$empleado = new Empleado;
$empleado2 = new Empleado;
$empleado3 = new Empleado;

// Formateo con <pre>:
// Multiples objetos apartir de una misma clase:
echo "<pre>";
var_dump($empleado);
echo "</pre>";

echo "<pre>";
var_dump($empleado2);
echo "</pre>";

echo "<pre>";
var_dump($empleado3);
echo "</pre>";