<?php
include 'includes/header.php';

//Herencia
class Persona
{
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;

    public function __construct($nombre, $apellido, $email, $telefono)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
    }

    public function mostrarInformacion()
    {
        echo "Nombre: " . $this->nombre . " " . $this->apellido . " Email:" . $this->email;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }
}

class Empleado extends Persona
{
    protected $codigo;
    protected $departamento;

    public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento)
    {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->codigo = $codigo;
        $this->departamento = $departamento;
    }
}

class Proveedor extends Persona
{
    protected $empresa;

    public function __construct($nombre, $apellido, $email, $telefono, $empresa)
    {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->empresa = $empresa;
    }
}

$empleado = new Empleado('Juan', 'Perez', 'cesart@gmail.com', '123456789', '123', 'Tecnologia');

echo $empleado->mostrarInformacion();
echo $empleado -> getTelefono();