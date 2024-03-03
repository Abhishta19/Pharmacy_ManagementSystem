<?php
     require 'dbconfig/db.php';
   //  include "header1.html";
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Medicine</title>
    <style>
        .container{
    padding:15px,15px,15px,15px;
    margin:15px,15px,15px,15px;
        }
        h1{
            text-align: center;
          font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
          font-weight: bold;
        }
        body{
            background-color: lightblue;
        }
        </style>

</head>
<body><h1>Add Medicine</h1>
    <div class="container">

    <form  action="addmedicine.php" method="post">
        <label for="mname">Medicine name:</label><br><br>
        <input type="text" id="mname" name="mname"><br><br>

       <label for="cname"> Category name:</label><br><br>
       <input type="text" id="cname" name="cname"><br><br>

      <label for="mfdate">  Manufacture date: </label><br><br>
      <input type="date" id="mfdate" name="mfdate"><br><br>

      <label for="expdate">Expiry date:</label><br><br>
      <input type="date" id="expdate" name="expdate"><br><br>

      <label for="mrp">Mrp:</label><br><br>
      <input type="number" id="mrp" name="mrp"><br><br>

      <label for="quantity">Quantity:</label><br><br>
      <input type="number" id="quantity" name="quantity"><br><br>

      <input type="submit" name="addmedicine" value="Add Medicine">

        </div>
    </form>
</body>
</html>



<?php

   if(isset($_POST['addmedicine']))
   {
      // echo '<script type ="text/javascript"> alert("Sign up button clicked") </script>';
   
    $medicine_name= mysqli_real_escape_string($con, $_REQUEST['mname']);
    $category_name=mysqli_real_escape_string($con, $_REQUEST['cname']);
   // $p_username = mysqli_real_escape_string($con, $_REQUEST['p_username']);
    $mfd_date = mysqli_real_escape_string($con, $_REQUEST['mfdate']);
    $expdate = mysqli_real_escape_string($con, $_REQUEST['expdate']);
    $mrp = mysqli_real_escape_string($con, $_REQUEST['mrp']);
   // $gender = mysqli_real_escape_string($con, $_REQUEST['gender']);
    $quantity = mysqli_real_escape_string($con, $_REQUEST['quantity']);
    //$role = mysqli_real_escape_string($con, $_REQUEST['role']);
   // $dob = mysqli_real_escape_string($con, $_REQUEST['dob']);
   
            $query ="INSERT INTO medicine (medicine_name,category_name,mfd_date,expiry_date,mrp,quantity)  VALUES('$medicine_name','$category_name','$mfd_date','$expdate','$mrp','$quantity');";
            $query_run =mysqli_query($con,$query);
            if($query_run==TRUE)
            {
                
                echo '<script type ="text/javascript"> alert("Medicine Added Successfully....") </script>';
                
            }
           else
           { 
                echo '<script type ="text/javascript"> alert(" Medicine not added successfuly ....") </script>';
           }
        }
    
?>

