<?php
include 'includes/header.php';

// Metodos estaticos, no se necesita instanciar la clase para poder acceder a ellos.
class Empleado{
    // Abstracción, primer pincipio de POO.
    // Public, accesible desde cualquier parte del código.
    // Private, solo accesible desde la clase.
    // Protected, solo accesible desde la clase y clases heredadas.

    //Variables estaticas
    protected static $nombre;
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

    // Metodo para obtener el nombre completo.
    public function nombreEmpleado()
    {
        echo $this->nombre . ' ' . $this->apellido; 
    }

    // Funcion para obtener el departamento
    public function departamentoEmpleado()
    {
        return $this->departamento;
    }
}


$empleado = new Empleado('Julio','Buitrago','Tolima','jucesbuitrago@gmail.com', 1129);
$empleado-> nombreEmpleado();
$empleado -> nombre;

echo "<pre>";
var_dump($empleado);
echo "</pre>";

echo $empleado->nombreEmpleado();
$departamento1 = $empleado->departamentoEmpleado();
echo $departamento1;