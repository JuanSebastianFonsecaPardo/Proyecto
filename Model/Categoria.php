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
            //Campos vacios
            if (empty($Documento && $Nombre && $Apellido && $Email && $Telefono)) {
                header('location:'.urlsite."?page=Rcategoria");
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
            //Cantidad de registros por pagina
           $Registros_x_pagina = 5;
           //Limitar articulos por pagina
           $iniciar = ($_GET['Pagina'])*$Registros_x_pagina;
           $consulta = 'SELECT * FROM '.$tabla.' Limit '.$iniciar.',5';
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

        public function Consultar($tabla, $condicion){
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

        //Papelera

        public function papeleraread($tabla, $condicion){
            $consulta = "SELECT * FROM ".$tabla." WHERE ".$condicion;
            $resultado = $this->db->query($consulta);
            while ($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->datos[]= $filas;
            }
            return $this->datos;
        }
    }
?>