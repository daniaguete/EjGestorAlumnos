<?php
/**
 * Conecta con la base de datos MYSQL.
 * @requires mysqli
 */
class Connection{
    public $con;

    public function __construct() {
        $this->con = new mysqli('localhost','root','','alumnsmvc');
    }
}