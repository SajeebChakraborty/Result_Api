<?php
    require('fpdf/fpdf.php');
    $pdf = new FPDF();
    //$bill = rand(1000,9999);
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',14);
    
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "check";
//$name = filter_input(INPUT_POST, 'name');
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    
//$pdf->Image('download.png',50,0);
$pdf->Multicell(0,10,'Harpara High School',0,'C');
$pdf->Multicell(0,10,'Class Ten',0,'C');

if(isset($_POST['search'])){
    $id = $_POST['name'];
$sql = "SELECT * FROM result WHERE Roll='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        $pdf->Multicell(0,10,'Mark Sheet',0,'C');
        
$pdf->Multicell(40,10,'');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,10,'Name');
$pdf->SetFont('Arial','',12);
$pdf->Multicell(100,10,$row["Name"]);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,10,'Roll');
$pdf->SetFont('Arial','',12);
$pdf->Multicell(40,10,$row["Roll"]);
$pdf->SetFont('Arial','B',12);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,10,'GPA');
$pdf->SetFont('Arial','',12);
$pdf->Multicell(40,10,$row["GPA"]);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,10,'Grade');
$pdf->SetFont('Arial','',12);
$pdf->Multicell(40,10,$row["Grade"]);
$pdf->SetFont('Arial','B',12);
$pdf->Multicell(40,10,'');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,10,'[Optional Subject :');
$pdf->SetFont('Arial','',12);
$pdf->cell(15,10,$row["Optional"]);
$pdf->Cell(40,10,']');
  $pdf->Multicell(40,10,'');
 $pdf->Multicell(40,10,'');
 $pdf->SetFont('Arial','B',12);
 $pdf->Cell(60,10,'Bangla :');
 $pdf->SetFont('Arial','',12);
$pdf->Multicell(40,10,$row["Bangla"]);
$pdf->SetFont('Arial','',12);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(60,10,'English :');
$pdf->SetFont('Arial','',12);
$pdf->Multicell(40,10,$row["English"]);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(60,10,'G. Math :');
$pdf->SetFont('Arial','',12);
$pdf->Multicell(40,10,$row["Gmath"]);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(60,10,'H. Math :');
$pdf->SetFont('Arial','',12);
$pdf->Multicell(40,10,$row["Hmath"]);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(60,10,'Physics :');
$pdf->SetFont('Arial','',12);
$pdf->Multicell(40,10,$row["Physics"]);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(60,10,'Chemistry :');
$pdf->SetFont('Arial','',12);
$pdf->Multicell(40,10,$row["Chemistry"]);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(60,10,'Biology :');
$pdf->SetFont('Arial','',12);
$pdf->Multicell(40,10,$row["Biology"]);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(60,10,'R. Studies :');
$pdf->SetFont('Arial','',12);
$pdf->Multicell(40,10,$row["Rstudies"]);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(60,10,'S. Science :');
$pdf->SetFont('Arial','',12);
$pdf->Multicell(40,10,$row["Sscience"]);


$pdf->SetFont('Arial','B',12);
$pdf->Multicell(40,10,'');
$pdf->Multicell(40,10,'');
$pdf->Multicell(40,10,'');
$pdf->Multicell(40,10,'');
$pdf->Multicell(40,10,'');
$pdf->Image('images.png',5,208);
$pdf->Multicell(100,8,'Sajeeb Chakraborty');
$pdf->Multicell(100,5,'    Controller         ');
//$pdf->Multicell(100,10,'    ');
    
        $pdf->Output();
   
        //echo "    Name: " . $row["Name"]. "<br>";
        //echo "    Roll: " . $row["Roll"]. "<br>";
        //echo "    Status: " . $row["status"]. "<br>";
    }
} else {
    echo "No match! Please enter the right roll number";
}
}
mysqli_close($conn);


    ?>