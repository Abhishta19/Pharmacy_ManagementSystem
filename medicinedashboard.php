<?php
 require 'dbconfig/db.php';
 session_start();
 $s_id = $_SESSION['s_id'];
 echo $s_id;
         $_SESSION['s_id'] = $s_id;
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <h1><center> Medicines DashBoard</center></h1>
    <div class="add">
        <img src="https://th.bing.com/th/id/OIP._CeH0wWUDSnndxbHrBYx4wHaHa?w=198&h=198&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="no image">
        <h2><a href="addmedicine.php">Add Medicine</a></h2>
    </div>
    <div class="profile">
        <img src="https://th.bing.com/th/id/OIP.YrE7WLFs_sBdL0r6p62iJwHaHa?w=187&h=187&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="no image">
        <h2><a href="#">Change medicine details</a></h2>
    </div>
    <div class="logout">
        <img src="https://th.bing.com/th/id/OIP.zdC3Ct2wvlNXo7MLnOoHKgHaHa?w=207&h=207&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="">
        <h2><a href="#">Remove medicines</a></h2>
    </div>
    <div class="update">
        <img src="https://th.bing.com/th/id/OIP.63Bm62RkYVKwX03NEIUkXAHaHm?w=183&h=188&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="">
        <h2><a href="#">View Medicines</a></h2>
    </div>
    <div class="exit">
        <img src="https://th.bing.com/th/id/OIP.pvmitPc8VU0bEryWNC-yfQHaHa?w=208&h=208&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="">
        <h2><a href="#">Logout</a></h2>
    </div>
  <!--  <div class="view">
        <img src="https://th.bing.com/th/id/OIP.LjB4EzUEhlFn5IU9HZzhFQHaHa?w=209&h=209&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="">
        <h2><a href="Dashboard.html">Medicines to expire</a></h2>
    </div>-->
</body>
</html>