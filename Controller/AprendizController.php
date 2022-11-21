<?php
    require "Model/Aprendiz.php";
    class AprendizController{
        private $Model;
        public function __construct(){
            $this -> Model = New Aprendiz();
        }

        //mostrar
        static function index(){
            $Empleados = New Aprendiz();
            $dato = $Empleados-> Read("aprendiz","1");
            require "View/Admin/Aprendiz/Listar.php";
        }
        //Nuevo
        static function nuevo(){
            require "View/Admin/Aprendiz/Nuevo.php";
        }
        //Guardar
        static function guardar(){
            $Documento = $_REQUEST['Documento'];
            $TipoDocumento = $_REQUEST['TipoDocumento'];
            $Nombre = $_REQUEST['Nombre'];
            $Apellido = $_REQUEST['Apellido'];
            $Email = $_REQUEST['Email'];
            $Telefono = $_REQUEST['Telefono'];
            $Categoria = $_REQUEST['Categoria'];
            $Estado = $_REQUEST['Estado'];
            $data = "'$TipoDocumento','$Documento','$Nombre','$Apellido','$Email','$Telefono','$Categoria','$Estado'";
            $Aprendiz = New Aprendiz();
            $dato = $Aprendiz->Create("aprendiz",$Documento,$Nombre,$Apellido,$Email,$Telefono,$data);
            if ($resultado = true) {
                header('location:'.urlsite."?page=Raprendiz&Pagina=0");
            }
        }
        //Editar
         static function editar(){
            $id = $_REQUEST['id'];
            $Aprendiz = New Aprendiz();
            $dato = $Aprendiz->editarread("aprendiz","id=".$id);
            require "View/Admin/Aprendiz/Editar.php";
        }
        //Actualizar
        static function actualizar(){
            $id = $_REQUEST['id'];
            $Documento = $_REQUEST['Documento'];
            $TipoDocumento = $_REQUEST['TipoDocumento'];
            $Nombre = $_REQUEST['Nombre'];
            $Apellido = $_REQUEST['Apellido'];
            $Email = $_REQUEST['Email'];
            $Telefono = $_REQUEST['Telefono'];
            $Categoria = $_REQUEST['Categoria'];
            $data = "TipoDocumento='$TipoDocumento',Documento='$Documento',Nombres='$Nombre',Apellidos='$Apellido',Email='$Email',Telefono='$Telefono',Categoria_Id='$Categoria'";
            $Aprendiz = New Aprendiz();
            $dato = $Aprendiz->Update("aprendiz",$data,"id=".$id);
            header('location:'.urlsite."?page=Raprendiz&Pagina=0");
        }
        //Editar estado inactivo
        static function inactivo(){
            $id = $_REQUEST['id'];
            $data = "Estado='Inactivo'";
            $Aprendiz = New Aprendiz();
            $dato = $Aprendiz->Update("aprendiz",$data,"id=".$id);
            header('location:'.urlsite."?page=Raprendiz&Pagina=0");
        }
        //Papelera
        static function papelera(){
            $Empleados = New Aprendiz();
            $dato = $Empleados-> Read("aprendiz","1");
            require "View/Admin/Aprendiz/Papelera.php";
        }
        //Editar estado activo
        static function activar(){
            $id = $_REQUEST['id'];
            $data = "Estado='Activo'";
            $Aprendiz = New Aprendiz();
            $dato = $Aprendiz->Update("aprendiz",$data,"id=".$id);
            header('location:'.urlsite."?page=Raprendiz&Pagina=0");
        }
        //Eliminar
        static function eliminar(){
            $id = $_REQUEST['id'];
            $Aprendiz = New Aprendiz();
            $dato = $Aprendiz->Delete("aprendiz","id=".$id);
            header('location:'.urlsite."?page=Paprendiz&Pagina=0");
        }
        //Buscar
        static function Buscar(){
            $buscar = $_REQUEST['busqueda'];
            if ($buscar == "") {
                header('location:'.urlsite."?page=Raprendiz&Pagina=0");
            }
            else {
                header('location:'.urlsite."?page=Baprendiz&Buscar=".$buscar."&Pagina=0");
            }
        }
        //Buscado
        static function Buscado(){
            $Empleados = New Aprendiz();
            $dato = $Empleados-> Read("aprendiz","1");
            require "View/admin/Aprendiz/Buscar.php";
        }
    }
?>