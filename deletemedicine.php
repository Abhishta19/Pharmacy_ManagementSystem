<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Medicine</title>
    <style>
        body{
    background-color: lightblue;
}

h1{
    color:#0313fc;
}
.container{
    margin:100px,100px,100px,100px;
    padding:100px,100px,100px,100px;
}
    </style>
</head>
<html>
<head>
<title>VIEW BUS</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
       <center> <h1><b>A.G BUS LINES</b></h1>
        <h6> "Smiles of miles on your way"</h6></center>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">A G BUS LINES</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item ">
                <a class="nav-link" href="home.php">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="aboutus.php">ABOUT US</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="contactus.php">CONTACT US</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="busmodify.php">ADD BUS DETAILS</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="viewbus.php">VIEW BUS</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="userdetails.php">VIEW USER DETAILS</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="AMOUNT.php">VIEW BOOKINGS</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="admin.php">LOG OUT</a>
                </li>
               </ul>
          </div>
        </nav>
        <br>
<body><h1>Delete Medicine:</h1><div class="container">
<form action ="deletemedicine.php" method="post">
   <label for="mid">Medicine id:</label> <br><br>
   <input type="number" name="medicine_id">
   <input type="submit" name="d_medicine" value="Delete Medicine">
</form>
</div>
</body>
</html>
<?php
require "dbconfig/db.php";
//error_reporting(0);
//$t='';
if(isset($_POST['d_medicine'])){
//$medicine_id=$_POST['t'];
$medicine_id= mysqli_real_escape_string($con, $_REQUEST['medicine_id']);
//echo 't';
$query5="DELETE FROM medicine WHERE medicine_id='$medicine_id'";      
    if($con->query($query5)==TRUE)
    {
            echo '<script type ="text/javascript"> alert("Medicine details deleted successfuly ....") </script>';
          //  header('location:viewmedicine.php');
    }
   else
   { 
    echo '<script type ="text/javascript"> alert("Medicine details  not deleted successfuly ....") </script>';
   }
}

    ?>