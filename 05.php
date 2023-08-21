<?php
include 'includes/header.php';

// Tipado
class Empleado{
    // Abstracción, primer pincipio de POO.
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;


    public function __construct(string $nombre, string $apellido, string $departamento, string $email, int $codigo){
        $this->nombre = $nombre;      
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }
}


$empleado = new Empleado('Julio','Buitrago','Tolima','jucesbuitrago@gmail.com', 1129);

echo "<pre>";
var_dump($empleado);
echo "</pre>";