<?php
    require "Model/Empleado.php";
    class EmpleadoController{
        private $Model;
        public function __construct(){
            $this -> Model = New Empleado();
        }

        //mostrar
        static function index(){
            $Empleados = New Empleado();
            $dato = $Empleados-> Read("empleado","1");
            require "View/Admin/Empleado/Listar.php";
        }
        //Nuevo
        static function nuevo(){
            require "View/Admin/Empleado/Nuevo.php";
        }
        
        //Guardar
        static function guardar(){
            $Documento = $_REQUEST['Documento'];
            $TipoDocumento = $_REQUEST['TipoDocumento'];
            $Nombre = $_REQUEST['Nombre'];
            $Apellido = $_REQUEST['Apellido'];
            $Rol = $_REQUEST['Rol'];
            $Email = $_REQUEST['Email'];
            $Telefono = $_REQUEST['Telefono'];
            $Password = md5($_REQUEST['Pass']); 
            $Estado = $_REQUEST['Estado'];  
            $data = "'$Rol','$TipoDocumento','$Documento','$Nombre','$Apellido','$Email','$Telefono','$Estado','$Password'";
            $Empleado = New Empleado();
            $dato = $Empleado->Create("empleado",$Documento,$Nombre,$Apellido,$Email,$Telefono,$data);
            if ($resultado = true) {
                require "View/mail.php";
            }
        }   
        //Editar
         static function editar(){
            $id = $_REQUEST['id'];
            $Empleado = New Empleado();
            $dato = $Empleado->Read("empleado","id=".$id);
            require "View/Admin/Empleado/Editar.php";
        }
        //Actualizar
        static function actualizar(){
            $id = $_REQUEST['id'];
            $Documento = $_REQUEST['Documento'];
            $Nombre = $_REQUEST['Nombre'];
            $Apellido = $_REQUEST['Apellido'];
            $TipoDocumento = $_REQUEST['TipoDocumento'];
            $Rol = $_REQUEST['Rol'];
            $Email = $_REQUEST['Email'];
            $Telefono = $_REQUEST['Telefono'];
            $data = "Rol='$Rol',TipoDocumento='$TipoDocumento',Documento='$Documento',Nombres='$Nombre',Apellidos='$Apellido',Email='$Email',Telefono='$Telefono'";
            $Empleado = New Empleado();
            $dato = $Empleado->Update("empleado",$data,"id=".$id);
            header('location:'.urlsite."?page=Rempleado");
        }
        //Editar estado inactivo
        static function inactivo(){
            $id = $_REQUEST['id'];
            $data = "Estado='Inactivo'";
            $Empleado = New Empleado();
            $dato = $Empleado->Update("empleado",$data,"id=".$id);
            header('location:'.urlsite."?page=Rempleado");
        }
        //Papelera
        static function papelera(){
            $Empleados = New Empleado();
            $dato = $Empleados-> Read("empleado","1");
            require "View/Admin/Empleado/Papelera.php";
        }
        //Editar estado activo
        static function activar(){
            $id = $_REQUEST['id'];
            $data = "Estado='Activo'";
            $Empleado = New Empleado();
            $dato = $Empleado->Update("empleado",$data,"id=".$id);
            header('location:'.urlsite."?page=Rempleado");
        }
        //Eliminar
        static function eliminar(){
            $id = $_REQUEST['id'];
            $Empleado = New Empleado();
            $dato = $Empleado->Delete("empleado","id=".$id);
            header('location:'.urlsite."?page=Pempleado");
        }
        //Login
        static function login(){
            require "View/login.php";
        }
        //Ingresar
        static function ingresar(){
            $Email = $_REQUEST['Correo'];
            $Password = md5($_REQUEST['Password']);
            session_start();
            $_SESSION["Correo"] = $_REQUEST['Correo'];
            $Empleado = New Empleado();
            $Email = "Email='$Email'";
            $Password = "password='$Password'";
            $dato = $Empleado-> login("empleado", $Email , $Password);
        }
        //Cerrar
        static function cerrar(){
            session_start();
            session_destroy();
            header('location:'.urlsite."?page=Login");
        }
        //Login
        static function menu(){
            $Empleados = New Asistencia();
            $dato = $Empleados-> Read("asistencia","1");
            require "View/menu.php";
        }
        //Correo
        static function Olvido(){
            require "View/recuperar.php";
        }
        //Recuperar
        static function Recuperar(){
            $Email = $_REQUEST['Email'];
            $Password = md5($_REQUEST['Pass']); 
            $data = "password='$Password'";
            $Empleado = New Empleado();
            $dato = $Empleado->ClaveR("password='$Password'","Email='$Email'");
            require "View/olvido.php";
        }
        //Clave
        static function CClave(){
            require "View/CCambiar.php";
        }
        //Cambiar clave
        static function Clave(){
            $Email = $_REQUEST['Email'];
            $Password = md5($_REQUEST['Pass']); 
            $data = "password='$Password'";
            $Empleado = New Empleado();
            $dato = $Empleado->ClaveR("password='$Password'","Email='$Email'");
            session_start();
            session_destroy();
            header('location:'.urlsite."?page=Login");
        }
        //Contacto
        static function Contacto(){
            require "View/contacto.php";
        }
    }
?>