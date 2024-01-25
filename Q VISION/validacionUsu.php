<?php
session_start();
include ("conexion.php");

$correo = $_POST['correo_login'];
$contrasena = $_POST['contraseña_login'];

$consultaUsuario = mysqli_query($conect, "SELECT * FROM usuario WHERE correo = '$correo' AND contraseña = '$contrasena'")
or die (mysqli_error($conect));

if ($registro = mysqli_fetch_array($consultaUsuario)) {
    $_SESSION['login'] = $correo;
    $_SESSION['ID'] = $registro['Id_usuario'];
    $_SESSION['nombre'] = $registro['nombre'];
    $_SESSION['apellido'] = $registro['apellido'];
    $_SESSION['correo'] = $registro['correo'];
    $_SESSION['contrasena'] = $registro['contraseña'];

    echo"<script>self.location='pagLogin.php';</script>";
} else {
    echo"<script language= 'javascript' >
    alert('Datos incorrectos por favor verifique Usuario y/o Contraseña')
    self.location='index.php';
    </script>";
    session_destroy();
}
?>