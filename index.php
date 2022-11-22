<?php
    require "Config/Conexion.php";
    require "Controller/EmpleadoController.php";
    require "Controller/AprendizController.php";
    require "Controller/CategoriaController.php";
    require "Controller/AsistenciaController.php";
    require "Controller/FechaController.php";
    $page = "index";
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    if(isset($_GET['m'])){
        if (method_exists("EmpleadoController",$_GET['m'])) {
            EmpleadoController::{$_GET['m']}();
        }
    }
    if(isset($_GET['a'])){
        if (method_exists("AprendizController",$_GET['a'])) {
            AprendizController::{$_GET['a']}();
        }
    }
    if(isset($_GET['c'])){
        if (method_exists("CategoriaController",$_GET['c'])) {
            CategoriaController::{$_GET['c']}();
        }
    }
    if(isset($_GET['s'])){
        if (method_exists("AsistenciaController",$_GET['s'])) {
            AsistenciaController::{$_GET['s']}();
        }
    }
    if(isset($_GET['f'])){
        if (method_exists("FechaController",$_GET['f'])) {
            FechaController::{$_GET['f']}();
        }
    }
    switch ($page) {
        case 'Login': 
            EmpleadoController::login();
            break;
        case 'Menu': 
            EmpleadoController::menu();
            break;
        case 'Olvido':
            EmpleadoController::Olvido();
            break;
        case 'Contacto':
            EmpleadoController::Contacto();
            break;
        case 'CClave':
            EmpleadoController::CClave();
            break;
        case 'Cempleado': 
            EmpleadoController::nuevo();
            break;
        case 'Gempleado': 
            EmpleadoController::guardar();
            break;
        case 'Rempleado':
            EmpleadoController::index();
            break;
        case 'Uempleado':
            EmpleadoController::editar();
            break;
        case 'Iempleado':
            EmpleadoController::inactivo();
            break;
        case 'Aempleado':
            EmpleadoController::activar();
            break;
        case 'Pempleado':
            EmpleadoController::papelera();
            break;
        case 'Dempleado':
            EmpleadoController::eliminar();
            break;
        case 'Bempleado':
            EmpleadoController::buscado();
            break;
        case 'LCerrar':
            EmpleadoController::cerrar();
            break;
        case 'CargaMasivaEmpleado':
            EmpleadoController::CargaM();
            break;
        //Fin empleado
        //Inicio aprendiz
        case 'Caprendiz': 
            AprendizController::nuevo();
            break;
        case 'Raprendiz':
            AprendizController::index();
            break;
        case 'Uaprendiz':
            AprendizController::editar();
            break;
        case 'Iaprendiz':
            AprendizController::inactivo();
            break;
        case 'Aaprendiz':
            AprendizController::activar();
            break;
        case 'Paprendiz':
            AprendizController::papelera();
            break;
        case 'Daprendiz':
            AprendizController::eliminar();
            break;
        case 'Baprendiz':
            AprendizController::buscado();
            break;
        case 'CargaMasivaAprendiz':
            AprendizController::CargaM();
            break;
        /* INICIO CATEGORIA */
        case 'Ccategoria': 
            CategoriaController::nuevo();
            break;
        case 'Rcategoria':
            CategoriaController::index();
            break;
        case 'Ucategoria':
            CategoriaController::editar();
            break;
        case 'Icategoria':
            CategoriaController::inactivo();
            break;
        case 'Acategoria':
            CategoriaController::activar();
            break;
        case 'Pcategoria':
            CategoriaController::papelera();
            break;
        case 'Dcategoria':
            CategoriaController::eliminar();
            break;
        case 'Bcategoria':
            CategoriaController::buscado();
            break;
        /* FIN CATEGORIA */
        /* INICIO ASISTENCIA */
        case 'Casistencia': 
            AsistenciaController::nuevo();
            break;
        case 'Rasistencia':
            AsistenciaController::index();
            break;
        case 'Uasistencia':
            AsistenciaController::editar();
            break;
        case 'Iasistencia':
            AsistenciaController::inactivo();
            break;
        case 'Aasistencia':
            AsistenciaController::activar();
            break;
        case 'Pasistencia':
            AsistenciaController::papelera();
            break;
        case 'Dasistencia':
            AsistenciaController::eliminar();
            break;
        case 'Colsultar':
            AsistenciaController::consultar();
            break;
        case 'BuscarA':
            AsistenciaController::BConsul();
            break;
        case 'Basistencia':
            AsistenciaController::buscado();
            break;
        case 'Gasistencia':
            AsistenciaController::guardar();
            break;
        case 'Rasistenciaexcel':
            AsistenciaController::descargar();
            break;
        case 'ARasistenciaexcel':
            AsistenciaController::descargarA();
            break;
        case 'Rasistenciapdf':
            AsistenciaController::descargarpdft();
            break;
        case 'ARasistenciapdf':
            AsistenciaController::descargarpdf();
            break;
        /* FIN ASISTENCIA */
        /* INICIO FECHA  */ 
        case 'Cfecha':
            FechaController::nuevo();
            break;
        case 'Rfecha':
            FechaController::index();
            break;
        case 'Ufecha':
            FechaController::editar();
            break;
        case 'Dfecha':
            FechaController::eliminar();
            break;
        case 'Bfecha':
            FechaController::buscado();
            break;
        case 'Buscar':
            AsistenciaController::Buscar();
            break;
        /* FIN FECHA */
    
        default :echo "
            <!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>PIVOOT</title>
                <link rel='stylesheet' href='Resources/Css/style.css'>
                <script src='https://kit.fontawesome.com/eb496ab1a0.js' crossorigin='anonymous'></script>
                <link rel='icon' href='Resources/Img/favicon.ico' type='image/png'/>
            </head>
            <body>
                <a href='https://api.whatsapp.com/send?phone=573206046288&text=Hola! necesito mas información' class='float' target='_blank'>
                    <i class='fa fa-whatsapp my-float'></i>
                </a>
                <!-- NAVBAR -->
                <nav class='navbar' id='Inicio'>
                    <img src='Resources/Img/Logo-Lado-Blanco.png' class='Logo'>
                    <ul class='nav-links'>
                        <li><a href='#Inicio' class='active'>Inicio</a></li>
                        <li><a href='#Nosotros'>Nosotros</a></li>
                        <li><a href='#Modulo'>Modulos</a></li>
                        <li><a href='#Ventajas'>Ventajas</a></li>
                        <li><a href='#Funcionalidad'>Funcionalidades</a></li>
                        <li><a href='#Contacto'>Contacto</a></li>
                        <li><a href='".urlsite."?page=Login' class='ctn'>Iniciar Sesíon</a></li>
                    </ul>
                </nav>
                <header>
                    <div class='header-content'>
                        <h2>PIVOOT</h2>
                        <div class='line'></div>
                        <h1>SISTEMA PARA LA TOMA DE ASISTENCIAS</h1>
                        <a href='#Nosotros' class='ctn'>INFORMACION</a>
                    </div>
                </header>
                <!-- NOSOTROS -->
                <section class='nosotros' id='Nosotros'>
                    <div class='row'>
                        <div class='col content-col'>
                            <h1>PIVOOT</h1>
                            <div class='line'></div>
                            <p>PIVOOT es un sistema en la capacidad de generar usuarios como lo son empleados y aprendices, asignandoles una categoria a trabajar o para los entrenamientos.Igualmente llevando a cabo una funcíon de toma de asistencias para sus aprendices.</p>
                            <a href='#' class='ctn'>CONSEGUIR</a>
                        </div>
                        <div class='col image-col'>
                            <div class='image-gallery'>
                                <img src='Resources/Img/Inicio/Imagen1.jpg'>
                                <img src='Resources/Img/Inicio/Imagen2.jpg'>
                                <img src='Resources/Img/Inicio/Imagen3.jpg'>
                                <img src='Resources/Img/Inicio/Imagen4.jpg'>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Modulo -->
                <section class='modulo' id='Modulo'>
                    <div class='modulo-content'>
                        <h1>MODULOS</h1>
                        <div class='line'></div>
                        <P>
                            En los modulos que encontramos podemos elaborar la insercíon, actualizacíon ademas de leer los datos en tiempo real. <br><br>
                            En pivoot tenemos los modulos de:<br>
                            🏀 Asistencia. <br>
                            🏀 Registro de usuarios. <br>
                            🏀 Categorias. <br>
                        </P>
                        <a href='#' class='ctn'>CONSEGUIR</a>
                    </div>
                </section>
                <!-- Ventajas -->
                <section class='ventajas' id='Ventajas'>
                    <div class='title'>
                        <h1>VENTAJAS</h1>
                        <div class='line'></div>
                    </div>
                    <div class='container-card'>
                    <div class='card'>
                        <figure>
                            <img src='Resources/Img/Inicio/Papeleo.jpg'>
                        </figure>
                        <div class='contenido-card'>
                            <h3>No mas papeleo</h3>
                            <p>Ya no tendran que usar papel para la toma de Asistencia.</p>
                            <a href='#'>CONSEGUIR</a>
                        </div>
                    </div>
                    <div class='card'>
                        <figure>
                            <img src='Resources/Img/Inicio/Reloj.jpg'>
                        </figure>
                        <div class='contenido-card'>
                            <h3>Informacíon en tiempo real</h3>
                            <p>Toda la informacíon que se visualiza esta en tiempo real esto nos ahorrara tiempo en la busqueda de datos.</p>
                            <a href='#'>CONSEGUIR</a>
                        </div>
                    </div>
                    <div class='card'>
                        <figure>
                            <img src='Resources/Img/Inicio/Datos.jpg'>
                        </figure>
                        <div class='contenido-card'>
                            <h3>Evitar perdida de datos</h3>
                            <p>No se volvera a perder informacion ya que esta se encontrara en una base de datos segura.</p>
                            <a href='#'>CONSEGUIR</a>
                        </div>
                    </div>
                    </div>
                </section>
                <!-- FUNCIONALIDAD -->
                <section class='funcionalidad' id='Funcionalidad'>
                    <div class='title'>
                        <h1>Funcionalidad</h1>
                        <div class='line'></div>
                    </div>
                    <div class='container-card'>
                    <div class='card'>
                        <figure>
                            <img src='Resources/Img/Inicio/Empleados.jpg'>
                        </figure>
                        <div class='contenido-card'>
                            <h3>EMPLEADOS</h3>
                            <p>Se pueden crear empleados los cuales seran los encargados de registrar las aasistencias y registrar aprendices.</p>
                        </div>
                    </div>
                    <div class='card'>
                        <figure>
                            <img src='Resources/Img/Inicio/Aprendices.jpg'>
                        </figure>
                        <div class='contenido-card'>
                            <h3>APRENDICES</h3>
                            <p>Los aprendices estaran en una categoria la cual le permitira estar en eventos donde se tomara la asistencia.</p>
                        </div>
                    </div>
                    <div class='card'>
                        <figure>
                            <img src='Resources/Img/Inicio/Categorias.jpg'>
                        </figure>
                        <div class='contenido-card'>
                            <h3>CATEGORIAS</h3>
                            <p>La categoria es donde se almacenan los aprendices organizados.</p>
                        </div>
                    </div>
                    </div>
                    <div class='container-card'>
                    <div class='card'>
                        <figure>
                            <img src='Resources/Img/Inicio/Asistencia.jpg'>
                        </figure>
                        <div class='contenido-card'>
                            <h3>ASISTENCIAS</h3>
                            <p>Se registran nuevas asistencias las cuales permitiran un mejor control de ellas a la hora de generar reportes.</p>
                        </div>
                    </div>
                    <div class='card'>
                        <figure>
                            <img src='Resources/Img/Inicio/Eventos.jpg'>
                        </figure>
                        <div class='contenido-card'>
                            <h3>EVENTOS</h3>
                            <p>Es donde se informa la actividad del dia y facilitara la toma de asistencias.</p>
                        </div>
                    </div>
                    <div class='card'>
                        <figure>
                            <img src='Resources/Img/Inicio/Ingreso.jpg'>
                        </figure>
                        <div class='contenido-card'>
                            <h3>INICIO DE SESÍON</h3>
                            <p>Los empleados pueden iniciar sesíon al sistema para el control de la escuela.</p>
                        </div>
                    </div>
                    </div>
                </section>
                <section class='contacto' id='Contacto'>
                <div class='container-form'>
                    <div class='info-form'>
                        <h2>Contáctanos</h2>
                        <p>Para cualquier duda o adquirir el software envie un correo por este medio.</p>
                        <a href='#'><i class='fa fa-phone'></i> 320-604-6288</a>
                        <a href='#'><i class='fa fa-envelope'></i> pivoot23@gmail.com</a>
                        <a href='#'><i class='fa fa-map-marked'></i> Bogota, Colombia</a>
                    </div>
                    <form autocomplete='off' method='GET'>
                        <input type='text' name='Nombre' placeholder='Tu Nombre' class='campo'>
                        <input type='emal' name='Email' placeholder='Tu Email' class='campo'>
                        <textarea name='Mensaje' placeholder='Tu Mensaje...'></textarea>
                        <input type='submit' name='enviar' value='Enviar Mensaje' class='btn-enviar'>
                        <input type='hidden' name='m' value='Contacto'>
                    </form>
                </div>
                </section>
                <br>
                <footer class='pie-pagina'>
                    <div class='grupo-1'>
                        <div class='box'>
                            <figure>
                                <a href='#'>
                                    <img src='Resources/Img/Logo-Lado-Blanco.png'>
                                </a>
                            </figure>
                        </div>
                        <div class='box'>
                            <h2>SOBRE NOSOTROS</h2>
                            <p>PIVOOT es un sistema en la capacidad de generar usuarios como lo son empleados y aprendices, asignandoles una categoria a trabajar o para los entrenamientos.Igualmente llevando a cabo una funcíon de toma de asistencias para sus aprendices.</p>
                        </div>
                        <div class='box'>
                            <h2>SIGUENOS</h2>
                            <div class='red-social'>
                                <a href='#' class='fa fa-facebook'></a>
                                <a href='#' class='fa fa-instagram'></a>
                                <a href='#' class='fa fa-twitter'></a>
                                <a href='#' class='fa fa-youtube'></a>
                            </div>
                        </div>
                    </div>
                    <div class='grupo-2'>
                        <small>&copy; 2022 <b>PIVOOT</b> - Todos los Derechos Reservados.</small>
                    </div>
                </footer>
            </body>
            </html>        
        ";  
            break;   
    } 
?>