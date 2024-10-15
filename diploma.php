<?php
   require 'fpdf.php';
   require 'conexion.php';

function setText($pdf, $texto, $longitud, $x, $y)
{
   $pdf->SetXY($x,$y);
   $pdf->Cell($longitud, 5, mb_convert_encoding($texto, 'ISO-8859-1', 'UTF-8'), 0, 1, 'C');
}

$idparticipante=isset($_GET['participante'])? 
$mysqli->real_escape_string($_GET['participante']):'';
if($idparticipante == '')
{
   echo "No exixten participantes";
   exit;
}

$sql = "SELECT participantes.nombre AS participante,
 cursos.nombre AS curso, cursos.instructor AS instructor FROM participantes 
 INNER JOIN cursos ON participantes.idurso = cursos.idCurso WHERE participantes.idParticipante = $idparticipante";

   $resultado = $mysqli->query($sql);
     $datos =  $resultado->fetch_assoc();

   $pdf = new FPDF ('L', 'mm', 'Letter');
   $pdf->AddPage();
   $pdf->SetFont('Arial', 'B', 16);
   $pdf-> SetCreator('Alisson Noemi Cadena Perez');

   $pdf->Image('imagen/Diploma.jpg', 0, 0, 280, 216);
   
   $pdf->setFont('Arial', 'B', 22);
   setText($pdf, $datos['participante'], 160, 60, 115);
  
   setText($pdf, $datos['curso'], 160, 60, 140);
   $pdf->setFont('times', 'B', 18);
   setText($pdf, $datos['instructor'], 130, 8, 165);
   setText($pdf, 'Lorenzo Camargo Serrano', 130, 145, 165);
   $pdf->setFont('courier', 'B', 18);
   setText($pdf, 'INSTRUCTOR', 130, 8, 175);
   setText($pdf, 'DIRECTOR', 130, 145, 175);


   $pdf->Output();



?>