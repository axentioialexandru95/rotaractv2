<?php
if (!empty($_POST['submit']))
{
    $company=$_POST['company_name'];
    $localitatea=$_POST['localitatea'];
    $nrcomert=$_POST['nrcomert'];
    $codfiscal=$_POST['codfiscal'];
    $date=date("Y-m-d");
    $reprezentant=$_POST['reprezentant'];
    $functie=$_POST['functie'];
    $suma=$_POST['suma'];

}
require_once('fpdf/fpdf.php');
require_once('fpdi/fpdi.php');


// initiate FPDI
$pdf = new FPDI();
$pdf->SetFont('Times');
// add a page
$pdf->AddPage();
// set the source file
$pdf->setSourceFile("contract2.pdf");
// import page 1
$tplIdx = $pdf->importPage(1);
$tplIdy = $pdf->importPage(2);
// use the imported page and place it at point 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx);

//First Page
$pdf->SetXY(113, 53);
$pdf->Write(0,$date);
$pdf->SetXY(25.5,74);
$pdf->Write(0,$company);
$pdf->SetXY(132,73.5);
$pdf->Write(0,$localitatea);
$pdf->SetXY(90,78.5);
$pdf->Write(0,$nrcomert);
$pdf->SetXY(150,78.5);
$pdf->Write(0,$codfiscal);
$pdf->SetXY(65.5,83.5);
$pdf->Write(0,$reprezentant);
$pdf->SetXY(133.5,83.5);
$pdf->Write(0,$functie);
$pdf->SetXY(104,166);
$pdf->Write(0,$suma);

// Second Template 
$pdf->AddPage();
$pdf->useTemplate($tplIdy);
$pdf->SetFont('Times');
$pdf->SetXY(32,210.2);
$pdf->Write(7,$date);


$pdf->Output();    
?>