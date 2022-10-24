<?php
    require "Model/Fecha.php";
    class FechaController{
        private $Model;
        public function __construct(){
            $this -> Model = New Fecha();
        }

        //mostrar
        static function index(){
            $Empleados = New Fecha();
            $dato = $Empleados-> Read("fecha","1");
            require "View/Admin/Fecha/Listar.php";
        }
        //Nuevo
        static function nuevo(){
            require "View/Admin/Fecha/Nuevo.php";
        }
        //Guardar
        static function guardar(){
            $nombre = $_REQUEST['Nombre'];
            $date = $_REQUEST['Fecha'];
            $categoria = $_REQUEST['Categoria'];
            $data = "'$nombre','$date','$categoria'";
            $Fecha = New Fecha();
            $dato = $Fecha->Create("fecha",$data);
            header('location:'.urlsite."?page=Rfecha");  
        }
        //Editar
         static function editar(){
            $id = $_REQUEST['id'];
            $Fecha = New Fecha();
            $dato = $Fecha->Read("fecha","id=".$id);
            require "View/Admin/Fecha/Editar.php";
        }
        //Actualizar
        static function actualizar(){
            $id = $_REQUEST['id'];
            $date = $_REQUEST['Fecha'];
            $data = "Fecha='$date'";
            $Fecha = New Fecha();
            $dato = $Fecha->Update("fecha",$data,"id=".$id);
            header('location:'.urlsite."?page=Rfecha");
        } 
        //Eliminar
        static function eliminar(){
            $id = $_REQUEST['id'];
            $Fecha = New Fecha();
            $dato = $Fecha->Delete("fecha","id=".$id);
            header('location:'.urlsite."?page=Rfecha");
        }
    }
?>