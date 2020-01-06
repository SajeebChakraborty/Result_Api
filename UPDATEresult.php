<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "check";
$name = filter_input(INPUT_POST, 'name');
$roll = filter_input(INPUT_POST, 'roll');
$optional = filter_input(INPUT_POST, 'optional');
$Bangla = filter_input(INPUT_POST, 'course1');
$English = filter_input(INPUT_POST, 'course2');
$Gm = filter_input(INPUT_POST, 'course3');
$Hm = filter_input(INPUT_POST, 'course4');
$Physics = filter_input(INPUT_POST, 'course5');
$Chemistry = filter_input(INPUT_POST, 'course6');
$Biology = filter_input(INPUT_POST, 'course7');
$Rs = filter_input(INPUT_POST, 'course8');
$Ss = filter_input(INPUT_POST, 'course9');
if($optional=="Biology"){

    if($Biology>=2.00){

        $Biology=$Biology-2.00;
    }
    else{

        $Biology=0.00;


    }

}
else if ($optional=="Higher Math") {

    if($Hm>=2.00){

        $Hm=$Hm-2.00;
    }
    else{

        $Hm=0.00;

    }

    
}
else{

    echo "Choose the right optional subject! You may be choose 'Biology' or 'Higher Math' as a optional subject";

}
if($optional=="Biology"){
$cgpa = (($Bangla + $English + $Gm + $Hm + $Physics + $Chemistry + $Biology + $Rs +$Ss))/8;
if($Bangla ==0.00 || $English ==0.00 || $Gm==0.00 || $Physics==0.00 || $Chemistry==0.00 || $Hm==0.00 || $Rs==0.00 || $Ss==0.00){

    $cgpa=0.00;
}
}
else if ($optional=="Higher Math") {
    
    $cgpa = (($Bangla + $English + $Gm + $Hm + $Physics + $Chemistry + $Biology + $Rs +$Ss))/8;
if($Bangla ==0.00 || $English ==0.00 || $Gm==0.00 || $Physics==0.00 || $Chemistry==0.00 || $Biology==0.00 || $Rs==0.00 || $Ss==0.00){

    $cgpa=0.00;
}
}
if($cgpa==0.00){

    $grade="Fail";

}
else if($cgpa>=1.00 && $cgpa<2.00){

    $grade="D";

}
else if($cgpa>=2.00 && $cgpa<3.00){

    $grade="C";

}
else if($cgpa>=3.00 && $cgpa<3.50){

    $grade="B";

}
else if($cgpa>=3.50 && $cgpa<4.00){

    $grade="A-";

}
else if($cgpa>=4.00 && $cgpa<5.00){

    $grade="A";

}
else if($cgpa==5.00){

    $grade="A+";

}
$tnx = rand(101,999);
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['searching'])){
	$id = $_POST['roll'];
$sql2 = "SELECT * FROM result WHERE Roll='$id'";
$result = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result) > 0) {

$sql = "UPDATE result SET Optional='$optional' WHERE Roll=$roll";
if (mysqli_query($conn, $sql)) {
    //echo "Congrats! Update the attendance successfully";

} else {
    //echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE result SET Bangla='$Bangla' WHERE Roll=$roll";
if (mysqli_query($conn, $sql)) {
    //echo "Congrats! Update the attendance successfully";

} else {
    //echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE result SET English='$English' WHERE Roll=$roll";
if (mysqli_query($conn, $sql)) {
    //echo "Congrats! Update the attendance successfully";

} else {
    //echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE result SET Gmath ='$Gm' WHERE Roll=$roll";
if (mysqli_query($conn, $sql)) {
    //echo "Congrats! Update the attendance successfully";

} else {
    //echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE attendance SET Hmath='$Hm' WHERE Roll=$roll";
if (mysqli_query($conn, $sql)) {
   // echo "Congrats! Update the attendance successfully";

} else {
    //echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE attendance SET Physics='$Physics' WHERE Roll=$name";
if (mysqli_query($conn, $sql)) {
    //echo "Congrats! Update the attendance successfully";

} else {
    //echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE result SET Chemistry='$Chemistry' WHERE Roll=$roll";
if (mysqli_query($conn, $sql)) {
    //echo "Congrats! Update the attendance successfully";

} else {
    //echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE result SET Biology='$Biology' WHERE Roll=$roll";
if (mysqli_query($conn, $sql)) {
    //echo "Congrats! Update the attendance successfully";

} else {
    //echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE result SET Rstudies='$Rs' WHERE Roll=$name";
if (mysqli_query($conn, $sql)) {
    //echo "Congrats! Update the attendance successfully";

} else {
    //echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE result SET Sscience='$Ss' WHERE Roll=$roll";
if (mysqli_query($conn, $sql)) {
    //echo "Congrats! Update the attendance successfully";

} else {
    //echo "Error updating record: " . mysqli_error($conn);
}
$sql = "UPDATE result SET GPA='$cgpa' WHERE Roll=$roll";
if (mysqli_query($conn, $sql)) {
    //echo "Congrats! Update the attendance successfully";

} else {
    //echo "Error updating record: " . mysqli_error($conn);
}
$sql = "UPDATE result SET Grade='$grade' WHERE Roll=$roll";
if (mysqli_query($conn, $sql)) {
    //echo "Congrats! Update the attendance successfully";

} else {
    //echo "Error updating record: " . mysqli_error($conn);
}
//$sql3 = "UPDATE account SET tnx='$tnxID' WHERE id=$name";

if (mysqli_query($conn, $sql)) {
    echo "Congrats! Update the result successfully";

} else {
    //echo "Error updating record: " . mysqli_error($conn);
}
}
else{

    $sql = "INSERT INTO result (id, name,roll ,Optional, Bangla , English , Gmath , Hmath, Physics, Chemistry, Biology, Rstudies, Sscience, GPA, Grade)
values ('Harpara','$name','$roll','$optional','$Bangla','$English','$Gm','$Hm','$Physics','$Chemistry','$Biology','$Rs','$Ss','$cgpa','$grade')";
if ($conn->query($sql)){
echo "Congrats! Update the result is successfully done";
//echo "and Your Bill number is ";
//echo($bill);

}
}
}


mysqli_close($conn);
?>