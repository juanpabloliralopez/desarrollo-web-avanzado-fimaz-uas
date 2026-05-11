<?php
    //Clase para conectarse a la base de datos
    class DataBase {
        private $host = "localhost";
        private $db = "examen";
        private $user = "root";
        private $password = "";

        public function __construct() {

        }
        //Metodo para conexion a base de datos
        public function connect() {
            try {
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->db,$this->user,$this->password);
                return $PDO;
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
    }

?>