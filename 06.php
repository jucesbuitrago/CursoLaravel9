<?php
include 'includes/header.php';

// Constructor property Promotion;

class Empleado{
    public function __construct(
        public $nombre,
        public $apellido,
        public $departamento,
        public $email,
        public $codigo,
    ){}
}


$empleado = new Empleado('Julio','Buitrago','Tolima','jucesbuitrago@gmail.com', 1129);

echo "<pre>";
var_dump($empleado);
echo "</pre>";