<?php

require('modelo/M_Alumno.php');
/**
 * Controlador de la Clase alumno.
 * @see modelo/M_Alumno.php
 */
class C_Alumno 
{
    /**
     * Captura la opcion del menú
     */
    public function capturar_opcion(){
        return $_GET['page'] ?? '';
    }

    /**
     * Visualiza todos los Alumnos de la base de datos.
     */
    public function verAlumnos(){
        $alumnosData = Alumno::getAlumnos();
        require("vista/V_verAlumnos.php");
    }

    /**
     * Visualiza el formulario de alta y da de alta los datos introducidos del alumno.
     */
    public function altaAlumno(){
        require("vista/V_AltaAlumno.php");
        if (isset($_POST["enviar"])) {
            $al = new Alumno($_POST['nombre'],$_POST['nota']);
            if ($al->altaDB()) {
                require("vista/includes/insertSuccess.php");
            }
        }
    }

    /**
     * Busca un alumno por el codigo introducido.
     */
    public function buscarAlumno(){
        if (isset($_POST['buscar'])) {
            $alumnoBusc = Alumno::buscarAlumnoDB($_POST['codigo']);
        }
        require("vista/V_BuscarAlumno.php");
    }

    /**
     * Elimina un alumno por el codigo.
     */
    public function bajaAlumno(){
        if (isset($_POST['baja'])) {
            $borrado = Alumno::borrarAlumnoDB($_POST['codigo']);
        }
        require("vista/V_BajaAlumno.php");
    }
}

