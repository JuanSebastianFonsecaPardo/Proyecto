<?php
    class Categoria{
        private $Categoria;
        private $db;
        private $datos;
        public function __construct(){
            $this ->Categoria = array();
            $this->db = new PDO('mysql:host=localhost;dbname=borradorproyecto',"root","");
        }
        //CRUD

        public function Create($tabla,$Nombre,$Descripcion,$data){
        //Campos vacios 
            if(empty($Nombre)){
                echo "<script>window.alert('Por favor rellene todos los campos');</script>
                <h1 class='alert alert-danger' role='alert'> <a href='".urlsite."?page=Ccategoria'>Volver</a></h1>";
            }
            else { 
                $consulta = "INSERT INTO ".$tabla." VALUES(NULL,".$data.")";
                $resultado = $this ->db->query($consulta);
                if ($resultado) {
                    return true;
                }else {
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
    }
?>