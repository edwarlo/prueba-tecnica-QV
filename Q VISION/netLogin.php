<?php
session_start();
extract($_SESSION);
if(!isset($_SESSION['login'])
)
header("location:index.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <script src="index.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Formacion .NET</title>
</head>
<body>
    <!-------------------------Encabezado------------------------->
    <header>
        <div class="menu">
            <div class="logo_menu">
                <img src="IMG/Logo izyacademy transparente2022.png" alt="logo">
            </div>
            <div class="menu_1">
                <ul class="nav">
                    <a href="pagLogin.php" class="inicio">Inicio</a>
                    <li>Rutas de Formacion <img class="flecha" src="IMG/caret-abajo.png" alt="flecha abajo">
                        <ul>
                            <li><a href="#">Científico De Datos</a></li>
                            <li><a href="netLogin.php">Ruta de Formación En .NET</a></li>
                            <li><a href="#">Ruta de Formación en <br>Automatización</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_2">
                <ul class="nav">
                    <li><?php echo "Bienvenido, ",$_SESSION['nombre']," ",$_SESSION['apellido'] ?>
                        <ul>
                            <li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="buscador">
                    <img src="IMG/lupa.png" >
                </div>
            </div>
        </div>
        <div class="contenido_header">
            <div class="titulo_encabezado">
                <h1>Continúa tu formación con IzyAcademy</h1>
            </div>
            <div class="texto_enxabezado">
                <p>
                    Te ofrecemos una experienca de aprendizaje basada en la formación por proyectos, <br>
                    apoyada en el uso de recursos interactivos para que tu aprendizaje sea efectivo.
                </p>
            </div>
        </div>
    </header>

<!---------------------------------.NET--------------------------------->
    <div class="contenido_net">
        <div class="titulo_net">
            <h1>Aprende a construir</h1>
        </div>
        <div class="imagenes_net">
            <div class="img_net">
                <div class="imagenes">
                    <img src="IMG/aplicaciones.avif" alt="imagenes de contenido .NET">
                </div>
                <div class="titulo_imagenes">
                    <h2>Aplicaciones Web</h2>
                </div>
            </div>
            <div class="img_net">
                <div class="imagenes">
                    <img src="IMG/ilustracion-api-diseno-plano_23-2149392284.avif" alt="imagenes de contenido .NET">
                </div>
                <div class="titulo_imagenes">
                    <h2>Web API</h2>
                </div>
            </div>
            <div class="img_net">
                <div class="imagenes">
                    <img src="IMG/seguridad.jpg" alt="imagenes de contenido .NET">
                </div>
                <div class="titulo_imagenes">
                    <h2>Aplicaciones Seguras</h2>
                </div>
            </div>              
        </div>
        <div class="parallax">
            <div class="fondo">
                <div class="parrafo_1">
                    <p>
                        ASP.NET, el framework de desarrollo web que permite crear aplicaciones web potentes, Seguras y <br>
                        escalables de manera fácil, rápida y eficiente. 
                    </p>
                </div>
                <div class="parrafo_2">
                    <p>
                        COMIENZA TU VIAJE PARA CONVERTIRTE EN <br> DESARROLLADOR
                    </p>
                </div>

            </div>

        </div>
    </div>

<!-----------------------Pie de pagina----------------------->

    <footer>
        <div class="informacion">
            <div class="contenido">
                <h3>Contáctanos</h3>
                <p>
                    <font style="color: #6f7e9d;">E-mail:comercial@qvision.us <br>
                    WhatsApp +300 255 02 65 </font><br>
                    Comunícate con nosotros
                </p>
            </div>
            <div class="contenido">
                <h3>Categoría de <br> cursos</h3>
                <p>
                    Desarrollo <br>
                    Metodología de Pruebas <br>
                    Pruebas Funcionales <br>
                    Pruebas No Funcionales <br>
                    DevOps <br>
                    Cloud <br>
                    Automatización 
                </p>
            </div>
            <div class="contenido">
                <h3>Certificaciones</h3>
                <p>
                    Scrum Master <br>
                    Scrum Product Owner <br>
                    Scrum Developer <br>
                    Agile Coach <br>
                    Design Thinking <br>
                    Kanban <br>
                    OKR <br>
                    DevOps
                </p>
            </div>
            <div class="contenido">
                <h3>Q-Vision <br>Tecnologies</h3>
                <p>
                    Desarrollo de Software <br>
                    Aseguramiento de Calidad <br>
                    Automatización de <br> procesos con RPA <br>
                    Talento TI <br>
                    Gestión Inteligente de <br> Datos
                </p>
            </div>
            <div class="contenido">
                <h3>Soporte</h3>
                <p>
                    <font style="color: #6f7e9d;">Si tiene inconvenientes o dudas, <br> 
                    contáctanos al correo </font><br>
                    izyacademy@qvision.us
                </p>
            </div>
        </div>

        <div class="redes">
            <div class="logo_footer">
                <img src="IMG/izy_negativo.png" alt="Logotipo IzyAcademy pie pagina">
            </div>
            <div class="politica">
                <a href="#">Términos y Condiciones</a> - <a href="#">Política Tratamiento de Datos</a>
            </div>
            <div class="sociales">
                <span><a href="https://www.facebook.com/izyacademy" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a></span>
                <span><a href="https://twitter.com/izy_academy" target="_blank"><ion-icon name="logo-twitter"></ion-icon></a></span>
                <span><a href="https://www.instagram.com/izy_academy/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a></span>
                <span><a href="https://www.linkedin.com/company/izy-academy" target="_blank"><ion-icon name="logo-linkedin"></ion-icon></a></span>
            </div>
        </div>

        <div class="copy">
            <p>Copyright &#169; 2023 IzyAcademy Marca Registrada By Qvision Technologies.</p>
        </div>
    </footer>

</body>
</html>