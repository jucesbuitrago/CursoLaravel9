<?php
include 'includes/header.php';

// Metodos
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

        // $this->nombreEmpleado();
    }

    public function nombreEmpleado()
    {
        echo $this->nombre . ' ' . $this->apellido; 
    }

    public function departamentoEmpleado()
    {
        return $this->departamento;
    }
}


$empleado = new Empleado('Julio','Buitrago','Tolima','jucesbuitrago@gmail.com', 1129);
$empleado-> nombreEmpleado();

echo "<pre>";
var_dump($empleado);
echo "</pre>";

echo $empleado->nombreEmpleado();
$departamento1 = $empleado->departamentoEmpleado();
echo $departamento1;
