<?php
require "fpdf.php";

$a=$_POST['date1'];
$b=$_POST['date2'];
$db = new PDO('mysql:host=localhost;dbname=Sakthi','root','');

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
        $this->Ln(20);
       // $this->image(echo '<img src="data:image/png;base64,'.  base64_encode($a3) . '" />',70,5);
    }
    function caption($a,$b)
    {
        $this->SetFont('Times','',12);
        $this->Cell(196,10,"The Employees Between the Date '$a' and '$b' ",0,0,'C');
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
    function viewTable($db,$a,$b){
       
        $this->SetFont('Times','',12);
        $b=("select * from reg where apply_date between '$a' and '$b'");
        $stmt = $db->query($b);
        $this->SetFont('Times','B',12);
        $this->Cell(10,10,'id',1,0,'C');
        $this->Cell(40,10,'CandName',1,0,'C');
        $this->Cell(40,10,'Fathername',1,0,'C');
        $this->Cell(30,10,'Gender',1,0,'C');
        $this->Cell(50,10,'Aadhar',1,0,'C');
        //$this->Cell(50,10,'mobile1',1,0,'C');
        $this->Ln();
                $this->SetFont('Times','',12);
        while($data = $stmt->fetch(PDO::FETCH_OBJ)){
            
            //$a=$data->upImage;
            $this->Cell(10,10,$data->id,1,0,'C');
            $this->Cell(40,10,$data->CandName,1,0,'C');
            $this->Cell(40,10,$data->Fathername,1,0,'C');
            $this->Cell(30,10,$data->Gender,1,0,'C');
            $this->Cell(50,10,$data->Aadhar,1,0,'C');
            //$this->Cell(50,10,$a,1,0,'C');
             $this->Ln();
            
        }
               // $this->image('<img style="height:80px;" src="data:image/png;base64,'.base64_encode($a).'"  />' ,140,50);
            
       //  $this->image('<img style="height:100px;" src="data:image/png;base64,'.  base64_encode($a) . '" />',5,5);
    }
}

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('P','A4',1);
$pdf->caption($a,$b);

$pdf->headerTable();
$pdf->viewTable($db,$a,$b);
$pdf->Output();
//emp end
    
?>
