<?php
    class Fecha{
        private $Fecha;
        private $db;
        private $datos;
        public function __construct(){
            $this ->Fecha = array();
            $this->db = new PDO('mysql:host=localhost;dbname=borradorproyecto',"root","");
        }
        //CRUD

        public function Create($tabla, $data){
            $consulta = "INSERT INTO ".$tabla." VALUES(NULL,".$data.")";
            $resultado = $this ->db->query($consulta);
            if ($resultado) {
                return true;
            }else {
                return false;
            }
        }

        public function Read($tabla, $condicion){
            $consulta = "SELECT * FROM ".$tabla." WHERE ".$condicion.";";
            $resultado = $this->db->query($consulta);
            while ($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->datos[]= $filas;
            }
            return $this->datos;
        }

        public function Update($tabla, $data, $condicion){
            $consulta = "UPDATE ".$tabla." SET ".$data." WHERE ".$condicion;
            $resultado = $this -> db -> query ($consulta);
            if ($resultado) {
                return true;
            }
            else {
                return false;
            }
        }

        public function Delete($tabla, $data){
            $consulta = "DELETE FROM ".$tabla." WHERE ".$data;
            $resultado = $this -> db -> query ($consulta);
            if ($resultado) {
                return true;
            }
            else {
                return false;
            }
        }
    }
?>