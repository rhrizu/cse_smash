<!DOCTYPE html>
<html>
<head>
<meta name="ewucse" content="width=device-width, initial-scale=1">
<title>All Team</title>

<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>

<?php
$con=mysqli_connect("localhost","root","");
        if($con==false) 
            die("could not connect");
        mysqli_select_db($con,"cse_smash");
?>

</head>
<body background="2.JPG" style="background-size: cover ; margin: 0px ;">


<h2>There will be 16 Boys Double teams, 16 Boys Single Teams and 8 Mix Double Teams</h2>
<br>
              <?php
              session_start();

              if(isset($_POST["Uname"])|| $_SESSION["Uname"]){

              if(!$_SESSION){
              $_SESSION["Uname"] = $_POST["Uname"];
              $_SESSION["password"] = $_POST["pass"];}

              $paidTo = $_POST["Uname"] = $_SESSION["Uname"];
              $password = $_POST["pass"];
              $password = $_SESSION["password"];
          
                    if ($password=="za" || $password=="on") {
                  
                      echo"
                      <div  style='position: absolute; right: 0px; margin-top: -5%; margin-right: 5%''>
                        <form method='post' action='updatePayment.php'>
                          
                            <input type='text' name='TeamName' placeholder='Name' style='border-style: groove'>
                                              
                            <input type='checkbox' name='payment'>
                                                
                            <button type='submit' class='btnLogin'>Submit</button>
                      
                        </form>
                      </div>";
                    }
                  }                   
              ?>

<div class="row">
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Faculty Single</h2>
        <?php
          $query = "SELECT * FROM student where Category='FacultyS'";
          $result=mysqli_query($con,$query);
          while($row = mysqli_fetch_array($result))
          {
            echo"<p>".$row['TeamName']."</p>";
          }
          ?>
      </div>
    </div>
  </div>

<div class="row">
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Boys Double</h2>
       <?php
          $query = "SELECT * FROM student where Category='BoysD'";
          $result=mysqli_query($con,$query);
          while($row = mysqli_fetch_array($result))
          {
            echo"<p>".$row['TeamName']."</p>";
          }
          ?>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Boys Single</h2>
        <?php
          $query = "SELECT * FROM student where Category='BoysS'";
          $result=mysqli_query($con,$query);
          while($row = mysqli_fetch_array($result))
          {
            echo"<p>".$row['TeamName']."</p>";
          }
          ?>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Mix Double</h2>
        <?php
          $query = "SELECT * FROM student where Category='MixD'";
          $result=mysqli_query($con,$query);
          while($row = mysqli_fetch_array($result))
          {
            echo"<p>".$row['TeamName']."</p>";
          }
          ?>
      </div>
    </div>
  </div>
</div>

</body>
</html>