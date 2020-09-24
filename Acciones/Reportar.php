<?php

    date_default_timezone_set("America/Argentina/Buenos_Aires");
    $fecha=date("d-m-y");
    $hora=date("h:m a");
    $ruta1 = "../Archivos/Padrones/Padronvista.csv";
    $ruta2 = "../Archivos/Padrones/Registrovista.csv";   
    

    require("../Librerias/fpdf182/fpdf.php");
    $pdf = new FPDF('P','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',25);
    $pdf->SetXY(25,5);
    $pdf->Cell(32,10,'Fecha: '.$fecha,0,1,'C');
    $pdf->SetFont('Arial','B',20);
    $pdf->SetFont('Arial','B',25);
    $pdf->SetXY(25,20);
    $pdf->Cell(32,10,'Hora: '.$hora,0,1,'C');
    $pdf->SetFont('Arial','B',30);
    $pdf->SetXY(45,40);
    $pdf->Cell(120,10,'Reporte',0,1,'C');
    $pdf->SetFont('Arial','B',20);
    $pdf->SetXY(30,60);
    $pdf->Cell(150,10,'Padron',1,1,'C');
    $pdf->SetXY(30,70);
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(50,10,'Nombre y apellido',1,0,'C');
    $pdf->Cell(50,10,'DNI',1,0,'C');
    $pdf->Cell(50,10,'Correo electronico',1,1,'C');
    $pdf->SetXY(30,80);
    $pdf->SetFont('Arial','B',16);
    $archivo=fopen($ruta1,'r');
    while($campos=fgetcsv($archivo,999)){
        foreach($campos as $campo){
            $pdf->Cell(150,10,$campo,1,2,'C');
         }
    }
    fclose($archivo);
    $pdf->AddPage();
    $pdf->SetXY(30,40);
    $pdf->Cell(150,10,'Registro de votos',1,1,'C');
    $pdf->SetXY(30,50);
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(50,10,'DNI',1,0,'C');
    $pdf->Cell(50,10,'Estado',1,0,'C');
    $pdf->Cell(50,10,'Fecha/hora',1,1,'C');
    $archivo=fopen($ruta2,'r');
    $pdf->SetXY(30,60);
    while($campos=fgetcsv($archivo,999)){
        foreach($campos as $campo){
            $pdf->Cell(150,10,$campo,1,2,'C');
         }
    }
    fclose($archivo);
    $pdf->Output();
  

?>