<?php
include ("conexion.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST["btn_registro"])) {
        $nombre = ucwords($_POST['nombre']);
        $apellido = ucwords($_POST['apellido']);
        $correo = strtolower($_POST['correo']);
        $contraseña = $_POST['contraseña'];
        $con_contraseña = $_POST['con_contraseña'];
        $validacionTexto = "/^[a-zA-Z\s]+$/";

        if (preg_match($validacionTexto, $nombre, $apellido)) {
            if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                $consultaUsuario = mysqli_query($conect, "SELECT * FROM usuario WHERE nombre = '$nombre' AND apellido = '$apellido'");
                $resultadoUsuario = mysqli_fetch_array($consultaUsuario);
    
                if ($resultadoUsuario > 0) {
                    echo "<script language= 'javascript' >
                    alert('Ya existe un usuario con estos datos')
                    </script>";
                }
    
                $consultaCorreo = mysqli_query($conect, "SELECT * FROM usuario WHERE correo = '$correo'");
                $resultadoCorreo = mysqli_fetch_array($consultaCorreo);
    
                if ($consultaCorreo > 0) {
                    echo "<script language= 'javascript' >
                    alert('Ya existe un usuario con este correo')
                    </script>";
                }
    
                if ($contraseña == $con_contraseña) {
                    if (empty($resultadoUsuario) && empty($resultadoCorreo)) {
                        $insertaUsuario = mysqli_query($conect, "INSERT INTO usuario(
                            Id_usuario, 
                            nombre, 
                            apellido, 
                            correo, 
                            contraseña) 
                            VALUES (
                            '',
                            '$nombre',
                            '$apellido',
                            '$correo',
                            '$contraseña')");
    
                            if ($insertaUsuario) {
                                echo"<script language= 'javascript' >
                                alert('Te has registrado correctamente')
                                self.location='selecionar.php';
                                </script>"; 
                            }
                    }
                } else {
                    echo "<script language= 'javascript' >
                    alert('Las contraseñas no coinciden')
                    </script>";
                }
            } else {
                echo "<script language= 'javascript' >
                alert('Correo no valido')
                </script>";
            }
        } else {
            echo "<script language= 'javascript' >
            alert('Nombre y/o Apellido no son validos')
            </script>";
        }     
    }
}
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
    <title>IzyAcademy</title>
</head>
<body>
    <header>
        <div class="menu">
            <div class="logo_menu">
                <img src="IMG/Logo izyacademy transparente2022.png" alt="logo">
            </div>
            <div class="menu_1">
                <ul class="nav">
                    <a href="#" class="inicio">Inicio</a>
                    <li>Rutas de Formacion <img class="flecha" src="IMG/caret-abajo.png" alt="flecha abajo">
                        <ul>
                            <li><a href="#">Científico De Datos</a></li>
                            <li><a href="#">Ruta de Formación En .NET</a></li>
                            <li><a href="#">Ruta de Formación en <br>Automatización</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_2">
                <a href="#"><img src="IMG/usuario.png">Iniciar Sesión</a>
                <ul class="nav">
                    <li>Bienvenido, Edwar Lopez
                        <ul>
                            <li><a href="#">Cerrar Sesión</a></li>
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
        <div class="registro">
            <div class="img_registro">
                <img src="IMG/REGISTRO.png" alt="">
            </div>
            <div class="formulario_registro">
                <h2>Regístrate</h2>
                <form action="" method="post">
                    <label>Nombre</label><br>
                    <input type="text" name="nombre" class="entrada_texto" required><br>
                    <label>Apellido</label><br>
                    <input type="text" name="apellido" class="entrada_texto" required><br>
                    <label>Correo</label><br>
                    <input type="email" name="correo" class="entrada_texto" required><br>
                    <label>Contraseña</label><br>
                    <input type="password" name="contraseña" class="entrada_texto" required><br>
                    <label>Confirmar contraseña</label><br>
                    <input type="password" name="con_contraseña" class="entrada_texto" required><br>
                    <input type="checkbox" name="terminos" id="terminos"><a href="#" class="a">Acepto <font style="color: #1d3a6c;">términos y condiciones</font></a><br>
                    <input type="checkbox" name="terminos" id="politicas"><a href="#" class="a">Acepto <font style="color: #1d3a6c;">Politica de tratamiento de datos</font></a><br>
                    <input type="button" name="btn_registro" id="btn_registro" class="btn_registro" value="Registrarse" disabled>
                </form>
            </div>
        </div>
    </div>

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
                <span><a href="https://www.facebook.com/izyacademy"><ion-icon name="logo-facebook"></ion-icon></a></span>
                <span><a href="https://twitter.com/izy_academy"><ion-icon name="logo-twitter"></ion-icon></a></span>
                <span><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></span>
                <span><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></span>
            </div>
        </div>

        <div class="copy">
            <p>Copyright &#169; 2023 IzyAcademy Marca Registrada By Qvision Technologies.</p>
        </div>
    </footer>

    <script>
        // Obteniendo elementos 
        var terminos = document.getElementById('#terminos');
        var politicas = document.getElementById('#politicas');
        var boton = document.getElementById('#btn_registro');

        // Agregando un listener al evento 'change' de ambos checkbox
        terminos.addEventListener('change', actualizarEstadoBoton);
        politicas.addEventListener('change', actualizarEstadoBoton);

        // Función para actualizar el estado del botón
        function actualizarEstadoBoton() {
            // Habilita el botón si al menos uno de los checkboxes está marcado
            boton.disabled = !(terminos.checked && politicas.checked);
        }
    </script>
</body>
</html>