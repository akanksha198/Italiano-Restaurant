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
$fname= $lname= $address= $pcode= $phno= 
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$address=$_POST["address"];
$pcode=$_POST["pcode"];
$phno=$_POST[("phno")];


if(!empty($_POST['dish'])) 
{
    foreach($_POST['dish'] as $check) 
    { 
    	$check=strval($check);

           @$dish=$check." ".$dish; 
    }
    echo $dish;
}

$abc= "INSERT INTO online(fname,lname,address,pcode,phno,dish) VALUES ('".$fname."','".$lname."','".$address."','".$pcode."','".$phno."','".$dish."')";

$abcd=$conn->prepare($abc);

if($abcd==FALSE){trigger_error('An unexpected error has occured.Please try again.');}
else
{$abcd->execute();}
 echo '<script type="text/javascript"> window.alert("You Will Now Be Redirected To Payment Section");
     window.open("payment.html","_self");</script>'

?>
