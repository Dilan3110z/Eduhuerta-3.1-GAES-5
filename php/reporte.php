<?php
require('../FPDF/fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
function Header()
{
   
    // Arial bold 15
    $this->SetFont('Arial','B',12);
    // Movernos a la derecha
    $this->Cell(85);
    // Título
    $this->Cell(100,10,'REPORTE SERVICIO SOCIAL',0,0,'C');
    // Salto de línea
    $this->Ln(20);
    //titulos
    $this->Cell(33,10,'DOCUMENTO',1,0,'C');
    $this->Cell(33,10,'NOMBRE',1,0,'C');
    $this->Cell(33,10,'CURSO',1,0,'C');
    $this->Cell(33,10,'JORNADA',1,0,'C');
    // $this->Cell(33,10,'HORAS',1,0,'C');
    $this->Cell(60,10,'SERVICIO SOCIAL',1,0,'C');
    // Salto de línea
    $this->Ln(10);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página') .$this->PageNo().'/{nb}',0,0,'C');
}

}

require('conexion.php');
session_start();
    if(!isset($_SESSION['nombreU'])){
        header("location: Inicio_sesion.php");
    }

    $nombreUsuario=$_SESSION['nombreU'];
    $cursoU=$_SESSION['cursoU'];
    $jornadaU=$_SESSION['jornadaU'];
    $Documento_de_identidadU=$_SESSION['Documento_de_identidadU'];
    $HorasU=$_SESSION['HorasU'];

    $sql4 = " SELECT * FROM usuario WHERE documento='$Documento_de_identidadU' ";
    $consulta4 = mysqli_query($con, $sql4);
    

$pdf = new PDF('L','mm','A4');
$pdf->AliasNbPages();
$pdf->SetFont('Arial','I',12);
$pdf->AddPage();

while($campos = mysqli_fetch_assoc($consulta4)){
    $pdf->Cell(33,10,$campos['documento'],1,0,'C',0);
    $pdf->Cell(33,10,$campos['nombres'],1,0,'C',0);
    $pdf->Cell(33,10,$campos['id_curso'],1,0,'C',0);
    $pdf->Cell(33,10,$campos['jornada'],1,0,'C',0);
    $pdf->Cell(60,10,'Completado',1,0,'C',0);
}
$pdf->Output();
?>