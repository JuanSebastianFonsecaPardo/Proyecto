<?php
    class Aprendiz{
        private $Aprendiz;
        private $db;
        private $datos;
        public function __construct(){
            $this ->Aprendiz = array();
            $this->db = new PDO('mysql:host=localhost;dbname=borradorproyecto',"root","");
        }
        //CRUD

        public function Create($tabla,$Documento,$Nombre,$Apellido,$Email,$Telefono,$data){
        //Campos vacios
            //Campos vacios
            if (empty($Documento && $Nombre && $Apellido && $Email && $Telefono)) {
                header('location:'.urlsite."?page=Raprendiz");
            }
            else{
            //Duplicidad
                $consultaD = "SELECT * FROM ".$tabla." WHERE Documento=".$Documento.";";
                $conexionD = mysqli_connect("localhost","root","","borradorproyecto");
                $resultadoD = mysqli_query($conexionD ,$consultaD);
                $filasD = mysqli_num_rows($resultadoD);
                if ($filasD) {  
                    echo "<script>window.alert('USUARIO YA EXISTENTE');</script>
                    <h1 class='alert alert-danger' role='alert'> <a href='".urlsite."?page=Cempleado'>Volver</a></h1>";
                   }
                //Crear nuevo usuario
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