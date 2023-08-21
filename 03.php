<?php
include 'includes/header.php';

//Atributos de una clase
class Empleado{
    // Abstracción, primer pincipio de POO.
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;
}

// Multiples instancias:

$empleado = new Empleado;

// Asignar datos:
$empleado->nombre = "Julio";
$empleado->apellido = "Buitrago";

echo "<pre>";
var_dump($empleado);
echo "</pre>";