<?php
    class Empleado{
        private $Empleado;
        private $db;
        private $datos;
        public function __construct(){
            $this ->Empleado = array();
            $this->db = new PDO('mysql:host=localhost;dbname=borradorproyecto',"root","");
        }
        //CRUD

        //Crear
        public function Create($tabla,$Documento,$Nombre,$Apellido,$Email,$Telefono,$data){
            //Campos vacios
            if (empty($Documento && $Nombre && $Apellido && $Email && $Telefono)) {
                echo "<script>window.alert('Por favor rellene todos los campos');</script>
                <h1 class='alert alert-danger' role='alert'> <a href='".urlsite."?page=Cempleado'>Volver</a></h1>";
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
        //Leer
        public function Read($tabla, $condicion){
            $consulta = "SELECT * FROM ".$tabla." WHERE ".$condicion.";";
            $resultado = $this->db->query($consulta);
            while ($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->datos[]= $filas;
            }
            return $this->datos;
        }

        //Actualizar
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

        //Eliminar
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

        //Login
         public function login($tabla, $Email, $Password){
            $consulta = "SELECT * FROM ".$tabla." WHERE ".$Email."AND ".$Password.";";
            $conexion = mysqli_connect("localhost","root","","borradorproyecto");
            $resultado = mysqli_query($conexion ,$consulta);
            $filas = mysqli_num_rows($resultado);   
            if ($filas) {
                header('location:'.urlsite."?page=Menu");
            }
            else {
                echo "<h1 class='text-danger'>ERROR EN LOS DATOS DILIGENCIADOS INTENTELO NUEVA MENTE </h1>";
            }
            mysqli_free_result($resultado);
            mysqli_close($conexion);
        }

        //Recuperar clave
        public function ClaveR($data, $condicion){
            $consulta = "UPDATE empleado SET ".$data." WHERE ".$condicion;
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