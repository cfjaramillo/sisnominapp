<?php

//cabecera de la  Pagina
include('index.php');
include('autenticacion.php');

//Datos que se obtienen del formulario
$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$diastra = $_POST['diastra'];
$tarifatra = $_POST['tarifatra'];
$comision = $_POST['comision'];
$extradiurna = $_POST['extradiurna'];
$extranocturna = $_POST['extranocturna'];
$extradiurnadom = $_POST['extradiurnadom'];
$extranocturnadom = $_POST['extranocturnadom'];


//Porcentajes de las extras
$extrad = $tarifatra + ($tarifatra * 0.25);
$extran = $tarifatra + ($tarifatra * 0.75);
$extraddom = ($tarifatra * 0.75) + ($extrad * 0.25);
$extrandom = ($tarifatra * 0.75) + ($extran * 0.25);
$aportes = 0.08;

//Calculo de la nomina
$base = $diastra * $tarifatra;
$extrasdiurnas = $extradiurna * $extrad;
$extrasnocturnas = $extranocturna * $extran;
$extrasdiurnasdominicales = $extradiurnadom * $extraddom;
$extrasnocturnasdominicales = $extranocturnadom * $extrandom;
$descuentoaportes = $base * $aportes;
$total = $base + $comision + $extrasdiurnas + $extrasnocturnas + $extrasdiurnasdominicales + $extrasnocturnasdominicales - $descuentoaportes;


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


//Guardado en Base de Datos

$sql = "INSERT INTO nomina VALUES (" . $cedula . ", '" . $nombre . "', ' " . $apellido . "', " . $diastra . " , " . $tarifatra . " , " . $comision . " , " . $extradiurna . ", "  . $extranocturna ." , " . $extradiurnadom . " , " . $extranocturnadom  . " , " . $total . ", NOW())";
$resultado = mysqli_query($con, $sql);

if ($resultado)
{
    echo "<script>alert('Registro Exitoso!')</script>";
    echo "<table class='table table-bordered table-striped' align='center' >";
    echo "<thead class='thead-dark'>";
    echo "<tr>";
    echo "<th scope='col'>Descripción</th>";
    echo "<th scope='col'>Valor</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    echo "<tr>";
    echo "<td>Salario Base</td><td class='money'>" . $base . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Comisión</td><td class='money'>" . $comision . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Extras Diurnas</td><td class='money'>" . $extrasdiurnas . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Extras Nocturnas</td><td class='money'>" . $extrasnocturnas . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Dominicales Diurnas</td><td class='money'>" . $extrasdiurnasdominicales . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Dominicales Nocturnas</td><td class='money'>" . $extrasnocturnasdominicales . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Aportes (Salud y Pension)</td><td class='money'>" . $descuentoaportes . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Total a Devengar</td><td class='money'>" . $total . "</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
    echo "<script>$(document).ready( function() {  $('td.money').each(function() { $(this).html(parseFloat($(this).text()).toLocaleString('en-US', {style: 'currency',currency: 'USD'})); })})</script>";
}
else{
    echo "<script>alert('Ha ocurrido un error!')</script>";
    echo "Ha ocurrido un error";
}



//Pie de Pagina
include('footer.php');

?>
