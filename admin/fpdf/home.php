<?php
require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
//$pdf = new FPDF('P','mm',array(50,70));

$pdf->SetFont('Arial','',12);
for($i=1;$i<=100;$i++)
    //$pdf->Cell(0,5,"Line $i",0,1);
$pdf->Output();






?>