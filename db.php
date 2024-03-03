<?php
$con=mysqli_connect("127.0.0.1:3306","root","")or die("Unable to connect");
mysqli_select_db($con,"pharmacymanagement");
if(!$con)
{
    die("Sorry failed to connect".mysqli_connect_error());
}
else{
   // echo"Successfully connected ";
}
?>
