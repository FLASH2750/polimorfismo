<?php
require_once 'Empleado.php';
require_once 'EmpleadoFijo.php';
require_once 'EmpleadoPorHora.php';
require_once 'Vendedor.php';


$empleados = [
    new EmpleadoFijo(),
    new EmpleadoPorHora(120),
    new Vendedor(100000),
    new EmpleadoPorHora(80),
    new Vendedor(250000),
];


foreach ($empleados as $empleado) {
    echo get_class($empleado) . ": $" . $empleado->calcularSueldo() . " ";
}