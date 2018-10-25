<?php

//Conexión a Base de Datos
$servername = "localhost";
$username = "root";
$password = "";
$db = "SISNOMINA";

// Crear Conexion
$con = mysqli_connect($servername, $username, $password, $db);

// Validar Conexion
if (mysqli_connect_errno()) {
    die("Hubo un error al conectarse a la base de datos");
}

//Datos Formulario Login
$id = $_POST['id'];
$pwd = $_POST['pwd'];

//* Parámetros de Conexión MySQL */
$host = "localhost";
$usuario = "root";
$clave = "";
$basedatos = "sisnomina";

/* Conexión a la Base de Datos */
$con = mysqli_connect($host,$usuario,$clave,$basedatos);


/* Sentencia SQL */
$sql="SELECT * FROM usuario WHERE usuario = '". $id ."' and clave ='" . $pwd . "'";
/* Resultado de la consulta SQL */
$result = mysqli_query($con,$sql);
$cant = mysqli_num_rows($result);

if ($cant > 0)
{
    session_start();
    $_SESSION['user'] = $result;
    header('Location: index.php');
    exit;
}
else {
    echo            "<div align='center' style='text-align:center'>
                <h3>Usuario o Clave incorrectos </h3>
                <a href='./login.php' class='mdl-button mdl-js-button mdl-button--raised mdl-button--colored'>
                Regresar
                </a>
                </div>
                ";
}


?>