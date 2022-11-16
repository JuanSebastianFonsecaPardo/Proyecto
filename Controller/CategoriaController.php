<?php
    require "Model/Categoria.php";
    class CategoriaController{
        private $Model;
        public function __construct(){
            $this -> Model = New Categoria();
        }

        //mostrar
        static function index(){
            $Empleados = New Categoria();
            $dato = $Empleados-> Read("categoria","1");
            require "View/Admin/Categoria/Listar.php";
        }
        //Nuevo
        static function nuevo(){
            require "View/Admin/Categoria/Nuevo.php";
        }
        //Guardar
        static function guardar(){
            $Nombre = $_REQUEST['Nombre'];
            $Descripcion = $_REQUEST['Descripcion'];
            $Empleado = $_REQUEST['Empleado'];
            $Estado = $_REQUEST['Estado'];
            $data = "'$Nombre','$Descripcion','$Empleado','$Estado'";
            $Categoria = New Categoria();
            $dato = $Categoria->Create("categoria",$Nombre,$Descripcion,$data);
            if ($resultado = true) {
                header('location:'.urlsite."?page=Rcategoria");
            }
        }
        //Editar
         static function editar(){
            $id = $_REQUEST['id'];
            $Categoria = New Categoria();
            $dato = $Categoria->Read("categoria","id=".$id);
            require "View/Admin/Categoria/Editar.php";
        }
        //Actualizar
        static function actualizar(){
            $id = $_REQUEST['id'];
            $Nombre = $_REQUEST['Nombre'];
            $Descripcion = $_REQUEST['Descripcion'];
            $Empleado = $_REQUEST['Empleado'];
            $data = "Nombre='$Nombre',Descripcion='$Descripcion',IdEmpleado='$Empleado'";
            $Categoria = New Categoria();
            $dato = $Categoria->Update("categoria",$data,"id=".$id);
            header('location:'.urlsite."?page=Rcategoria");
        }
        //Editar estado inactivo
        static function inactivo(){
            $id = $_REQUEST['id'];
            $data = "Estado='Inactivo'";
            $Categoria = New Categoria();
            $dato = $Categoria->Update("categoria",$data,"id=".$id);
            header('location:'.urlsite."?page=Rcategoria");
        }
        //Papelera
        static function papelera(){
            $Empleados = New Categoria();
            $dato = $Empleados-> Read("categoria","1");
            require "View/Admin/Categoria/Papelera.php";
        }
        //Editar estado activo
        static function activar(){
            $id = $_REQUEST['id'];
            $data = "Estado='Activo'";
            $Categoria = New Categoria();
            $dato = $Categoria->Update("categoria",$data,"id=".$id);
            header('location:'.urlsite."?page=Rcategoria");
        }
        //Eliminar
        static function eliminar(){
            $id = $_REQUEST['id'];
            $Categoria = New Categoria();
            $dato = $Categoria->Delete("categoria","id=".$id);
            header('location:'.urlsite."?page=Pcategoria");
        }
        //Buscar
        static function Buscar(){
            $buscar = $_REQUEST['busqueda'];
            if ($buscar == "") {
                header('location:'.urlsite."?page=Rcategoria");
            }
            else {
                header('location:'.urlsite."?page=Bcategoria&Buscar=".$buscar);
            }
        }
        //Buscado
        static function Buscado(){
            $Empleados = New Aprendiz();
            $dato = $Empleados-> Consultar("categoria","1");
            require "View/admin/Categoria/Consulta.php";
        }
    }
?>