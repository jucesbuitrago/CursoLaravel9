<?php
include 'includes/header.php';

// Getters and Setters
class Empleado{
    // Abstracción, primer pincipio de POO.
    // Public, accesible desde cualquier parte del código.
    // Private, solo accesible desde la clase.
    // Protected, solo accesible desde la clase y clases heredadas.

    protected $nombre;
    protected $apellido;
    protected $departamento;
    protected $email;
    protected $codigo;


    public function __construct(string $nombre, string $apellido, string $departamento, string $email, int $codigo){
        $this->nombre = $nombre;      
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;

        // $this->nombreEmpleado();
    }

    /*
        Get -> Para obtener un valor
        Set -> Para modificar un valor
    */

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo(int $codigo)
    {
        $this->codigo = $codigo;
    }
}


$empleado = new Empleado('Julio','Buitrago','Tolima','jucesbuitrago@gmail.com', 1129);

echo $empleado -> getNombre();
echo $empleado -> getCodigo();

echo "<pre>";
var_dump($empleado);
echo "</pre>";
