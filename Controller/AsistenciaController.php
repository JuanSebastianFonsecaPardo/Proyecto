<?php
    require "Model/Asistencia.php";
    class AsistenciaController{
        private $Model;
        public function __construct(){
            $this -> Model = New Asistencia();
        }

        //mostrar
        static function index(){
            $id = $_REQUEST['id'];
            $Asistencia = New Asistencia();
            $dato = $Asistencia->Read("asistencia","IdFecha=".$id);
            require "View/Admin/Asistencia/Listar.php";
        }
        //Nuevo
        static function nuevo(){
            $idcategoria = $_REQUEST['IdCategoria'];
            $fecha = $_REQUEST['Fecha'];
            $Asistencia = New Asistencia();
            $dato = $Asistencia->Read("aprendiz","Categoria_Id=".$idcategoria,$fecha);
            require "View/Admin/Asistencia/Nuevo.php";
        }
        //Guardar
        static function guardar(){
            $Categoria = $_REQUEST['IdEvento'];
            $Fecha = $_REQUEST['IdFecha'];
            $Aprendiz = $_GET['IdAprendiz'];
            $Asistencia = $_REQUEST['Asistencia'];
            $Estado = $_REQUEST['Estado'];
            $data = "'$Fecha','$Aprendiz','$Asistencia','$Estado'";
            $Asistencia = New Asistencia();
            $dato = $Asistencia->Create("asistencia",$data,$Aprendiz,$Fecha,$Categoria);
            header('location:'.urlsite."?page=Casistencia&IdCategoria=".$Categoria."&Fecha=".$Fecha."");
        }
        //Editar
         static function editar(){
            $id = $_REQUEST['id'];
            $Asistencia = New Asistencia();
            $dato = $Asistencia->Read("asistencia","id=".$id);
            require "View/Admin/Asistencia/Editar.php";
        }
        //Actualizar
        static function actualizar(){
            $id = $_REQUEST['id'];
            $IdFecha = $_REQUEST['Fecha'];
            $IdAprendiz = $_GET['idaprendiz'];
            $Asistencia = $_REQUEST['checkbox'];
            $Estado = $_REQUEST['Estado'];
            $data = "IdFecha='$IdFecha',IdAprendiz='$IdAprendiz',Asistencia='$Asistencia',Estado='$Estado'";
            $Categoria = New Categoria();
            $dato = $Categoria->Update("asistencia",$data,"id=".$id);
            header('location:'.urlsite."?page=Rasistencia");
        }
        //Editar estado inactivo
        static function inactivo(){
            $id = $_REQUEST['id'];
            $data = "Estado='Inactivo'";
            $Asistencia = New Asistencia();
            $dato = $Asistencia->Update("asistencia",$data,"id=".$id);
            header('location:'.urlsite."?page=Rasistencia");
        }
        //Papelera
        static function papelera(){
            $Empleados = New Asistencia();
            $dato = $Empleados-> Read("asistencia","1");
            require "View/Admin/Asistencia/Papelera.php";
        }
        //Editar estado activo
        static function activar(){
            $id = $_REQUEST['id'];
            $data = "Estado='Activo'";
            $Asistencia = New Asistencia();
            $dato = $Asistencia->Update("asistencia",$data,"id=".$id);
            header('location:'.urlsite."?page=Rasistencia");
        }
        //Eliminar
        static function eliminar(){
            $id = $_REQUEST['id'];
            $fecha = $_REQUEST['IdFecha'];
            $Asistencia = New Asistencia();
            $dato = $Asistencia->Delete("asistencia","id=".$id);
            header('location:'.urlsite."?page=Rasistencia&id=".$fecha."");
        }
        static function Buscar(){
            $Empleados = New Asistencia();
            $Categoria = $_REQUEST['Categoria'];
            $data = "Categoria_Id='$Categoria'";
            $dato = $Empleados-> BuscarF("aprendiz",$data);
            require "View/Admin/Asistencia/Nuevo.php";
        }
        //mostrar
        static function descargar(){
            $id = $_REQUEST['IdFecha'];
            $Asistencia = New Asistencia();
            $dato = $Asistencia->Read("asistencia","IdFecha=".$id);
            require "View/Admin/Asistencia/Descargar.php";
        }
        //Consultar
        static function consultar(){
            $Asistencia = New Asistencia();
            $dato = $Asistencia->Consul("asistencia","1");
            require "View/Admin/Asistencia/Consulta.php";
        }

        //Buscar
        static function Colsultar(){
            $Asistencia = New Asistencia();
            $dato = $Asistencia->Read("asistencia","1");
            require "View/Admin/Asistencia/Consultar.php";
        }
        //Buscado
        static function BuscarA(){
            $buscar = $_REQUEST['busqueda'];
            if ($buscar == "") {
                header('location:'.urlsite."?page=Consultar");
            }
            else {
                header('location:'.urlsite."?page=Basistencia&Buscar=".$buscar);
            }
        }
        //Buscado
        static function Buscado(){
            $Empleados = New Asistencia();
            $dato = $Empleados-> Busca("asistencia","1");
            require "View/Admin/Asistencia/Buscar.php";
        }
    }
?>