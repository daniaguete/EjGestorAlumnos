<?php
require("vista/includes/header.php");
require("vista/V_Menu.php");

/**
 * Inicio del proyecto de gestión de alumnos.
 * @author Daniel Aguete
 * @version 1.0
 * @requires control/C_Alumno.php
 */
require("control/C_Alumno.php");
$controlador = new C_Alumno();

switch ($controlador->capturar_opcion()) {
    case 'ver':
        $controlador->verAlumnos();
        break;
    case 'alta':
        $controlador->altaAlumno();
        break;
    case 'buscar':
        $controlador->buscarAlumno();
        break;
    case 'baja':
        $controlador->bajaAlumno();
        break;
    case '':
        require("vista/V_Home.php");
        break;
    default:
        require("vista/V_notFound.php");
        break;
}


require("vista/includes/footer.php");
