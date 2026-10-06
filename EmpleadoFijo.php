<?php

    require_once 'Empleado.php';
    
    class EmpleadoFijo extends Empleado
    {
        private const sueldo_mensual = 50000;

        public function calcularSueldo(){
            return self::sueldo_mensual;
        }
    }