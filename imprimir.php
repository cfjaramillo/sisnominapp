<?php

//Se incluye libreria de documentos PDF
include("./fpdf/fpdf.php");


//Conexión a Base de Datos
$servername = "localhost";
$username = "root";
$password = "0000";
$db = "SISNOMINA";

// Crear Conexion
$con = mysqli_connect($servername, $username, $password, $db);

// Validar Conexion
if (mysqli_connect_errno()) {
    die("Hubo un error al conectarse a la base de datos");
}

//Seleccionar los datos de la base de datos
$sql = "SELECT cedula, nombre, apellido,CONCAT('$', FORMAT((dias_trabajados*tarifa_trabajados),2)) AS dias_trabajados,CONCAT('$',FORMAT(total_devengado,2)) AS total_devengado, fecha_registro FROM nomina";
$resultado = $con->query($sql);



//Se crea el archivo PDF
$pdf = new FPDF();
//Se agrega Pagina
$pdf->AddPage();
//Se selecciona el tipo de letra
$pdf->SetFont('Arial','B',8);

//Contenido del documento PDF

//Header
$pdf->SetDrawColor(0,0,0);
$pdf->Rect(10,10,190,20);
$pdf->Image('./img/header_reporte.png',11,11,188,18);


//Borde del contenido
$pdf->SetDrawColor(0,0,0);
$pdf->Rect(10,35,190,250);

//Titulos del Reporte
$pdf->Cell(30,60,'Cedula',0,0);
$pdf->Cell(30,60,'Nombre',0,0);
$pdf->Cell(35,60,'Apellido',0,0);
$pdf->Cell(30,60,'$ Basico',0,0);
$pdf->Cell(35,60,'$ Calculo Sueldo Total',0,0);
$pdf->Cell(30,60,'$ Fecha del Calculo',0,0);
$pdf->Cell(0,35,'');
$pdf->Ln();

//Recorrer datos de la base de datos
while($row = $resultado->fetch_assoc()) {
    
    $pdf->Cell(30,5,$row['cedula'],0,0);
    $pdf->Cell(30,5,$row['nombre'],0,0);
    $pdf->Cell(35,5,$row['apellido'],0,0);
    $pdf->Cell(30,5,$row['dias_trabajados'],0,0);
    $pdf->Cell(35,5,$row['total_devengado'],0,0);
    $pdf->Cell(30,5,$row['fecha_registro'],0,0);
    $pdf->Ln();
}

//Mostrar PDF
$pdf->Close();
$pdf->Output();


?>