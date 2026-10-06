<?php
require_once 'Empleado.php';

class Vendedor extends Empleado
{
    private $sueldoBase = 30000;
    private $comision = 0.10;
    private $ventas;

    public function __construct($ventas)
    {
        $this->ventas = $ventas;
    }

    public function calcularSueldo()
    {
        return $this->sueldoBase + ($this->ventas * $this->comision);
    }
}