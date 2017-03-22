<?php
use yii\helpers\Html;
use yii\widgets\ListView;
use yii\db\Query;


require_once('fpdf/fpdf.php');
require_once('fpdi/fpdi.php');

$query = (new Query())->from('contracts'); 


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

$filename = "PDF".date("F-j-Y-g:i-a").".pdf";
$completePath = Yii::getAlias('@webroot'.'/'.$filename);
//First Page

$pdf->SetXY(113, 53);
$pdf->Write(0,$contracts['company_name']);
$pdf->SetXY(25.5,74);
$pdf->Write(0,'Heysdsdsdsdsdsdsdssada');
$pdf->SetXY(132,73.5);
$pdf->Write(0,'Hedsadsay');
$pdf->SetXY(90,78.5);
$pdf->Write(0,'Hey');
$pdf->SetXY(150,78.5);
$pdf->Write(0,'Hey');
$pdf->SetXY(65.5,83.5);
$pdf->Write(0,'Hey');
$pdf->SetXY(133.5,83.5);
$pdf->Write(0,'Hey');
$pdf->SetXY(104,166);
$pdf->Write(0,'Hey');

// Second Template 
$pdf->AddPage();
$pdf->useTemplate($tplIdy);
$pdf->SetFont('Times');
$pdf->SetXY(32,210.2);
$pdf->Write(7,'Hey');

$pdf->Output($filename,'F');
return Yii::$app->response->sendFile($completePath,$filename);    
?>