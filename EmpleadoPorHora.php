<?php
    require_once 'Empleado.php';

    class EmpleadoPorHora extends Empleado{
        private $horas;
        private $valorHora = 400;

    public function __construct($horas){
            $this->horas = $horas;
        }

    public function calcularSueldo(){
            return $this->horas * $this->valorHora;
        }
    }