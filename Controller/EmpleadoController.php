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
            $data = "Estado = 'Activo'";
            $dato = $Empleados-> Read("empleado",$data ,"1");
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
            $Password = $_REQUEST['Pass'];
            $Password_sin_encriptar = $_REQUEST['Pass_sin']; 
            $Estado = $_REQUEST['Estado'];  
            $data = "'$Rol','$TipoDocumento','$Documento','$Nombre','$Apellido','$Email','$Telefono','$Estado','$Password'";
            $Empleado = New Empleado();
            $dato = $Empleado->Create("empleado",$Documento,$Nombre,$Apellido,$Email,$Telefono,$data);
            if ($resultado = true) {
                require "View/mail.php";
            }else{
                header('location:'.urlsite."?page=Rempleado&Pagina=0");
            }
        }   
        //Editar
         static function editar(){
            $id = $_REQUEST['id'];
            $Empleado = New Empleado();
            $dato = $Empleado->editarread("empleado","id=".$id);
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
            header('location:'.urlsite."?page=Rempleado&Pagina=0");
        }
        //Editar estado inactivo
        static function inactivo(){
            $id = $_REQUEST['id'];
            $data = "Estado='Inactivo'";
            $Empleado = New Empleado();
            $dato = $Empleado->Update("empleado",$data,"id=".$id);
            header('location:'.urlsite."?page=Rempleado&Pagina=0");
        }
        //Papelera
        static function papelera(){
            $Empleados = New Empleado();
            $dato = $Empleados-> papeleraread("empleado","1");
            require "View/Admin/Empleado/Papelera.php";
        }
        //Editar estado activo
        static function activar(){
            $id = $_REQUEST['id'];
            $data = "Estado='Activo'";
            $Empleado = New Empleado();
            $dato = $Empleado->Update("empleado",$data,"id=".$id);
            header('location:'.urlsite."?page=Rempleado&Pagina=0");
        }
        //Eliminar
        static function eliminar(){
            $id = $_REQUEST['id'];
            $Empleado = New Empleado();
            $dato = $Empleado->Delete("empleado","id=".$id);
            header('location:'.urlsite."?page=Pempleado&Pagina=0");
        }
        //Login
        static function login(){
            require "View/login.php";
        }
        //Ingresar
        static function ingresar(){
            $Email = $_REQUEST['Correo'];
            $passl = $_REQUEST['Password'];
            $sha1 = sha1($passl);
            $md5 = md5($sha1);
            $encriptada = sha1($md5);
            session_start();
            $_SESSION["Correo"] = $_REQUEST['Correo'];
            $Empleado = New Empleado();
            $Email = "Email='$Email'";
            $Password = "password='$encriptada'";
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
            $nombrec = $Email;                 
            $conexion = mysqli_connect('localhost','root','','borradorproyecto') or die (mysqli_error());
            $consulta = "SELECT * FROM empleado WHERE Email='".$nombrec."'";
            $ejecutar = mysqli_query($conexion,$consulta)or die(mysqli_error($conexion));
            foreach ($ejecutar as $opciones) {
            $nombre = $opciones['Nombres'];
            }
            $Password = $_REQUEST['Pass'];
            $Password_sin_encriptar = $_REQUEST['Pass_sin']; 
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
            $Nombre = $_REQUEST['Nombre'];
            $Password = $_REQUEST['Pass']; 
            $Password2 = $_REQUEST['Pass2']; 
            $sha1 = sha1($Password);
            $md5 = md5($sha1);
            $encriptada = sha1($md5);
            if (!empty($Password && $Password2)) {
                if ($Password == $Password2) {
                    $Empleado = New Empleado();
                    $dato = $Empleado->ClaveR("password='$encriptada'","Email='$Email'");
                    session_start();
                    session_destroy();
                    require "View/ContrasenaCambiada.php";
                }   
                else {
                echo "<script>window.alert('Las contraseñas no coninciden, por favor vuelva a iniciar sesión')</script>";
                }
            }
            else {
                echo "<script>window.alert('Los campos se encuentran vacios, por favor vuelva a iniciar sesión')</script>";
            }
        }
        //Contacto
        static function Contacto(){
            require "View/contacto.php";
        }
        //Buscar
        static function Buscar(){
            $buscar = $_REQUEST['busqueda'];
            if ($buscar == "") {
                header('location:'.urlsite."?page=Rempleado&Pagina=0");
            }
            else {
                header('location:'.urlsite."?page=Bempleado&Buscar=".$buscar."&Pagina=0");
            }
        }
        //Buscado
        static function Buscado(){
            $Empleados = New Empleado();
            $dato = $Empleados-> Read("empleado","1");
            require "View/Admin/Empleado/Busca.php";
        }
        //Carga maxiva desde excel
        static function CargaM(){
            $Empleados = New Empleado();
            require "View/Admin/Empleado/CargaM.php";
        }
    }
?>