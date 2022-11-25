<?php 

$usuario  = "root";
$password = "";
$servidor = "localhost";
$basededatos = "borradorproyecto";
$con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
mysqli_query($con,"SET SESSION collation_connection ='utf8_unicode_ci'");
$db = mysqli_select_db($con, $basededatos) or die("Upps! Error en conectar a la Base de Datos");

$tipo       = $_FILES['dataAprendiz']['type'];
$tamanio    = $_FILES['dataAprendiz']['size'];
$archivotmp = $_FILES['dataAprendiz']['tmp_name'];
$lineas     = file($archivotmp);

$i = 0;

foreach ($lineas as $linea) {
    $cantidad_registros = count($lineas);
    $cantidad_regist_agregados =  ($cantidad_registros-1);

    if ($i != 0) {

        $datos = explode(";", $linea);

        $TipoD          = !empty($datos[0]) ? ($datos[0]) : ''; 
        $Documento      = !empty($datos[1]) ? ($datos[1]) : ''; 
        $Nombre         = !empty($datos[2]) ? ($datos[2]) : '';
        $Apellido       = !empty($datos[3]) ? ($datos[3]) : '';
        $Email          = !empty($datos[4]) ? ($datos[4]) : '';
        $Telefono       = !empty($datos[5]) ? ($datos[5]) : '';   
        $Estado         = !empty($datos[6]) ? ($datos[6]) : '';
        $Categoria      = !empty($datos[7]) ? ($datos[7]) : '';   
    
        $insertar = "INSERT INTO aprendiz ( 
            TipoDocumento,
            Documento,
            Nombres,
            Apellidos,
            Email,
            Telefono,
            Estado,
            Categoria_Id
        ) VALUES(
            '$TipoD',
            '$Documento',
            '$Nombre',
            '$Apellido',
            '$Email',
            '$Telefono',
            '$Estado',
            '$Categoria')";
        mysqli_query($con, $insertar);
    }
    echo '<div>'.$i.").".$linea.'</div>';
    $i++;
}
echo '<p>Total de registros = '.$cantidad_regist_agregados.'</p>';
echo "<script>
    window.alert('La carga masiva fue cargada correctamente.');
    window.location = '../../../?page=Raprendiz&Pagina=0';
    </script>";
?>
