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
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>IzyAcademy</title>
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

<!-----------------------------Novedades----------------------------->

    <div class="novedades">
        <div class="titulo_novedades">
            <h1>Novedades</h1>
        </div>
        <div class="contenido_novedades">
            <div class="parte_1">
                <img src="IMG/laboratorio-computacion-moderno-equipado_23-2149241221.avif" alt="imagen bienvenida">
                <div class="subtitulo">
                    <h2>Bienvenidos a IzyAcademy</h2>
                </div>
                <div class="parrafo">
                    <p>
                        Nos complace darte la bienvenida a este innovador espacio <br>
                        educativo donde la excelencia académica se encuentra con la <br>
                        comodida y flexibilidad. Aquí, tu aprendizaje es nuesta prioridad, <br>
                        y nuestro campus virtual esta diseñado para ofrecerte una <br>
                        experienca educativa enriquecedora desde la comodida de tu <br>
                        hogar. 
                    </p>
                </div>
            </div>
            <div class="parte_2">
                <div class="parte_2_1">
                    <div class="contenido">
                        <img src="IMG/red-social-comunidad.jpg" alt="imagn de contenido">
                        <div class="subtitulo_contenido">
                            <h2>Generación de comunidad</h2>
                        </div>
                        <div class="parrafo_contenido">
                            <p>
                                Nos complace generar vínculos 
                                sociales entre personas que 
                                comparten un mismo interés, 
                                incentivar la construcción de un 
                                sentido de pertenencia y colaboración 
                                dentro de la comunidad.
                            </p>
                        </div>
                    </div>
                    <div class="contenido">
                        <img src="IMG/comparti.jpg" alt="imagn de contenido">
                        <div class="subtitulo_contenido">
                            <h2>Transferencia de conocimiento</h2>
                        </div>
                        <div class="parrafo_contenido">
                            <p>
                                Nos apasiona compartir información, 
                                habilidades y experiencias con el 
                                objetivo de aplicar y aprovechar esta 
                                información para el desarrollo de las 
                                habilidades. 
                            </p>
                        </div>
                    </div>
                    
                </div>
                <div class="parte_2_1">
                    <div class="contenido">
                        <img src="IMG/certificaciones-IT.jpg" alt="imagn de contenido">
                        <div class="subtitulo_contenido">
                            <h2>Certificaciones e insignias</h2>
                        </div>
                        <div class="parrafo_contenido">
                            <p>
                                IzyAcademy te brinda certificaciones e 
                                insignias digitales para que compartas 
                                y avales los conocimientos adquiridos 
                                junto a nosotros.
                            </p>
                        </div>
                    </div>
                    <div class="contenido">
                        <img src="IMG/apropiacion.jpg" alt="imagn de contenido">
                        <div class="subtitulo_contenido">
                            <h2>Apropiación del conocimiento</h2>
                        </div>
                        <div class="parrafo_contenido">
                            <p>
                                Desde IzyAcademy nos importa que 
                                adquieras, comprendas y asimiles el 
                                conocimiento, habilidades e ideas que 
                                creamos para ti y para la comunidad.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-------------------------------------Aliados------------------------------------->

    <div class="aliados">
        <div class="titulo_aliados">
            <h1>Aliados</h1>
        </div>
        <div class="parrafo_aliados">
            <p>
                Nuestros entrenamientos, procesos formativos y certificaciones cuentan con el respaldo de empresas que confían en nosotros.
            </p>
        </div>
        <div class="imagenes_aliados">
            <div class="img">
                <img src="IMG/certiprof.jpg" alt="imagenes aliados ceertiPtof">
            </div>
            <div class="img">                
                <img src="IMG/arcitura.png" alt="imagenes aliados ceertiPtof">
            </div>
            <div class="img">
                <img src="IMG/formarte.png" alt="imagenes aliados ceertiPtof">
            </div>
            <div class="img">
                <img src="IMG/credly.jpg" alt="imagenes aliados ceertiPtof">
            </div>
        </div>
        <div class="imagenes_aliados">
            <div class="img">
                <img src="IMG/scrum.jpg" alt="imagenes aliados ceertiPtof">
            </div>
            <div class="img">                
                <img src="IMG/inter.jpg" alt="imagenes aliados ceertiPtof">
            </div>
            <div class="img">
                <img src="IMG/brin.png" alt="imagenes aliados ceertiPtof">
            </div>
            <div class="img">
                <img src="IMG/sena.png" alt="imagenes aliados ceertiPtof">
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