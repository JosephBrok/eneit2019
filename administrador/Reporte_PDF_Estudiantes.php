<?php

require('fpdf/fpdf.php');
require('conexion.php');

class PDF extends FPDF
{
function Header()
{


	$this->Image('../imagenes/logittla.jpg' , 10 ,10, 20 , 20,'JPG');
	$this->SetFont('Arial','B',20);
	$this->Cell(110);
	$this->Cell(50,20,'Registro de Estudiantes',0,0,'C');
	$this->Ln(15);
	$this->SetFont('Arial','B',10);
	$this->Cell(115);
	$this->Cell(50, 10, 'FECHA: '.date('d-m-Y').'', 0, 'R');
	$this->Ln(10);
		 // Colores de los bordes, fondo y texto
    $this->SetDrawColor(222,227,221);
     $this->SetFillColor(200,220,255);
   // $this->SetTextColor(220,50,50);
    // Ancho del borde (1 mm)
   // $this->SetLineWidth(1);

	$this->Cell(20, 8, 'ID' ,1,0,'C');
	$this->Cell(40, 8, 'NOMBRE' ,1,0,'C');
	$this->Cell(40, 8, 'PASSWORD' ,1,0,'C');
	$this->Cell(40, 8, 'NIVEL' ,1,0,'C');
	$this->Cell(40, 8, 'CODIGO' ,1,0,'C');
	$this->Cell(40, 8, 'CORREO' ,1,0,'C');
	$this->Cell(40, 8, 'FOTO' ,1,0,'C');
	$this->Ln(8);
}
function Footer()
{
	// Posición: a 1,5 cm del final
	$this->SetY(-15);
	$this->SetFont('Arial','I',12);
	$this->Cell(0,10,'PAGINA '.$this->PageNo().' / {nb}',0,0,'C');
}
}
// Creación del objeto de la clase heredada
//$pdf = new PDF();
$pdf = new PDF('L','mm','letter'); //Tamaño en forma Horizontal
$pdf->AliasNbPages();
$pdf->AddPage();
//$pdf = new FPDF('L','mm','legal'); //Tamaño en forma Horizontal
//$pdf = new FPDF('P','mm','letter'); //Tamaño Normal
//$pdf->AddPage();
//$title = 'Reporte de Productos';
//$pdf->SetTitle($title);
//$pdf->SetFont('Arial', '', 10);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(70, 20, '', 0);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA
$productos = mysqli_query($conexion,"SELECT * FROM usuarios");
$item = 0;
while($productos2 = mysqli_fetch_array($productos)){
	$item = $item+1;
	
	$pdf->Cell(30, 8,$productos2['idUsuario'], 0);
	$pdf->Cell(40, 8, $productos2['NombreUsuario'], 0);
	$pdf->Cell(40, 8, $productos2['PassUsuario'], 0);
	$pdf->Cell(40, 8, $productos2['NivelUsuario'], 0);
    $pdf->Cell(40, 8, $productos2['Codigo'], 0);
   	$pdf->Cell(40, 8, $productos2['email'], 0);
   	$pdf->Cell(40, 8, $productos2['Foto'], 0);
	$pdf->Ln(5);
}
$pdf->Ln(8);
//$pdf->Cell(0, 10, 'Pagina: '.$pdf->PageNo(),0,0,'C');
//$pdf->Output('reporteProductos.pdf','D'); Esta opcion es para descargar el archivo
$pdf->Output(); //Esta opcion es para ver en linea el documento
?>