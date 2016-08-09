<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emidwify";

$fullname = $_POST['txtfullname'];
$dateofbirth = $_POST['txtdateofbirth'];
$area=$_POST['txtarea'];
$areacode=$_POST['txtareacode'];
$address=$_POST['txtaddressline1'].$_POST['txtaddressline2'].$_POST['txtaddressline3'].$_POST['txtaddressline4'];
$occupation=$_POST['txtoccupation'];
$tpnumber1=$_POST['txttpnumber1'];
$tpnumber2=$_POST['txttpnumber2'];
$tpnumber3=$_POST['txttpnumber3'];
$email=$_POST['txtemail'];
$edulevel="";//$_POST['edulevel'];

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
	echo "okay";
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO guardian (guardianName,guardianAddress,guardianEmail,guardianBDate,guardianOccupation,guardianEducationLevel,guardianAreaCode) VALUES('$fullname','$address','$email','$dateofbirth','$occupation','$edulevel','$areacode')";
 
if($conn->query($sql)==TRUE){
	echo "New record created successfully";
}
else{
	echo "Error";
}
$conn->close();
?>