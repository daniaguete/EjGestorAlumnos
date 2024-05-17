<?php

require("connection.php");
/**
 * Clase de un alumno con código, nombre y nota.
 * @see control/C_Alumno.php
 * @see modelo/connection.php
 */
class Alumno{
    private $cod;
    private $nombre;
    private $nota;

    /**
     * Constructor de la clase alumno.
     * @param string $nombre nombre del alumno
     * @param int $nota nota del alumno
     */
    public function __construct($nombre, $nota) {
        //cod es autoincrement en la BD.
        $this->nombre = $nombre;
        $this->nota = $nota;
    }

    /**
     * Da de alta el objeto del alumno en la base de datos.
     * @return bool Si se ejecuta la consulta.
     */
    public function altaDB(){
        $conexion = new Connection();
        $query= "INSERT INTO `alumnos` (`cod`, `nombre`, `nota`) VALUES (NULL, '$this->nombre', $this->nota);";
        return $conexion->con->query($query);
    }

    /**
     * Busca todos los alumnos en la base de datos y los devuelve.
     * @return array lista de todos los alumnos de la base de datos.
     */
    public static function getAlumnos(){
        $conexion = new Connection();
        $query = "SELECT * FROM alumnos;";
        $res = $conexion->con->query($query);
        $alumnosData = [];
        while ($row = $res->fetch_assoc()) {
            $alumnosData[] = $row;
        }
        return $alumnosData;
    }

    /**
     * Busca un alumno en la base de datos según su código.
     * @param int $cod Codigo del alumno a buscar.
     * @return array|string datos del alumno como array o un string vacío.
     */
    public static function buscarAlumnoDB($cod){
        $conexion = new Connection();
        $query = "SELECT * FROM alumnos WHERE cod=$cod;";
        $res = $conexion->con->query($query);
        if ($res->num_rows > 0) {
            return $res->fetch_assoc();
        }else{
            return '';
        }
    }

    /**
     * Elimina un alumno de la base de datos según su código.
     * @param int $cod Codigo del alumno a eliminar.
     * @return bool Si se ejecuta la consulta.
     */
    public static function borrarAlumnoDB($cod){
        $conexion = new Connection();
        $query = "DELETE FROM alumnos WHERE cod=$cod;";
        return $conexion->con->query($query);
    }
}