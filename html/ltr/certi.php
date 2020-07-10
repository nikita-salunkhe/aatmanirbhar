<?php
session_start();
include_once("libs/fpdf.php");
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,100,'Name:');
$pdf->Cell(60,100,'Your Name');
$pdf->ln();
$pdf->Cell(40,4,'Defect:');
$pdf->Cell(60,4,'Blind');
$pdf->Output();
?>