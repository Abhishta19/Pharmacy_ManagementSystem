
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
    <link rel="stylesheet" href="user.css">
</head>
<body> <div class="container">
    <center><h1>Add User</h1></center>
   <form action ="user.php" method="post">
    
        </select><br><br>

       <label for="name">Name</label> <br><br>
        <input type="text" name="name" id="name" placeholder="Enter your name" required ><br><br>
       <!-- <label for="uname">Username</label> <br><br>
        <input type="text" name="p_username" id="uname" placeholder="Enter your username " required ><br><br>-->
        <label for="sal">Salary</label><br><br>
        <input type="number"  id="sal" placeholder="Enter your Salary" required name="salary"><br><br>
        <label for="phone">Mobile Number</label> <br><br>
        <input type="text" name="phone" id="phone" maxlength="10" required><br><br>

        <label for="dob">Date of Birth</label> <br><br>
        <input type="date" name="dob" id="dob"><br><br>
        <label for="role">Role</label><select name="role" id="role">&nbsp;
            <option value="pharmacist">Pharmacist</option>
            <option value="staff">Staff</option>
        </select><br><br>
     

        <label for="email">Email</label><br><br>
        <input type="email" name="email" id="email" required> <br><br>

        <label for="password">Password</label> <br><br>
       <input type="password" name="password" id="password" required><br><br>
         
      <label for="cpassword"></label> <input  name="cpassword" type="password" id="cpassword" placeholder="Confirm password"required/><br><br>


   <!--  <label for="gender">Gender:</label>
        <input type="radio" name="gender" id="gender">Male
        <input type="radio" name="gender" id="gender">Female<br><br>-->

      <!---- <label for="address">Address</label><br><br>
       <input type="text" name="address" id="address"><br><br>-->
       <input type="submit" name="adduser" value="Add User"><br><br>
    </div>
    </form>


<?php

   if(isset($_POST['adduser']))
   {
       //echo '<script type ="text/javascript"> alert("Sign up button clicked") </script>';
   
    $name= mysqli_real_escape_string($con, $_REQUEST['name']);
    $salary=mysqli_real_escape_string($con, $_REQUEST['salary']);
   // $p_username = mysqli_real_escape_string($con, $_REQUEST['p_username']);
    $email = mysqli_real_escape_string($con, $_REQUEST['email']);
    $password = mysqli_real_escape_string($con, $_REQUEST['password']);
    $cpassword = mysqli_real_escape_string($con, $_REQUEST['cpassword']);
   // $gender = mysqli_real_escape_string($con, $_REQUEST['gender']);
    $phone = mysqli_real_escape_string($con, $_REQUEST['phone']);
    $role = mysqli_real_escape_string($con, $_REQUEST['role']);
    $dob = mysqli_real_escape_string($con, $_REQUEST['dob']);
    if($password==$cpassword){
        $query="Select * from staff where name='$name'";
        $query_run =mysqli_query($con,$query);
       
        if(mysqli_num_rows($query_run)>0)
        {
            echo '<script type ="text/javascript"> alert("User name already exists") </script>';
        }
    
        else
        {
            $query ="INSERT INTO staff (name,sal,phone,dob,role,email,password)  VALUES('$name','$salary','$phone','$dob','$role','$email','$password');";
            $query_run =mysqli_query($con,$query);
            if($query_run==TRUE)
            {
                
                echo '<script type ="text/javascript"> alert("Registered successfuly Go to Login page....") </script>';
                
            }
           else
           { 
                echo '<script type ="text/javascript"> alert("User details not added successfuly ....") </script>';
           }
        }
    }

     else
        {
               echo '<script type ="text/javascript"> alert("password does not match") </script>';
        }
       }
    
?>
</body>
</html>
