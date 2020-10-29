<?php
$servername = "localhost";
$username = 'root';
$password = '';

//Create connection
$conn = new mysqli($servername, $username, $password,"akanksha");
//Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$fname= $lname= $emailid= $phno= $query= 
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$emailid=$_POST["emailid"];
$phno=$_POST[("phno")];
$query=$_POST["query"];

$abc= "INSERT INTO contact(fname,lname,emailid,phno,query) VALUES ('".$fname."','".$lname."','".$emailid."','".$phno."','".$query."')";

$abcd=$conn->prepare($abc);

if($abcd==FALSE){trigger_error('An unexpected error has occured.Please try again.');}
else
{$abcd->execute();}
 echo '<script type="text/javascript"> window.alert("Your Query Has Been Successfully Submitted! Our Team Will Contact You Within 24 Hours."); document.getElementById("contactus").reset();</script>'

?>
