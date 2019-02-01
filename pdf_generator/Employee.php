<?php
session_start();
require "fpdf.php";

$a=$SESSION['adar'];
$db = new PDO('mysql:host=localhost;dbname=Sakthi','root','Mohan@007');

//<!--emp-->
    class myPDF extends FPDF{
    function header(){
        $this->rect(5,5,210-10,297-10);
        $this->image('logo.jpg',37,7,0,25);
        $this->SetFont('Arial','B',14);
        $this->Cell(196,5,'SAKTHI AUTO COMPONENTS LIMITED ',0,0,'C');
        $this->Ln();
        $this->SetFont('Times','',12);
        $this->Cell(196,10,'MUKASI PALLAGOUNDENPALAYAM - 638 056',0,0,'C');
         $this->Ln(7);
        $this->SetFont('Times','',12);
        $this->Cell(196,10,'Uthukuli Taluk, Tiruppur District - Tamilnadu',0,0,'C');
        $this->Ln(30);
        //$this->image(echo '<img src="data:image/png;base64,'.  base64_encode($a3) . '" />',70,5);
    }
    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
    function headerTable(){
        $this->SetFont('Times','B',12);
        $this->Cell(10,10,'id',1,0,'C');
        $this->Cell(40,10,'CandName',1,0,'C');
        $this->Cell(40,10,'Fathername',1,0,'C');
        $this->Cell(30,10,'Gender',1,0,'C');
        $this->Cell(50,10,'Aadhar',1,0,'C');
       
        //$this->Cell(50,10,'mobile1',1,0,'C');
        $this->Ln();
    }
    function viewTable($db,$a){
      
        $this->SetFont('Times','',12);
        $b=("SELECT * FROM `reg` WHERE `id`='$a'");
        $stmt = $db->query($b);
        while($data = $stmt->fetch(PDO::FETCH_OBJ)){
            
            $a=$data->photo;
             
            $this->SetFont('Arial','B',14);
            $this->Cell(45,10,"ID                         :",0,0,'C');
            $this->SetFont('Arial','',12);
            $this->Cell(35,10,"".$data->id,0,1,'L');
            $this->Ln(3);
            
            $this->SetFont('Arial','B',14);
            $this->Cell(45,10,"NAME                 :",0,0,'C');
            $this->SetFont('Arial','',12);
            $this->Cell(35,10,"".$data->CandName." . ".$data->Initial,0,1,'L');
            $this->Ln(3);
            
            $this->SetFont('Arial','B',14);
            $this->Cell(45,10,"FATHERNAME  :",0,0,'C');
            $this->SetFont('Arial','',12);
            $this->Cell(35,10,"".$data->Fathername,0,1,'L');
            $this->Ln(3);
            
            $this->SetFont('Arial','B',14);
            $this->Cell(45,10,"GENDER           :",0,0,'C');
            $this->SetFont('Arial','',12);
            $this->Cell(35,10,"".$data->Gender,0,1,'L');
            $this->Ln(3);
            
            $this->SetFont('Arial','B',14);
            $this->Cell(45,10,"AADHAR          :",0,0,'C');
            $this->SetFont('Arial','',12);
            $this->Cell(35,10,$data->Aadhar,0,1,'L');
            $this->Ln(3);
            
            $this->SetFont('Arial','B',14);
            $this->Cell(45,10,"ADDRESS        :",0,0,'C');
            $this->SetFont('Arial','',12);
            $this->Cell(35,10,"".$data->cadd1,0,1,'L');
            $this->Ln(3);
            
             $this->SetFont('Arial','B',14);
             $this->Cell(45,10,"STATE             :",0,0,'C');
             $this->SetFont('Arial','',12);
             $this->Cell(35,10,"".$data->cstate,0,1,'L');
            $this->Ln(3);
         
            $this->SetFont('Arial','B',14);
            $this->Cell(45,10,"DISTRICT        :",0,0,'C');
            $this->SetFont('Arial','',12);
            $this->Cell(35,10,"".$data->cdist,0,1,'L');
            $this->Ln(3);
            
             $this->SetFont('Arial','B',14);
             $this->Cell(45,10,"PINCODE        :",0,0,'C');
             $this->SetFont('Arial','',12);
             $this->Cell(35,10,"".$data->cpin,0,1,'L');
             $this->Ln(3);
            
             $this->SetFont('Arial','B',14);
             $this->Cell(45,10,"MOBILE NO    :",0,0,'C');
             $this->SetFont('Arial','',12);
             $this->Cell(35,10,"".$data->mobile1,0,1,'L');
             $this->Ln(3);
            
            
            
            //$this->Cell(50,10,$a,1,0,'C');
             $this->Ln();
            $this->image('../'.$a,150,50,0,40);

            
        }
       // $this->image('<img style="height:100px;" src="pdf_generator/logo.jpeg"/>');


       //  $this->image('<img style="height:100px;" src="data:image/png;base64,'.  base64_encode($a) . '" />',5,5);
    }
}

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('P','A4',1);
//$pdf->headerTable();
$pdf->viewTable($db,$a);
$pdf->Output();
//emp end
    
?>