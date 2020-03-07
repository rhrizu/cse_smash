<html>
<head>
  <title>Registration</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
</html>

<?php


$name = $_POST["TeamName"];
$payment = $_POST["payment"];
$paidTo = $_SESSION["Uname"];

$con=mysqli_connect("localhost","root","");
        if($con==false) 
            die("could not connect");
        mysqli_select_db($con,"cse_smash");

//$sql= "update student set payment= 'true', paidTo= $paidTo where TeamName=$name";

if(!(mysqli_query($con,$sql))) 
    {$feedback = "Please Register again with different Team name";}
else
    $feedback = "Successfully Updated";

//include("ViewAllTeam.php");
    

?>