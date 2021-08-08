
<?php
 session_start();
$mysqli = new mysqli("sql209.epizy.com","epiz_29349556","hLPDglqfPl4dtVw","epiz_29349556_tabata1");
$mysqlii = mysqli_connect("sql209.epizy.com","epiz_29349556","hLPDglqfPl4dtVw","epiz_29349556_tabata1");

require('../../lib/pdf/fpdf.php');



class PDF extends FPDF
{

  
// Cabecera de página
function Header()
{
    
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(50);
    // Título
    $this->Cell(90,10,'Tatabas del Usuario',0,0,'C');
    // Salto de línea
    $this->Ln(20);


    $this->Cell(60,10,'Nombre',1,0,'C',0);
    $this->Cell(33,10,'TPreparacion',1,0,'C',0);
    $this->Cell(27,10,'TActividad',1,0,'C',0);
    $this->Cell(30,10,'TDescanso',1,0,'C',0);
    $this->Cell(22,10,'#Series',1,0,'C',0);
    $this->Cell(22,10,'#Rondas',1,1,'C',0);

}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
}
}


 
  $ses =$_SESSION['ID_USUARIO'];
$consulta="SELECT * FROM tabata WHERE idUsuario	 ='$ses'  ";
$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);
 
while( $row =$resultado->fetch_assoc())
  {  $pdf->Cell(60,10,$row['nombre'],1,0,'C',0);
    $pdf->Cell(33,10,$row['tPreparacion'],1,0,'C',0);
    $pdf->Cell(27,10,$row['tActividad'],1,0,'C',0);
    $pdf->Cell(30,10,$row['tDescanso'],1,0,'C',0);
    $pdf->Cell(22,10,$row['numSeries'],1,0,'C',0);
    $pdf->Cell(22,10,$row['numRondas'],1,1,'C',0);
  }
  $consultaa="SELECT * FROM usuario WHERE id	 ='$ses'  ";
  $resultadoo = $mysqli->query($consultaa);
  while( $roww =$resultadoo->fetch_assoc())
  {  
    $pdf->Ln(10);
    $pdf->Cell(50);
    $pdf->Cell(90,10,'Informacion del Usuario',0,0,'C');

    $pdf->Multicell(0,10,""); 

    $pdf->Cell(60,10,'Nombre',1,0,'C',0);
    $pdf->Cell(20,10,'Sexo',1,0,'C',0);
    $pdf->Cell(20,10,'Peso',1,0,'C',0);
    $pdf->Cell(38,10,'Fecha Nac',1,0,'C',0);
    $pdf->Cell(60,10,'Telefono',1,0,'C',0);
    $pdf->Multicell(0,10,""); 
    $pdf->Cell(60,10,$roww['nombre'],1,0,'C',0);
    $pdf->Cell(20,10,$roww['sexo'],1,0,'C',0);
    $pdf->Cell(20,10,$roww['pesokg'],1,0,'C',0);
    $pdf->Cell(38,10,$roww['fechanac'],1,0,'C',0);
    $pdf->Cell(60,10,$roww['telefono'],1,0,'C',0);

  }
  
 
$pdf->Output();

  


?>
