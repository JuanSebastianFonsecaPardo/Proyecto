<?php
    class Asistencia{
        private $Asistencia;
        private $db;
        private $datos;
        public function __construct(){
            $this ->Asistencia = array();
            $this->db = new PDO('mysql:host=localhost;dbname=borradorproyecto',"root","");
        }
        //CRUD
        public function Create($tabla, $data, $Aprendiz, $Fecha, $Categoria){
                //Duplicidad
                $consultaD = "SELECT * FROM ".$tabla." WHERE IdFecha=".$Fecha." AND IdAprendiz=".$Aprendiz;
                $conexionD = mysqli_connect("localhost","root","","borradorproyecto");
                $resultadoD = mysqli_query($conexionD ,$consultaD);
                $filasD = mysqli_num_rows($resultadoD);
                //Crear nuevo asistencia
                if (empty($filasD)) {
                    $consulta = "INSERT INTO ".$tabla." VALUES(NULL,".$data.")";
                    $resultado = $this -> db -> query ($consulta);
                    if ($resultado) {
                        return true;
                    }
                    else {
                        return false;
                    }   
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

        public function BuscarF($tabla, $condicion){
            $consulta = "SELECT * FROM ".$tabla." WHERE ".$condicion.";";
            $resultado = $this->db->query($consulta);
            while ($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->datos[]= $filas;
            }
            return $this->datos;
        }

        public function Consul($tabla, $condicion){
            $consulta = "SELECT * FROM ".$tabla." WHERE ".$condicion.";";
            $resultado = $this->db->query($consulta);
            while ($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->datos[]= $filas;
            }
            return $this->datos;
        }

        public function Busca($tabla, $condicion){
            $consulta = "SELECT * FROM ".$tabla." WHERE ".$condicion.";";
            $resultado = $this->db->query($consulta);
            while ($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->datos[]= $filas;
            }
            return $this->datos;
        }
        
         //Editar

         public function editarread($tabla, $condicion){
            $consulta = "SELECT * FROM ".$tabla." WHERE ".$condicion;
            $resultado = $this->db->query($consulta);
            while ($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->datos[]= $filas;
            }
            return $this->datos;
        }
    }
?>