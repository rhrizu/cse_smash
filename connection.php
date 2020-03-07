<html>
<head>
  <title>Registration</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='css/styles.css'>
</head>
</html>

<?php

$TName= $_POST["TName"];
$firstname= $_POST["Player1"];
$firstId= $_POST["Player1ID"];
$secondname= $_POST["Player2"];
$secondId= $_POST["Player2"];
$contact= $_POST["contact"];
$Cate= $_POST["Category"];

if($Cate=="BoysS")
	$amount = "200";
elseif($Cate=="BoysD")
	$amount = "400";
elseif($Cate=="MixD")
	$amount = "400";
elseif($Cate=="FacultyS")
	$amount = "500";

$con=mysqli_connect("localhost","root","");
        if($con==false) 
            die("could not connect");
        mysqli_select_db($con,"cse_smash");

    if(select )

$sql= "insert into student values('$TName','$firstname','$firstId','$secondname','$secondId','$contact','$Cate')";

if(!(mysqli_query($con,$sql))) 
    {$feedback = "Please Register again with different Team name";}
else
    $feedback = "Successfully Registered";

if($sql){
	echo "<!DOCTYPE html>
<html >
<body background='2.JPG' style='background-size: cover ; margin: 0px ;'>

<div class='container-fluid'>
  <div class='row'>
    <div class='main-content'>
        <form class='form-register' method='post' action='ViewAllTeam.php'>
            <div class='form-register-with-email'>
                <div class='form-white-background'>
                    <div>           	
                        <h1>".$feedback."</h1>
                    </div>
                    
                    <div class='form-row'>
                        <label><span>Team Name: </span></label>".$TName."
                    </div>

                    <div class='form-row'>
                        <label><span>Category: </span></label>".$Cate."
                    </div>

                    <div class='form-row'>
                        <label>Pay ".$amount." as Entry fee before 20th February to Ensure your Team<br><br></label>
                        <label>For Payment Contact with <br> 01554705348 (Mamun)<br> 01713701072 (Nayan) </label>
                    </div>
                    
                    <div class='form-row'>
                        <button type='submit'>View All Team</button>
                    </div>
                </div>       
            </div>
        </form>
    </div>
</div>
</div>
</body>
</html>";
}
    
?>